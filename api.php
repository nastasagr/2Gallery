<?php

session_start();

header('Content-Type: application/json; charset=utf-8');

require_once __DIR__.'/inc/DB.php';

$action = $_GET['action'] ?? '';

function jsonResponse(array $data, int $status = 200): void
{
    http_response_code($status);
    echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

function requestMethod(): string
{
    return strtoupper($_SERVER['REQUEST_METHOD'] ?? 'GET');
}

function requireMethod(string $method): void
{
    if (requestMethod() !== strtoupper($method)) {
        jsonResponse([
            'success' => false,
            'message' => 'Method not allowed',
        ], 405);
    }
}

function getJsonInput(): array
{
    $raw = file_get_contents('php://input');

    if ($raw === false || trim($raw) === '') {
        return [];
    }

    $data = json_decode($raw, true);

    if (!is_array($data)) {
        jsonResponse([
            'success' => false,
            'message' => 'Invalid JSON body',
        ], 400);
    }

    return $data;
}

function requireFields(array $data, array $fields): void
{
    foreach ($fields as $field) {
        if (!isset($data[$field]) || trim((string) $data[$field]) === '') {
            jsonResponse([
                'success' => false,
                'message' => "Field '{$field}' is required",
            ], 422);
        }
    }
}

function generateGalleryUid(): string
{
    return 'gal_'.strtoupper(bin2hex(random_bytes(4)));
}

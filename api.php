<?php

require_once __DIR__.'inc/';
require_once __DIR__.'inc/functions.php';

header('Content-Type: application/json; charset=utf-8');

$action = $_GET['action'] ?? '';

CREATE TABLE users (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(100) NOT NULL,
  last_name VARCHAR(100) NOT NULL,
  email VARCHAR(190) NOT NULL UNIQUE,
  password_hash VARCHAR(255) NOT NULL,
  is_active TINYINT(1) NOT NULL DEFAULT 1,
  created_at DATETIME NOT NULL,
  updated_at DATETIME NOT NULL
);

CREATE TABLE clients (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(100) NOT NULL,
  last_name VARCHAR(100) NOT NULL,
  phone VARCHAR(50) NULL,
  company VARCHAR(150) NULL,
  email VARCHAR(190) NULL,
  notes TEXT NULL,
  created_by_user_id INT UNSIGNED NOT NULL,
  created_at DATETIME NOT NULL,
  updated_at DATETIME NOT NULL,
  CONSTRAINT fk_clients_user
    FOREIGN KEY (created_by_user_id) REFERENCES users(id)
    ON DELETE RESTRICT
);

CREATE TABLE galleries (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  client_id INT UNSIGNED NOT NULL,
  created_by_user_id INT UNSIGNED NOT NULL,
  title VARCHAR(255) NOT NULL,
  gallery_uid VARCHAR(100) NOT NULL UNIQUE,
  description TEXT NULL,
  is_public TINYINT(1) NOT NULL DEFAULT 0,
  is_active TINYINT(1) NOT NULL DEFAULT 1,
  created_at DATETIME NOT NULL,
  updated_at DATETIME NOT NULL,
  CONSTRAINT fk_galleries_client
    FOREIGN KEY (client_id) REFERENCES clients(id)
    ON DELETE CASCADE,
  CONSTRAINT fk_galleries_user
    FOREIGN KEY (created_by_user_id) REFERENCES users(id)
    ON DELETE RESTRICT
);
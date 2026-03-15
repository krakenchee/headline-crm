<?php
// Database configuration
// IMPORTANT: Change these values for your hosting environment

define('DB_HOST', 'localhost');
define('DB_NAME', 'crm');
define('DB_USER', 'root');         // Change to your DB username
define('DB_PASS', 'root');             // Change to your DB password
define('DB_CHARSET', 'utf8mb4');

define('SITE_URL', 'https://headline-crm.vercel.app/');  // Change to your domain
define('SITE_NAME', 'CRM4Retail');

// Session security settings
define('SESSION_LIFETIME', 3600); // 1 hour

function getDB(): PDO {
    static $pdo = null;
    if ($pdo === null) {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            error_log("DB Connection Error: " . $e->getMessage());
            http_response_code(500);
            die(json_encode(['success' => false, 'error' => 'Database connection error']));
        }
    }
    return $pdo;
}

<?php
require_once '../includes/config.php';

session_start();
session_regenerate_id(true);

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false]);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true) ?: $_POST;
$action = $input['action'] ?? '';

if ($action === 'login') {
    $username = trim($input['username'] ?? '');
    $password = $input['password'] ?? '';

    if (!$username || !$password) {
        echo json_encode(['success' => false, 'error' => 'Введите логин и пароль']);
        exit;
    }

    // Rate limiting (simple IP-based)
    $ip = $_SERVER['REMOTE_ADDR'];
    $key = 'login_attempts_' . md5($ip);
    if (!isset($_SESSION[$key])) $_SESSION[$key] = ['count' => 0, 'time' => time()];
    if (time() - $_SESSION[$key]['time'] > 300) {
        $_SESSION[$key] = ['count' => 0, 'time' => time()];
    }
    if ($_SESSION[$key]['count'] >= 5) {
        echo json_encode(['success' => false, 'error' => 'Слишком много попыток. Подождите 5 минут.']);
        exit;
    }

    $db = getDB();
    $stmt = $db->prepare("SELECT id, username, password_hash FROM admins WHERE username = ?");
    $stmt->execute([$username]);
    $admin = $stmt->fetch();

    if ($admin && password_verify($password, $admin['password_hash'])) {
        $_SESSION['admin_id'] = $admin['id'];
        $_SESSION['admin_username'] = $admin['username'];
        $_SESSION['admin_login_time'] = time();
        $_SESSION[$key]['count'] = 0;
        echo json_encode(['success' => true]);
    } else {
        $_SESSION[$key]['count']++;
        echo json_encode(['success' => false, 'error' => 'Неверный логин или пароль']);
    }
    exit;
}

if ($action === 'logout') {
    session_destroy();
    echo json_encode(['success' => true]);
    exit;
}

echo json_encode(['success' => false, 'error' => 'Unknown action']);

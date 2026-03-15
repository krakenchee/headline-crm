<?php
require_once '../includes/config.php';

header('Content-Type: application/json');
header('X-Content-Type-Options: nosniff');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method not allowed']);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);
if (!$input) {
    $input = $_POST;
}

$action = $input['action'] ?? '';

function sanitize(string $val): string {
    return htmlspecialchars(strip_tags(trim($val)), ENT_QUOTES, 'UTF-8');
}

function validatePhone(string $phone): bool {
    return (bool) preg_match('/^[\+\d\s\(\)\-]{7,20}$/', $phone);
}

switch ($action) {
    case 'demo_request':
        $name    = sanitize($input['name'] ?? '');
        $phone   = sanitize($input['phone'] ?? '');
        $city    = sanitize($input['city'] ?? '');
        $stores  = sanitize($input['stores_count'] ?? '');
        $profile = sanitize($input['retail_profile'] ?? '');

        if (!$name || !$phone || !$city || !$stores || !$profile) {
            echo json_encode(['success' => false, 'error' => 'Заполните все поля']);
            exit;
        }
        if (!validatePhone($phone)) {
            echo json_encode(['success' => false, 'error' => 'Неверный формат телефона']);
            exit;
        }

        $db = getDB();
        $stmt = $db->prepare("INSERT INTO demo_requests (name, phone, city, stores_count, retail_profile) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$name, $phone, $city, $stores, $profile]);
        echo json_encode(['success' => true, 'message' => 'Заявка отправлена! Менеджер свяжется с вами в ближайшее время.']);
        break;

    case 'pricing_request':
        $name       = sanitize($input['name'] ?? '');
        $phone      = sanitize($input['phone'] ?? '');
        $city       = sanitize($input['city'] ?? '');
        $stores     = sanitize($input['stores_count'] ?? '');
        $type       = sanitize($input['retail_type'] ?? '');
        $employees  = sanitize($input['employees_count'] ?? '');
        $current    = sanitize($input['current_crm'] ?? '');
        $budget     = sanitize($input['budget'] ?? '');
        $comment    = sanitize($input['comment'] ?? '');

        if (!$name || !$phone || !$city || !$stores || !$type) {
            echo json_encode(['success' => false, 'error' => 'Заполните обязательные поля']);
            exit;
        }
        if (!validatePhone($phone)) {
            echo json_encode(['success' => false, 'error' => 'Неверный формат телефона']);
            exit;
        }

        $db = getDB();
        $stmt = $db->prepare("INSERT INTO pricing_requests (name, phone, city, stores_count, retail_type, employees_count, current_crm, budget, comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$name, $phone, $city, $stores, $type, $employees, $current, $budget, $comment]);
        echo json_encode(['success' => true, 'message' => 'Данные переданы менеджеру. Расчёт стоимости будет готов в течение 1 рабочего дня.']);
        break;

    case 'callback_request':
        $name  = sanitize($input['name'] ?? '');
        $phone = sanitize($input['phone'] ?? '');

        if (!$name || !$phone) {
            echo json_encode(['success' => false, 'error' => 'Заполните все поля']);
            exit;
        }
        if (!validatePhone($phone)) {
            echo json_encode(['success' => false, 'error' => 'Неверный формат телефона']);
            exit;
        }

        $db = getDB();
        $stmt = $db->prepare("INSERT INTO callback_requests (name, phone) VALUES (?, ?)");
        $stmt->execute([$name, $phone]);
        echo json_encode(['success' => true, 'message' => 'Менеджер перезвонит вам в течение 5 минут (в рабочее время).']);
        break;

    default:
        http_response_code(400);
        echo json_encode(['success' => false, 'error' => 'Unknown action']);
}

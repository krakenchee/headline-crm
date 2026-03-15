<?php
require_once '../includes/config.php';

session_start();

header('Content-Type: application/json');
header('X-Content-Type-Options: nosniff');

// Auth check
if (empty($_SESSION['admin_id'])) {
    http_response_code(401);
    echo json_encode(['success' => false, 'error' => 'Unauthorized']);
    exit;
}
if (time() - ($_SESSION['admin_login_time'] ?? 0) > SESSION_LIFETIME) {
    session_destroy();
    http_response_code(401);
    echo json_encode(['success' => false, 'error' => 'Session expired']);
    exit;
}

$method = $_SERVER['REQUEST_METHOD'];
$input  = json_decode(file_get_contents('php://input'), true) ?: $_POST;
$action = $input['action'] ?? $_GET['action'] ?? '';
$db = getDB();

function sanitize(string $v): string {
    return htmlspecialchars(strip_tags(trim($v)), ENT_QUOTES, 'UTF-8');
}

$allowed_tables = ['demo_requests', 'pricing_requests', 'callback_requests'];
$allowed_statuses = [
    'demo_requests'     => ['new','in_progress','done','cancelled'],
    'pricing_requests'  => ['new','in_progress','done','cancelled'],
    'callback_requests' => ['new','called','missed'],
];

switch ($action) {
    case 'get_all':
        $result = [];
        foreach ($allowed_tables as $table) {
            $stmt = $db->query("SELECT * FROM `$table` ORDER BY created_at DESC");
            $result[$table] = $stmt->fetchAll();
        }
        echo json_encode(['success' => true, 'data' => $result]);
        break;

    case 'get_table':
        $table = $input['table'] ?? $_GET['table'] ?? '';
        if (!in_array($table, $allowed_tables)) {
            echo json_encode(['success' => false, 'error' => 'Invalid table']);
            exit;
        }
        $stmt = $db->query("SELECT * FROM `$table` ORDER BY created_at DESC");
        echo json_encode(['success' => true, 'data' => $stmt->fetchAll()]);
        break;

    case 'update_status':
        $table  = sanitize($input['table'] ?? '');
        $id     = (int)($input['id'] ?? 0);
        $status = sanitize($input['status'] ?? '');
        $notes  = sanitize($input['notes'] ?? '');

        if (!in_array($table, $allowed_tables) || !$id) {
            echo json_encode(['success' => false, 'error' => 'Invalid params']);
            exit;
        }
        if (!in_array($status, $allowed_statuses[$table])) {
            echo json_encode(['success' => false, 'error' => 'Invalid status']);
            exit;
        }

        $stmt = $db->prepare("UPDATE `$table` SET status = ?, notes = ? WHERE id = ?");
        $stmt->execute([$status, $notes, $id]);
        echo json_encode(['success' => true]);
        break;

    case 'delete':
        $table = sanitize($input['table'] ?? '');
        $id    = (int)($input['id'] ?? 0);

        if (!in_array($table, $allowed_tables) || !$id) {
            echo json_encode(['success' => false, 'error' => 'Invalid params']);
            exit;
        }

        $stmt = $db->prepare("DELETE FROM `$table` WHERE id = ?");
        $stmt->execute([$id]);
        echo json_encode(['success' => true]);
        break;

    case 'get_stats':
        $stats = [];
        foreach ($allowed_tables as $table) {
            $row = $db->query("SELECT 
                COUNT(*) as total,
                SUM(status='new') as new_count,
                SUM(status!='new') as processed
                FROM `$table`")->fetch();
            $stats[$table] = $row;
        }
        echo json_encode(['success' => true, 'data' => $stats]);
        break;

    default:
        http_response_code(400);
        echo json_encode(['success' => false, 'error' => 'Unknown action']);
}

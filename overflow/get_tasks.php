<?php
include 'db.php';

// Hardcoded user_id for now
$user_id = 1;

$sql = "SELECT t.*, c.name AS category_name FROM tasks t LEFT JOIN categories c ON t.category_id = c.id WHERE t.user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$tasks = [];
while ($row = $result->fetch_assoc()) {
    $tasks[] = $row;
}

echo json_encode(["success" => true, "tasks" => $tasks]);
?>

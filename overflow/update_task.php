<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $completed = $_POST['completed'] ?? null;
    if (!$id || $completed === null) {
        die(json_encode(["success" => false, "message" => "Missing required fields."]));
    }
    $stmt = $conn->prepare("UPDATE tasks SET completed=? WHERE id=?");
    $stmt->bind_param("ii", $completed, $id);
    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => $stmt->error]);
    }
}
?>

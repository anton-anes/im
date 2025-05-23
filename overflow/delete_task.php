<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;

    if (!$id) {
        die(json_encode(["success" => false, "message" => "Task ID missing."]));
    }

    $stmt = $conn->prepare("DELETE FROM tasks WHERE id=?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Task deleted"]);
    } else {
        echo json_encode(["success" => false, "message" => $stmt->error]);
    }
}
?>

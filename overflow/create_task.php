<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'] ?? null;
    $description = $_POST['description'] ?? null;
    $due_date = $_POST['due_date'] ?? null;
    $pinned = $_POST['pinned'] ?? 0;
    $completed = $_POST['completed'] ?? 0;
    $user_id = $_POST['user_id'] ?? null;
    $category_id = $_POST['category_id'] ?? null;

    if (!$title || !$user_id) {
        die(json_encode(["success" => false, "message" => "Missing required fields."]));
    }

    $stmt = $conn->prepare("INSERT INTO tasks (title, description, due_date, pinned, completed, user_id, category_id)
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiiii", $title, $description, $due_date, $pinned, $completed, $user_id, $category_id);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Task created"]);
    } else {
        echo json_encode(["success" => false, "message" => $stmt->error]);
    }
}
?>

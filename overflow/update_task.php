<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $title = $_POST['title'] ?? null;
    $description = $_POST['description'] ?? null;
    $due_date = $_POST['due_date'] ?? null;
    $pinned = $_POST['pinned'] ?? 0;
    $completed = $_POST['completed'] ?? 0;
    $category_id = $_POST['category_id'] ?? null;

    if (!$id || !$title) {
        die(json_encode(["success" => false, "message" => "Missing ID or title."]));
    }

    $stmt = $conn->prepare("UPDATE tasks SET title=?, description=?, due_date=?, pinned=?, completed=?, category_id=? WHERE id=?");
    $stmt->bind_param("sssiiii", $title, $description, $due_date, $pinned, $completed, $category_id, $id);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Task updated"]);
    } else {
        echo json_encode(["success" => false, "message" => $stmt->error]);
    }
}
?>

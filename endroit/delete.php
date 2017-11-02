<?php
$data = json_decode(file_get_contents("php://input"));
require_once('../db.php');
$sql = "DELETE FROM endroit WHERE endroit_id = $data->id ";
$result = $conn->query($sql);
$conn->close();
?>

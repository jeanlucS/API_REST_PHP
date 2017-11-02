<?php
$data = json_decode(file_get_contents("php://input"));
require_once('../db.php');
$sql = "INSERT INTO endroit (ville, image, description)
VALUES ('$data->ville', '$data->image', '$data->description')";
if($data->ville){
	$qry = $conn->query($sql);
}
$conn->close();
?>

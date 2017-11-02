<?php
$data = json_decode(file_get_contents("php://input"));
require_once('../db.php');
$sql = "INSERT INTO utilisateur (nom, email, genre, date_anniversaire)
VALUES ('$data->nom', '$data->email', '$data->genre', '$data->date_anniversaire')";
if($data->nom){
	$qry = $conn->query($sql);
}
$conn->close();
?>

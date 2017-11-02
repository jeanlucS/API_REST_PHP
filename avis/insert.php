<?php
$data = json_decode(file_get_contents("php://input"));
require_once('../db.php');
$sql = "INSERT INTO avis (utilisateur_id, endroit_id, note, commentaire)
VALUES ('$data->utilisateur_id', '$data->endroit_id', '$data->note', '$data->commentaire')";
if($data->note){
	$qry = $conn->query($sql);
}
$conn->close();
?>

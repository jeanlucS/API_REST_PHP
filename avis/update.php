<?php
$data = json_decode(file_get_contents("php://input"));
require_once('../db.php');
$sql = "UPDATE avis SET
utilisateur_id ='$data->utilisateur_id',  endroit_id ='$data->endroit_id',
note ='$data->note',commentaire ='$data->commentaire'
WHERE avis_id = $data->avis_id ";
$qry = $conn->query($sql);
if($data->name){
}
$conn->close();
?>

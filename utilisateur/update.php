<?php
$data = json_decode(file_get_contents("php://input"));
require_once('../db.php');
$sql = "UPDATE utilisateur SET
nom ='$data->nom',email ='$data->email',
genre ='$data->genre',date_anniversaire ='$data->date_anniversaire'
WHERE utilisateur_id = $data->utilisateur_id ";
$qry = $conn->query($sql);
if($data->nom){
}
$conn->close();
?>

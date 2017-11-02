<?php
$data = json_decode(file_get_contents("php://input"));
require_once('../db.php');
$sql = "UPDATE endroit SET
ville ='$data->ville', image ='$data->image',
description ='$data->description' WHERE endroit_id = $data->endroit_id ";
$qry = $conn->query($sql);
if($data->ville){
}
$conn->close();
?>

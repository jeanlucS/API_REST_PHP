<?php
$data = json_decode(file_get_contents("php://input"));
require_once('../db.php');
$sql = "SELECT utilisateur.nom, endroit.ville,note, commentaire,avis_id FROM avis 
        LEFT JOIN utilisateur ON avis.utilisateur_id = utilisateur.utilisateur_id
        LEFT JOIN endroit ON avis.endroit_id = endroit.endroit_id WHERE avis_id = '$data->id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
     $data = array() ;
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
} else {
    echo "0 results";
}
echo json_encode($data);
$conn->close();
?>

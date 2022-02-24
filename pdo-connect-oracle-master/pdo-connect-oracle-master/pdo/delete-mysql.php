<?php
include('mysql.php');

$sql = "DELETE FROM users WHERE id = :id";
$query = $dbcon->prepare($sql);
$query->bindParam(':id', $id, PDO::PARAM_INT);
$id = 2;
$query->execute();
if ($query->rowCount() > 0 ) {
    echo "<script>alert('delete infor succesful');</script>";
} else {
    echo "<script>alert('delete infor fail');</script>";
}


?>
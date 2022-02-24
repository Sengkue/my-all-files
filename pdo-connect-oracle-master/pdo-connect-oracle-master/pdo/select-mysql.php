<?php 
include('mysql.php');

$sql = "SELECT * FROM users";
$query = $dbcon->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_OBJ);
if ($query->rowCount() > 0 ) {
    foreach($result as $res) {
        echo $res->name. "<br>";
        echo $res->email. "<br>";
        echo $res->date. "<br>";
    }
}

?>
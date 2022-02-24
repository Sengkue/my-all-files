<?php 
include('mysql.php');

$sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
    $query = $dbcon->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':id', $id, PDO::PARAM_STR);
    
    $name = "Seng";
    $email = "tsispaubko6@gmail.com";
    $id = 1;
    $query->execute();
    if ($query->rowCount() > 0) {
        echo "<script>alert('update infor succesful');</script>";
    } else {
        echo "<script>alert('update infor fail');</script>";
    }
        

?>
<?php

include('mysql.php');

$sql = "INSERT INTO users(name, email, date) VALUES(:name, :email, :date)";
$query = $dbcon->prepare($sql);
$query->bindParam(':name', $name, PDO::PARAM_STR);
$query->bindParam(':email', $email, PDO::PARAM_STR);
$query->bindParam(':date', $date, PDO::PARAM_STR);

$name = "Justin Seng";
$email = "skvgithub@gmail.com";
$date = Date('y-m-d');

$result = $query->execute();
if($result) {
    echo "<script>alert('add infor succesful');</script>";
    } else {
        echo "<script>alert('add infor fail');</script>";
    }
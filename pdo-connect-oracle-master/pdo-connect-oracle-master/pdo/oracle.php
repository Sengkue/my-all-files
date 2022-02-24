<?php
try {
$conn = new PDO("oci:dbname=localhost/XE", "system", "qwerty");
$conn->setAttribute(PDO::ATTR_ERRMODE,
PDO::ERRMODE_EXCEPTION);
echo 'Connected to database';
} catch(PDOException $e) {
echo 'ERROR: ' . $e->getMessage();
}
?>
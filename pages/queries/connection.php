<?php
try{
    $db = new PDO("mysql:host=localhost;dbname=personal_finance;chartset=utf8","root","KhHDTLirFz3DyBDy");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   return "Failed to Connect" . $e->getMessage();
   die();
}
?>  
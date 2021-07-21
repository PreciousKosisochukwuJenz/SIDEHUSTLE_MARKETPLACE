<?php
    // database variables
    $datasource = "mysql:host=us-cdbr-east-04.cleardb.com;dbname=marketplacedb";
    $username = "b0be18499afc7b";
    $password = "36837e31";

    // Connecting to database
    try{
        $db = new PDO($datasource,$username,$password);
        }
    catch(PDOException $e){
        $error_message = $e->getMessage();
        echo $error_message;
        exit();
    }
?>
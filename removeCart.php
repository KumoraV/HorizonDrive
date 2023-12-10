<?php
    $product = $_POST['remove'];
    $client = "user";
    $dbName = 'horizonDrive';
    $dbHost = 'localhost';
    $dbUser = 'user';  
    $dbPass = 'pass';  

    $dbConn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    if ($dbConn->connect_error) {
        die("Connection failed: " . $dbConn->connect_error);
    }
    $query = "DELETE FROM CART WHERE PROD_ID = '$product'";
    $result = $dbConn->query($query);
    if ($result)
    {
        $dbConn->close();
        header("Location: cart.php");
        exit;
    }
    else
    {
        $dbConn->close();
        echo "Error";
        exit;
    }
?>
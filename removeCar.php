<?php
    $product = $_POST['product'];
    $client = "user";
    $dbName = 'horizonDrive';
    $dbHost = 'localhost';
    $dbUser = 'user';  
    $dbPass = 'pass';  

    $dbConn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    if ($dbConn->connect_error) {
        die("Connection failed: " . $dbConn->connect_error);
    }
    $query = "DELETE FROM PRODUCTS WHERE P_ID = '$product'";
    $result = $dbConn->query($query);
    if ($result)
    {
        $dbConn->close();
        header("Location: employeePage.php");
        exit;
    }
    else
    {
        $dbConn->close();
        echo "Error";
        exit;
    }
?>
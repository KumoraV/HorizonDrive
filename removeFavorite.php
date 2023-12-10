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
    $query = "DELETE FROM FAVORITE WHERE P_ID = '$product'";
    $result = $dbConn->query($query);
    if ($result)
    {
        $dbConn->close();
        header("Location: account.php");
        exit;
    }
    else
    {
        $dbConn->close();
        echo "Error";
        exit;
    }
?>
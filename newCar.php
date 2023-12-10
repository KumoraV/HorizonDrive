<?php
    $product = $_POST['P_ID'];
    $quantity = 1;
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $year = $_POST['year'];
    $carDesc = $_POST['carDesc'];
    $carSpec = $_POST['carSpec'];
    

    $client = "user";
    $dbName = 'horizonDrive';
    $dbHost = 'localhost';
    $dbUser = 'user';  
    $dbPass = 'pass';  

    $dbConn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    if ($dbConn->connect_error) {
        die("Connection failed: " . $dbConn->connect_error);
    }
    $query = "INSERT INTO PRODUCTS VALUES
            ('".$product."', '".$price."', '".$quantity."', '".$brand."', '".$model."',
            '".$year."', '".$carDesc."', '".$carSpec."')";
    $result = $dbConn->query($query);

    if ($result)
    {
        $dbConn->close();
        header("Location: employeePage.php?carAdded=true");
        exit;
    }
    else
    {
        $dbConn->close();
        header("Location: employeePage.php");
        exit;
    }
?>
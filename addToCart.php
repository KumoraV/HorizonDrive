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
    echo "Connected successfully";
    
    //Check if added car is in cart 
    $query = "SELECT PROD_ID FROM CART";
    $result = $dbConn->query($query);
    while ($row = $result->fetch_assoc())
    {
        if($row['PROD_ID'] == $product)
        {
            $dbConn->close();
            header("Location: cart.php?inCart=true");
            exit;
        }
    }
    //Check if added car is bought already
    $query = "SELECT PROD_ID FROM BOUGHT";
    $result = $dbConn->query($query);
    while ($row = $result->fetch_assoc())
    {
        if($row['PROD_ID'] == $product)
        {
            $dbConn->close();
            header("Location: cart.php?bought=true");
            exit;
        }
    }

    // Add car to cart
    $query = "INSERT INTO CART(CLI_ID, PROD_ID) VALUES ('$client', '$product')";
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

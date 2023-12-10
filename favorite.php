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
    
    
    //Check if car is already favorite
    $query = "SELECT P_ID FROM FAVORITE";
    $result = $dbConn->query($query);
    while ($row = $result->fetch_assoc())
    {
        if($row['P_ID'] == $product)
        {
            $dbConn->close();
            header("Location: home.php?inFavorite=true");
            exit;
        }
    }
    
    // Add car to favorite
    $query = "INSERT INTO FAVORITE(C_ID, P_ID) VALUES ('$client', '$product')";
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

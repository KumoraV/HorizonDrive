<?php

$client = "user";
$dbName = 'horizonDrive';
$dbHost = 'localhost';
$dbUser = 'user';  
$dbPass = 'pass';  

$dbConn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($dbConn->connect_error) 
{
    die("Connection failed: " . $dbConn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT * FROM CART";
$result = $dbConn->query($sql);

if ($result->num_rows > 0) 
{
    // Put all the information in array and go through them
    while ($row = $result->fetch_assoc()) 
    {
        $product = $row['PROD_ID'];
        $query = "INSERT INTO BOUGHT(CLI_ID, PROD_ID) VALUES('$client', '$product')";
        $insertResult = $dbConn->query($query);

        if ($insertResult) 
        {
            $removeQuery = "DELETE FROM CART WHERE PROD_ID = '$product' AND CLI_ID = '$client'";
            $removeResult = $dbConn->query($removeQuery);

        } 
        else 
        {
            echo "Error, could not buy the item. Please try again.";
        }
    }
}
$dbConn->close();
header("Location: account.php");
exit;
?>

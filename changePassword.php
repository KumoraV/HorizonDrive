<?php

$oldPass = $_POST['currentPassword'];
$newPass = $_POST['newPassword'];
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

$sql = "SELECT Password FROM CLIENT where Username = '$client'";
$result = $dbConn->query($sql);

if ($result->num_rows > 0) 
{
    $row = $result->fetch_assoc();
    if ($row["Password"] == $oldPass)
    {
        $updateQuery = "UPDATE CLIENT SET `Password` = '$newPass' WHERE Username = '$client'";
        $updateResult = $dbConn->query($updateQuery);

        if ($updateResult)
        {
            $dbConn->close();
            header("Location: account.php?passTrue=true");
            exit;   
        }
    }
    else
    {
        $dbConn->close();
        header("Location: account.php?passFalse=false");
        exit; 
    }
}
$dbConn->close();
header("Location: account.php?no");
exit;
?>

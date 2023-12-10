<?php
    $dbName = 'horizonDrive';
    $dbHost = 'localhost';
    $dbUser = 'user';  
    $dbPass = 'pass';  

    $username = $_POST['username'];
    $password = $_POST['password']; 

    $dbConn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    if ($dbConn->connect_error) {
        die("Connection failed: " . $dbConn->connect_error);
    }
    
    $employeeQuery = "SELECT * FROM employee WHERE Username = '$username'";
    $employeeResult = $dbConn->query($employeeQuery);

    // Query to check if the user is a client
    $clientQuery = "SELECT * FROM client WHERE Username = '$username'";
    $clientResult = $dbConn->query($clientQuery);
    // Checks if the user is employee and the password is correct. If it is, redirect to employee page.
    if ($employeeResult->num_rows > 0) 
    {
        while ($row = $employeeResult->fetch_assoc()) 
        {
            if ($row["Password"] == $password)
            {
                $redirectUrl = "employeePage.php";
                echo "<script>window.location.replace('$redirectUrl');</script>";
                exit();
            } 
        }
    }
// Checks if the user is a client and the password is correct. If it is, redirect to home page.
    if ($clientResult->num_rows > 0)
    {
        while ($row = $clientResult->fetch_assoc()) 
        {
            if ($row["Password"] == $password)
            {
                $redirectUrl = "home.php";
                echo "<script>window.location.replace('$redirectUrl');</script>";
                exit();
            }
            else
            {
                echo "Wrong Password";
            }
        }
    }
    else 
    {
        echo "<br><br><br>";
        echo "Wrong password or username, please try again.";
    }

    $dbConn->close();
?>
<?php
    $dbName = 'horizonDrive';
    $dbHost = 'localhost';
    $dbUser = 'user';  
    $dbPass = 'pass';  

    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $username = $_POST['username'];
    $password = $_POST['password']; 

    $dbConn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    if ($dbConn->connect_error) {
        die("Connection failed: " . $dbConn->connect_error);
    }
    
    // Query to check if the username already exists in the database
    $checkUsernameQuery = "SELECT username FROM employee WHERE Username = '$username' 
                            UNION 
                            SELECT username FROM client WHERE Username = '$username'";
    $checkUsernameResult = $dbConn->query($checkUsernameQuery);

    if ($checkUsernameResult->num_rows > 0) 
    {
        $dbConn->close();
        header("Location: logInPage.php?alreadyThere=true");
        exit;
    } 
    else 
    {
        // If the username doesn't exist, insert the new user information
        $insertUserQuery = "INSERT INTO client (Username, Password, Fname, Lname) VALUES ('$username', '$password', '$Fname', '$Lname')";
        if ($dbConn->query($insertUserQuery) === TRUE) 
        {
            echo "Registration successful. Redirecting to login page...";
            $redirectUrl = "logInPage.html"; 
            echo "<script>window.location.replace('$redirectUrl');</script>";
            exit();
        } 
        else 
        {
            echo "Error: " . $insertUserQuery . "<br>" . $dbConn->error;
        }
    }

    $dbConn->close();
?>
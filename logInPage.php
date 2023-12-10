<?php require('database.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Whole site-->
    <div class="container-fluid">
        <div class="row">
            <!-- Left Banner-->
            <div class="col-2" style="padding: 0%;">
                <img class="sideBanner" src="img/retroGTR.jpg" alt="GTRimage">
            
            </div>
            <!-- Middle Section-->
            <div class="col-8" style="background-color: rgb(204, 170, 238);">
                <!-- Website Name-->
                <div class="row">
                    <div class="col">
                        <h1>HORIZON DRIVE</h1>
                    </div>
                </div>
                <!-- Navigation Bar Section-->
                <div class="row">
                    <div class="col">
                    </div>
                </div>
                <!-- Account Information and Options -->
                <h1>Log In</h1>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <?php
                            if(isset($_GET['alreadyThere']))
                            {
                                echo "An account already exists with that username.";
                                echo '<br>';
                            }
                            ?>
                            <h1 style="text-align: left">Sign Up:</h1>
                            <form action="registerProcess.php" method="post">
                                <table border="0">
                                    <tr>
                                        <td>First Name:</td>
                                        <td align="center"><input type="text" name="Fname" size="20" maxlength="20" required/></td>
                                    </tr>
                                    <tr>
                                        <td>Last Name:</td>
                                        <td align="center"><input type="text" name="Lname" size="20" maxlength="20" required/></td>
                                    </tr>
                                    <tr>
                                        <td>Username:</td>
                                        <td align="center"><input type="text" name="username" size="10" maxlength="10" required/></td>
                                    </tr>
                                    <tr>
                                        <td>Password:</td>
                                        <td align="left"><input type="password" name="password" size="10" maxlength="10" required/></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center"><input type="submit" value="Sign Up"/></td>
                                    </tr>
                                </table>
                            </form>
                            <!-- This form takes in the username and password and gives it to loginProcess.php -->
                            <h1 style= "text-align: left">Please log in below:</h1>
                            <form action = "loginProcess.php" method = "post">
                                <table border = "0">
                                    <tr>
                                        <td>Username: </td>
                                        <td align="center"><input type="text" name="username" size="10" maxlength="10"/></td>
                                    </tr>
                                    <tr>
                                        <td>Password: </td>
                                        <td align="left"><input type="password" name="password" size="10" maxlength="10"/></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="center"><input type="submit" value="Log in"/></td>
                                    </tr>
                                </table>
                            </form>
                            
        
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Banner-->
            <div class="col-2" style="padding: 0%;">
                <img class="sideBanner" src="img/retroGTR.jpg" alt="GTRimage">
            </div>
        </div>
    </div>
    

    <!-- Footer -->
    <footer class="text-center mt-0 pt-0">
        <p>&copy; 2023 Horizon Drive. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha384-rHyoNz1LQQl6aLlL2ZuWrfLz9/UmkDmMAp0Miva4rn5u7xj42kFFtKtZt6DgIMQ6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.10.2/dist/umd/popper.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-bt9b4f9CF0W2zXGGg4qz6uXu+9QV4m4HtxI5bB/XEhOdRZ7y3u7aFtDFgoKkXY5v" crossorigin="anonymous"></script>
</body>
</html>
<?php $dbConn->close(); ?>
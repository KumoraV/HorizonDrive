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
    <!-- Whole site -->
    <div class="container-fluid">
        <div class="row">
            <!-- Left Banner-->
            <div class="col-2" style="padding: 0%;">
                <img class="sideBanner" src="img/retroGTR.jpg" alt="GTRimage">
                <div class="centered"><a href="toyota.php">Toyota</a></div>
                <div class="centered1"><a href="mitsubishi.php">Mitsubishi</a></div>
                <div class="centered2"><a href="mazda.php">Mazda</a></div>
                <div class="centered3"><a href="honda.php">Honda</a></div>
                <div class="centered4"><a href="nissan.php">Nissan</a></div>
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
                        <!-- Navbar Main -->
                        <nav class="navbar navbar-expand-md navbar-light bg-light">
                            <!-- Navbar Logo-->
                            <a class="navbar-brand" href="home.php"></a>
                            <!-- Navbar Toggler Button-->
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Navbar Links-->
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav mx-auto">
                                    <li class="nav-item">
                                        <a class="nav-link" href="home.php">
                                            <i class="fa fa-home fa-2x"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="fromjapan.html">From Japan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="aboutus.html">
                                            <i class="fa fa-info fa-2x"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="account.php">
                                            <i class="fa fa-user-circle fa-2x"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="cart.php">
                                            <i class="fa fa-shopping-cart fa-2x"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="logInPage.php">
                                            <i class="fa fa-sign-out fa-2x"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Car Section -->
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <br>
                            <h1>Honda</h1>
                            <br>
                            <!-- Car Items -->
                            <!-- Query the database for the car information -->
                            <?php
                                $sql = "SELECT * FROM products WHERE Brand='Honda'";
                                $result = $dbConn->query($sql);

                                // If results work
                                if ($result) 
                                {
                                    // Put all the information in array and go through them
                                    
                                    while ($row = $result->fetch_assoc()) 
                                    {
                                        echo '<div class="card">';
                                        echo '<div class="card-body">';
                                        echo '<div class="row align-items-center">';
                                        echo '<div class="col-md-3">';
                                        echo '<img src="Img/' . $row['Brand'] . $row['Model'] . '.jpg" class="img-fluid">';
                                        echo '</div>';
                                        echo '<div class="col-md-7">';
                                        echo '<h5>' . $row['Brand'] . ' ' . $row['Model'] . ' (' . $row['Year'] . ')</h5>';
                                        echo '<p>Description: ' . $row['CarDesc'] . '</p>';
                                        echo '<p>Specifications: ' . $row['CarSpec'] . '</p>';
                                        echo '</div>';
                                        echo '<div class="col-md-2">';
                                        echo '<p>Price: $' . $row['Price'] . '</p>';
                                        echo '<form action="addToCart.php" method="post">';
                                        echo '<input type="hidden" name="product" value="' . $row['P_ID'] . '">';
                                        echo '<button class="btn btn-primary">Add to Cart</button>';
                                        echo '</form>';
                                        echo '<form action="favorite.php" method="post">';
                                        echo '<input type="hidden" name="product" value="' . $row['P_ID'] . '">';
                                        echo '<button class="btn btn-secondary">Favorite Car</button>';
                                        echo '</form>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '</div>';
                                        echo '<br>';
                                    }
                                } 
                                else 
                                {
                                    // If there was an error
                                    echo "Error: " . $dbConn->error;
                                }
                            ?>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Banner -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-bt9b4f9CF0W2zXGGg4
</body>
</html>
<?php $dbConn->close(); ?>
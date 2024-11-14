
<html>
    <head>
        <title>Login</title>
        <style>
            html, body {
                height: 100%;
                margin: 20;
            }

            .container {
                height: 100%;
            }

            .login-form {
                background: #F6F5F2;
                padding: 30px;
                box-shadow: 10px 10px 10px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
            }

            .carousel-inner img {
                height: 80vh;
                object-fit: cover;
            }

            .carousel-fade .carousel-item {
                transition: opacity 0.5s ease; 
            }
            .signup-link {
                color: #0095f6; 
                text-decoration: none; /* Remove underline */
                font-weight: bold; 
            }

            .signup-link:hover {
                color: #0056b3; 
            }

            .footer {
                position: fixed;
                bottom: 0;
                width: 100%;
                background-color: #FBFBFB;
                padding-top:12px;
                font-size: 14px;
                color: #8e8e8e; 
                text-align: center;
            }

        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style="padding-top:50px;">
            <div class="row justify-content-center align-items-center vh-90s">
                <div class="col-lg-6 col-md-4 d-none d-md-block">
                    <!-- Carousel -->
                    <div id="carouselForUTMreg" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="asset/bluereg.jpg" class="img-fluid w-80" alt="First Slide">
                            </div>
                            <div class="carousel-item">
                                <img src="asset/redreg.jpg" class="img-fluid w-80" alt="Second Slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="login-form">
                        <img src="asset/UTM-LOGO-FULL.png" class="img-fluid" alt="UTM Logo" style="margin-bottom:30px;">
                        <form action="login.php" method="POST">
                            <div style="margin-bottom:15px;">
                                <input type="text" name="username" class="form-control" id="username" placeholder="username" required>
                            </div>
                            <div style="margin-bottom:25px;">
                                <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary col-12">Login</button>
                        </form>
                        <div style="margin-top:50px; text-align:center;">
                            <p>Don't have an account? <a href="register.php" class="signup-link">Register</a></p>
                        </div>
                        <?php
                            session_start();
                            include "db_conn.php";

                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    $username = mysqli_real_escape_string($conn,$_POST['username']);
                                    $password = $_POST['password'];

                                    $sql="SELECT * FROM users_reg WHERE username='$username'";

                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) == 1) {
                                        $row = mysqli_fetch_assoc($result);
                                        if (password_verify($password, $row['password'])) {
                                            $_SESSION['username'] = $username;
                                            header("Location: index.php");
                                        } else {
                                            echo '<div style="text-align: center;color:red; ><h5">Invalid username/password</h5></div>';
                                        }
                                    } else {
                                        echo "Login failed";
                                    }
                                }
                        ?>
                    </div> 
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container text-center">
                <p>© 2024 Created by Zhiming A23CS0189</p>
            </div>
        </footer>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>


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

            .reg-form {
                background: #F6F5F2;
                padding: 30px;
                border-radius: 10px;
                margin: 50 auto; /* auto to make it Center it horizontally */
                border: 1px solid #C3BFBF;
            }

            .login-link {
                color: #0095f6; 
                text-decoration: none; /* Remove underline */
                font-weight: bold; 
            }

            .login-link:hover {
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
        <div class="container">
            <div class="reg-form col-lg-4 col-md-6" style="text-align:center;align:center;">
                <img src="asset/UTM-LOGO-FULL.png" class="img-fluid" alt="UTM Logo" style="margin-bottom:30px;">
                <form action="register.php" method="POST">
                        <div style="margin-bottom:15px;">
                            <input type="text" name="username" class="form-control" id="username" placeholder="username" required>
                        </div>
                        <div style="margin-bottom:15px;">
                            <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
                        </div>
                        <div style="font-size:small;">
                            <p>By signing up, you agree to our Terms , Privacy Policy and Cookies Policy .</p>
                        </div>
                        <button type="submit" class="btn btn-primary col-12">Sign Up</button>
                </form>
                <div style="margin-top:50px; text-align:center;">
                    <p>Have an account? <a href="login.php" class="login-link">Log in</a></p>
                </div>
                <?php
                    include "db_conn.php";
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $username = mysqli_real_escape_string($conn,$_POST['username']);
                        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

                        $sql="INSERT INTO users_reg (username, password) VALUES ('$username', '$password')";

                        if (mysqli_query($conn, $sql)) {
                            echo "User created successfully";
                        } else {
                            echo "Error: " . $sql . "<br>" . $mysqli->error;
                        }
                    }
                ?>
            </div>
        </div>
        <footer class="footer">
            <div class="container text-center">
                <p>© 2024 Created by Zhiming A23CS0189</p>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>


<!--
<div class="container text-center" style="color: #FFC0CB;">
            <div class="profile-card col-lg-6 col-md-8 col-sm-12 text-start text-sm-center">
                <h1 style="font-family:verdana; font-size:300%;">Register</h1>
                <form action="register.php" method="POST">
                    <label for="name" class="form-label mt-2 mb-2"><h5>Username</h5></label><br>
                    <div class="w-50 mx-auto d-none d-sm-block">
                        <input type="text" name="username" class="form-control" id="username" placeholder="username" required>
                    </div>
                    <label for="password" class="form-label mt-2 mb-2"><h5>Password</h5></label><br>
                    <div class="w-50 mx-auto d-none d-sm-block">
                        <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
                    </div>
                    <button type="submit" class="btn m-3" style="background-color: #FFE1FF;">Register</button>
                </form>
                <p>Already have an account? <a href="login.php" style="color:black;">Login</a></p>
                
            </div>
        </div>
-->
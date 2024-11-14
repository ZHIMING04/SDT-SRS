<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
?>

<html>
    <head>
        <title>Users List</title>
        <style>
            h1,td{
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

            }
            h2{
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-weight: bold;
                text-align: left;
                font-size: 50px !important;
            }
            .profile-card {
                    background-color: #F7EED3;
                    padding:10px;
                    margin: 80 auto;
                    text-align: center;
            }
            table {
                border-collapse: collapse; 
            }
            th, td {
                padding: 10px;
                border: 2px solid #181C14;
            }
            th {
                background-color: #D2E0FB;
            }
            .navbar {
                top:0 ;
                width: 100%;
                margin-bottom: 30px !important;
                font-size: 14px !important;
                text-align: center !important;
                background-color: #EEE0C9 !important; 
                border : 1px solid #A0A0A0;
            }
            .nav-link {
                font-weight: bold;
                padding: 0 40px !important;
            }
            .nav-link:hover {
                background-color: #FAF6E3;
                color: #A0A0A0 !important;
            }
            .navbar-toggler-icon {
                background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath stroke="rgba%28255, 255, 255, 1%29" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"/%3E%3C/svg%3E');
            }

            .navbar-nav .nav-item .nav-link {
                color: #000000;
            }
            .nav-item{
                padding: 0 50px;
            }

            .toast-container {
                position: fixed;
                top: 20px; 
                left: 50%; /* Position at the midpoint of the viewport */
                transform: translateX(-50%); /* Center it horizontally combine using with the line 19 */ 
                z-index: 110; /* Make sure it’s above other elements */
            }
            .toast{
                text-align:center;
                padding: 15px;
                background-color: #ADC4CE !important;
                border:0 !important;
                color:white !important;
            }

            .hyperlink{
                font-weight: bold; 
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <body style="background-color:#F1F0E8;">
        <nav class="navbar navbar-expand-md">
            <div>
                <img src="asset/UTM-LOGO-FULL.png" alt="UTM LOGO" width="150" height="50" class="d-none d-lg-block">
            </div>
            <div class="container d-flex justify-content-between">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item col-lg-4">
                            <a class="nav-link" href="index.php" ><h3><b>Home</b></h3></a>
                        </li>
                        <li class="nav-item col-lg-4">
                            <a class="nav-link" href="create.php"><h3><b>Create</b></h3></a>
                        </li>
                        <li class="nav-item col-lg-4">
                            <a class="nav-link" href="logout.php"><h3><b>Logout</b></h3></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="profile-card col-lg-10 col-md-12 col-sm-12 text-start text-sm-center" >
            <h2>Users List</h2>
            <hr style="border-top: 2px solid #333; width:100%; margin: auto;">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div style="overflow-x: auto; max-width: 100%;">
                    <table border="1" align="center" style="margin: 40px auto 50px auto; width: 100%;">
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Student ID</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Program</th>
                            <th>Year</th>
                            <th>Subjects</th>
                            <th colspan="2">Operation</th>
                        </tr>
                        <?php
                        include "db_conn.php";
                        $sql="SELECT * FROM students";
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0){
                            while($row=mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['full_name'] . "</td>";
                                echo "<td>" . $row['student_id'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['phone_number'] . "</td>";
                                echo "<td>" . $row['gender'] . "</td>";
                                echo "<td>" . $row['date_of_birth'] . "</td>";
                                echo "<td>" . $row['program_of_study'] . "</td>";
                                echo "<td>" . $row['year_of_study'] . "</td>";
                                echo "<td>" . $row['selected_subjects'] . "</td>";
                                echo "<td><a href='update.php?id=". $row['id']. " 'style='text-decoration: none;'>Edit </a></td>";
                                echo "<td><a href='delete.php?id=". $row['id']. " 'style='text-decoration: none;'>Delete </a></td>";
                                echo "</tr>";
                            }
                        }else{
                            echo "0 results";
                        }
                        

                        ?>
                    </table>
                </div>
            </div>
            <div class="hyperlink">
                <a href="create.php" style="text-decoration: none;">Add User</a>
            </div>
        </div>
        <div class="toast-container">
            <div id="welcomeToast" class="toast" data-bs-delay="3000">
                <div>
                    <h5>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> !</h5>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container text-center">
                <p>© 2024 Created by Zhiming A23CS0189</p>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // Show the toast automatically after page load
            window.addEventListener('DOMContentLoaded', (event) => {
                const toastElement = new bootstrap.Toast(document.getElementById('welcomeToast'));
                toastElement.show();
            });
        </script>
        <div >
            <img src="asset/animated.png" class="img-fluid float-start d-none d-lg-block" alt="cartoon" style="position: fixed;bottom: 40px;width: 160px; height: 150px;">
        </div>
    </body>
</html>
<html>
    <head>
        <title>Student Registration Form</title>
        <style>
            label{
                color: #5F6F65;
            }
            .navbar {
                top:0 ;
                width: 100%;
                margin-bottom: 50px !important;
                font-size: 14px !important;
                text-align: center !important;
                background-color: #9CA986 !important; 
                border : 1px solid #A0A0A0;
            }
            .nav-link {
                font-weight: bold;
                padding: 0 40px !important;
            }
            .nav-link:hover {
                background-color: #C9DABF;
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
            .profile-card {
                    background-color: white;
                    padding:50px;
                    margin: 70 auto;
                    text-align: center;
                    border-radius: 15px;
            }
            h3{
                color: #808D7C;
                text-align:center;
                font-size:x-large
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <body style="background-color:#C9DABF;">
        <nav class="navbar navbar-expand-md">
            <img src="asset/UTM-LOGO-FULL.png" alt="UTM LOGO" width="150" height="50" class="d-none d-lg-block">
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
        <div class="profile-card col-lg-8 col-sm-12 text-start text-sm-center">
            <h1 style="font-family:Times New Roman;margin-bottom:55px;">Student Registration Form</h1>
            <form action ="" method="POST" style="text-align: left;">
                <table align="center">
                    <tr>
                        <td><label><em>Full Name&nbsp;:</em> </label></td>
                        <td><input type="text" name="name" required><br></td>
                    </tr>
                    <tr>
                        <td><label><em>Student ID&nbsp;: </em></label></td>
                        <td><input type="text" name="id" required><br></td>
                    </tr>
                    <tr>
                        <td><label><em>Student Email :</em></pre></label></td>
                        <td><input type="email" name="email" required><br></td>
                    </tr>
                    <tr>
                        <td><label><em>Phone Number:</em></label></td>
                        <td><input type="text" name="phone" required><br></td>
                    </tr>
                    <tr>
                        <td><label><em>Date of Birth:</em> </label></td>
                        <td><input type="date" name="birth" required class="col-12"><br></td>
                    </tr>
                    <tr>
                        <td><label><em>Gender:     </em></label><br></td>
                    </tr>
                    <tr colspan="2" align="left">
                        <td style="text-align: center;"><input type="radio" name="gender" value="Male"></td>
                        <td style="font-size: small;"><label for="male">MALE</label><br></td>
                    </tr>
                    <tr colspan="2" align="left">
                        <td style="text-align: center;"><input type="radio" name="gender" value="female"></td>
                        <td style="font-size: small;"><label for="female">FEMALE</label><br></td>
                    </tr>
                </table><br>
                <hr style="border-top: 2px solid #333; width:100%; margin: auto;"><br>
                <h3><b>Academic Information</b></h3>
                <table align="center">
                    <tr>
                        <td><label for="programs"><em>Program of Study:</em></label></td>
                        <td>
                            <select name="programs" >
                            <option value="cs">Computer Science</option>
                            <option value="is">Information System</option>
                            <option value="civil">Civil Engineering</option>
                            <option value="mecha">Mechanical Engineering</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="years"><em>Year of Study:</em></label></td>
                        <td>
                            <select name="years" class="col-12" >
                            <option value="1">Year 1</option>
                            <option value="2">Year 2</option>
                            <option value="3">Year 3</option>
                            <option value="4">Year 4</option>
                            </select>
                        </td>
                    </tr>
                </table><br><br>
                <div style="text-align: center;">
                    <h3><b>Select Subject</b></h3>
                    <input type="checkbox" name="subjects[]" value="Data Structure">
                    <label for="DSA">Data Structure</label>
                    <input type="checkbox" name="subjects[]" value="Information System">
                    <label for="TIS">Information System</label>
                    <input type="checkbox" name="subjects[]" value="Software Engineering">
                    <label for="SE">Software Engineering</label>
                    <input type="checkbox" name="subjects[]" value="Network Communication">
                    <label for="NC">Network Communication</label>
                    <input type="checkbox" name="subjects[]" value="Computer Mathematics">
                    <label for="CM">Computer Mathematic</label>
                </div>        
                <br><br>
                <div class="text-center">
                    <button type="reset" class="btn btn-secondary mx-2">Reset</button>
                    <button type="submit" class="btn btn-primary mx-2">Submit</button>
                </div>
            </form>
            <?php
                include 'db_conn.php';
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $name=$_POST['name'];
                    $id=$_POST['id'];
                    $email=$_POST['email'];
                    $phone=$_POST['phone'];
                    $gender=$_POST['gender'];
                    $birth=$_POST['birth'];
                    $programs=$_POST['programs'];
                    $years=$_POST['years'];
                    $subjects=implode(",  ", $_POST['subjects']); // implode=convert all elements to a single string , and seperate by comma

                    $sql="INSERT INTO students (full_name, student_id, email, phone_number, gender, date_of_birth, program_of_study, year_of_study, selected_subjects) 
                            VALUES('$name','$id','$email','$phone','$gender','$birth','$programs','$years','$subjects')";
                    if(mysqli_query($conn, $sql)){
                        echo "<div style='color: green; font-weight: bold;'>New record created successfully</div>";
                    } else {
                        echo "<div style='color: red; font-weight: bold;'>ERROR: " . $sql . "<br>" . mysqli_error($conn) . "</div>";
                    }
                }
            ?>
        </div>
        <footer class="footer">
            <div class="container text-center">
                <p>© 2024 Created by Zhiming A23CS0189</p>
            </div>
        </footer>
        <div >
            <img src="asset/animateds.gif" class="img-fluid float-start d-none d-lg-block" alt="cartoon" style="position: fixed;bottom: 45px;width: 100px; height: 250px; margin-left:20px;">
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    </body>
</html>





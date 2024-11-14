<html>
    <head>
        <title>Update Student</title>
        <style>
            label {
                color: #5F6F65;
            }
            .navbar {
                top: 0;
                width: 100%;
                margin-bottom: 50px !important;
                font-size: 14px !important;
                text-align: center !important;
                background-color: #9CA986 !important; 
                border: 1px solid #A0A0A0;
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
            .nav-item {
                padding: 0 50px;
            }
            .profile-card {
                background-color: white;
                padding: 50px;
                margin: 70px auto;
                text-align: center;
                border-radius: 15px;
            }
            h3 {
                color: #808D7C;
                text-align: center;
                font-size: x-large;
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                            <a class="nav-link" href="index.php"><h3><b>Home</b></h3></a>
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
            <h1 style="font-family: 'Times New Roman'; margin-bottom: 55px;">Update Student</h1>

            <?php
            include "db_conn.php";
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM students WHERE id=$id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);

                // Pre-fill form variables with fetched data
                $name = $row['full_name'];
                $student_id = $row['student_id'];
                $email = $row['email'];
                $phone = $row['phone_number'];
                $gender = $row['gender'];
                $birth = $row['date_of_birth'];
                $programs = $row['program_of_study'];
                $years = $row['year_of_study'];
                $subjects = explode(", ", $row['selected_subjects']); // Split the subjects into an array
            }
            ?>

            <form action="" method="POST" style="text-align: left;">
                <table align="center">
                    <tr>
                        <td><label><em>Full Name&nbsp;:</em> </label></td>
                        <td><input type="text" name="name" value="<?php echo $name; ?>" required><br></td>
                    </tr>
                    <tr>
                        <td><label><em>Student ID&nbsp;: </em></label></td>
                        <td><input type="text" name="student_id" value="<?php echo $student_id; ?>" required><br></td>
                    </tr>
                    <tr>
                        <td><label><em>Student Email :</em></label></td>
                        <td><input type="email" name="email" value="<?php echo $email; ?>" required><br></td>
                    </tr>
                    <tr>
                        <td><label><em>Phone Number:</em></label></td>
                        <td><input type="text" name="phone" value="<?php echo $phone; ?>" required><br></td>
                    </tr>
                    <tr>
                        <td><label><em>Date of Birth:</em> </label></td>
                        <td><input type="date" name="birth" value="<?php echo $birth; ?>" required><br></td>
                    </tr>
                    <tr>
                        <td><label><em>Gender:</em></label></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;"><input type="radio" name="gender" value="Male" <?php if ($gender == 'Male') echo 'checked'; ?>></td>
                        <td><label for="male">Male</label></td>
                    </tr>
                    <tr>
                        <td style="text-align: center;"><input type="radio" name="gender" value="Female" <?php if ($gender == 'Female') echo 'checked'; ?>></td>
                        <td><label for="female">Female</label></td>
                    </tr>
                </table>

                <hr style="border-top: 2px solid #333; width:100%; margin: auto;"><br>
                <h3><b>Academic Information</b></h3>
                <table align="center">
                    <tr>
                        <td><label for="programs"><em>Program of Study:</em></label></td>
                        <td>
                            <select name="programs" class="col-12">
                                <option value="cs" <?php if ($programs == 'cs') echo 'selected'; ?>>Computer Science</option>
                                <option value="is" <?php if ($programs == 'is') echo 'selected'; ?>>Information System</option>
                                <option value="civil" <?php if ($programs == 'civil') echo 'selected'; ?>>Civil Engineering</option>
                                <option value="mecha" <?php if ($programs == 'mecha') echo 'selected'; ?>>Mechanical Engineering</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="years"><em>Year of Study:</em></label></td>
                        <td>
                            <select name="years" class="col-12">
                                <option value="1" <?php if ($years == '1') echo 'selected'; ?>>Year 1</option>
                                <option value="2" <?php if ($years == '2') echo 'selected'; ?>>Year 2</option>
                                <option value="3" <?php if ($years == '3') echo 'selected'; ?>>Year 3</option>
                                <option value="4" <?php if ($years == '4') echo 'selected'; ?>>Year 4</option>
                            </select>
                        </td>
                    </tr>
                </table><br>

                <div class="text-center">
                    <h3><b>Select Subject</b></h3>
                    <input type="checkbox" name="subjects[]" value="Data Structure" <?php if (in_array("Data Structure", $subjects)) echo 'checked'; ?>> Data Structure
                    <input type="checkbox" name="subjects[]" value="Information System" <?php if (in_array("Information System", $subjects)) echo 'checked'; ?>> Information System
                    <input type="checkbox" name="subjects[]" value="Software Engineering" <?php if (in_array("Software Engineering", $subjects)) echo 'checked'; ?>> Software Engineering
                    <input type="checkbox" name="subjects[]" value="Network Communication" <?php if (in_array("Network Communication", $subjects)) echo 'checked'; ?>> Network Communication
                    <input type="checkbox" name="subjects[]" value="Computer Mathematics" <?php if (in_array("Computer Mathematics", $subjects)) echo 'checked'; ?>> Computer Mathematics
                </div><br>

                <div class="text-center">
                    <button type="reset" class="btn btn-secondary mx-2">Reset</button>
                    <button type="submit" class="btn btn-primary mx-2">Submit</button>
                </div>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['name'];
                $student_id = $_POST['student_id'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $gender = $_POST['gender'];
                $birth = $_POST['birth'];
                $programs = $_POST['programs'];
                $years = $_POST['years'];
                $subjects = implode(", ", $_POST['subjects']);

                $sql = "UPDATE students SET full_name=?, student_id=?, email=?, phone_number=?, gender=?, date_of_birth=?, program_of_study=?, year_of_study=?, selected_subjects=? WHERE id=?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssssssssi", $name, $student_id, $email, $phone, $gender, $birth, $programs, $years, $subjects, $id);
                if ($stmt->execute()) {
                    echo "<div style='color: green; font-weight: bold;'>Record updated successfully</div>";
                } else {
                    echo "<div style='color: red; font-weight: bold;'>ERROR: " . $stmt->error . "</div>";
                }
            }
            ?>
        </div>

        <footer class="footer">
            <div class="container text-center">
                <p>© 2024 Created by Zhiming A23CS0189</p>
            </div>
        </footer>
    </body>
</html>

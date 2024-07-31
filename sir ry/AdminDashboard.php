<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>UI</title>
    <script>

        var num = 0;
        function toggleVisibility() {  
            var addStudent = document.getElementById('addStudent');
            if (num === 0) {
                addStudent.style.visibility = 'visible';
                num = 1;
                console.log('b')
            }
            else{
                addStudent.style.visibility = 'hidden';
                num = 0;
                console.log('aa');
            }
        }



    </script>
</head>
<body>
    <header class="header">
        <img src="assets/UI_LOGO.png" alt="">
        <a href="#" class="logo">STUDENT LIST</a>

        <nav class="navbar">
            <a href=""></a>
        </nav>
    </header>

    <div class="table">
        <div class="table_header">
            <p>
                <!-- <?php 
                    echo date("d/m/Y");
                ?> -->
            </p>
            <div class="">
                <!-- <input placeholder="Student"> -->
                <button class="add_new" onclick="toggleVisibility()">&nbsp; + Add New Student &nbsp;</button>
            </div>
        </div>

        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Email</th>
                        <th>Student ID</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Department</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include "conn.php";
                        $sql = "SELECT DISTINCT * FROM `attendance`";
                        $query = mysqli_query($conn, $sql);
                        $counter = 1;
                        while($row = mysqli_fetch_array($query)){
                            
                    ?>
                        <tr>
                            <td><?php echo $counter ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['student_id'] ?></td>
                            <td><?php echo $row['firstname'] ?></td>
                            <td><?php echo $row['middlename'] ?></td>
                            <td><?php echo $row['lastname'] ?></td>
                            <td><?php echo $row['course'] ?></td>
                            <td>
                                <button><img title="Update" width="32" height="32" src="https://img.icons8.com/ios-glyphs/32/edit-user-female.png" alt="edit-user-female"/></button>
                                <button><img title="Delete" width="32" height="32" src="https://img.icons8.com/ios-filled/32/delete-user-male.png" alt="delete-user-male"/></button>
                            </td>
                        </tr>
                    <?php 
                            $counter ++;
                        }
                    ?>

                </tbody>
            </table>
        </div>

        
    </div>


    <div class="addStudent" id="addStudent">
        <div class="box">
            <div class="content">
                <div class="exit">
                    <button id="ext" href="" onclick="toggleVisibility()">&#x2715;</button>
                </div>
                <div class="input-form">
                    <h1>Register</h1>
                    <form action="create_process.php" method="post">
                        <div class="form-body">
                            <div class="row">
                                <div>
                                    <label>Student ID</label> <br>
                                    <input class="input_field" type="text" name="stud_id" required> </p><br>
                                    <label>First Name</label> <br>
                                    <input class="input_field" type="text" name="stud_first" required> </p>
                                </div>
                                <div>
                                    <label>School Email</label> <br>
                                    <input class="input_field" type="text" name="stud_email" required> </p><br>
                                    <label>Middle Name</label> <br>
                                    <input class="input_field" type="text" name="stud_middle" required> </p>
                                </div>
                                <div>
                                    <label>Last Name</label> <br>
                                    <input class="input_field" type="text" name="stud_last" required> </p><br>
                                    <label>Password</label> <br>
                                    <input class="input_field" type="text" name="stud_pass" required> </p>
                                </div>
                            </div>
                            <div class="row2">
                                <div><br>
                                    <select name="course" id="course">
                                        <option  value="0" selected disabled>Select Course</option>
                                        <option value="bs-hospitality-management">BS in Hospitality Management</option>
                                        <option value="bs-tourism-management">BS in Tourism Management</option>
                                        <option value="bs-business-administration-marketing">BS in Business Administration Major in Marketing Management</option>
                                        <option value="bs-business-administration-financial">BS in Business Administration Major in Financial Management</option>
                                        <option value="bs-accountancy">BS in Accountancy</option>
                                        <option value="bs-accounting-information-system">BS in Accounting Information System</option>
                                        <option value="bachelor-elementary-education-general">Bachelor of Elementary Education Major in General</option>
                                        <option value="bachelor-secondary-education-english">Bachelor of Secondary Education Major in English</option>
                                        <option value="bachelor-secondary-education-filipino">Bachelor of Secondary Education Major in Filipino</option>
                                        <option value="bs-special-needs-education">BS in Special Needs Education</option>
                                        <option value="bs-criminology">BS in Criminology</option>
                                        <option value="bs-civil-engineering">BS in Civil Engineering</option>
                                        <option value="bs-mechanical-engineering">BS in Mechanical Engineering</option>
                                        <option value="bs-nursing">BS in Nursing</option>
                                        <option value="bs-pharmacy">BS in Pharmacy</option>
                                        <option value="bs-psychology">BS in Psychology</option>
                                        <option value="bs-information-technology">BS in Information Technology</option>
                                        <option value="bs-marine-engineering">BS in Marine Engineering</option>
                                    </select> </p>
                                </div>
                                <center><br><br>
                                    <input id="submit" class="input_field" type="submit" name="create_acc" value="Submit">
                                </center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>
</html>
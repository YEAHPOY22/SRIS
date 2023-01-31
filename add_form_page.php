<?php 

include_once("connection/connection.php"); 


    $con = connection();
    

    if (isset($_POST['submit'])) {

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $middle_name = $_POST['middle_name'];
        $birth_day = $_POST['birth_day'];
        $sex = $_POST['sex'];
        $civil_status = $_POST['civil_status'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $blood_type = $_POST['blood_type'];
        $gsis_id_no = $_POST['gsis_id_no'];
        $pagibig_id_no = $_POST['pagibig_id_no'];
        $philhealth_no = $_POST['philhealth_no'];
        $sss_no = $_POST['sss_no'];
        $tin_no = $_POST['tin_no'];
        $agency_employee_no = $_POST['agency_employee_no'];
        $address = $_POST['address'];
        $contact_no = $_POST['contact_no'];
        $email_address = $_POST['email_address'];

        $sql = "INSERT INTO `employees_information`(`first_name`, `last_name`, `middle_name`, `birth_day`, `sex`, `civil_status`, `height`, `weight`, `blood_type`, `gsis_id_no`, `pagibig_id_no`, `philhealth_no`, `sss_no`, `tin_no`, `agency_employee_no`, `address`, `contact_no`, `email_address`) VALUES ('$first_name','$last_name','$middle_name','$birth_day','$sex','$civil_status','$height','$weight','$blood_type','$gsis_id_no','$pagibig_id_no','$philhealth_no','$sss_no','$tin_no','$agency_employee_no','$address','$contact_no','$email_address')";

        $con->query($sql) or die($con->error);
    }


?>

            <form action="" method="post">
                <label>First Name</label>
                <input type="text" name="first_name" id="first_name">

                <label>Last Name</label>
                <input type="text" name="last_name" id="last_name"><br>

                <label>Middle Name</label>
                <input type="text" name="middle_name" id="middle_name">

                <label>Birthday</label>
                <input type="date" name="birth_day" id="birth_day"><br>

                <label>Sex</label>
                <select name="sex" id="sex">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                <label>Civil Status</label>
                <select name="civil_status" id="civil_status">
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Separated">Separated</option>
                    <option value="Widowed">Widowed</option>
                </select><br>

                <label>Height</label>
                <input type="number" name="height" id="height">

                <label>Weight</label>
                <input type="number" name="weight" id="weight"><br>

                <label>Blood Type</label>
                <select name="blood_type" id="blood_type">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>

                <label>GSIS ID Number</label>
                <input type="text" name="gsis_id_no" id="gsis_id_no"><br>

                <label>Pagibig ID Number</label>
                <input type="text" name="pagibig_id_no" id="pagibig_id_no">

                <label>Philhealth Number</label>
                <input type="text" name="philhealth_no" id="philhealth_no"><br>

                <label>SSS Number</label>
                <input type="text" name="sss_no" id="sss_no">

                <label>Tin Number</label>
                <input type="text" name="tin_no" id="tin_no"><br>

                <label>Agency Employee Number</label>
                <input type="text" name="agency_employee_no" id="agency_employee_no">

                <label>Address</label>
                <input type="text" name="address" id="address"><br>
                <label>Contact Number</label>
                <input type="text" name="contact_no" id="contact_no">

                <label>Email</label>
                <input type="email" name="email_address" id="email_address"><br>

                <input type="submit" name="submit" id="submit" value="Submit">
            </form>


    </body>
</html>
<?php 
include_once("connection/connection.php"); 


    $con = connection();
    
    $sql = "SELECT * FROM employees_information";

    $students = $con->query($sql) or die ($con->error);
    $row = $students->fetch_assoc();
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--css file link  -->
   <link rel="stylesheet" href="css/master_list.css">
    <title>Document</title>
</head>
<body>
    


        <table class="customTable">
            <thead>
                <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                </tr>
            </thead>
            <tbody>
            <?php do { ?>
                <tr>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email_address']; ?></td>
                </tr>
                <?php }while($row = $students->fetch_assoc()); ?>
            </tbody>
        </table>

</body>
</html>

<?php

include("db.php");

$enrollment_no = $_POST['enrollment_no'];
$fullname = $_POST['fullname'];
$department = $_POST['department'];
$academic_year = $_POST['academic_year'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];

$sql = "SELECT * FROM information
        WHERE enrollment_no='$enrollment_no'
        AND fullname='$fullname'
        AND department='$department'
        AND academic_year='$academic_year'
        AND email='$email'
        AND mobile='$mobile'
        AND password='$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    
header("Location: success.php");
    exit();

}else{

    echo "<script>
            alert('Invalid Login Credentials');
            window.location='index.html';
          </script>";
}

?>
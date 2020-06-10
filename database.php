<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$selectCourse = $_POST['selectCourse'];
if (!empty($name) || !empty($email) || !empty($phone) || !empty($company) || !empty($selectCourse)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "brainster_labs";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $INSERT = "INSERT Into brainster_form (name, email, phone, company, selectCourse) values(?, ?, ?, ?, ?)";
     $stmt = $conn->prepare($INSERT);
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssss", $name, $email, $phone, $company, $selectCourse);
      $stmt->execute();
      header("Location: applied.php");
      // echo "You successfully applied";
     };
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>
<?php
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$course=$_POST['course'];
$admissionType=$_POST['admissionType'];

$conn = new mysqli('localhost','root','','form');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into admission(fname, mname, lname, course, admissionType) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $fname, $ame, $lname, $course, $admissionType);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
?>
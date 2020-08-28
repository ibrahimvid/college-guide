<?php
if(isset($_POST['admin-post'])) {

  require 'config.inc.php';

  $collegeName = $_POST['college-name'];
  $collegeCity = $_POST['college-city'];
  $collegeDegree = $_POST['college-degree'];
  $collegeCourse = $_POST['college-course'];
  $collegeTuition = $_POST['college-tuition'];
  $collegePhone = $_POST['college-phone'];
  $collegeEmail = $_POST['college-email'];
  $collegeAddress = $_POST['college-address'];
  $collegeUrl = $_POST['college-url'];
  $collegeDescription = $_POST['college-description'];

  $sql = "INSERT INTO cg_college (college_name, college_city, college_degree, college_course, college_tuition, college_phone, college_email, college_address, college_url, college_description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../index.php?error=sqlerror");
    exit();
  } else {
    mysqli_stmt_bind_param($stmt, "ssssssssss", $collegeName, $collegeCity, $collegeDegree, $collegeCourse, $collegeTuition, $collegePhone, $collegeEmail, $collegeAddress, $collegeUrl, $collegeDescription);
    mysqli_stmt_execute($stmt);
    header("Location: ../admin.php?post=success");
  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);

} else {
  header("Location: ../index.php");
  exit();
}
?>

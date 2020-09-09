<?php
session_start();
$_SESSION['semester_status']='set';
$_SESSION['semester']=$_GET['semester'];
// $_SESSION['isStudent']='ture';
// if ($_SESSION['semester']=='set') {
// 	header('Location:'.base_url('students.php'));
// }


?>
<br>
<a href="students.php" class="au-btn au-btn--block au-btn--green m-b-20"  style="text-align: center;">Log in</a>
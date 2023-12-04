<?php
//connect
  $pdo = new pdo("mysql:host=localhost;dbname=convessregform", "root", "wormnitojimalaki");

// kuha input
$completename = $_POST['completename'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$age = $_POST['age'];
$bday = $_POST['bday'];


if ($password !== $confirmpassword) {
   header ('Location: convesslogin/error.php');
} else {
  $cbday= date('y-m-d', strtotime('-18years'));

  if ($bday < $cbday) {
    header ("Location: bawal18page.php");
  } else {

  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO `accounts` (completename,username,password,email,age,bday) VALUES (?, ?, ?, ?, ?, ?)";
  $stmt = $pdo->prepare($sql);

  if ($stmt->execute([$completename,$username,$hashedPassword,$email,$age,$bday])) {
    header ("Location: http://localhost/serverconvess/convesslogin/FElogin.php");
  } else { 
    header ("Location: http://localhost/serverconvess/convesslogin/error.php");
  }}
}
?>
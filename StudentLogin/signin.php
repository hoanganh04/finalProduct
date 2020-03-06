<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include("setup.php");
   $conn_id = setup_connect()
 or die ("cannot connect to server");

$output = "";
$pword = $_POST['pword'];

$email = $_POST['email'];
$hashpword = hash('sha224', $pword);

$mysqli_stmt = $conn_id->prepare("SELECT email, pword FROM users WHERE email = ? AND pword = ?;");
$mysqli_stmt->bind_param("ss", $email, $hashpword);

$mysqli_stmt->execute();
$result = $mysqli_stmt->get_result();
$row = $result->fetch_assoc();

if ($hashpword == $row['pword']) {
    $_SESSION["user"]=$email;
    $_SESSION["pword"]=$hashpword;
    header("Location: ../courses.php"); 
    //$output .= "<p>Login Successful</p>";
}
else {
    header("Location: fail.html"); 
    //$output .= "<p>Login Unsuccessful</p>";
}
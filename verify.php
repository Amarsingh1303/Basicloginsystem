<?php
session_start();
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "finalsampledb");
if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}
$fn = $_POST['fname'];
$pw = $_POST['pass'];

$sql = "SELECT * FROM register WHERE user='$fn' AND pass='$pw'";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);
if ($num == 1) {
    $_SESSION['user'] = $fn;
    header('location:home.php');
} else {
    header('location:index.php');
}
?>

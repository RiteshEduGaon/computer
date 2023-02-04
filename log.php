<?php
$server ="localhost";
$user ="root";
$pass = "";
$dbname ="phpp";
$conn = mysqli_connect($server,$user,$pass,$dbname);

$user =$_POST['u'];
$password = $_POST['p'];
session_start();
$_SESSION['u'] ="$user";
$_SESSION['p'] ="$password";

$select = "SELECT * FROM `admin` WHERE USER_ID = '$user' and  PASSWORDD ='$password'";

$result = mysqli_query($conn,$select);
$row = mysqli_num_rows($result);
if($row==1){
    header('location:welcome.php');
}else{
    ?>
    <script>
        alert('INVILED USER_ID AND PASSWORD');
    </script>

    <?php
}
?>

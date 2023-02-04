<?php
$server ="localhost";
$user = "root";
$pass = "";
$dbname = "phpp";

$conn = mysqli_connect($server,$user,$pass,$dbname);

$name =$_POST['name'];
$add =$_POST['add'];
$email =$_POST['email'];
$dob =$_POST['dob'];
$mobile =$_POST['mobile'];
$userid =$_POST['user'];
$password =$_POST['password'];

$select = "SELECT * FROM admin WHERE USER_ID ='$userid'";
$query = mysqli_query($conn,$select);
$r1 = mysqli_num_rows($query);
if($r1==1){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
            * {
        margin: 0;
        padding: 0;
    }
    h1{
        display: flex;
        flex-direction: column;
        justify-content: baseline;
        align-items: center;
        margin-top: 200px;
        font-size: 80px;
        color: orange;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-weight: bolder;
        
    }

    body {
        background-image: url(./img/pexels-mateusz-dach-450035.jpg);
        background-size: cover;
    }
    </style>
    <body>
        
        <h1>
            THIS USER ALREADY TAKEN!!
            
        </h1>
    </body>
    </html>
    <?php
}
else{
    $insert = "INSERT INTO admin (NAME , ADDRESS , EMAIL , D_O_B , MOBILE , USER_ID , PASSWORDD	) VALUES ('$name','$add','$email','$dob','$mobile','$userid','$password')";
    $result = mysqli_query($conn,$insert);
    if($result){
    header('location:home.php');
    }
}


?>
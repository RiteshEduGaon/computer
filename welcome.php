<?php
session_start();
$name = $_SESSION['u'] ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/uxx.png" type="image/x-icon">
    <title>RITESH YADAV</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
a{
    text-decoration: none;
    color: white;
} a:hover{
    color: rgb(0, 164, 252);
    transition: 1s;
}
body{
  background-image: url(./img///pexels-eduardo-dutra-2115217.jpg);
  background-size: cover;
  background-repeat: no-repeat;
    width: 100%;
    height: 629px;
    user-select: none;           
}
.div1{
    background-color: rgba(0, 0, 0, 0.864);
    width: 100%;
    height: 60px;
    display: flex;
    justify-content: space-around;
    color: wheat;
    font-size: 20px;
    position: sticky;
    top: 0;

 
    
}

    .button{
    margin-top: 14px;
    font-family: 'Gill Sans', 'Gill Sans MT',  'Trebuchet MS', sans-serif;
    font-weight: bold;
    font-size: 25px;
}

.button:hover{
    color: rgb(15, 70, 92);
    font-family: 'Gill Sans', 'Gill Sans MT',  'Trebuchet MS', sans-serif;
}
h1{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: orange;
    font-size: 80px;
    margin-top: 170px;
}
button{
    float: right;
    margin-right: 100px;
    background-color: red;
    width: 100px;
    height: 29px;
}
</style>

<body>
<div class="div1">
        <img src="./img/uxx.png" width="60px" height="60px">
        <span class="button"><a href="home.php">Home</a></span>
        <span class="button"><a href="image.php">Gallery</a></span>
        <span class="button"><a href="profile.php">Profile</a></span>
        <span class="button"><a href="test.php">Log_out</a></span>
    </div>
    <h1>Welcome Mr..<?php echo $name; ?></h1>
</body>

</html>
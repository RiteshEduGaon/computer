<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/uxx.png" type="image/x-icon">
    <title>RITESH YADAV</title>
    <link rel="stylesheet" href="class.css">

</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    a {
        text-decoration: none;
        color: white;
    }

    a:hover {
        color: rgb(0, 164, 252);
        transition: 1s;
    }

    ::-webkit-scrollbar {
        width: 0;
    }

    html {
        width: 100%;
    }

    body {
        user-select: none;
        overflow: hidden;

    }

    ::-webkit-scrollbar{
    display: none;
}
    .div1 {
        background-color: rgba(0, 0, 0, 0.864);
        width: 100vw;
        height: 60px;
        display: flex;
        justify-content: space-around;
        color: wheat;
        font-size: 20px;
        position: sticky;
        top: 0;


    }

    .container {
        background-image: url(img//pexels-eduardo-dutra-2115217.jpg);
        background-size: 100%;
        background-repeat: no-repeat;
        height: 5556px;
        padding-top: 10px;

    }

    .button {
        margin-top: 14px;
        font-family: 'Gill Sans', 'Gill Sans MT', 'Trebuchet MS', sans-serif;
        font-weight: bold;
        font-size: 25px;
    }

    .button:hover {
        color: rgb(15, 70, 92);
        font-family: 'Gill Sans', 'Gill Sans MT', 'Trebuchet MS', sans-serif;
    }

    .div1 .img {
        width: 100px;
        border-radius: 20px;
        margin-right: 10vh;
    }

    .text {
        font-size: large;
        margin-left: 230px;
        width: 400px;
        display: flex;
        justify-content: space-around;
        font-size: 70px;
        margin-top: 10px;
        color: rgba(255, 255, 255, 0.687);
    }

    .login {
        float: right;
        margin-right: 20px;
        background-color: rgba(0, 124, 248, 0.535);
        width: 80px;
        height: 30px;
        border-radius: 20px;
        cursor: pointer;
        color: white;
        margin-top: 10px;
        border: none;


    }

    .login:hover {
        box-shadow: 10px 40px 10px 0 rgb(2, 0, 4) inset;
        color: rgb(251, 253, 255);
        transition: 3.5s;
    }

    .image {
        width: 100%;
        height: 300vh;

    }

    .q {
        width: 100%;
        height: 70%;


    }

    /* body{
    overflow: hidden;
} */
    .Gallery {
        width: 500px;
        height: 300px;
        border-radius: 20px;

    }

    #home {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .h1 {
        margin-left: 240px;
        color: orange;
        font-size: 50px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
    .aq button{
        box-shadow: 1px 1px 10px white;
    }
</style>

<body>
    <div class="div1">
        <img src="./img/uxx.png" width="60px" height="60px">
        <span class="button"><a href="home.php">Home</a></span>
        <span class="button"><a href="image.php">Gallery</a></span>
        <span class="button"><a href="loginfirst.php">Profile</a></span>
        <span class="button"><a href="about.php">About</a></span>
    </div>
    <div class="container">
        <div class="aq">
            <button class="login"><a href="singup.php">Sing Up</a></button>
            <button class="login"><a href="login.php">Login</a></button>
        </div>
        <div class="text">
            Let's <br> Get's started!! <br>

        </div>
        <h1 class="h1"> Please Login Your Account!!</h1>

    </div>

</body>

</html>
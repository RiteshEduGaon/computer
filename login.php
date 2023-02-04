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
    * {
        margin: 0;
        padding: 0;
    }

    body {
        background-image: url(./img/pexels-mateusz-dach-450035.jpg);
        background-size: cover;
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

    a {
        text-decoration: none;
        color: white;
    }

    a:hover {
        color: rgb(0, 164, 252);
        transition: 1s;
    }

    .a1 {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }

    .a2 {
        width: 51%;
        height: 290px;
        background-color: rgba(0, 0, 0, 0.864);
        color: rgb(236, 236, 236);
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        display: flex;
        flex-direction: column;
        margin-top: 100px;
        border-radius: 15px;
        justify-content: space-around;
        box-shadow: 2px 2px 20px white;
    }

    .a2 input {
        width: 400px;
        height: 30px;
        border-radius: 10px;
        border: 3px;
    }

    .a1 h1 {
        margin-left: 230px;
    }

    .a2 div {
        margin-left: 50px;
        
    }
    
    .submit{
        font-size: 16px;
        font-family: 'Gill Sans', 'Gill Sans MT',  'Trebuchet MS', sans-serif;
        color: white;
        height: 29px;
        background-color: rgba(10, 68, 123, 0.936);
        border-radius: 10px;
        cursor: pointer;
        
    }
    div .submit{
        width: 100px;
        margin-top: 15px;
        margin-left: 100px;
        padding-left: 1opx;
        
    }
    .z{
        color: rgb(151, 102, 10);
        font-size: 30px;
        font-family: 'Gill Sans', 'Gill Sans MT',  'Trebuchet MS', sans-serif;
        font-weight: bold;
        
    }
    .z input{
        height: 50px;
        background-color: rgba(7, 86, 75, 0.553);
        font-size: 30px;
        color: rgb(0, 0, 0);
        border: 1px solid ;
    }
    input:hover{
        border-color: rgb(81, 232, 26 inset)  ;
        transition: 3s;
        border: 2px solid;
        color: rgb(244, 163, 25 ) ;
        
    }
</style>

<body>
    <form action="log.php" method="post">
    <div class="div1">
        <img src="./img/uxx.png" width="60px" height="60px">
        <span class="button"><a href="home.php">Home</a></span>
        <span class="button">Gallery</span>
        <span class="button"><a href="loginfirst.php">Profile</a></span>
        <span class="button"><a href="">About</a></span>
    </div>
    <div class="a1">
        <div class="a2">
            <h1>Login_Form</h1>
            <div class="z">
                User_Id:--->
                <input type="text" placeholder="  Enter Your Email" name="u">
            </div>
            <div class="z">
                Password:->
                <input type="password" placeholder="  Enter Your Password" name="p">
            </div>
            <div>
                <input type="submit" value="Submit" class="submit">
                <input type="reset" value="Reset" class="submit">
            </div>

        </div>
    </div>
    </form>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/uxx.png" type="image/x-icon">
    <title>YADAV</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        background-image: url(./img/pexels-mateusz-dach-450035.jpg);
        background-size: cover;
        user-select: none;
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

    .input2 {
        width: 100%;
        height: 500px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .input1 {
        width: 50%;
        height: 450px;
        color: rgb(229, 231, 236);
        font-family: 'Gill Sans', 'Gill Sans MT',  'Trebuchet MS', sans-serif;
        font-size: 20px;
        display: flex;
        flex-direction: column;
        background-color: rgba(0, 0, 0, 0.862);
        border-radius: 20px;
        box-shadow: 3px 1px 15px white;

    }

    .a1 {
        margin-left: 50px;
        margin-top: 15px;
    }

    input {
        width: 400px;
        height: 25px;
    }
    .input1 div{
        width: 80%;
        display: flex;
        justify-content: space-between;
    }

    h1 {
        margin-left: 200px;
    }
    .q{
        border-radius: 5px;
        border-color: rgba(0, 100, 0, 0.563);
        border-width: 2px;
        
    }
    .q:hover{
        border-color: rgb(0, 64, 255);
        transition: 2s;
        border-radius: 5px;
        box-shadow: inset;
        
    }
    .submit{
        font-size: 16px;
        font-family: 'Gill Sans', 'Gill Sans MT',  'Trebuchet MS', sans-serif;
        color: white;
        width: 90px;
        height: 29px;
        background-color: rgba(10, 68, 123, 0.936);
        display: flex;
        justify-content: space-evenly;
        flex-direction: column;
        align-items: center;
        margin: auto;
        border-radius: 10px;
        cursor: pointer;
        
    }
    div .submit{
        width: 100px;
        margin-top: 15px;
        margin-left: 100px;
        
    }
</style>

<body>
    <form action="form.php" method="post">

    <div class="div1">
        <img src="./img/uxx.png" width="60px" height="60px">
        <span class="button"><a href="home.php">Home</a></span>
        <span class="button"><a href="image.php">Gallery</a></span>
        <span class="button"><a href="loginfirst.php">Profile</a></span>
        <span class="button"><a href="">Contact</a></span>
    </div>
    <div class="input2">
        <div class="input1">
            <h1 style="color: rgb(0, 225, 255);">Sing_Up_Form</h1>

            <div class="a1">Name:----><input type="text" placeholder="   Enter Your Name" name="name" class="q" required></div>
            <div class="a1">Address:-><input type="text" placeholder="   Enter Your Address" name="add" class="q" required></div>
            <div class="a1">Email:---><input type="email" placeholder="  Enter Your Email" name="email" class="q" required></div>
            <div class="a1">D-O-B:----><input type="date" placeholder="  Enter Your D-O-B" name="dob" class="q" required></div>
            <div class="a1">Mobile:--><input type="number" placeholder="   Enter Your Mobile" name="mobile" class="q" required></div>
            <div class="a1">User_Id:--><input type="text" placeholder="  Enter Your User_Id" name="user" class="q" required></div>
            <div class="a1">Password:><input type="text" placeholder="   Enter Your Password" name="password" class="q" required></div>
           <div><input type="submit" value="Submit" class="submit">
            <input type="reset" value="Reset" class="submit"></div>

        </div>
    </div>
    </form>
</body>

</html>
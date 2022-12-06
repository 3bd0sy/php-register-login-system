<?php
session_start();




$name  = $_SESSION["name"];
$pass = $_SESSION["pass"];

$name1  = "";
$pass1 = "";

$date = $_SESSION["date"];
$email = $_SESSION["email"];


if (!empty($_POST["name1"]))
    $name1 = $_POST["name1"];

if (!empty($_POST["pass1"]))
    $pass1 = $_POST["pass1"];


if ($pass==$pass1 and $name==$name1)
    {
        //echo 'true';
        header("Location: http://localhost/task2/index.php");
    exit();
    }
// else
// echo'false';
// echo "ttttttttttt <hr>";
// echo $name . $pass  . $date . $email;
// echo "ddddddddddd<hr>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            font-size: 30px;
        }


        header {
            z-index: 1;
            height: 250px;
            background-color: rgb(8, 26, 126);
        }

        h1 {
            text-transform: uppercase;

            color: rgb(110, 240, 207);
            float: right;
            font-size: 60px;
            width: 72%;
            padding-top: 80px;
        }

        .img1 {
            display: inline-block;
            margin-top: 25px;
            margin-left: 25px;
            width: 15%;
            border-radius: 100px;
            border-right: 4px red solid;
        }

        main {
            clear: both;
            height: 600px;
            background-color: aqua;
        }

        .box1 {
            float: left;
            width: 300px;
            height: 300px;
            position: relative;

            background-color: yellow;
        }

        .box1:before {
            content: '';

            position: absolute;
            bottom: 0;
            right: 0;
            border-bottom: 300px solid aqua;
            border-left: 300px solid violet;
            width: 0;
        }

        .box2 {
            z-index: 5;
            display: inline-block;
            width: 100%;
            height: 100%;
            rotate: 45deg;
            background-color: chartreuse;
        }

        .box3 {
            border-radius: 20px 20px 80px 80px;
            display: grid;
            grid-template-areas:
                'h1   h1   h1   h1   h1    h1'
                'h2   h2   h2   h2   h2    h2'
                'h3   h3   h3   h3   h3    h3'
                'h4   h4   h4   h4   h4    h4';
            gap: 10px;



            margin-top: 200px;
            background-color: violet;
            display: inline-block;
            width: 50%;
            height: 300px;
        }

        .box3>div {
            text-transform: uppercase;
            text-align: center;
            padding: 20px 0;
            font-size: 30px;
        }

        .i1 {
            grid-area: h1;
        }

        .i2 {
            grid-area: h2;
        }

        .i3 {
            grid-area: h3;
        }

        .i4 {
            grid-area: h4;
        }



        footer {
            height: 200px;
            background-color: rgb(221, 26, 195)
        }

        .f1 {
            height: 60%;
            text-align: center;
            font-size: 40px;
            color: rgb(5, 13, 63);
            text-transform: uppercase;
            text-decoration: underline;
        }

        .f2 {
            height: 40%;
            text-transform: uppercase;
            line-height: 80px;
            text-align: center;
            background-color: rgb(247, 111, 229);
        }

        .user {
            background: linear-gradient(90deg, rgb(221, 26, 195), rgb(63, 194, 63), rgb(68, 68, 206));
            animation: a1 2.5s infinite ease-in-out;
            background-size: 300% 300%;

        }

        .pass {
            background: linear-gradient(90deg, rgb(221, 26, 195), rgb(63, 194, 63), rgb(68, 68, 206));
            animation: a1 2.5s infinite ease-in-out;
            background-size: 300% 300%;
        }

        @keyframes a1 {
            0% {
                background-position: 0 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0 50%;
            }

        }
    </style>

</head>

<body>
    <header>
        <img class="img1" src="smiley_face_background-wallpaper-1920x1440 (2).jpg" alt="">
        <h1>login & register page</h1>
    </header>
    <main>
        <div class="box1">
        </div>

        <form action="%e2%80%8f%e2%80%8findex.php" method="post">
            <div class="box3">
                <div class="i1"><label for=""> enter your username and password</label></div>
                <div class="user" class="i2"><label for="">username</label>
                    <input type="text" name="name1" id="">
                </div>

                <div class="pass" class="i3"><label for="">password</label>
                    <input type="password" name="pass1" id="">
                </div>

                <div class="i4"><input style="text-transform: uppercase;" type="submit" value="send to server  "></div>
            </div>
        </form>
    </main>

    <footer>
        <div class="f1">
            this page created by <br>
            abdulbasit abdulghani
        </div>
        <div class="f2">
            all rights reserved &copy; <span style="color: rgb(255, 0, 0);"> 3bdo_sy</span>
        </div>
    </footer>
</body>

</html>
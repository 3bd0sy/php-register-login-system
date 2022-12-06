<?php

session_start();


$name = $pass = $date = $rpass = $email = "";
if (!empty($_POST["name"])) {
    $name = $_POST["name"];
    $_SESSION["name"] = $_POST["name"];
}
if (!empty($_POST["pass"])) {
    $pass = $_POST["pass"];
    $_SESSION["pass"] = $_POST["pass"];
}

if (!empty($_POST["rpass"])) {
    $rpass = $_POST["rpass"];
    $_SESSION["rpass"] = $_POST["rpass"];
}

if (!empty($_POST["email"])) {
    $email = $_POST["email"];
    $_SESSION["email"] = $_POST["email"];
}

if (!empty($_POST["date"])) {
    $date = $_POST["date"];
    $_SESSION["date"] = $_POST["date"];
}



if ($pass != $rpass)
    echo 'password not match';
elseif ($pass != "" or $rpass != "") {
    $pass = "0";
    $rpass = "1";
    header("Location: http://localhost/task1/%e2%80%8f%e2%80%8findex.php");
    exit();
}

//echo $name . $pass . $rpass . $date . $email
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
            font-size: 25px;
        }

        body {
            background-color: rgb(100, 230, 48);
            height: 500px;
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



            margin-top: 100px;
            background-color: violet;
            display: inline-block;
            width: 60%;
            margin-left: 20%;
            height: 400px;
        }

        .box3>div {
            text-transform: uppercase;
            text-align: center;
            padding: 20px 0;
            font-size: 30px;

        }

        .i1 {
            grid-area: h1;
            color: rgb(53, 40, 110);
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



        .user {
            background: linear-gradient(45deg, rgb(169, 167, 189), rgb(122, 114, 151), rgb(68, 68, 206));
            animation: a1 4s infinite ease-in-out;
            background-size: 300% 300%;

        }

        .pass {
            background: linear-gradient(45deg, rgb(169, 167, 189), rgb(122, 114, 151), rgb(68, 68, 206));
            animation: a1 4s infinite ease-in-out;
            background-size: 300% 300%;
        }

        .box3 {
            background: linear-gradient(45deg, rgb(68, 68, 206), rgb(122, 114, 151), rgb(169, 167, 189));
            animation: a1 4s infinite ease-in-out;
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
    <form action="index.php" method="post">
        <div class="box3">
            <div class="i1"><label for="" style="font-size: 30px;"> enter your information:</label></div>
            <div class="user" class="i2">
                <label for="">username:</label>
                <input size="12" type="text" required name="name" id="">

                <label for="">birth day:</label>
                <input type="date" name="date" required id="">
            </div>


            <div class="pass" class="i3">
                <label for="">password:</label>
                <input size="8" type="password" required name="pass" id="">

                <label for="">repeat password:</label>
                <input size="8" type="password" required name="rpass" id="">
            </div>

            <div class="pass" class="i4">
                <label for="">email:</label>
                <input type="email" name="email" required id="">
            </div>

            <div class="i4">
                <input style="text-transform: uppercase; border-radius:50px;" type="submit" value="  save information  ">
            </div>
        </div>
    </form>

</body>

</html>
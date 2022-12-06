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
            background: linear-gradient(90deg, rgb(168, 189, 167), rgb(67, 161, 96), rgb(100, 230, 48), rgb(44, 175, 88), rgb(168, 189, 167));
            animation: a1 4s infinite ease-in-out;
            background-size: 300% 300%;
        }

        .pass {
            background: linear-gradient(90deg, rgb(168, 189, 167), rgb(67, 161, 96), rgb(100, 230, 48), rgb(44, 175, 88), rgb(168, 189, 167));
            animation: a1 4s infinite ease-in-out;
            background-size: 300% 300%;
        }

        .box3 {
            background: linear-gradient(90deg, rgb(68, 68, 206), rgb(122, 114, 151), rgb(169, 167, 189));
            animation: a1 4s infinite ease-in-out;
            background-size: 300% 300%;
        }

        .eng {
            color: rgb(136, 7, 7);
        }

        .name {
            color: rgb(14, 68, 9);
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
    <form action="http://localhost/task/index.php" method="post">
        <div class="box3">
            <div class="i1">
                <label for=""> Congratulation </label>
            </div>


            <div class="pass" class="i2">
                <label for=""> you have successfully login</label>
            </div>

            <div class="pass" class="i3">
                <label for="">now you can use this code ! </label>
            </div>
            <div class="pass" class="i4">
                <label for=""> created by : <span class="eng"> eng</span>. <span class="name"> abdulbasit abdulghani</span></label>
            </div>

            <div class="i4">
                <input style="text-transform: uppercase; border-radius:50px;" type="submit" value="  restart  ">
            </div>
        </div>
    </form>

</body>

</html>
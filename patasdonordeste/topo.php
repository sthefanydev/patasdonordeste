<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Patas do Nordeste</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        /*body {
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
        }*/

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;

            background-image: url('img/R.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;

            position: relative;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

            background: linear-gradient(to right, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0));
            z-index: -1;
        }

        h1 {
            color: rgba(140, 204, 231, 1);
            margin-left: 20px;
            margin-top: 20px;
        }

        .box {
            background: rgba(255, 255, 255, 0.15);
            padding: 20px;
            border-radius: 12px;
            width: 350px;

            position: relative;
            margin-left: 40px;
            margin-top: 40px;

            color: white;
            backdrop-filter: blur(4px);
            z-index: 10;
        }
    </style>
</head>

<body>

    <?php
    echo "<h1>Clínica Veterinária Patas do Nordeste</h1>";
    ?>
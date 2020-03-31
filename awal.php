<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TELKOM LIBRARY</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <style>
    body:before{
        content: '';
        position: fixed;
        width: 100vw;
        height: 100vh;
        background-color: #ffa41b;
    }
    .form{
        border-style: dotted;
        border-color: black;
        border-width: 20px;
        width: 1000px;
        height: 580px;
        background: #fafba4;
        color: #fff;
        top: 50%;
        left: 50%;
        position: absolute;
        box-sizing: border-box;
        padding: 70px;
        text-align: center;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }
    #heading{
        font-weight: bold;
        font-family: courier;
        font-size: 75pt;
    }
    .middle{
        font-family: verdana;
        font-size: 2;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        text-align: center;
    }
    .btn{
        background: none;
        border: 2px solid black;
        font-family: verdana;
        text-transform: uppercase;
        padding: 12px 20px;
        min-width: 300px;
        margin: 10px;
        cursor: pointer;
        transition: 0.8s;
        position: relative;
        overflow: hidden;
    }
    .btn:hover{
        color: #000839;
    }

    .btn:before{
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: #000;
        z-index: -1;
        transition: transform 0.5s;
        transform-origin: 0 0;
        transition-timing-function: cubic-bezier(0.5,1.6,0.4,0.7);
    }
    .button{
        font-size: 20pt;
        font-weight: bold;
        border-style: dashed;
        border-color: black;
        border-width: 3px;
        margin-right: 5px;
        margin-left: 25px;
        margin-top: 15px;
    }
    .btn1:before{
        transform: scaleY(0);
    }
    .btn2:before{
        transform: scaleY(0);
    }
    .btn1:hover::before{
        transform: scaleY(1);
    }
    .btn2:hover::before{
        transform: scaleY(1);
    }
    

  </style>
</head>
<body>
    <div class="form">
        <div class="middle">
            <h1 id="heading" style="color: #000839;">TELKOM LIBRARY</h1>
            <br>
            <h4 style="color: #000839;">Login As</h4>
            <a href="indexAnggota.php"><button  class = "button">MEMBER</button></a>
            <a href="indexPetugas.php"><button  class = "button">OPERATOR</button></a>
        </div>
    </div>
</body>
</html>

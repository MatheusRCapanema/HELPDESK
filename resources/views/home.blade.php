<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
        <link rel="stylesheet" href="<?php echo asset('css/home_style.css')?>"type="text/css">
</head>
<body>
    <header>
        <a href="#" class="logo"><img src="https://www.linkpicture.com/q/618ab4e5c384b18c23e00dc3_brb-logo-0-p-130x130q80-2.png" alt=""></a>
        <ul>
            <li><a href="#"> Home</a></li>
            <li><a href="#"> Sobre</a></li>
            <li><a href="#"> Serviços</a></li>
            <li><a href="#"> Time</a></li>
            <li><a href="{{route('login')}}" class="a-24" role="button">Login</a></li>
            <li><a href="{{route('register')}}" class="a-23" role="button">Cadastro</a></li>
        </ul>
    </header>
    <section class="banner"></section>
    <script type="text/javascript">
        window.addEventListener("scroll",function (){
          var header = document.querySelector("header") ;
          header.classList.toggle("sticky",window.scrollY>0);
        })
    </script>
</body>
</html>

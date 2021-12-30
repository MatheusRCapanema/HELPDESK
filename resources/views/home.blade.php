<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="{{ asset('css/home_style.css') }}">
</head>
<body>
    <header>
        <a href="#" class="logo"><img src="https://www.linkpicture.com/q/618ab4e5c384b18c23e00dc3_brb-logo-0-p-130x130q80-2.png" alt=""></a>
        <ul>
            <li><a href="#banner"> Home</a></li>
            <li><a href="#" id="about"> Sobre</a></li>
            <li><a href="#"> Time</a></li>
            <li><a href="{{route('login')}}" class="a-24" role="button">Login</a></li>
        </ul>
    </header>

    <section id="banner">
        <div id="main_text">
            <h1>STM</h1>
            <h3>
                O STM é um sistema de ticket aberto aos clientes BRB e aos funcionários BRB,<br>
                ele interliga as áreas de Gerência, Produção e Fornecimento em uma só <br>
                plataforma, facilitando assim a comunicação entre as áreas.
            </h3>
            <a href="{{route('register')}}" class="a-23" role="button">Cadastro</a>
        </div>
        <div class="degrade"></div>
    </section>

    <script type="text/javascript">
        window.addEventListener("scroll",function (){
          var header = document.querySelector("header") ;
          header.classList.toggle("sticky",window.scrollY>0);
        })
    </script>
    <script type="text/javascript">
        document.querySelectorAll('a[href^="#"]').forEach(anchor =>{
            anchor.addEventListener("click",function (e){
                e.preventDefault();
                document.querySelector(this.getAttribute("href")).scrollIntoView({
                  behavior : "smooth"
                });
            });
        });
    </script>

</body>
</html>

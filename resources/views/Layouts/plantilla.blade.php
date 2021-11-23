<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="container mx-auto mt-2">

    
    <!--Nav -->

    <nav class="bg-green-700 flex">
        
        <div class="flex-1 bg-green-700	 p-4 m-1">
            <div><a id="showMenu" href="#" class="text-white hidden sm:block">Hola</a> </div>

            <div class="flex  sm:hidden" id="menu">

                <div><a class="text-center text-white p-4  hover:bg-green-900 sm:block" href="{{route('Inicio')}}">Inicio</a></div>

                <div class="menu-one" ><a class="text-center text-white p-4 hover:bg-green-900 sm:block" href="#">Equipos</a>

                    <div class=" absolute sub-menu p-4  " >
                        <a class="text-center text-white p-3 bg-green-600	border border-green-900 hover:bg-green-900" href="{{route('Equipos.primera')}}">Primera division</a>
                        <a class="text-center text-white p-3 bg-green-600	border border-green-900 hover:bg-green-900" href="{{route('Equipos.segunda')}}">Segunda división</a>
                    </div>
                </div>

                <div class="menu-one" ><a class="text-center text-white p-4 hover:bg-green-900 sm:block" href="#">Resultados</a>
                    
                    <div class=" absolute sub-menu p-4  " >
                        <a class="text-center text-white p-3 bg-green-600	border border-green-900 hover:bg-green-900" href="{{route('Resultados.primera')}}">Primera division</a>
                         <a class="text-center text-white p-3 bg-green-600	border border-green-900 hover:bg-green-900" href="{{route('Resultados.segunda')}}">Segunda división</a>
                    </div>
                                    
                </div>
                
                <div class="menu-one" ><a class="text-center text-white p-4 hover:bg-green-900 sm:block" href="#">Estadisticas</a>
                   
                    <div class="absolute sub-menu p-4 ">
                        
                        <a class="text-center text-white p-3 bg-green-600 border border-green-900 hover:bg-green-900" href="">Tabla de la temporada</a>
                        <a class="text-center text-white p-3 bg-green-600 border border-green-900 hover:bg-green-900" href="">Goleadores</a>
                        <a class="text-center text-white p-3 bg-green-600 border border-green-900 hover:bg-green-900" href="">Faltas</a>

                    </div>
                </div>

                <div class="menu-one" ><a class="text-center text-white p-4 hover:bg-green-900 sm:block" href="{{route('Noticias')}}">Noticias</a></div>

                <div class="menu-one" ><a class="text-center text-white p-4 hover:bg-green-900 sm:block" href="{{route('Login')}}">Pagos</a></div>
                <div class="menu-one" ><a class="text-center text-white p-4 hover:bg-green-900 sm:block" href="{{route('Contacto')}}">Contacto</a></div>

            </div>
        </div>



        <div class="text-white p-4 m-1" id="login-icon"> <a class="fa fa-fw fa-user" href="#"></a>

            <div class="login p-1 hidden absolute" id="login"  >
                <a class="text-center text-white p-2 bg-green-600	border border-green-900 block" href="#">Perfil</a>
                <a class="text-center text-white p-2 bg-green-600	border border-green-900 block" href="#">Cerrar</a>
            </div>
        </div>
    </nav>
    
    <!--Nav -->

    <!--Header -->
    <header>@yield('header')</header>
    <!--Header -->


    <!--Section-->
    @yield('contenido')
    <!--Section-->


    <!--Footer-->
    <div class="border-2 border-green-900 text-center flex">
            <div class="bg-green-50	 w-1/3 border-2 border-green-900">
                Liga $variable <br>Aviso de Privacidad
                Aviso Anticorrupción <br> Aviso de Privacidad
                Aviso Anticorrupción </div>
            <div class="bg-green-50	 w-2/3 border-2 border-green-900">
                <div>Logos</div>
                <div> Redes sociales</div>
            </div>
            
    </div>

    <!--Footer-->







    <script src="{{ asset('js/main.js')}}" ></script>
</body>
</html>
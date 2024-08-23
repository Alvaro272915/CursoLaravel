<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    
    <title>Aplicación de Citas</title>
    <link rel="shortcut icon" href="../assets/Imagenes/Icono_Citas_1.ico" type="image/x-icon">

    <body>
        <header>
            <a id = "inicioPag" href="../html/Index.html" target="">
                <img src="../Imagenes/logoempresa.jpg" alt="">
            </a>
        </header>    
    </body>
</head>
<body>
    <div class="container-form">
        <form id="login" action="{{route('pacientes.listar')}}" method="get">
            <img src="{{asset('imagenes/Inicio_Sesion.jpg')}}" alt="">
            <input type="text" placeholder="Digite Su Usuario" id="usuario">
            <input type="password" placeholder="Digite Su Contraseña" id="pass">
            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </form>
    </div>
</body>

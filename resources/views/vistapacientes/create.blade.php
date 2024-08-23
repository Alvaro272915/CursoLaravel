<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">    
    
    <title>Consulta Pacientes</title>
    <link rel="shortcut icon" href="../assets/Imagenes/Icono_Citas_1.ico" type="image/x-icon">
    <body>
        <header>
            <a  href="{{route('pacientes.listar')}}" target="">
                <img src="{{asset('imagenes/logoempresa.jpg')}}" alt="">
            </a>
        </header>    
    </body>
</head>

<form action="{{route('paciente.guardar')}}" method="post">
    @csrf 
    <h2>CREACION DE PACIENTES</h2>
    <input type="numbert" name = "cedula" placeholder="Cedula Paciente">
    <input type="text" name= "nombres" placeholder ="Nombres Paciente">
    <input type="text" name= "apellidos" placeholder ="apellidos Paciente">
    <input type="numbert" name = "telefono" placeholder="telefono Paciente">
    <input type="text" name= "email" placeholder ="email Paciente">
    <input class="btn btn-primary" type="submit" value="Agregar Paciente">

</form>



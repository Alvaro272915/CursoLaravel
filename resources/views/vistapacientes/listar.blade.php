<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/indexlistar.css')}}">    
    
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

    <body>
        <div>
            <form class=fomrlistar action="{{route('paciente.create')}}" method="get">
                <h1 class=texto>Consulta de Pacientes</h1>
                <button type="submit" class="btn btn-outline-primary">Crear Nuevo Paciente</button>
                
                <table>
                    <tr>
                        <th>Id Paciente</th>
                        <th>Cedula del Paciente</th>
                        <th>Nombres del Paciente</th>
                        <th>Apellidos del Paciente</th>
                        <th>Telefono del Paciente</th>
                        <th>Mail del Paciente</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach ($pacientes as $pacientes)
                        <tr>
                            <td>{{$pacientes->idpaciente}} </td>
                            <td>{{$pacientes->cedula}} </td>
                            <td>{{$pacientes->nombres}} </td>
                            <td>{{$pacientes->apellidos}} </td>
                            <td>{{$pacientes->telefono}} </td>
                            <td>{{$pacientes->email}} </td>
                            <td>
                                <a href="{{route('pacientes.actualizar',['idpaciente'=>$pacientes->idpaciente])}}">Actualizar</a>
                            </td>
                            <td>
                                <a href="{{route('pacientes.eliminar',['idpaciente'=>$pacientes->idpaciente])}}">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </form>
        </div>
    </body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


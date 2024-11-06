<?php 
    require_once "bootstrap.php";
    require_once "controlador/solicitudEmpleoControlador.php";
    require_once "controlador/puestoControlador.php";
    $puestos = PuestosControlador::devolverTodos();

    if(isset($_POST["puesto"])){
        if(isset($_POST["fechaMinima"])){
            $fechaMinima= $_POST["fechaMinima"];
        }
        else{
            $fechaMinima= date("Y-m-d");;
        }
        if(isset($_POST["fechaMaxima"])){
            $fechaMaxima= $_POST["fechaMaxima"];
        }
        else{
            $fechaMaxima= date("Y-m-d");
        }
        if(isset($_POST["puesto"])){
            $idPuesto=[$_POST["idPuesto"]];
        }
        else{

            $idPuesto=[""];
        }
           $solicitudes= SolicitudEmpleoControlador::ConsultarSolicitudes($fechaMinima, $fechaMaxima, $idPuesto);

        }
    else{
        $solicitudes= SolicitudEmpleoControlador::buscarTodo();
    }
    ?>
<html>
<head>
    <title>Gestión de Solicitudes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></link>
</head>
<body>
    <header>
        <h1>Consultar Solicitudes</h1>
    </header>
    <nav>
        <a href="#registro" onclick= "registrar()">Registro de Solicitudes</a>
        <a href="#modificar" onclick= "modificar()">Modificar Solicitud</a>
        <a href="#consultar" onclick= "consultar()">Consultar Solicitudes</a>
    </nav>
    <div class="container">   
        </div>
        <div id="consultar" class="form-container">
            <h2>Consultar Solicitudes</h2>
            <form method="post">
                <div class="form-group">
                    <label for="fechaMinima">Desde:</label>
                    <input type="date" id="fechafechaMinima" name="fechaMinima">
                </div>
                <div class="form-group">
                    <label for="fechaMaxima">Hasta:</label>
                    <input type="date" id="fechaMaxima" name="fechaMaxima">
                </div>
                <div class="form-group">
                    <label for="puesto">Puesto:</label>
                    <select id="puesto" name="puesto">
                        <option value="">Seleccione un puesto</option>
                        <?php foreach($puestos as $puesto){?>
                        <option value="<?=$puesto->getId()?>"><?=$puesto->getDescripcion()?></option>

                        <?php }?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit">Buscar</button>
                </div>
            </form>
            <div class="container mt-5">
        <h2 class="mb-4">Solicitudes de empleo</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Puesto solicitado</th>
                    <th scope="col">Trabajos</th>
                    <th scope="col">Años Experiencia</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($solicitudes as $solicitud){?>
                <tr>
                    <td><?=$solicitud->getFechaCreacion()->format("Y-m-d")?></td>
                    <td><?=$solicitud->getNombre()?></td>
                    <td><?=$solicitud->getApellido()?></td>
                    <td><?=$solicitud->getDni()?></td>
                    <td><?=$solicitud->getPuestoRequerido()->getDescripcion()?></td>
                    <td><?=$solicitud->getOtrosTrabajos()?></td>
                    <td><?=$solicitud->getAnnosDeExperiencia()?></td>
                    <td><button type="button" class="btn btn-primary">Modificar</button></td>

                </tr>
                <?php }?>
              
            
            </tbody>
        </table>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
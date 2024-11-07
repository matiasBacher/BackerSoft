<?php 
require_once "bootstrap.php";
require_once "controlador/solicitudEmpleoControlador.php";
require_once "controlador/puestoControlador.php";
$puestos= PuestosControlador::devolverTodos();
$bandera=false;

if(isset($_GET["id"])){
    $id=$_GET["id"];
    $solicitud=SolicitudEmpleoControlador::devolverUna($id);
}
else{
    header("Location:"."index.php");
    die();
}
if(isset($_POST["registrar"])){
   if( SolicitudEmpleoControlador::ModificarSolicitud(id:$id, 
                                                    nombre:$_POST["nombre"],
                                                    apellido: $_POST['apellido'], 
                                                    dni: intval($_POST['dni']), 
                                                    idPuesto: intval($_POST['puesto']), 
                                                    annosDeExperiencia: $_POST['anos'],
                                                    experiencia: $_POST["trabajos"])
                                                    =="ok" ){

                  $Mensaje = 'Se ha modificado correctamente.';
                  $_POST = array();
                  $Estilo = 'success';
                  $bandera=true;


}

}?>

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
        <h1>Gestión de Solicitudes</h1>
    </header>
    <nav>
        <a href="registrar.php" onclick= "registrar()">Registro de Solicitudes</a>
        <a href="index.php" onclick= "consultar()">Consultar Solicitudes</a>
    </nav>
    <div class="container">   
        <?php if($bandera){?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-1"></i>
                    <?php echo $Mensaje; ?>
                </div>
            <?php }
            else{ ?>

        <div id="modificar" class="form-container">
            <h2>Modificar Solicitud</h2>
            <form method="post">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input value="<?=$solicitud->getNombre()?>" type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input value="<?=$solicitud->getApellido()?>" type="text" id="apellido" name="apellido" required>
                </div>
                <div class="form-group">
                    <label for="dni">D.N.I:</label>
                    <input value="<?=$solicitud->getDni()?>" type="text" id="dni" name="dni" required>
                </div>
                 <div class="form-group">
                    <label for="anos">Años de experiencia:</label>
                    <input value="<?=$solicitud->getAnnosDeExperiencia()?>" type="text" id="anos" name="anos" required>
                </div>
                <div class="form-group">
                    <label for="trabajos">Trabajos:</label>
                    <input value="<?=$solicitud->getOtrosTrabajos()?>" type="text" id="trabajos" name="trabajos" required>
                </div>
        
                <div class="form-group">
                    <label for="puesto">Puesto:</label>
                    <select id="puesto" name="puesto" required>

                       <?php  foreach($puestos as $puesto ){ ?>
                        <option value="<?=$puesto->getId()?>" 
                        <?=$solicitud->getPuestoRequerido()->getId()==$puesto->getId()?"selected":""?> >
                            <?=$puesto->getDescripcion()?>
                        </option>

                        <?php }?>
on>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" value="modificar" name="modificar">Modificar</button>
                </div>
            </form>
        </div>
        <?php }?>
    </div>
    <script src="script.js"></script>
</body>
</html>
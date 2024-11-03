<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Registrar Solicitudes</title>
</head>
<body>
<form method="post">
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="Nombre">
    </div>
    <div class="mb-3">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" aria-describedby="Apellido">
    </div>
    <div class="mb-3">
        <label for="dni" class="form-label">Documento de Identidad</label>
        <input type="text" class="form-control" id="dni" name="dni" aria-describedby="DNI">
    </div>
    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha de Creación</label>
        <input type="date" class="form-control" id="fecha" name="fechaCreacion">
    </div>
    <div class="mb-3">
        <label for="trabajos" class="form-label">Otros Trabajos</label>
        <input type="text" class="form-control" id="trabajos" name="trabajos">
    </div>
    <div class="mb-3">
        <select class="form-select" aria-label="Default select example">
            <option selected>Abre el menú se selección</option>
            <option value="1">Almacenero</option>
            <option value="2">Auxiliar Administrativo</option>
            <option value="3">Ayudante de Panadero</option>
            <option value="4">Cajero/a</option>
            <option value="5">Gerente</option>
            <option value="6">Jefe de Producción</option>
            <option value="7">Jefe de Ventas</option>
            <option value="8">Limpieza o mantenimiento</option>
            <option value="9">Panadero/a</option>
            <option value="10">Pastelero/a</option>
            <option value="11">Repostero/a</option>
            <option value="12">Vendedor/a</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>



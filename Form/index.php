<html>
<head>
    <title>Gestión de Solicitudes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <header>
        <h1>Gestión de Solicitudes</h1>
    </header>
    <nav>
        <a href="#registro" onclick= "registrar()">Registro de Solicitudes</a>
        <a href="#modificar" onclick= "modificar()">Modificar Solicitud</a>
        <a href="#consultar" onclick= "consultar()">Consultar Solicitudes</a>
    </nav>
    <div class="container">
        <div id="registro" class="form-container">
            <h2>Registro de Solicitudes</h2>
            <form method="post">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" required>
                </div>
                <div class="form-group">
                    <label for="dni">D.N.I:</label>
                    <input type="text" id="dni" name="dni" required>
                </div>
                <div class="form-group">
                    <label for="trabajos">Trabajos:</label>
                    <input type="text" id="trabajos" name="trabajos" required>
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha" name="fecha" required>
                </div>
                <div class="form-group">
                    <label for="puesto">Puesto:</label>
                    <select id="puesto" name="puesto" required>
                        <option value="panadero">Panadero</option>
                        <option value="repostero">Repostero</option>
                        <option value="cajero">Cajero</option>
                        <option value="limpieza">Limpieza</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit">Registrar</button>
                </div>
            </form>
        </div>
        <div id="modificar" class="form-container">
            <h2>Modificar Solicitud</h2>
            <form method="post">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" required>
                </div>
                <div class="form-group">
                    <label for="dni">D.N.I:</label>
                    <input type="text" id="dni" name="dni" required>
                </div>
                <div class="form-group">
                    <label for="trabajos">Trabajos:</label>
                    <input type="text" id="trabajos" name="trabajos" required>
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha" name="fecha" required>
                </div>
                <div class="form-group">
                    <label for="puesto">Puesto:</label>
                    <select id="puesto" name="puesto" required>
                        <option value="panadero">Panadero</option>
                        <option value="repostero">Repostero</option>
                        <option value="cajero">Cajero</option>
                        <option value="limpieza">Limpieza</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit">Modificar</button>
                </div>
            </form>
        </div>
        <div id="consultar" class="form-container">
            <h2>Consultar Solicitudes</h2>
            <form method="post">
                <div class="form-group">
                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha" name="fecha">
                </div>
                <div class="form-group">
                    <label for="puesto">Puesto:</label>
                    <select id="puesto" name="puesto">
                        <option value="">Seleccione un puesto</option>
                        <option value="panadero">Panadero</option>
                        <option value="repostero">Repostero</option>
                        <option value="cajero">Cajero</option>
                        <option value="limpieza">Limpieza</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit">Buscar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
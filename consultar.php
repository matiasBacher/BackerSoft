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
            <div class="container mt-5">
        <h2 class="mb-4">Solicitudes de empleo</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Puesto</th>
                    <th scope="col">Trabajos</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2023-10-05</td>
                    <td>Pedro</td>
                    <td>Fernández</td>
                    <td>55667788</td>
                    <td>Tester</td>
                    <td>Proyecto I, Proyecto J</td>
                </tr>
                <tr>
                    <td>2023-10-06</td>
                    <td>Lucía</td>
                    <td>García</td>
                    <td>99887766</td>
                    <td>Soporte</td>
                    <td>Proyecto K, Proyecto L</td>
                </tr>
                <tr>
                    <td>2023-10-07</td>
                    <td>Jorge</td>
                    <td>Lopez</td>
                    <td>66554433</td>
                    <td>Administrador</td>
                    <td>Proyecto M, Proyecto N</td>
                </tr>
                <tr>
                    <td>2023-10-08</td>
                    <td>Elena</td>
                    <td>Hernández</td>
                    <td>33445566</td>
                    <td>Consultora</td>
                    <td>Proyecto O, Proyecto P</td>
                </tr>
                <tr>
                    <td>2023-10-09</td>
                    <td>Raúl</td>
                    <td>Ramírez</td>
                    <td>22334455</td>
                    <td>Arquitecto</td>
                    <td>Proyecto Q, Proyecto R</td>
                </tr>
                <tr>
                    <td>2023-10-10</td>
                    <td>Laura</td>
                    <td>Vargas</td>
                    <td>77889900</td>
                    <td>Ingeniera</td>
                    <td>Proyecto S, Proyecto T</td>
                </tr>
                <tr>
                    <td>2023-10-11</td>
                    <td>Diego</td>
                    <td>Silva</td>
                    <td>11224433</td>
                    <td>Coordinador</td>
                    <td>Proyecto U, Proyecto V</td>
                </tr>
                <tr>
                    <td>2023-10-12</td>
                    <td>Paula</td>
                    <td>Morales</td>
                    <td>99882211</td>
                    <td>Especialista</td>
                    <td>Proyecto W, Proyecto X</td>
                </tr>
              
            
            </tbody>
        </table>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        h2 {
            text-align: center;
            color: #555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        td img {
            max-width: 100px;
            height: auto;
        }
        .logout-link {
            float: right;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        .logout-link:hover {
            color: #0056b3;
        }
        .button {
            display: inline-block;
            padding: 8px 16px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #0056b3;
        }
        .sold-message {
            color: #28a745; /* Verde */
            font-weight: bold;
            display: none; /* Inicialmente oculto */
        }
        .message {
            display: none;
            color: #28a745; /* Verde */
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Punto de venta [abarrotes]! <a class="logout-link" href="logout.php">Cerrar Sesión</a></h2>
        <h3>Lista de productos</h3>
        <table>
            <thead>
                <tr>
                    <th>Vender</th>
                    <th>Producto</th>
                    <th>Descripción</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><button class="button" onclick="venderProducto(this)">Vender</button><span class="message">¡Vendido!</span></td>
                    <td>Coca Cola</td>
                    <td>Refresco de Cola, con gas</td>
                    <td>Coca</td>
                    <td>30.00</td>
                    <td><img src="coca.jpg" alt="Producto A"></td>
                </tr>
                <tr>
                    <td><button class="button" onclick="venderProducto(this)">Vender</button><span class="message">¡Vendido!</span></td>
                    <td>Pan Bimbo</td>
                    <td>Pan Blcanco, con trigo</td>
                    <td>Bimbo</td>
                    <td>40.00</td>
                    <td><img src="bimbo.jpg" alt="Producto B"></td>
                </tr>
                <tr>
                    <td><button class="button" onclick="venderProducto(this)">Vender</button><span class="message">¡Vendido!</span></td>
                    <td>Takis</td>
                    <td>Tortilla con chile enredado</td>
                    <td>Barcel</td>
                    <td>17.00</td>
                    <td><img src="takis.jpg" alt="Producto C"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        function venderProducto(button) {
            var message = button.parentNode.querySelector('.message'); // Encuentra el mensaje "¡Vendido!"
            message.style.display = 'inline'; // Muestra el mensaje "¡Vendido!"
        }
    </script>
</body>
</html>

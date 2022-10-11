<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ingrese sus datos y calcule tu promedio</h1>
    <form action="procesador.php" method="POST">
        <label for="">Nombre:</label><br>
        <input type="text" name="nombre"><br><br>
        

        <label for="">Apellido:</label><br>
        <input type="text" name="apellido"><br><br>

        <label for="">RUT:</label><br>
        <input type="text" name="rut"><br><br>

        <label for="">Correo Electronico:</label><br>
        <input type="text" name="correo_electronico"><br><br>

        <input type="submit" value="Calcular" name="submit"><br><br>

        <label for="">Selección de Carreras:</label><br>
        <select name="carreras" id="">
            <option value="ninguno">Ninguno</option>
            <option value="tns_geologia">TNS Geología</option>
            <option value="tns_minas">TNS en Minas</option>
            <option value="tns_metales">TNS en Metales</option>
            <option value="tns_informatica">TNS en Informática</option>
        </select>
    </form>
</body>
</html>
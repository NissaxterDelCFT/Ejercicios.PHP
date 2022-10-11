<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Calcula tu promedio</h1>
    <form action="procesador.php" method="GET">
        <label for="">Nota 1:</label>
        <input type="text" name="nota1">
        <input type="text" name="ponderacion1" placeholder="Ponderación"> <label for="">%</label><br><br>
        
        <label for="">Nota 2:</label>
        <input type="text" name="nota2">
        <input type="text" name="ponderacion2" placeholder="Ponderación"> <label for="">%</label><br><br>

        <input type="submit" value="Calcule" name="submit">
    </form>
</body>
</html>
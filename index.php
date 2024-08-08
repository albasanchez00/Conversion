<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convertir</title>
</head>
<body>
    <h1>Conversión de Distancias</h1>
    <form action="conversion.php" method="post">
        <!--   1. Primero creamos el elemento que queremos convertir   -->
        <p>
            Convertir de:
            <!--  Deben llamarse igual para que seleccione solo una opción  -->
            <label for="pulgadas">Pulgadas</label><input type="radio" name="origen" id="pulgadas" value="Pulgadas">
            <label for="pies">Pies</label><input type="radio" name="origen" id="pies" value="Pies>
            <label for="yardas">Yardas</label><input type="radio" name="origen" id="yardas" value="Yardas">
            <label for="millas">Millas</label><input type="radio" name="origen" id="millas" value="Millas">
        </p>


        <!--   2. Segundo pedimos la distancia que queremos convertir   -->
        <p>
            <label for="cantidad">Indica la cantidad a convertir: </label>
            <input type="number" name="cantidad" id="cantidad">
        </p>


        <!--   3. Tercero creamos el elemento al que queremos convertir   -->
        <p>
            Convertir a:
            <!--  Deben llamarse igual para que seleccione solo una opción  -->
            <label for="centimetros">Centimetros</label><input type="radio" name="destino" id="centimetros" value="Centimetros">
            <label for="metros">Metros</label><input type="radio" name="destino" id="metros" value="Metros">
            <label for="kilometros">Kilometros</label><input type="radio" name="destino" id="kilometros" value="Kilometros">
        </p>


        <!--  4. Creamos el botón de Calcular  -->
        <input type="submit" value="Calcular">
    </form>



</body>
</html>
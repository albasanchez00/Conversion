<?php
/*
* Primero confirmamos si existe valores para realizar la operación
* Si alguno está vacío, no se puede realizar el caluclo, y se envía un mensaje.
*/
if (empty($_POST["origen"])||empty($_POST["destino"])||empty($_POST["cantidad"])){
    echo "No se puede procesar la solicitud de conversión";
}else{
    /*  Se puede realizar el calculo, y para no estar con $_POST[""] lo guardamos en variables.  */
    $origen = $_POST["origen"];
    $destino = $_POST["destino"];
    $cantidad = $_POST["cantidad"];


    /*  Las conversiones se convierten en tipo array asociativo */
    /*  Conversiones:
        - 1 pulgada => 2.54 centimetros
        - 1 pie => 30.48 centimetros
        - 1 yarda => 91.44 centimetros
        - 1 milla => 1069 metros
    */
    $conversiones=array();
    $conversiones["Pulgadas"]=["Centimetros"=>2.54,"Metros"=>0.0254,"Kilometros"=>0.0000254,];
    $conversiones["Pies"]=["Centimetros"=>30.48,"Metros"=>0.3048,"Kilometros"=>0.0003048,];
    $conversiones["Yardas"]=["Centimetros"=>91.44,"Metros"=>0.9144,"Kilometros"=>0.0009144,];
    $conversiones["Millas"]=["Centimetros"=>160900,"Metros"=>1069,"Kilometros"=>1.609,];

    /*   Calcular   */
    //$conversiones[Pulgadas][Metros] => 0.0254;
    $resultado=$conversiones[$origen][$destino]*$cantidad;
    // Ejemplo => 100 millas son 106.9 metros
    echo $cantidad." ".$origen." son ".$resultado." ".$destino;
    echo "<br>";
    echo "<br>";
    var_dump($conversiones);
}

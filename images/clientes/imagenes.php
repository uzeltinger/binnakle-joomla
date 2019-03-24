<?php
 /*
 $directorio = 'E:\xampp70\htdocs\binnakle\web\local\images\clientes';
$ficheros1  = scandir($directorio);
$ficheros2  = scandir($directorio, 1);
 
print_r($ficheros1);
print_r($ficheros2);
*/
$ruta='E:\xampp70\htdocs\binnakle\web\local\images\clientes';
$imagen = [];
$directorio = opendir($ruta); //ruta actual
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
        echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
    }
    else
    {
        echo '
        <div class="col-4 col-sm-3 col-md-2">                                
            <img class="img-fluid" src="images/clientes/'.$archivo.'">
        </div>
        ';
        //echo $archivo . "<br />";
        //$imagen[]=$archivo;
    }
}

//print_r($imagen);

?>
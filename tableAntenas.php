<?php 

//creamos el archivo json_antenas

require "php-json/json-file-decode.class.php";
include("infoAntenas.php");
$handler =fopen ("infoantenas.json","w+");
fwrite($handler, $json_antenas);
fclose($handler);

$read = new json_file_decode();
$json = $read->json("infoantenas.json");

//Acceder a la primera antena

//echo "Nombre antena".$json["antenas"][0]["apellido"];
$antena=($_GET['antena']);


if (empty($antena)) 
	{
    	$antena=0;;
	}
	else{
		
	}
//echo "num"."=".$antena;

?>



<div class="">
			  

			  <h1><?php echo $json["antenas"][$antena]["nombre"]; ?></h1>
			              
			  <table class="table" border="0">			    			    
			      <tr>
			        <td colspan="2">
					<h4><?php echo $json["antenas"][$antena]["descripcion"]; ?></h4>
			        </td>			        
			      </tr>
			      <tr>
			        <td colspan="2" align="center">
			        	<img src="images/<?php echo $json["antenas"][$antena]["imagen"]; ?>">
			        </td>			        
			      </tr>
			      <tr>
			        <td colspan="2" align="center"> <b>Parametros de la antena</b></td>			        
			      </tr>
			      <tr>
			        <td><b>Patrón de radiación<b> </td>
			        <td><?php echo $json["antenas"][$antena]["patron"]; ?></td>			        
			      </tr>	
			      <tr>
			        <td><b>Impedancia </b></td>
			        <td><?php echo $json["antenas"][$antena]["impedancia"]; ?></td>			        
			      </tr>	
			      <tr>
			        <td><b>Ganancia </b></td>
			        <td><?php echo $json["antenas"][$antena]["ganancia"]; ?></td>			        
			      </tr>	
			      <tr>
			        <td><b>Ancho de banda</b> </td>
			        <td><?php echo $json["antenas"][$antena]["ancho"]; ?></td>			        
			      </tr>	
			      <tr>
			        <td><b>Polarización </b></td>
			        <td><?php echo $json["antenas"][$antena]["polarizacion"]; ?></td>			        
			      </tr>				    
			  </table>
			</div>	
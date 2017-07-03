<?php 

//require "php-json/json-file-decode.class.php";

$antenas = array("antenas" => array(
	array(
		"nombre"=>"Monopolo vertical",
		"descripcion"=>"La antena monopolo es aquella que está conformado por un solo brazo rectilíneo que irradia las ondas electromagnéticas en posición vertical sobre la tierra y van conectadas en su base a un generador, que tiene el otro terminal conectado a tierra. Sabemos que los monopolos sobre un plano de tierra constituyen el único tipo de antena utilizada en radiodifusión sonora de AM (540-1650 MHZ) y con frecuencias en sistemas de comunicaciones en las bandas de HF, VHF, y UHF.

		",
		"imagen"=>"monopolov.jpg",
		"patron"=>"Omni-direccional",
		"impedancia"=>"36 ohmios",
		"ganancia"=>"3 dBi hasta 17 dBi.",
		"ancho"=>"Frecuencia de 2.4GHz - 2.5GHz",
		"polarizacion"=>"Linear, Vertical"
		),
	array(
		"nombre"=>"Dipolo",
		"descripcion"=>"Un dipolo es una antena empleada para transmitir o recibir ondas de radiofrecuencia. El dipolo consiste en dos elementos conductores rectilíneos colineales de igual longitud, alimentados en el centro, y de radio mucho menor que el largo.",
		"imagen"=>"dipolo.jpg",
		"patron"=>"NA",
		"impedancia"=>"73 Ohm.",
		"ganancia"=>"Ganancia baja: 2.2 dBi",
		"ancho"=>"Frecuencias arriba de 2MHz",
		"polarizacion"=>"Horizontal "
		),
	array(
		"nombre"=>"Colineal ",
		"descripcion"=>"Una antena colineales, también llamado co-lineal o red de antenas colineal, es un conjunto de antenas dipolo alineados a lo largo de su longitud de modo que formen una línea larga. Cada elemento de las antenas dipolo es 1/2 de longitud de onda larga.",
		"imagen"=>"nombredeantena56",
		"patron"=>"NA",
		"impedancia"=>"50 Ohms",
		"ganancia"=>"8 dBi",
		"ancho"=>"Frecuencia de 360-455 MHz.",
		"polarizacion"=>"Lineal vertical"
		),
	array(
		"nombre"=>"Antena de Ranura",
		"descripcion"=>"Las antenas de ranura cuentan con características de radiación muy similares a las de los dipolos, tales como los patrones de elevación y azimuth, pero su construcción consiste solo de una ranura estrecha en un plano. Las antenas de ranura proveen poca ganancia, y no cuentan con alta direccionabilidad, como evidencían su patrones de radiación y su similaridad al de los dipolos.",
		"imagen"=>"nombredeantena56",
		"patron"=>"NA",
		"impedancia"=>"NA",
		"ganancia"=>"12 – 14 dB",
		"ancho"=>"Frecuencia de 400MHz a 40 GHz",
		"polarizacion"=>"Vertical "
		),
	array(
		"nombre"=>"Antena Microstrip ",
		"descripcion"=>"Las antenas impresas, de tipo parche también denominadas antenas microstrip se diseñan a partir de líneas de transmisión o resonadores sobre substrato dieléctrico. Las dimensiones se eligen de forma que la estructura disipe la potencia en forma de radiación.",
		"imagen"=>"nombredeantena56",
		"patron"=>"NA",
		"impedancia"=>"75 Ohms",
		"ganancia"=>"8 dBi",
		"ancho"=>"Frecuencia de 470 MHz – 746 MHz",
		"polarizacion"=>"NA"
		),
	array(
		"nombre"=>"Yagi",
		"descripcion"=>"Estas se componen de un arreglo de elementos independientes de antena, donde solo uno de ellos transmite las ondas de radio. El número de elementos determina la ganancia y directivitad.
		Una aplicación práctica de este tipo de antenas, es el de las antenas tipo yagi, ampliamente utilizadas, por ejemplo, para la recepción de señales de televisión en la banda de UHF, ya que poseen una gran directividad, tanto mayor cuanto mayor sea el número de elementos pasivos que incorpore y así su ganancia es la adecuada para recibir el nivel de señal suficiente para que pueda ser amplificado sin problemas.
",
		"imagen"=>"nombredeantena56",
		"patron"=>"NA",
		"impedancia"=>"50 a 75 Ohms",
		"ganancia"=>"Ganancia elevada: 8-15 dBi",
		"ancho"=>"Frecuencias de 30Mhz y 3Ghz ",
		"polarizacion"=>"Vertical y horizontal "
		),
	array(
		"nombre"=>"Parabólica",
		"descripcion"=>"Las antenas parabólicas usan características físicas, así como antenas de elementos múltiples para alcanzar muy alta ganancia y direccionalidad. Estas antenas usan un plato reflector con la forma de una parábola para enfocar las ondas de radio recibidas por la antena a un punto focal. La parábola también funciona para capturar la energía radiada por la antena y enfocarla en un haz estrecho al transmitir.",
		"imagen"=>"nombredeantena56",
		"patron"=>"NA",
		"impedancia"=>"50 Ohms",
		"ganancia"=>"Ganancia alta: 12-25 dBi",
		"ancho"=>"700 MHz",
		"polarizacion"=>"Vertical y horizontal "
		),
	array(
		"nombre"=>"Helicoidal ",
		"descripcion"=>"La antena helicoidal más populares es una antena de onda que se propaga en forma de un sacacorchos que produce la radiación a lo largo del eje de la hélice. Estas hélices se conocen como axial modo antenas helicoidales.",
		"imagen"=>"nombredeantena56",
		"patron"=>"NA",
		"impedancia"=>"50 Ohmios",
		"ganancia"=>"Ganancia media-elevada: 6-18 dBi",
		"ancho"=>"5 MHz – 20 MHz",
		"polarizacion"=>"Circular (Horizontal y Vertical"
		),
	array(
		"nombre"=>"Microondas por satélite",
		"descripcion"=>"Los satélites
		•	Reciben una señal terrestre
		•	La señal es amplificada o repetida
		•	Envían la señal a uno o varios receptores terrestres
		Los satélites han de tener órbita geoestacionaria
		•	A una distancia de 35,784 km
		Se producen retardos en las comunicaciones
		Aplicaciones
		•	Televisión, telefonía a larga distancia, redes privadas

		",
		"imagen"=>"nombredeantena56",
		"patron"=>"NA",
		"impedancia"=>"NA",
		"ganancia"=>"NA",
		"ancho"=>"Frecuencias entre 1GHz a 50 Ghz ",
		"polarizacion"=>"NA"
		),
	array(
		"nombre"=>"Panel o 'Patch Antenna'",
		"descripcion"=>"Las antenas de panel plano como su nombre lo dicen son un panel con forma cuadrada o rectangular. y están configuradas en un formato tipo patch. Las antenas tipo Flat Panel son muy direccionales ya que la mayoría de su potencia radiada es una sola dirección ya sea en el plano horizontal o vertical.",
		"imagen"=>"nombredeantena56",
		"patron"=>"NA",
		"impedancia"=>"50 Ohms",
		"ganancia"=>"Ganancia media-elevada: 5-20 dBi",
		"ancho"=>"Frecuencia de 2.3 - 2.7 GHz",
		"polarizacion"=>"Vertical y horizontal "
		),
	));

$json_antenas= json_encode($antenas);
//echo ($json_antenas);




?>


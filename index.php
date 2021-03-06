<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Antena</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<!--navbar-->
	<?php 
	include("navbar.php");
	?>
	<!--FIN navbar-->
		
	<!--menu-->
	<?php 

	$menu='portada';
	include("menu.php");
	
	?>
	<!--FIN menu-->
	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<img src="images/portada.png" style="width: 100%">
		<div style="text-align: center;"><br>
			<h3> ING. TECNOLOGÍAS DE LA INFORMACIÓN Y COMUNICACIÓN</h3><br>
			<h4>APLICACION DE LAS TELECOMUNICACIONES</h4><br>
			<h4>GONZALEZ GARCIA LUIS FRANCISCO</h4><br>
			<h4>TORRES MAZARIEGOS ELIEZER </h4><br>
			<h4>ITIC91</h4><br>
			<h4>CATALAGO DE ANTENAS </h4>
		</div>
		

	</div>
	


	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>

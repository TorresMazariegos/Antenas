<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		
		<ul class="nav menu">

			

			<li class="<?php if($menu=='portada'){ echo 'active';} else{ echo 'n'; } ?>"><a href="index.php"><svg class="glyph stroked dashboard-dial"></use></svg> Portada</a></li>

			<li id=""><a href="#"><span class=""><b>Antenas omnidireccionales</b></a></li>

			<li class="<?php if($menu=='monopolo'){ echo 'active';} else{ echo 'n'; } ?>"><a href="antenas.php?antena=<?php echo $antena=0 ?>&menu=<?php echo $menu='monopolo' ?>"><svg class="glyph stroked calendar"></svg> Monopolo vertical</a></li>

			<li class="<?php if($menu=='dipolo'){ echo 'active';} else{ echo 'n'; } ?>"><a href="antenas.php?antena=<?php echo $antena=1 ?>&menu=<?php echo $menu='dipolo' ?>"><svg class="glyph stroked line-graph"></svg> Dipolo </a></li>

			<li class="<?php if($menu=='Colineal'){ echo 'active';} else{ echo 'n'; } ?>"><a href="antenas.php?antena=<?php echo $antena=2 ?>&menu=<?php echo $menu='Colineal' ?>"><svg class="glyph stroked line-graph"></svg> Colineal </a></li>

			<li class="<?php if($menu=='Ranura'){ echo 'active';} else{ echo 'n'; } ?>"><a href="antenas.php?antena=<?php echo $antena=3 ?>&menu=<?php echo $menu='Ranura' ?>"><svg class="glyph stroked line-graph"></svg> Antena de Ranura</a></li>

			<li class="<?php if($menu=='Microstrip'){ echo 'active';} else{ echo 'n'; } ?>"><a href="antenas.php?antena=<?php echo $antena=4 ?>&menu=<?php echo $menu='Microstrip' ?>"><svg class="glyph stroked line-graph"></svg> Antena Microstrip </a></li>
			<!--Direccionales-->
			<li id=""><a href="#"><span class=""><b>Antenas direccionales</b> </a></li>

			<li class="<?php if($menu=='Yagi'){ echo 'active';} else{ echo 'n'; } ?>"><a href="antenas.php?antena=<?php echo $antena=5 ?>&menu=<?php echo $menu='Yagi' ?>"><svg class="glyph stroked line-graph"></svg> Yagi </a></li>

			<li class="<?php if($menu=='Parabólica'){ echo 'active';} else{ echo 'n'; } ?>"><a href="antenas.php?antena=<?php echo $antena=6 ?>&menu=<?php echo $menu='Parabólica' ?>"><svg class="glyph stroked line-graph"></svg> Parabólica</a></li>

			<li class="<?php if($menu=='Helicoidal'){ echo 'active';} else{ echo 'n'; } ?>"><a href="antenas.php?antena=<?php echo $antena=7 ?>&menu=<?php echo $menu='Helicoidal' ?>"><svg class="glyph stroked line-graph"></svg> Helicoidal</a></li>

			<li class="<?php if($menu=='Microondas'){ echo 'active';} else{ echo 'n'; } ?>"><a href="antenas.php?antena=<?php echo $antena=8 ?>&menu=<?php echo $menu='Microondas' ?>"><svg class="glyph stroked line-graph"></svg> Microondas por satélite</a></li>

			<li class="<?php if($menu=='Panel'){ echo 'active';} else{ echo 'n'; } ?>"><a href="antenas.php?antena=<?php echo $antena=9 ?>&menu=<?php echo $menu='Panel' ?>"><svg class="glyph stroked line-graph"></svg> Panel</a></li>			


	</div><!--/.sidebar-->

	<!--<a href="pagina2.php?variable1=<?php echo $variable1 ?>&variable2=<?php echo $variable2 ?>Ver la otra Pagina</a>-->
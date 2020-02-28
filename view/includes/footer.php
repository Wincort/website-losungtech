<footer class="container-fluid">
	<div class="Contenido-Footer">
		<div class="row">
			<div class="col-sm-12 center">
			    <img class="Logo-Footer" src="images/LOGO.png" class="img-responsive"  alt="Logo">	
			</div>
			<div class="col-sm-12 center">
				<ul id="menu-footer">
					<li ><a href="./#Inicio">INICIO</a></li>
					<li ><a href="./#nosotros">NOSOTROS</a></li>
					<li ><a href="./#servicios">SERVICIOS</a></li>
					<li ><a class="external" href="<?php echo $helper->url("Inicio","Contacto"); ?>">CONTACTO</a></li>
				</ul>
			</div>
			<div class="col-sm-2"></div>
			<div class="contacto col-sm-8 jusftify">
                <br>
					<?php if($direccion->publicar){echo $direccion->contenido ;}?>
                <br>			
			</div>
			<div class="col-sm-12 center">
				<ul id="redes-sociales">
					<li ><a href="#!"><img class="rs-icono" src="images/ICONO 03.png"></a></li>
					<li ><a href="#!"><img class="rs-icono" src="images/ICONO 04.png"></a></li>
					<li ><a href="#!"><img class="rs-icono" src="images/ICONO 05.png"></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

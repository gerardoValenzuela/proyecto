<!DOCTYPE html>

	<?php
session_start();
if (@!$_SESSION['user']) {
    header("Location:index.php");
} elseif ($_SESSION['rol'] == 1) {
    header("Location:inicioAdmin.php");
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">


    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/ne.jpg" style="background-attachment: fixed" ng-app="myApp" ng-controller="myCtrl">
	<div class="container">
		<header class="header">
			<div class="row">
				<?php
					include "include/cabecera.php";
				?>
			</div>
		</header>
		<?php
			include "include/menu.php";

		?>
		<div id="myCarousel" class="carousel slide homCar">
			<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  		<div class="item" ng-repeat="curso in cursos" ng-click = "seleccionarCurso()" idCurso = "{{curso.id}}">
					<img src="images/compu.png" alt="#" style="min-height:250px; min-width:100%" idCurso = "{{curso.id}}"/>
					<div class="carousel-caption" idCurso = "{{curso.id}}">
						<h4 idCurso = "{{curso.id}}">{{curso.nombre}}&nbsp;</h4>
						<p>
							{{curso.descripcion}}&nbsp;
						</p>
					</div>
		  		</div>
		  		<div class="item active">
					<img src="images/pv.jpg" alt="#" style="min-height:250px; min-width:100%"/>
					<div class="carousel-caption">
				  		<h4>Inicio</h4>
				  		<p>
				  			Pulsa sobre los botones de avance del carrusel para descubrir los diferentes cursos que tienes a tu disposicion.
				  		</p>
					</div>
		  		</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
		</div>
		<h3>MODULOS DEL CURSO {{cursoSeleccionado.nombre}}</h3>
		<div class="row" style="text-align:center">
			<div class="span2">
				<div class="well well-small" ng-repeat="m in modulos">
					<h4>{{m.consecutivo}}.-{{m.nombre}}</h4>
					<h5>{{m.descripcion}}</h5>
					<form method= "post" action="http://localhost/proyecto/pdfs/">
						<button type = "button" class="btn btn-outline-success" ng-click = "seleccionarModulo()" idModulo = "{{m.id}}">Pdf</button>
					</form>
				</div>
			</div>
		</div>
		<div id="portapdf" class = "pdfs" style = "height:400px;"> 
		    <object data="{{documentoSeleccionado}}" type="application/pdf" width="100%" height="100%"></object> 
		</div>
		<div class="row" style="text-align:center">
			<div class="span12">
				<div class="well well-small">
					<h4>LO QUE REALMENTE NECESITAS APRENDER</h4><br>
					<h4></h4>
				</div>
			</div>
		</div>
		<h3>Proximos cursos</h3>
		<div class="row">
			<div class="span4">
				<div class="thumbnail">
					<h3 style="text-align:center"> Word 2016 intermedio</h3>
					<img src="images/w.jpg" alt="#"/>
					<div class="caption">
						<h5>Descripción del Curso</h5>
						<p>
							Microsoft Word es una aplicación informática orientada al procesamiento de textos. Fue creado por la empresa Microsoft, y viene integrado en el paquete ofimático denominado Microsoft Office.
							Originalmente fue desarrollado por Richard Brodie para el computador de IBM bajo sistema operativo DOS en 1983. Versiones subsecuentes fueron programadas para muchas otras plataformas, incluyendo, las computadoras IBM que corrían en sistema MS-DOS (1983). Es un componente de la suite ofimática Microsoft Office; también es vendido de forma independiente e incluido en la Suite de Microsoft Works. Las versiones actuales son Microsoft Office Word 2016 para Windows y Microsoft Office Word 2016 para Mac. Actualmente es el procesador de texto más popular del mundo.
						</p>
						<br/>
					</div>
				</div>
			</div>

			<div class="span4">
				<div class="thumbnail">
					<h3 style="text-align:center">PowerPoint Intermedio</h3>
					<img src="images/power.png" />
					<div class="caption">
						<h5> Descrioción del Curso</h5>
						<p>
							Powerpoint es una herramienta de Microsoft Office que te ayudará a crear presetaciones dinámicas a nivel personal y profesional. Al término de este curso de PowerPoint 2013 nivel intermedio serás capaz de diseñar tablas, gráficos y organigramas de aspecto profesional. Además aprenderás a generar animaciones avanzadas sobre los objetos de las diapositivas. Por último, utilizando las herramientas que nos ofrece PowerPoint serás capaz de simular una serie de efectos propios del Diseño Web tales como las ventanas emergentes y las imágenes de sustitución.
						</p>
						<br/>
					</div>
				</div>
			</div>

			<div class="span4">
				<div class="thumbnail">
					<h3 style="text-align:center">Excel intermedio</h3>
					<img src="images/Excel.png"/>
					<div class="caption">
						<h5>Descripción del Curso</h5>
						<p>
							Excel es un programa que trabaja con hojas de cálculo integrado en el entorno Windows y desarrollado por Microsoft, que nos facilita el manejo de números y fórmulas matemáticas. Hoy en día, Microsoft Excel es la hoja de cálculo más usada en el mercado debido a la gran variedad de funcionalidades. Por esta razón, es de gran importancia contar con recurso humano capacitado, que conozca las nuevas formas de cómo debe trabajar en el mercado. Motivo por el cual, el alumno que lleve este curso aprenderá los conceptos y fundamentos de Excel, Creación de bases de datos Excel, reglas para realizar algunos tipos de gráficos, en reconocer las referencias, en formulas básicas así como en algunas opciones de ordenamiento y filtrado de datos, funciones de Base de Datos, algunas funciones de Estadística, funciones de Texto y trabajo con Macros automáticas, creando y ejecutando macros que coadyuven al manejo de la información.
						</p>
						<br/>
					</div>
				</div>
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="span6">
				<div class="well well-small">
					<h3>Importante</h3>
					<p>
						Lo mejor para nosotros es proporcionar un acceso libre, sencillo y coherente a los materiales de los cursos que se ofrecen en sus modalidades de estudio presencial y a distancia para estudiantes.<br><br></b></b>
					</p>
				</div>
			</div>
			<div class="span6">
				<div class="well well-small">
					<h3> Lo que vendrá</h3>
					<h5>Nuevos cursos</h5>
					<p>
						Tendremos una página actualizada y nuestros miembros podrán contar con todos nuestros cursos disponibles, asi como la visualización de nuevos cursos que se añadan a la página.
					</p>
				</div>
			</div>
		</div>

		<hr class="soften"/>
		<footer class="footer">
			<hr class="soften"/>
			<p>&copy; Sele <br/><br/></p>
 		</footer>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<script src="js/appAlumno.js"></script>
	<script language = "javascript">
    </script>
 </body>
</html>
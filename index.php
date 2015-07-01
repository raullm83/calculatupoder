<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Calcula Tu Poder</title>
		<link rel="stylesheet" href="css/foundation.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
		<link rel="stylesheet" href="css/style.css" />
		<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<script src="js/vendor/modernizr.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="large-12 columns">
				<h1>Calcula Tu Poder</h1>
			</div>
		</div>

		<div class="row">
			<div class="large-12 columns">
				<div class="panel">
					PUBLICIDAD
				</div>
			</div>
		</div>

		<div class="row">
			<div class="large-8 medium-8 columns">
				<form>
					<div class="row">
						<div data-role="main" class="ui-content large-12 columns padding-none">
							<div data-role="collapsible">
								<?php include("pages/tropas/tropa1.php"); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div data-role="main" class="ui-content large-12 columns padding-none">
							<div data-role="collapsible">
								<?php include("pages/tropas/tropa2.php"); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div data-role="main" class="ui-content large-12 columns padding-none">
							<div data-role="collapsible">
								<?php include("pages/tropas/tropa3.php"); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div data-role="main" class="ui-content large-12 columns padding-none">
							<div data-role="collapsible">
								<?php include("pages/tropas/tropa4.php"); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div data-role="main" class="ui-content large-12 columns padding-none">
							<div data-role="collapsible">
								<?php include("pages/tropas/tropa5.php"); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div data-role="main" class="ui-content large-12 columns padding-none">
							<div data-role="collapsible">
								<?php include("pages/tropas/tropaTactica.php"); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div data-role="main" class="ui-content large-12 columns padding-none">
							<div data-role="collapsible">
								<?php include("pages/tropas/muro.php"); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-6 columns">
							<a href="#" class="medium success button">Calcular</a>
							<br/>
						</div>
						<div class="large-6 columns">
							<a href="#" class="medium secondary button right">Limpiar</a>
						</div>
					</div>
				</form>
			</div>

			<div class="large-4 medium-4 columns">
				<div class="panel">
					PUBLICIDAD
				</div>
				<div class="panel">
					PUBLICIDAD
				</div>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns footer">
        Copyright ©
        <?php echo date("Y"); ?>
        calculatupoder.easy.es
    </div>
		</div>

		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
			$(document).foundation();
			
			function calcularPoderT11() {
				var totalt11 = 0;
				$.each($("input[subtipo='1']"), function(key, value){
					totalt11 = totalt11 + (value.attributes[0].value.replace(".", "") * value.attributes[1].value * value.value);
				});
				
				$("#totalT11").text("Total: " + totalt11.toFixed(3));
			}
		</script>
	</body>
</html>

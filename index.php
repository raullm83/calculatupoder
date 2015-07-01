<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Calcula Tu Poder</title>
		<link rel="icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="css/foundation.min.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
		<link rel="stylesheet" href="css/style.css" />
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
		<script src="js/vendor/modernizr.js"></script>
		<script src="js/calculatupoder.min-1.0.js"></script>
		<script src="js/vendor/jquery.js"></script>
		<script src="js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
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
					ESPACIO RESERVADO
				</div>
			</div>
		</div>

		<div class="row">
			<div class="large-8 medium-8 columns">
				<form>
					<div class="row">
						<div data-role="main" class="ui-content large-12 columns padding-none">
							<div data-role="collapsible">
								<?php
								include ("pages/tropas/tropa1.php");
 ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div data-role="main" class="ui-content large-12 columns padding-none">
							<div data-role="collapsible">
								<?php
								include ("pages/tropas/tropa2.php");
 ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div data-role="main" class="ui-content large-12 columns padding-none">
							<div data-role="collapsible">
								<?php
								include ("pages/tropas/tropa3.php");
 ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div data-role="main" class="ui-content large-12 columns padding-none">
							<div data-role="collapsible">
								<?php
								include ("pages/tropas/tropa4.php");
 ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div data-role="main" class="ui-content large-12 columns padding-none">
							<div data-role="collapsible">
								<?php
								include ("pages/tropas/tropa5.php");
 ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div data-role="main" class="ui-content large-12 columns padding-none">
							<div data-role="collapsible">
								<?php
								include ("pages/tropas/tropaTactica.php");
 ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div data-role="main" class="ui-content large-12 columns padding-none">
							<div data-role="collapsible">
								<?php
								include ("pages/tropas/muro.php");
 ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="large-12 columns">
							<label id="total" class="button success">Total: <span id="valorTotal">0</span></label>
							<br/>
						</div>
					</div>
					<div class="row">
						<div class="large-12 columns">
							<a href="#" class="medium secondary button" style="width: 100%;" onclick="limpiarFormulario()">Limpiar</a>
						</div>
					</div>
				</form>
			</div>

			<div class="large-4 medium-4 columns">
				<div class="panel">
					ESPACIO RESERVADO
				</div>
				<div class="panel">
					ESPACIO RESERVADO
				</div>
			</div>
		</div>
		<div class="row">
			<div class="large-12 columns footer">
				Copyright © <?php echo date("Y"); ?> calculatupoder.esy.es
			</div>
		</div>
	</body>
</html>

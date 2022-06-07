<!doctype html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
		<link rel="icon" href="<?= get_logo(); ?>">
		<link rel="apple-touch-icon" href="<?= get_logo(); ?>">
		<meta name="theme-color" content="#ec5598">
		<title><?= wp_get_document_title() ?></title>
		<script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, 'js');</script>
		<?php 
		wp_head();
		if(is_admin_bar_showing()):
			?>
			<style>
				header{
					top:46px !important;
				}
				@media (min-width:783px){
					header{
						top:32px !important;
					}
				}
			</style>
			<?php
		endif;
		?>
	</head>
	<body <?php body_class() ?>>
	
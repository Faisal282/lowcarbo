<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>Material Design Lite</title>

	<!-- Add to homescreen for Chrome on Android -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="images/android-desktop.png">

	<!-- Add to homescreen for Safari on iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-title" content="Material Design Lite">
	<link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
	<meta name="msapplication-TileColor" content="#3372DF">

	<link rel="shortcut icon" href="images/favicon.png">

	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="<?= base_url('assets/styles.css') ?>">
	<script>
		if(window.sessionStorage.length == 0 || window.sessionStorage.getItem("status") != 'logged_in') {
			window.location.href = '<?= base_url('auth') ?>';
		}

	</script>
</head>

<body>
	<div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
		<header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title"><?= $judul ?></span>
				<div class="mdl-layout-spacer"></div>
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
					<label class="mdl-button mdl-js-button mdl-button--icon" for="search">
						<i class="material-icons">search</i>
					</label>
					<div class="mdl-textfield__expandable-holder">
						<input class="mdl-textfield__input" type="text" id="search">
						<label class="mdl-textfield__label" for="search">Enter your query...</label>
					</div>
				</div>
				<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
					<i class="material-icons">more_vert</i>
				</button>
				<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
					<li class="mdl-menu__item">About</li>
					<li class="mdl-menu__item">Contact</li>
					<li class="mdl-menu__item">Legal information</li>
					<li class="mdl-menu__item" onclick="return logout();">Logout</li>
				</ul>
			</div>
		</header>
		<div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
			<header class="demo-drawer-header">
				<img src="<?= base_url('assets/tpa/08062019104742.jpg') ?>" class="demo-avatar">
				<div class="demo-avatar-dropdown">
					<span id="nama_admin">ADMIN</span>
					<div class="mdl-layout-spacer"></div>
					<button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
						<i class="material-icons" role="presentation">arrow_drop_down</i>
						<span class="visuallyhidden">Accounts</span>
					</button>
					<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
						<li class="mdl-menu__item">hello@example.com</li>
						<li class="mdl-menu__item">info@example.com</li>
						<li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
					</ul>
				</div>
			</header>
			<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
				<a class="mdl-navigation__link" href="<?= base_url('admin') ?>"><i class="mdl-color-text--blue-grey-400 material-icons"
						role="presentation">home</i>Home</a>
				<a class="mdl-navigation__link" href="<?= base_url('sampah') ?>"><i class="mdl-color-text--blue-grey-400 material-icons"
						role="presentation">delete</i>Sampah</a>
				<a class="mdl-navigation__link" href="<?= base_url('tpa') ?>"><i class="mdl-color-text--blue-grey-400 material-icons"
						role="presentation">delete</i>TPA</a>
				<a class="mdl-navigation__link" href="<?= base_url('tps') ?>"><i class="mdl-color-text--blue-grey-400 material-icons"
						role="presentation">delete</i>TPS</a>
				<a class="mdl-navigation__link" href="<?= base_url('user') ?>"><i class="mdl-color-text--blue-grey-400 material-icons"
						role="presentation">people</i>PENGGUNA</a>
				<div class="mdl-layout-spacer"></div>
				<a class="mdl-navigation__link" href="<?= base_url('help') ?>"><i class="mdl-color-text--blue-grey-400 material-icons"
						role="presentation">help_outline</i><span class="visuallyhidden">Help</span>Help</a>
			</nav>
		</div>
		<main class="mdl-layout__content mdl-color--grey-100">
			<script>
				function navigasi(nav) {
					window.location.href = nav;
				}
				function logout() {
					window.sessionStorage.clear();
					location.reload();
				}
				document.getElementById("nama_admin").innerHTML = window.sessionStorage.getItem("nama_admin");
			</script>

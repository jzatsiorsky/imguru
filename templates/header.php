<!DOCTYPE html>

<html>
    <head>
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        
	<!-- Includes for creative links - tympanus.net-->
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>

	<!-- General style sheet -->
	<link href="/css/styles-default.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>IMguru: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>IMguru</title>
        <?php endif ?>

        <script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>

	
    </head>

    <body>
        <div class="container">

            <div id="top">	
			<?php if (isset($_SESSION["house"]))
				{
					if ($_SESSION["house"] == "Adams")
						$link = "http://adamshouse.harvard.edu";
					else if ($_SESSION["house"] == "Winthrop")
						$link = "http://winthrophouse.net";
					else
						$link = "http://" . $_SESSION["house"] . ".harvard.edu";
				}
			?>
			
			<!-- If logged in -->
			<?php if (isset($_SESSION["house"])): ?>
			<div>
			<a href="/"><img alt="Guru" src="/img/logo_text.gif" class="logo"/></a>
			<a href = <?= $link ?> >
				<img alt="Shield" id="shield2" src="/img/<?= htmlspecialchars(strtolower($_SESSION["house"])) ?>_shield.jpg"/>
			</a>
			<h1 class="title"><?= htmlspecialchars($_SESSION["house"]) ?> House Intramurals</h1>
			</div>

			
			<?php else: ?>
			<a href="/"><img alt="Guru" src="/img/logo_text.gif" style="margin: 0;" class="logo-login"/></a>
			
			<?php endif ?>

            </div>

            <div id="middle">


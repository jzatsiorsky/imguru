<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        
		<!-- Includes for creative links -->
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
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
	<br>
	
        <div class="container">

            <div id="top">	
			<?php if (isset($_SESSION["house"]))
				{
					if ($_SESSION["house"] == "Adams")
						$link = "http://www.adamshouse.harvard.edu";
					else if ($_SESSION["house"] == "Winthrop")
						$link = "http://winthrophouse.net";
					else
						$link = "http://www." . $_SESSION["house"] . ".harvard.edu";
				}
			?>
			
			<!-- If logged in -->
			<?php if (isset($_SESSION["house"])): ?>
			<a href = <?= $link ?> >
				<img alt="Shield" id="shield1" src="/img/<?= htmlspecialchars(strtolower($_SESSION["house"])) ?>_shield.jpg" />
			</a>
			<a href="/"><img alt="Guru" src="/img/logo_text.gif" style="margin: 0;" width="50%" height="50%"/></a>
			<a href = <?= $link ?> >
				<img alt="Shield" id="shield2" src="/img/<?= htmlspecialchars(strtolower($_SESSION["house"])) ?>_shield.jpg"/>
			</a>
			<?php else: ?>
			<a href="/"><img alt="Guru" src="/img/logo_text.gif" style="margin: 0;" width="50%" height="50%"/></a>
			<?php endif ?>

            </div>

            <div id="middle">


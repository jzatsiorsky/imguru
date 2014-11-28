<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
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
		<?php if (isset($_SESSION["house"])): ?>
		<img alt="Shield" id="shield1" src="/img/<?= htmlspecialchars(strtolower($_SESSION["house"])) ?>_shield.jpg" />
		<?php endif ?>
                <a href="/"><img alt="Guru" src="/img/logo_text.gif" style="margin: 0;" width="50%" height="50%"/></a>
		<?php if (isset($_SESSION["house"])): ?>
		<img alt="Shield" id="shield2" src="/img/<?= htmlspecialchars(strtolower($_SESSION["house"])) ?>_shield.jpg"/>
		<?php endif ?>
            </div>

            <div id="middle">


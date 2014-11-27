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
                <a href="/"><img alt="Guru" src="/img/logo_text.gif" style="margin: 0 0 20px 0;" width="35%" height="35%"/></a>
            </div>

            <div id="middle">


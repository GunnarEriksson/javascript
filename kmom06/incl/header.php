<!doctype html>
<html lang='sv' class='no-js'>
<head>
<meta charset='utf-8' />
<title><?=isset($title) ? $title : 'Template for testprograms in JavaScript'?></title>
<link rel="stylesheet/less" type="text/css" href="../css/style.less">
<link rel="shortcut icon" href="../img/favicon.ico" media="screen">
<script src="../js/less.min.js"></script>
<script src="../../lib/modernizr.js"></script>
</head>
<body>
    <header id="header">
        <img src="../img/logo/logo.png" alt="The HTML, CSS and JS logo" />
        <span id="header-title">JavaScript</span>
        <span id="header-slogan"><q>Databaser, HTML, CSS, JavaScript och PHP</q></span>
    </header>

    <nav id="navbar">
        <a class="<?= selectedPage("me/index.php") ?>" href="../me/index.php">Hem</a>
        <a class="<?= selectedPage("me/playground.php") ?>" href="../me/playground.php">Lekplats</a>
        <a class="<?= selectedPage("nine-jquery-gifts/index.php") ?>" href="../nine-jquery-gifts/index.php">jQuery</a>
        <a class="<?= selectedPage("plugin/index.php") ?>" href="../plugin/index.php">Plugin</a>
        <a class="<?= selectedPage("shop/index.php") ?>" href="../shop/index.php">Affär</a>
        <a class="<?= selectedPage("game/index.php") ?>" href="../game/index.php">Spel</a>
        <a class="<?= selectedPage("me/websocket.php") ?>" href="../me/websocket.php">Webbsocket</a>
        <a class="<?= selectedPage("me/report.php") ?>" href="../me/report.php">Redovisning</a>
    </nav>

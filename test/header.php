<?php
if (isset($_SESSION['active_nav'])) {
    $active_nav = $_SESSION['active_nav'];
}
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8"> 
    <title>Exoweb.pl - projektowanie stron www</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/forms.css">
</head>
<body>

    <div id="navbar">
        <div class="container">
            <div id="logo">
                <a href="index.php" class="logo-a">
                    EXOWEB
                </a>
            </div>
            <div id="menu">
                <a href="index.php" class="menu-link 
                    <?php if ($active_nav == 'main') {echo 'menu-link-active';} ?>" 
                   >HOME</a>
                <a href="offer.php" class="menu-link 
                    <?php if ($active_nav == 'offer') {echo 'menu-link-active';} ?>" 
                   >OFERTA</a>
                <a href="contact.php" class="menu-link 
                    <?php if ($active_nav == 'contact') {echo 'menu-link-active';} ?>" 
                   >KONTAKT</a>
            </div>
        </div>
    </div>


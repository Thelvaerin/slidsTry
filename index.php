<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?><!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Slid`s web</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
<?php
    include ('parts/HF/header.php');
?>
<section id="showcase">


</section>
<section id="main">
<?php

?>
</section>
<section>
    <?php
    if (isset($_GET['page']))
        $page = $_GET['page'];
    else
        /**
         * @todo pokud stránka není nalezena, tak berem první prvek z pole $_menu a jako hodnotu nastavíme klíč 'id'
         */
        $page = 'home';
    if (preg_match('/^[a-z0-9]+$/', $page))
    {
        /**
         * @todo kontrolovat existenci souboru, v případě že neexistuje, tak zobrazit chybu 404
         */

        $inserted = include('parts/' . $page . '.php');
        if (!$inserted)
            echo('Podstránka nenalezena');
    }
    else
        echo('Neplatný parametr.');
    ?>
</section>

<footer id="main-footer">
    <?php
include 'parts/HF/footer.php';
    ?>
</footer>

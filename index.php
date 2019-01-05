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
<div>
<nav id="navbar">
    <?php
    include ('parts/HF/arrays.php');
    foreach ($_menu as $menu){

        echo "<li><a href='?menu=".$menu['id']."'/>" . $menu['title'] . "</a></li>";

    };
    ?>
</nav>
</div>
<div id="showcase">
    <script>function nextSlide() {
            var q = function(sel) { return document.querySelector(sel); }
            q(".showcase").appendChild(q(".showcase p:first-child"));
        };
        setInterval(nextSlide, 3000);
    </script>
    <p class="showcase-element">
        Smoking a hookah is nothing like smoking a cigarette...<br>
        cigarettes are for nervous people, competitive people, people on the run...

    </p>
    <p class="showcase-element">
        when you smoke a hookah, you have time to think. <br>
        It teaches you patience and tolerance, and gives you an appreciation of good company.
    </p>

</div>
    <?php
    if (isset($_GET['menu']))
        $page = $_GET['menu'];
    else
        $page = 'home';
        if (preg_match('/^[a-z0-9]+$/', $page))
    {
        $included = include('parts/' . $page . '.php');
             if (!$included)
                echo('error 404');
    }
        else
            echo('Neplatný parametr.');

    /*
         * @todo pokud stránka není nalezena, tak berem první prvek z pole $_menu a jako hodnotu nastavíme klíč 'id'
         */

        /*
         * @todo kontrolovat existenci souboru, v případě že neexistuje, tak zobrazit chybu 404
         */
?>

<footer id="main-footer">
    <?php
include 'parts/HF/footer.php';
    ?>
</footer>

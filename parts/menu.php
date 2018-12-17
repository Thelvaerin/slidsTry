<?php
    include('parts/arrays.php');
?>
<ul>


    <?php
    foreach ($_menu as $menu) {
        echo "<li><a href=\"$menu[id]\">$menu[title]</a></li>";
    }
    ?>

</ul>
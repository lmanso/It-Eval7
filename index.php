<?php
    require_once ("./controllers/Onepage.php");
    $display = new Onepage($_SERVER['REQUEST_URI']);
    $display->getOnepage();
?>
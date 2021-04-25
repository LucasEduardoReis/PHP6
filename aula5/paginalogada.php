<?php
    session_start();
    if(!isset($_SESSION['id_user']))
    {
    header("location: index.php");
    exit();
    }

    include("head.php");
    include("menu.php");
    include("footer.php");

?>





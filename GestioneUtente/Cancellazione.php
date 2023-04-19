<?php
session_start();
$_SESSION["eliminazione"] = "no";
function disconnetti() {
    
    ?>

    <h1>CANCELLAZIONE IN CORSO....</h1>
    <?php
    $_SESSION["eliminazione"] = "yes";
    header("refresh:3; ../PagineAccessoRegistrazione/Accesso.php");
}

disconnetti();


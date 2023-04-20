<?php
session_start();
function disconnetti() {
    
    ?>

    <h1>CANCELLAZIONE IN CORSO....</h1>
    <?php
    $_SESSION["eliminazione"] = "yes";
    header("refresh:3; ../PagineAccessoRegistrazione/Accesso.php");
}

disconnetti();
?>
    <style>
        body{
            background-color: grey;
        }
    </style>
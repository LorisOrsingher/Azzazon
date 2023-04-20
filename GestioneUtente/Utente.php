<?php
session_start();
?>
<html>
    <head>
        <meta charset="windows-1252">
        <title></title>
    </head>
    <body>
        <div class="divSuperiore">
            <a href="../index.php" class="bottone">
                <a b class="scrittaGrande"> I MIEI ORDINI</a>
                <p>visualizza la cronologia degli ordini</p>
            </a>
        </div>
        <div class="divInferiori">
            <a href="CambioPassword.php" class="bottone"></a>
            <a b class="scrittaGrande"> CAMBIO PASSWORD</a>
            <p>cambia la password colleggata all'account</p>
        </div>
        <div class="divInferiori">
            <a href="../PagineAccessoRegistrazione/Accesso.php" class="bottone"></a>
            <a b class="scrittaGrande"> DISCONNETTI</a>
            <p>disconnettiti dal tuo profilo </p>
        </div>
        <div class="divInferiori">
            <a href="Cancellazione.php" class="bottone"></a>
            <a b class="scrittaGrande">ELIMINA ACCOUNT</a>
            <p>elimina il tuo account dal database</p>
        </div>

    </body>
</html>




<style>
    .divSuperiore{
        margin-left: 25%;
        margin-top: 200px;
        height: 150px;
        width: 50%;
        border: 1px solid black;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
    }

    .divInferiori{
        margin-left: 25%;
        margin-top: 50px;
        height: 150px;
        width: 50%;
        border: 1px solid black;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
    }

    .scrittaGrande{
        margin-left: 300px;
        width: 500px;
        font-size: 40px;
        padding-right: 30%;
        display: inline-block;
        margin-top: 20px;
        position: absolute;
    }
    p{
        font-size: 22px;
        margin-left: 300px;
        margin-top: 75px;
        width: 500px;
        display: inline-block;
        position: absolute;
    }

    .bottone{
        position: absolute;
        display: inline-block;
        text-align: center;
        line-height: 70px;
        text-decoration: none;

        background-color: lightgray;
        width: 50%;
        height: 150px;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;

        border: 1px solid black;
    }

    .bottone:hover{
        background-color: lightcyan;
    }
</style>
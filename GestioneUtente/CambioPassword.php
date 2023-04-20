
<?php
include '../connesone.php';
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1252">
        <title></title>
    </head>
    <?php
    if (!isset($error_message)) {
        if (isset($_POST['btnInserisci'])) {
            $password1 = strtolower(trim(($_POST['password1'])));
            $password2 = strtolower(trim(($_POST['password2'])));

            if ($password1 == $password2) {
                $_SESSION["connesso"] = "no";
                $email = $_SESSION["emailCorrente"];
                $query = "UPDATE utente"
                        . " SET password='$password1'"
                        . " WHERE mail='$email'";

                $insert = mysqli_query($db_conn, $query);
                ?>
                <h3> CAMBIO PASSWORD IN CORSO...</h3>

                <?php
                header("refresh:3; ../index.php");
            } else {
                ?>
                <h3> LE PASSWORD NON CORRISPONDONO</h3>

                <?php
                header("refresh:3;");
            }
        } else {
            ?>
            <body>
                <div class="cDiv">
                    <form class="cForm" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="divInterno">
                            <h1>Nuova password</h1>
                            <input type="password" name="password1" required="">
                        </div>
                        <div class="divInterno">
                            <h1>Ripeti la password</h1>
                            <input type="password" name="password2" required="">
                        </div>
                        <br>
                        <button type="submit" name="btnInserisci"> invia</button>
                    </form>
                </div>
                <?php
            }
        } else {
            echo $error_message;

            header("refresh:3; ../index.php");
        }
        ?>
    </body>
</html>

<style>
    body{
        background-repeat: no-repeat;
        background-image: url("../ImmaginiSfondi/sfondo1.jpg.crdownload");
        background-size:cover;
    }
    .cDiv{
        width: 600px;
        height: 600px;
        border: 1px solid black;
        margin-left: 35%;
        margin-top: 12%;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
    }

    .cForm{
        padding: 40px;
        text-align: center;
    }

    .divInterno{
        padding: 3px;

    }

    h1{
        font-size: 50px;
    }

    input{
        width: 500px;
        height: 50px;
        font-size: 50px;
    }

    button{
        margin-top: 50px;
        height: 50px;
        width: 200px;
        font-size: 30px;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
    }
</style>
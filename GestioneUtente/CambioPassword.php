
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
            $password1 = ucwords(strtolower(trim(($_POST['password1']))));
            $password2 = ucwords(strtolower(trim(($_POST['password2']))));

            if ($password1 == $password2) {
                $_SESSION["connesso"] = "no";
                $email = $_SESSION["emailCorrente"];
                $query = "UPDATE utente"
                        ."SET password=\''$password1'\'"
                        ."WHERE mail=\"'$email'\"";

                $insert = mysqli_query($db_conn, $query);

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
                            <input type="text" name="password1" required="">
                        </div>
                        <div class="divInterno">
                            <h1>Ripeti la password</h1>
                            <input type="password" name="password2" required="">
                        </div>
                        <br>
                        <button type="submit" name="btnInserisci"> invia</button>

                        <h5>non sei ancora registrato? <a href="Registrazione.php"> Registrati</a></h5>
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
        background-color: grey;
    }
    .cDiv{
        width: 300px;
        height: 400px;
        border: 1px solid black;
        margin-left: 40%;
        margin-top: 12%
    }

    .cForm{
        padding: 20px;
        text-align: center;
    }

    .divInterno{
        padding: 3px;

    }
</style>
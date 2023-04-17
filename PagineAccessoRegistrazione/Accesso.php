
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
            $email = ucwords(strtolower(trim(($_POST['mail']))));
            $password = ucwords(strtolower(trim(($_POST['password']))));

            $ciccio = "SELECT * FROM utente WHERE mail='$email' AND password='$password'";
            $ciccio2 = mysqli_query($db_conn, $ciccio);
            if (mysqli_num_rows($ciccio2) > 0) {
                $_SESSION["connesso"]="yes";
                header("refresh:3; ../index.php");
            } else {
                $_SESSION["connesso"]="no";
                ?>
                <h3> EMAIL O PASSWORD ERRATI</h3>

                <?php
                header("refresh:3;");
            }
        } else {
            ?>
            <body>
                <div class="cDiv">
                    <form class="cForm" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="divInterno">
                            <h1>Mail</h1>
                            <input type="text" name="mail" required="">
                        </div>
                        <div class="divInterno">
                            <h1>Password</h1>
                            <input type="password" name="password" required="">
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

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
        <title>Accesso</title>
    </head>
    <?php
    if (isset($_SESSION["connesso"]) && $_SESSION["connesso"] == "yes") {
        $_SESSION["connesso"] = "no";
        if (isset($_SESSION["eliminazione"])) {
            $posta = $_SESSION["mailAccount"];
            $query = "DELETE FROM utente WHERE mail = '$posta'";
            ?>
            <body>
                <h1>DICONNESSIONE IN CORSO....</h1>
            </body>
            <?php
            $insert = mysqli_query($db_conn, $query);
        } else {
            ?>
            <body>
                <h1>DICONNESSIONE IN CORSO....</h1>
            </body>
            <?php
        }
        header("refresh:3; ../index.php");
    } else {
        if (!isset($error_message)) {
            if (isset($_POST['btnInserisci'])) {
                $email = strtolower(trim(($_POST['mail'])));
                $password = strtolower(trim(($_POST['password'])));

                $ciccio = "SELECT * FROM utente WHERE mail='$email' AND password='$password'";
                $ciccio2 = mysqli_query($db_conn, $ciccio);
                if (mysqli_num_rows($ciccio2) > 0) {
                    $_SESSION["connesso"] = "yes";
                    $_SESSION["mailAccount"] = $email;
                    header("refresh:3; ../index.php");
                } else {
                    ?>
                    <h3> EMAIL O PASSWORD ERRATI</h3>

                    <?php
                    header("refresh:3;");
                }
            } else {
                ?>
                <body>
                    <div>
                        <div class="cDiv">
                            
                            <form class="cForm" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                                <h1>Accedi</h1>
                                <div class="divInterno">
                                    <input class="superiore" type="text" name="mail" required="" placeholder="mail">
                                </div>
                                <div class="divInterno">
                                    <input class="inferiore"  type="password" name="password" required="" placeholder="password">
                                </div>
                                <br>
                                <button type="submit" name="btnInserisci"> invia</button>

                                <h5> <a href="Registrazione.php"> non sei ancora registrato?</a></h5>
                            </form>
                        </div>
                        <div class="parteDestra">
                            <img src="../Immagini/immagineAccesso.jpg" alt="alt" class="immagine"/>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo $error_message;

                header("refresh:3; ../index.php");
            }
        }
        ?>
    </body>
</html>

<style>
    body{
        background-color: #323232;
        
    }
    .cDiv{
        width: 50%;
        height: 730px;
        border: 1px solid black;
        position: absolute;
    }

    .cForm{
        text-align: center;
    }

    .divInterno{
        padding: 3px;
    }

    input{
        width: 400px;
        height: 58px;

        background-color: rgba(16,16,16,.4);
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
    }


    .inferiore{
        margin-top: 30px;
    }

    button{
        width: 400px;
        height: 58px;
        background-color: coral;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
    }

    .immagine{
        width: 100%;
        height: 730px;
    }

    .parteDestra{
        position: absolute;
        margin-left: 48%;
    }
    
    a{
        display: flex;
        color: white;
        text-decoration: none;
        font-size: 15px;
        margin-left: 180px;
        
    }
    
    h1{
        display: flex;
        color: white;
        text-decoration: none;
        font-size: 25px;
        margin-left: 180px;
        margin-top: 200px;
    }
</style>
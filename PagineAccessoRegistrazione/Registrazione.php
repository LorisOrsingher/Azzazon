
<?php
include '../connesone.php';
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
            $nome = ucwords(strtolower(trim(($_POST['inputName']))));
            $cognome = ucwords(strtolower(trim(($_POST['inputCognome']))));
            $email = strtolower(trim(($_POST['inputEmail'])));
            $password = strtolower(trim(($_POST['inputPassword'])));
            
            $ciccio = "SELECT * FROM utente WHERE mail='$email'";
            $ciccio2 = mysqli_query($db_conn, $ciccio);
            if (!mysqli_num_rows($ciccio2) > 0) {
                $query = "INSERT INTO utente (nome, cognome, mail, password) "
                        . "VALUES('$nome', '$cognome', '$email', '$password')";

                $insert = mysqli_query($db_conn, $query);

                if ($insert != null)
                    $message = "Contatto inserito con successo!";
                else
                    $message = "Contatto già esistente";

                echo $message;

                header("refresh:3; ../index.php");
            } else {
                ?>
                <h3> EMAIL GIA REGISTRATA PREGO ACCEDA</h3>

                <?php
                header("refresh:3; Registrazione.php");
            }
        } else {
            ?>
            <body>
                <div>

                    <div class="Inserimento">
                        <form class="cForm" id="form" name="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                            <div class="input">
                                <input class=""type="text" id="inputName" name="inputName" placeholder="Nome " required="">
                            </div>
                            <div class="input">                  
                                <input type="text" id="inputCognome" name="inputCognome" placeholder="Cognome" required="">
                            </div>
                            <div class="input">                               
                                <input type="text" id="inputEmail" name="inputEmail" placeholder="Mail" required="">
                            </div>
                            <div class="input">                               
                                <input type="password" id="inputPassword" name="inputPassword" required="" placeholder="Password">
                            </div>


                            <br>
                            <br>

                            <div class="input">
                                <div class="inputDiv">
                                    <input type="checkbox" id="inputTerms" required=""> <span class="inputDescription">Agree to Terms and
                                        Conditions</span>
                                </div>
                            </div>

                            <button type="submit" name="btnInserisci"> invia</button>
                            <br>
                            <h5>sei già registrato? <a href="Accesso.php"> Accedi</a></h5>
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
        ?>
    </body>
</html>

<style>
    body{
        background-color: #323232;
    }

    .cForm{
        text-align: center;
    }

    .Inserimento{
        width: 50%;
        height: 730px;
        border: 1px solid black;
        position: absolute;
    }
    
    input{
        width: 400px;
        height: 58px;

        background-color: rgba(16,16,16,.4);
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
</style>
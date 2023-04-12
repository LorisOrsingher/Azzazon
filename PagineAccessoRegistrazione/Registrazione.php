
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
            $email = ucwords(strtolower(trim(($_POST['inputEmail']))));
            $password = ucwords(strtolower(trim(($_POST['inputPassword']))));
            $sesso = ucwords(strtolower(trim(($_POST['Gender']))));

            $query = "INSERT INTO utente (nome, cognome, mail, password, sesso) "
                    . "VALUES('$nome', '$cognome', '$email', '$password', '$sesso')";

            $insert = mysqli_query($db_conn, $query);

            if ($insert != null)
                $message = "Contatto inserito con successo!";
            else
                $message = "Contatto già esistente";

            echo $message;

            header("refresh:3; index.php");
        } else {
            ?>
            <body>
                <div class="Inserimento">
                    <form id="form" name="form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="input">
                            <span class="inputTitle">Name</span>
                            <input type="text" id="inputName" name="inputName" placeholder="Mario " required="">
                        </div>

                        <div class="input">
                            <span class="inputTitle">Cognome</span>
                            <input type="text" id="inputCognome" name="inputCognome" placeholder="Rossi" required="">
                        </div>

                        <div class="input">
                            <span class="inputTitle">Mail</span>
                            <input type="text" id="inputEmail" name="inputEmail" placeholder="mariorossi@mail.com" required="">
                        </div>

                        <div class="input">
                            <span class="inputTitle">Password</span>
                            <input type="password" id="inputPassword" name="inputPassword" required="">
                        </div>

                        <div class="input">
                            <span class="inputTitle">Gender</span>
                            <div class="inputDiv">
                                <input type="radio" id="inputGender1" name="Gender"> <span class="inputDescription">Maschio</span>
                            </div>
                            <div class="inputDiv">
                                <input type="radio" id="inputGender2" name="Gender"> <span class="inputDescription">Femmina</span>
                            </div>

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
                    </form>
                </div>
                <?php
            }
        } else {
            echo $error_message;

            header("refresh:3; index.php");
        }
        ?>
    </body>
</html>

<style>
    *{
        padding:0;
        margin:0;
    }
    body{
        background-color: lightblue;
    }

    #form{
        margin: 0 auto;
        width: fit-content;
        margin-top: 50px;
    }
    .input *{
        display: block;
    }
    .input{
        margin-top: 15px;
        position: relative;
    }
    .inputTitle{
        font-size: 17px;
        font-family: "Roboto", sans-serif;
        font-weight: bold;
        margin-bottom: 5px;
    }
    input[type = "text"], input[type = "tel"], select, input[type = "password"]{
        width: 300px;
        height: 40px;
        background-color: white;
        border: none;
        outline: none;
        font-size: 17px;
        font-family: "Roboto", sans-serif;
        padding: 0 10px;
    }
    select{
        width: 320px;
    }
    input[type = "radio"], .inputDescription{
        display: inline;
    }
    .inputDiv{
        width: fit-content;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        margin-top: 10px;
    }
    .inputDescription{
        margin-left: 35px;
        font-size: 17px;
        font-family: "Roboto", sans-serif;
    }
    input[type = "radio"], input[type = "checkbox"]{
        -webkit-appearance: none;
        appearance: none;
    }
    input[type = "radio"]::before{
        content:"";
        width: 26px;
        height: 26px;
        background-color: white;
        position: absolute;
        top: calc(50% - 13px);
        left: 0;
        border-radius: 50%;
        cursor: pointer;
    }
    input[type = "radio"]::after{
        content: "";
        width: 16px;
        height: 16px;
        background-color: black;
        position: absolute;
        top: calc(50% - 8px);
        left: 5px;
        border-radius: 50%;
        transform: scale(0);
        transition: all 0.2s ease-in-out;
    }
    input[type = "radio"]:checked::after{
        transform: scale(1);
    }
    #inputPassword{
        width: calc(300px - 35px);
        padding-right: 45px;
    }
    #passwordIcon{
        width: 26px;
        position: absolute;
        right: 10px;
        bottom: calc(20px - 13px);
        cursor: pointer;
    }

    input[type = "checkbox"]::before{
        content:"";
        width: 26px;
        height: 26px;
        background-color: white;
        position: absolute;
        top: calc(50% - 13px);
        left: 0;
        border-radius: 5px;
        cursor: pointer;
    }
    input[type = "checkbox"]::after{
        content: "";
        width: 16px;
        height: 16px;
        background-color: black;
        position: absolute;
        top: calc(50% - 8px);
        left: 5px;
        border-radius: 5px;
        transform: scale(0);
        transition: all 0.2s ease-in-out;
    }
    input[type = "checkbox"]:checked::after{
        transform: scale(1);
    }

    @media screen and (max-width: 400px){
        input[type = "text"], input[type = "tel"], select, input[type = "password"]{
            width: 250px;
        }
        select{
            width: 270px;
        }
        #inputPassword{
            width: calc(250px - 35px);
            padding-right: 45px;
        }
    }

    button{
        margin-left:45% ;
        margin-top: 30%;
        height: 30px;
        width: 60px;
    }

    .Inserimento{
        margin-left: 200px;
        margin-right: 200px;
        margin-top: 50px;
        border: 1px black solid;
    }
</style>
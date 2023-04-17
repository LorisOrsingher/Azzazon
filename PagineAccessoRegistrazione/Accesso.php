
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
    ?>
    <body>
        <div class="cDiv">
            <form class="cForm">
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
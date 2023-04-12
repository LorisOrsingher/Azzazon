
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
            </form>
        </div>
    </body>
</html>

<style>
    .cDiv{
        width: 300px;
        height: 300px;
        border: 1px solid black;
    }

    .cForm{
        padding: 3px;
        text-align: center;
    }

    .divInterno{
        padding: 3px;
        
    }
</style>
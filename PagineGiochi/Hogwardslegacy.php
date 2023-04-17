<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<html>
    <head>
        <meta charset="windows-1252">
        <title></title>
    </head>
    <body>
        <div class="barra">
            <header>
                <img src="../Immagini/logo.PNG" alt="Logo" width="100" height= "50" class="logo">
                <nav>
                    <ul class="menu">
                        <li><a href="#"> categorie</li>
                        <li><a href="#"> categorie</li>
                        <li><a href="#"> categorie</li>
                    </ul>
                
                <nav>
                    <ul class="menu">
                        <li><a href="../PagineAccessoRegistrazione/Accesso.php" id="bottone"><img src="../Immagini/Carrello.png" alt="alt"/></a></li>
                        <li><a href="../PagineAccessoRegistrazione/Accesso.php" id="bottone2"><img src="../Immagini/utente.png" alt="alt"/></a></li>
                    </ul>
                </nav>

            </header>
            <div style="display: flex; align-items: center;">

                    <img src="../Immagini/hogwarts-legacy.jpg" alt="alt"  class="immagineGioco" style="display: inline-block"/>  
                    <form class="dettagliProdotto dettagli" style="display: inline-block"\>
                        <h1> HOGWARDS LEGACY</h1>
                        <div style="display: flex; align-items: center;">
                            <button class="aggiugiCarrello"><img src="../Immagini/Carrello.png" alt="alt"/></button>
                            <button class="compraSubito"> ACQUISTA SUBITO</button>
                        </div>

                    </form>
            </div>

        </div>




        <?php
        // put your code here
        ?>
    </body>
</html>

<style>
    *{
        margin: 0;
        padding: 0;
    }

    body{
        background-color: #404040;
    }

    .compraSubito{
        width: 325px;
        height: 70px;
        display: inline-block;
        background-color: coral;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
    }

    .immagineGioco{
        display: inline-block;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        max-width: 450px;
        height: auto;
        margin-right: 40px;
        width:auto;
    }

    .dettagliProdotto{
        display: inline-block;
        margin: auto;
        border: 1px black;
    }

    .menu,
    a,
    button{
        font-family: "Montserrat", sans-serif;
        font-weight: 300;
        font-size: 14px;
        color: #ffff;
        text-decoration: none;
    }

    .barra{
        height: 50%;
        background-image:url(../Immagini/SfondoHogwards.PNG);
        background-repeat: no-repeat;
    }
    .bottone{
        padding: 9px 25px;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        transition: all .3s ease;
        height: 20px;
        width: 30px;
        margin-left: 10px       ;
    }

    .aggiugiCarrello{
        width: 70px;
        height: 70px;
        display: inline-block;
        padding: 20px;
        background-color: coral;
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        margin-right: 10px;
    }


    header{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 30px 2%;

    }

    .dettagli{
        -webkit-backdrop-filter: blur(10px);
    }

    .menu{
        list-style: none;
    }

    .menu li{
        display: inline-block;
        padding: 0 20px;
    }

    .menu li a{
        transition: all .3s ease;
    }

    .menu a{
        color: black;
    }

    .menu a:hover{
        color: #39f;
    }

    .bottone:hover{
        color: #39f;
    }

</style>

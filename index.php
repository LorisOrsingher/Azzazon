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
    <body>

        <header>
            <img src="Immagini/logo.PNG" alt="Logo" width="70" height= "50" class="logo">
            <nav>
                <ul class="menu">
                    <li><a href="#"> categorie</li>
                    <li><a href="#"> categorie</li>
                    <li><a href="#"> categorie</li>
                </ul>
            </nav>
            <form action="PagineAccessoRegistrazione/Accesso.php">
                <button type="submit">
                    Registrati
                </button>  
            </form>
        </header>



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
        background: white;
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

    header{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 30px 10%;
    }

    .menu{
        list-style: none;
    }

    .menu li{
        display: inline-block;
        padding: 0 20px;
    }

    menu li a{
        transition: all .3s ease;
    }

    .menu a{
        color: black;
    }

    .menu a:hover{
        color: #39f;
    }

    button{
        padding: 9px 25px;
        background: #0d94a6;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        transition: all .3s ease; 
    }

    button:hover{
        color: #39f;
    }

</style>
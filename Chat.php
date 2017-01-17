<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once("_config.php");
session_start();

//$chat = $pdo->query("SELECT * FROM message ORDER BY date")->fetchAll();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="js/jquery.js" type="text/javascript"></script>
        <title></title>
    </head>
    <body>

        <form action="ChatPost.php" method="POST">

            <textarea rows="10" cols="100" id="mytxtarea"> 
          <?php
//                echo"\r\n";
//                foreach ($chat as $message) {
//
//                    echo $message['date'] . " ";
//                    echo $message['pseudo'] . ":";
//                    echo $message['message'] . "\r\n";
//                }
                ?> 
            </textarea><br><br>
            <input type="text" name="message" size="100" id="mymsg"> </input>   <input type="button" value="Envoyer" id="mybtn"></input>
        </form>
    </body>
</html>
<script>

    $("document").ready(chargement);
    function chargement(){
         $("#mybtn").click(clicButton);
         
         setInterval(actualiser,1000) ;
    }
    function clicButton() {
        var params = $('form').serialize();
        $.post("ChatPost.php", params);
        $("#mymsg").val("");
    }
    function actualiser() {

        // appel getjson de ta page de recup de donnees
        $.getJSON("recupmsg.php", afficher);
    }
    // affichage des donnees au bon endroit
    function afficher(data) {
        $("#mytxtarea").empty();
        for (i = 0; i < data.length; i++)
        {
            $("#mytxtarea").append(data[i].date + " ");
            $("#mytxtarea").append(data[i].pseudo + " ");
            $("#mytxtarea").append(data[i].message + "\r\n");

        }
    }
   

</script>
<?php echo 'Votre pseudo est ' . $_SESSION["pseudo"]; ?>



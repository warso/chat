<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once ("_config.php");

session_start();

$pseudo = $_SESSION["pseudo"];
$message = addslashes($_POST["message"]);
$requete="INSERT INTO message(message,pseudo,date) VALUES('$message','$pseudo',NOW())";
$chat=$pdo->query($requete);


?>
<h1>Ajout message reussi ! </h1>

<a href="Chat.php"> Retourner au chat</a>

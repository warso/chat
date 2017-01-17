<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
$pseudo=$_POST["pseudo"];

$_SESSION["pseudo"]=$pseudo;

echo "Bienvenue sur le chat !!! <br>";
?>
<a href="Chat.php"> Aller sur le chat</a>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include_once("_config.php");

session_start();

$pseudo = $_SESSION["pseudo"];

$requete="SELECT * FROM message ORDER BY date DESC LIMIT 0,10";

$chat=$pdo->query($requete)->fetchAll();

echo json_encode($chat);


?>
<?php

// FONCTIONS CONNECTION BDD
function connect(){
    try {
        return  new PDO('mysql:host=localhost:3308;dbname=projet;charset=utf8', 'root', '');
    } catch(Exception $e) {
        die('Erreur : ' .$e->getMessage());
    }
}
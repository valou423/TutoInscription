<?php 
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=VOTRE_TABLE;charset=utf8', 'LOGIN', 'PASSWORD');
    }catch(Exception $e)
    {
        die('Erreur'.$e->getMessage());
    }

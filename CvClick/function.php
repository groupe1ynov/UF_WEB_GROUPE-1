<?php

global $pdo;

try{
      if(is_null($pdo)){
      $pdo = new PDO("mysql:host=localhost:3306;dbname=cv", "root", "root");
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
    } catch(PDOException $e) {
      echo "Erreur de connexion de la base de données";
      exit();
}

$stmt = $pdo->prepare("SELECT * FROM contact");
$stmt->execute();
$contactList = $stmt->fetchAll(PDO::FETCH_ASSOC);

/*
$stmt = $pdo->prepare("SELECT * FROM competences");
$stmt->execute();
$competences = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("SELECT * FROM langues where id_nom=1");
$stmt->execute();
$langues = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("SELECT * FROM interets where id_nom=1");
$stmt->execute();
$interets = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("SELECT * FROM interets where id_nom=2");
$stmt->execute();
$interets1 = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("SELECT * FROM experiences where id_nom=1");
$stmt->execute();
$experiences = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("SELECT * FROM formations where id_nom=1");
$stmt->execute();
$formations = $stmt->fetchAll(PDO::FETCH_ASSOC);

*/


?>
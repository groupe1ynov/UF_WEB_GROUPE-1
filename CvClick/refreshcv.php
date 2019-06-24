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

$id = $_POST['id'];
$stmt = $pdo->prepare("SELECT * FROM contact c 
                        INNER JOIN interets i ON i.id_nom=c.id_nom 
                          WHERE c.id_nom=:id");
$stmt->execute([
    'id' => $id
]);
$tables = $stmt->fetchAll(PDO::FETCH_ASSOC);




//$jc=json_encode(['join'=>$tables]);
$jc=json_encode($tables);
echo($jc);

exit;









?>
<?php
global $pdo;
global $totalQuestions;
$connected = true;
try 
{
    $pdo = new PDO("mysql:host=localhost; dbname=coursework; charset=utf8mb4", "root","");
}
catch (PDOException $e)
{
    $error = "Unable to connect to the database";
    $connected = false;
}

$query = "SELECT * FROM question_list";
$questionQuery = $pdo ->query($query);
$questions = $questionQuery->fetchAll();
$totalQuestions = $questionQuery->rowCount();

function closeConnection()
{
    global $pdo;
    $pdo = null;
}
?>
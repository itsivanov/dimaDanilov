<?php
/**
 * Created by PhpStorm.
 * User: oleg
 * Date: 05.10.17
 * Time: 21:27
 */

include_once 'config.php';

$limit = intval($_POST['number']);

$pdo = $GLOBALS['DB'];
$stm = $pdo->prepare('SELECT * FROM city LIMIT 1 OFFSET ?');
$stm->bindValue(1, $limit , PDO::PARAM_INT);
$stm->execute();
$response = $stm->fetchAll();
echo $response[0]['name'];
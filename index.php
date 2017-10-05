<?php

require_once 'model.php';


$query = "SELECT * FROM city";
$stmt = $GLOBALS['DB']->prepare( $query );
$stmt->execute();
$object =  $stmt->fetchAll( PDO::FETCH_ASSOC );

?>
<script type="text/javascript" src="/assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/assets/js/main.js"></script>

<button id="enter">ENTER</button>
<div id="response"></div>



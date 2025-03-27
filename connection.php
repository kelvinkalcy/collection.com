<?php

$dbhost ="localhost";
$dbuser="root";
$dbpass ="";
$dbname ="collection_db";

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or trigger_error(mysqli_error(), E_USER_ERROR);
?>
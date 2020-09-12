<?php

$mysqli = new mysqli('localhost', 'root', '', 'podcast') or die($mysqli->connect_error);

$table = 'episodes';

if(isset($_POST['sort'])){
    
    if($_POST['sort'] === "az"){
        $sort = "SELECT * FROM $table ORDER BY title ASC";
    }
    
    $result = $mysqli->query($sort) or die($mysqli->error);
}

?>
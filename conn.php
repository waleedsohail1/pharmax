<?php
    $mysqli = new mysqli("localhost", "root", "", "PharmaX");
    $result = $mysqli->query("SELECT * FROM login");
?>
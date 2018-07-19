<?php
    $mysqli = new mysqli("mi3-ss31.a2hosting.com:3306", "vleresea_pharmax", "PharmaX-PBS", "vleresea_pharmax");
    $result = $mysqli->query("SELECT * FROM login");
?>
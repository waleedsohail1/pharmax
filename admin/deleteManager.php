<?php

    require("../conn.php");
    $Uname=$_GET["uname"];
    echo $Uname;
    $query="delete from login where username='".$Uname . "' AND type = '1'" ;
    echo $query;
    mysqli_query($mysqli,$query);
    header("Location:Managers.php");

?>
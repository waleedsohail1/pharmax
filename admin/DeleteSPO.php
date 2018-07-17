<?php

    require("../conn.php");
    $SPOID=$_GET["SPOID"];
    echo $SPOID;
    $query="delete from spo where SPOID='".$SPOID . "'" ;
    //echo $query;
    mysqli_query($mysqli,$query);
    header("Location:SPOs.php");

?>
<?php
    error_reporting(E_ALL ^ E_DEPRECATED);

    $id = mysql_connect("localhost","root","");
    $con = mysql_select_db("databasetcc",$id);

    $cod = $_POST['tCod'];
    $nome = $_POST['tNomeS'];
    $area = $_POST['cArea'];
    $cultura = $_POST['cCul'];
    $dtini = $_POST['tDi'];
    $dtf = $_POST['tDf'];

    $sql = "insert into safra values('$cod','$area','$cultura','$nome','$dtini','$dtf')";

    $sucesso = mysql_query($sql);

    mysql_close($id);
    header("location:../cadsafras.php");
?>
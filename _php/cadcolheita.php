<?php
    error_reporting(E_ALL ^ E_DEPRECATED);

    $id = mysql_connect("localhost","root","");
    $con = mysql_select_db("databasetcc",$id);

    $cod = $_POST['tCod'];
    $safra = $_POST['cSafra'];
    $dtf = $_POST['tDf'];
    $producao = $_POST['cPf'];

    $sql = "insert into colheita values('$cod','$safra','$dtf','$producao')";

    $sucesso = mysql_query($sql);

    mysql_close($id);
    header("location:../cadcolheitas.php");
?>
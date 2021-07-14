<?php
    error_reporting(E_ALL ^ E_DEPRECATED);

    $id = mysql_connect("localhost","root","");
    $con = mysql_select_db("databasetcc",$id);

    $cod = $_POST['tCod'];
    $nome = $_POST['tNomeP'];
    $tipo = $_POST['ctipo'];
    $detail = $_POST['cDet'];
    $dtaquisicao = $_POST['tDa'];
    $value = $_POST['cV'];

    $sql = "insert into patrimonio values('$cod','$nome','$tipo','$detail','$dtaquisicao','$value')";

    $sucesso = mysql_query($sql);

    mysql_close($id);
    header("location:../cadpatrimonio.html");
?>
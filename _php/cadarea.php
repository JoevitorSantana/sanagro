<?php
    error_reporting(E_ALL ^ E_DEPRECATED);

    $id = mysql_connect("localhost","root","");
    $con = mysql_select_db("databasetcc",$id);

    $cod = $_POST['tCod'];
    $name = $_POST['tNome'];
    $area = $_POST['tArea'];

    $sql = "insert into area values ('$cod','$name','$area')";

    $sucesso = mysql_query($sql);

    mysql_close($id);
    header("location:../index2.html");
?>
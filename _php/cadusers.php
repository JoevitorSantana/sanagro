<?php
    error_reporting(E_ALL ^ E_DEPRECATED);

    $id = mysql_connect("localhost","root","");
    $con = mysql_select_db("databasetcc",$id);

    $cod = $_POST['tCod'];
    $tipo = $_POST['type'];
    $name = $_POST['tNome'];
    $email = $_POST['tEmail'];
    $username = $_POST['tNomeu'];
    $senha = $_POST['tSenha'];

    $sql = "insert into usuario values ('$cod', '$tipo', '$name', '$email', '$username','$senha')";

    $sucesso = mysql_query($sql);

    mysql_close($id);
    header("location:../cadusers.html");
?>
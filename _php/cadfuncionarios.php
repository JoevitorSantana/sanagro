<?php
    error_reporting(E_ALL ^ E_DEPRECATED);
    $id = mysql_connect("localhost","root","");
    $con = mysql_select_db("databasetcc",$id);
    
    $cod = $_POST['tCod'];
    $nome = $_POST['tNome'];
    $sobrenome = $_POST['tNomeu'];
    $gender = $_POST['type'];
    $cpf = $_POST['tCpf'];
    $cargo = $_POST['cCargo'];
    $salario = $_POST['tSalario'];
    $contato = $_POST['cCont'];
    $rua = $_POST['cRua'];
    $bairro = $_POST['cBairro'];
    $numero = $_POST['cNum'];
    $cidade = $_POST['tCid'];

    $sql = "insert into funcionario values ('$cod','$cidade','$nome','$sobrenome','$gender','$cpf','$cargo','$salario','$contato', '$rua','$bairro','$numero')";

    $sucesso = mysql_query($sql);

    mysql_close($id);
    header("location:../cadfuncionarios.html");
?>
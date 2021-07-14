<?php
    error_reporting(E_ALL ^ E_DEPRECATED);

    if ((empty($_POST['tUser'])) or (empty($_POST['tSenha'])))
    {
        header("Location:index.php?Erro=1");
    }
    else
    {
        $email = $_POST['tUser'];
        $id = mysql_connect("localhost","root","");
        $con = mysql_select_db("databasetcc",$id);
        $sql = "select * from usuario where usu_username='$email'";

        $sucesso = mysql_query($sql);

        while ($row = mysql_fetch_array($sucesso))
        {
            $senha = $_POST['tSenha'];
            $senhabanco = $row[5];
            if ($senha == $senhabanco)
            {
                header("Location:index2.html");
            }
            else
            {
                header("Location:index.php?Erro=1");
            }
        }
    }
    mysql_close($id);
?>
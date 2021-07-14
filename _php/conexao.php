<?php
  error_reporting(E_ALL ^ E_DEPRECATED);

  $id = mysql_connect("localhost","root","");
  $con = mysql_select_db("databasetcc",$id);
?>
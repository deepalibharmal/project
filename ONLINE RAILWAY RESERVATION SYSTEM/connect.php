<?php


$connect=mysql_connect('localhost','root','') or die ("could not connect to the database");
echo "connection successful";
mysql_select_db('railway') or die('could not find database');




?>
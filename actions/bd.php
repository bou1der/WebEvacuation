<?php
$bd = new mysqli("localhost","root","","Evacuation");
$bd->query("SET NAMES 'utf8'");
if ($bd->connect_error)
{
    echo "<pre>"."Ошибка подключения". $bd->connect_errno . "</pre>";
    $bd->close();
    die();
}
else
{
    echo "BD подключенна!";
}
?>
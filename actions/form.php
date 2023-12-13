<?php
require_once "helper.php";
require_once "bd.php";
$userInfo = [$_POST["name"], $_POST["phone"]];
if (empty($userInfo[0]))
{
    $_SESSION["AlertError"]["NAME"] = 'Введите имя!';
    redirect("/../index.php");
}
elseif (empty($userInfo[1]))
{
    $_SESSION["AlertError"]["PHONE"] = 'Введите телефон!';
    redirect("/../index.php");
}
else{
    $_SESSION["AlertError"]["NAME"] = '';
    $_SESSION["AlertError"]["PHONE"] = '';
}

if($bd->query("INSERT INTO `users` (`user_name`,`user_phone`) VALUES ('$userInfo[0]', '$userInfo[1]')") === true)
{
    $_SESSION["userStatus"] = "Благодарим Вас за оставленную заявку, ожидайте звонка";
    redirect("/../index.php");
}
else
{
    echo"Ошибка:". $bd->connect_errno;
    $_SESSION["userStatus"] = "Ошибка подключения!";
    redirect("/../index.php");
}
$bd->close();
?>
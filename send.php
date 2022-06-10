<?php
function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}
ini_set('display_errors','On');
error_reporting('E_ALL');
$fio = $_POST['fio'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$fio = urldecode($fio);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
$phone = htmlspecialchars($phone);
$phone = urldecode($phone);
$phone = trim($phone);


// echo $fio;
// echo "<br>";
// echo $email;
// echo $phone;
if (mail("project-town@mail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email.". Телефон: ".$phone ,"From: example2@mail.ru \r\n"))
{ echo "sended succesfuly";
sleep(2);
redirect('http://popova.project-town.ru/');
} else {
echo "error";
}?>
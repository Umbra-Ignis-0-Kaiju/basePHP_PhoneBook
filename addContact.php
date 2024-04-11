<?php
$contacts = json_decode(file_get_contents('dataBase.json'), true);

$name = $_POST['name'];
$phone = $_POST['phone'];

$contacts[] = ['name' => $name, 'phone' => $phone];

file_put_contents('dataBase.json', json_encode($contacts));

header('Location: index.php');
exit;
?>
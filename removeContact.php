<?php
$contacts = json_decode(file_get_contents('dataBase.json'), true);

$id = $_POST['id'];

unset($contacts[$id]);

file_put_contents('dataBase.json', json_encode($contacts));

header('Location: index.php');
exit;
?>
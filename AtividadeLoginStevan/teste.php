<?php
$password = 'oiminhavida';
$username = 'Teste';
#echo $hash = md5($password);
$hashedpassword = password_hash($password, PASSWORD_BCRYPT);

#file_put_contents('testes.txt', "$username,$hashedpassword\n", FILE_APPEND);


$testes = file_get_contents('testes.txt');
$resultado = password_hash($testes, PASSWORD_DEFAULT);

file_put_contents('resultado.txt', $resultado);
?>
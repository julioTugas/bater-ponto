<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
//require_once(dirname(__FILE__ , 2) . '/src/views/login_views.php');

require_once(VIEW_PATH . '/login_views.php');

//require_once(CONTROLLER_PATH . '/login_controller.php');









/*

//Esse teste foi para validar o login, ou seja se testou o email e a senha batem 
require_once(MODEL_PATH . '/Login_model.php');

$login = new Login_model([
  'email' => 'admin@baterponto.com.br',
  'password' => 'a'
]);

try{
    $login ->checkLogin();
    echo 'Deu Certo :)';
} catch(exception $e){
    echo 'Problema no Login :P';
}






/*
$user = new User(['name' => 'Lucas', 'email'=> 'Thiagos@baterponto.com.br']);

print_r(User::getAll(['id'=>1], 'id, name, email'));

echo '<br>';
print_r(User::getAll([], 'name'));

echo '<br>';
//print_r(User::getAll([] ));
echo '<br>';

foreach(User::getALl([], 'name') as $user){
    echo $user->name;
    echo '<br>';
}


echo $user::getSelect(['id' =>1], 'name, email');
echo '<br>';

echo User::getSelect(['name' =>'pedro', 'email' =>'pedro@baterponto.com.br']);

*/
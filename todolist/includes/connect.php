<?php
require (__DIR__. "/idiorm.php");
ORM::configure(array(
    'connection_string' => 'mysql:host=localhost;dbname=todolist',
    'username' => 'root',
    'password' => ''
));
?>
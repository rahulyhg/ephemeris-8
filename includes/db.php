<?php
    $db['host'] = 'localhost';
    $db['username'] = 'root';
    $db['password'] = '';
    $db['name'] = 'cms';

    foreach($db as $key => $value){
        define(strtoupper($key), $value);
    }
    $connection = mysqli_connect(HOST, USERNAME, PASSWORD, NAME);
?> 
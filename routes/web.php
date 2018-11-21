<?php

$router->get('/', function () {
    // $results = DB::select("SELECT * FROM users");
    $results = app('db')->select("SELECT * FROM users");
    return $results;
});

$router->get('/test', function () {
    return 'test';
});
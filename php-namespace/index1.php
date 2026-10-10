<?php

require_once __DIR__ . '/vendor/autoload.php';
use App\Services\UserService;
$service = new UserService();

$user = $service->createUser(
    'Budianto',
    'budianto@example.com'
); 

echo $service->displayUser($user);
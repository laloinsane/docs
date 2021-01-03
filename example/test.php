<?php
include __DIR__ . "/../vendor/autoload.php";

use laloinsane\docs\User;
// use laloinsane\docs\Models\User;

$hello = new \laloinsane\docs\Docs();
echo $hello->sayHello();

$user = new User();
// $user->name = "lalo";
// $user->project = "ruv";

// echo $user;

// echo User::create([
//     'name' => "lalo",
//     'project' => "ruv",
// ]);

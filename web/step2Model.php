<?php
/**
 * Created by PhpStorm.
 * User: milo
 * Date: 31.03.16
 * Time: 20:12
 */
include_once '../src/bootstrap.php';
include_once '../helper/tables_array.php';

// step 2

$time = filter_input(INPUT_POST, 'time');
$people = filter_input(INPUT_POST, 'people');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$message = filter_input(INPUT_POST, 'message');

$_SESSION['time'] = $time;
$_SESSION['people'] = $people;
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
$_SESSION['message'] = $message;


/*<form action="step1Model.php" method="post">
        <label for="time">time you will arrive</label><input type="time" name="time" id="time" value="18:00">
        <label for="people">how many people</label><input type="number" name="people" id="people">
        <label for="name">your name</label> <input type="text" name="name" id="name" value="Max Muster">
        <label for="email">your e-mail</label><input type="email" name="email" id="email" value="max.muster@example.com">
        <label for="message">message</label><input type="text" name="message" id="message" value="something you like us to know?">
<input type="submit" name="step2" value="submit">*/

//print($_SESSION['tableId']); es darf keine Ausgabe stattfinden wenn header redirect !!


header('Location: step3.php');
exit();


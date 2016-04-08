<?php
/**
 * Created by PhpStorm.
 * User: milo
 * Date: 31.03.16
 * Time: 20:58
 */
include_once '../src/bootstrap.php';
include_once '../helper/tables_array.php';

include_once 'partial/header.php';
//var_dump($_SESSION);
?>
    
    <form action="step2Model.php" method="post">
        <label for="time">time you will arrive</label><input type="time" name="time" id="time" value="18:00">
        <label for="people">how many people</label><input type="number" name="people" id="people" value="4">
        <label for="name">your name</label> <input type="text" name="name" id="name" value="Max Muster">
        <label for="email">your e-mail</label><input type="email" name="email" id="email" value="max.muster@example.com">
        <label for="message">message</label><input type="text" name="message" id="message" value="something you like us to know?">
        <input type="submit" name="step2" value="next step">
    </form>

<?php
include_once 'partial/footer.php';
?>
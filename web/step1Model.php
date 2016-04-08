<?php
/**
 * Created by PhpStorm.
 * User: milo
 * Date: 31.03.16
 * Time: 20:12
 */
include_once '../src/bootstrap.php';
include_once '../helper/tables_array.php';

// step 1

$date = filter_input(INPUT_POST, 'date');
$tableId = filter_input(INPUT_POST, 'tableNumber');

/*if (!isset($_SESSION['date'])) {
    $_SESSION['date'] = $date;
}

if (!isset($_SESSION['tableId'])) {
    $_SESSION['tableId'] = $tableId;
}*/

$_SESSION['date'] = $date;
$_SESSION['tableId'] = $tableId;


if (!isset($time)) {
    header('Location: step2.php');
    exit();
}


<?php
/**
 * Created by PhpStorm.
 * User: milo
 * Date: 31.03.16
 * Time: 20:05
 */
include_once '../src/bootstrap.php';
include_once '../helper/tables_array.php';

include_once 'partial/header.php';
?>

<h1>Table reservation</h1>
<form action="step1Model.php" method="post">
    <input type="date" name="date" value="<?php echo date('Y-m-d');?>">
    <?php
    foreach ($tables as $item) {
        printf('<input type="submit" name="tableNumber" value="%d"><br>', $item );
    }
    ?>
</form>

<?php
include_once 'partial/footer.php';
?>

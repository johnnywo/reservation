<?php
/**
 * Created by PhpStorm.
 * User: milo
 * Date: 07.04.16
 * Time: 21:18
 */
include_once '../src/bootstrap.php';
include_once 'partial/header.php';
?>

<p class="text-center">Your reservation details:</p>
<table>
    <tr>
        <td>
            Table:
        </td>
        <td>
            <?php print($_SESSION['tableId']) ?>
</td>
</tr>
<tr>
    <td>
        Date:
    </td>
    <td>
        <?php print($_SESSION['date']) ?>
    </td>
</tr>
<tr>
    <td>
        Time:
    </td>
    <td>
        <?php print($_SESSION['time']) ?>
    </td>
</tr>
<tr>
    <td>
        People:
    </td>
    <td>
        <?php print($_SESSION['people']) ?>
    </td>
</tr>
<tr>
    <td>
        Name:
    </td>
    <td>
        <?php print($_SESSION['name']) ?>
    </td>
</tr>
<tr>
    <td>
        E-Mail:
    </td>
    <td>
        <?php print($_SESSION['email']) ?>
    </td>
</tr>
<tr>
    <td>
        Message:
    </td>
    <td>
        <?php print($_SESSION['message']) ?>
    </td>
</tr>
</table>
    <div class="row">
        <div class="small-4 columns">
            <div></div><a href="step2.php.php"><button class="button">go back</button></a></div>
            <div><a href="thankyou.php"><button class="button">submit your reservation</button></a></div>
        </div>
    </div>


<?php
include_once 'partial/footer.php';
//var_dump($_SESSION);
//session_destroy();
?>
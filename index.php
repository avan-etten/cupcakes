<?php
/**
 * Created by PhpStorm.
 * User: A-VE
 * Date: 1/7/2019
 * Time: 9:51 AM
 */
require "cupcake.php";
?>
<!--
Author: Alec Van Etten
Date: 1/7/2019
Assn: 1-Cupcakes

This is a form for ordering cupcakes, cupcakes are $3.50 each and come in 7 flavors.
-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cupcakes</title>
</head>
<body>
<form id="cupcakeform" method="post" action="">
    <fieldset>
        <label>Name:
        <input type="text" size="20" maxlength="20" name="name" id="name" <?php echo "value=" . $_POST['name']?>>
        </label><br>
        <h2>Flavors: </h2>
        <!--<input type="checkbox">-->
        <?php //checkboxes
        checkboxes();
        ?>
    </fieldset>
    <input type="submit" id="order" value="Order">
</form>
</body>
</html>

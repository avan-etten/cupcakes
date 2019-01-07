<?php
/**
 * Created by PhpStorm.
 * User: A-VE
 * Date: 1/7/2019
 * Time: 9:51 AM
 */
?>
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
<form>
    <fieldset>
        <input type="text" size="20" maxlength="20" name="name" id="name">
        <br>
        <!--<input type="checkbox">-->
        <?php //checkboxes
        $flavors = array("grasshopper" => "The Grasshopper", "maple" => "Whiskey Maple Bacon"
        , "carrot" => "Carrot Walnut", "caramel" => "Salted Caramel Cupcake", "velvet" => "Red Velvet",
            "lemon" => "Lemon Drop", "tiramisu" => "Tiramisu");
        foreach($flavors as $flavor => $name){
            echo '<label>';
            echo '<input type="checkbox" value="$flavor" name="flavors[]">'; echo $name;
            echo '<label><br>';
        }

        ?>
    </fieldset>
    <input type="submit" id="order" value="Order">
</form>
</body>
</html>

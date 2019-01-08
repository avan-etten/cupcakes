<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirmation</title>
</head>
<body>



<?php
/**
 * Created by PhpStorm.
 * User: A-VE
 * Date: 1/7/2019
 * Time: 10:13 AM
 */
/*
 * Author: Alec Van Etten
Date: 1/7/2019
Assn: 1-Cupcakes

This is a form for ordering cupcakes, cupcakes are $3.50 each and come in 7 flavors.
 */
//print_r($_POST);
//Array ( [name] => Scrongly [flavors] => Array ( [0] => maple [1] => caramel ) )

if (!empty($_POST)){
    $isValid = true;

    //validate name
    if(empty($_POST['name'])){
        echo "<p>Please provide a name</p>";
        $isValid = false;
    }

    //validate flavors
    if (!isset($_POST['flavors']) || !validateFlavors()){
        echo "<p>Please select a flavor</p>";
        $isValid = false;
    }

    if ($isValid){
        confirmation();
    } else {
        return $isValid;
    }
}

function confirmation(){
    echo "<p>Thank you, " . $_POST['name'] . ", for your order!</p>";
    echo "<br><p>Order Summary:</p>";
    echo "<ul>";
    foreach ($_POST['flavors'] as $flavor){
        echo "<li>". $flavor . "</li>";
    }
    echo "</ul><br>";
    echo "<p>Order Total: " . number_format((sizeof($_POST['flavors']) * 3.50), 2, '.', '') . "</p>";
}

//function for validating flavors, prevents spoofing
function validateFlavors(){
    $flavorsValid = true;
    $validFlavors = array("grasshopper", "maple", "carrot", "caramel", "velvet", "lemon", "tiramisu");
    foreach ($_POST['flavors'] as $flavor){
        if (!in_array($flavor, $validFlavors)){
            //set flag to false if an unknown flavor is found
            $flavorsValid = false;
        }
    }

    return $flavorsValid;
}

//function for populating checkboxes in form
function checkboxes(){
    $flavors = array("grasshopper" => "The Grasshopper", "maple" => "Whiskey Maple Bacon",
        "carrot" => "Carrot Walnut", "caramel" => "Salted Caramel Cupcake", "velvet" => "Red Velvet",
        "lemon" => "Lemon Drop", "tiramisu" => "Tiramisu");

    foreach($flavors as $flavor => $name){
        echo '<label>';
        echo '<input type="checkbox" value=' . "$flavor" . ' name=flavors[] ';
        //if statement to make form sticky
        if (in_array($flavor, $_POST['flavors'])){
            echo 'checked="checked"';
        }
        echo ">$name";
        echo '</label><br>';
    }
}
?>
</body>
</html>
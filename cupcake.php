<?php
/**
 * Created by PhpStorm.
 * User: A-VE
 * Date: 1/7/2019
 * Time: 10:13 AM
 */
//print_r($_POST);
//Array ( [name] => Scrongly [flavors] => Array ( [0] => maple [1] => caramel ) )
if (!empty($_POST)){
    $isValid = false;
    if(empty($_POST['name'])){
        echo "<p>Please provide a name</p>";
        $isValid = false;
    } else {
        $username = $_POST['name'];
        $isValid = true;
    }

    if (!isset($_POST['flavors']) || !validateFlavors()){
        echo "<p>Please select a flavor</p>";
        $isValid = false;
    } else {
        $flavors = $_POST['flavors'];
        $isValid = true;
    }
    return $isValid;
}

function validateFlavors(){
    $flavorsValid = false;
    $flavorCount = 0;
    $validFlavors = array("grasshopper", "maple", "carrot", "caramel", "velvet", "lemon", "tiramisu");
    foreach ($_POST['flavors'] as $flavor){
        if (in_array($flavor, $validFlavors)){
            $flavorCount++;
        }
    }
    if($flavorCount != 0) {
        $flavorsValid = true;
    }
    return $flavorsValid;
}

function checkboxes(){
    $flavors = array("grasshopper" => "The Grasshopper", "maple" => "Whiskey Maple Bacon",
        "carrot" => "Carrot Walnut", "caramel" => "Salted Caramel Cupcake", "velvet" => "Red Velvet",
        "lemon" => "Lemon Drop", "tiramisu" => "Tiramisu");

    foreach($flavors as $flavor => $name){
        echo '<label>';
        echo '<input type="checkbox" value=' . "$flavor" . ' name=flavors[] ';
        if (in_array($flavor, $_POST['flavors'])){
            echo 'checked="checked"';
        }
        echo ">$name";
        echo '</label><br>';
    }
}
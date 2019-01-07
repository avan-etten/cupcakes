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
    } else {
        $username = $_POST['name'];
        $isValid = true;
    }
    return $isValid;
}

function checkboxes(){
    $flavors = array("grasshopper" => "The Grasshopper", "maple" => "Whiskey Maple Bacon",
        "carrot" => "Carrot Walnut", "caramel" => "Salted Caramel Cupcake", "velvet" => "Red Velvet",
        "lemon" => "Lemon Drop", "tiramisu" => "Tiramisu");

    foreach($flavors as $flavor => $name){
        echo '<label>';
        echo '<input type="checkbox" value=' . "$flavor" . ' name=flavors[]>' . "$name";
        echo '</label><br>';
    }
}
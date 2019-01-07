<?php
/**
 * Created by PhpStorm.
 * User: A-VE
 * Date: 1/7/2019
 * Time: 10:13 AM
 */



function checkboxes(){
    $flavors = array("grasshopper" => "The Grasshopper", "maple" => "Whiskey Maple Bacon",
        "carrot" => "Carrot Walnut", "caramel" => "Salted Caramel Cupcake", "velvet" => "Red Velvet",
        "lemon" => "Lemon Drop", "tiramisu" => "Tiramisu");

    foreach($flavors as $flavor => $name){
        echo '<label>';
        echo '<input type="checkbox" value="$flavor" name="flavors[]">'; echo $name;
        echo '<label><br>';
    }
}
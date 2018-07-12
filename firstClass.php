<?php
/**
 * Created by PhpStorm.
 * User: deepikagill
 * Date: 12/07/18
 * Time: 10:49 PM
 */
//Defining a Class
class firstClass {
    function add ($num1, $num2) {
        $sum=$num1+$num2;
        return $sum;

    }
}
//instantiating a class or creating an object
$var=new firstClass();

//calling the function of the class through the oject
echo $var->add(5,6);

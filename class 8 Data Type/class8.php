<?php

   echo "<h1>This is PHP Class 08 'DATA TYPE'</h1>" . "<br>";

   $_integer = 50; // purno sonkha
   $_string = "This is String"; // name
   $_float = 5.50; // decimal value
   $_boolean = true; // true/false
   $_null = null; // empty value
   $_array = array("","","","",) ; // multiple value


   // arithmetic operation

   $x = 50; // integer
   $y = 80.5; // float
   
   // plus
   echo $x + $y . "<br>"; // Output: 130.5
   // minus
   echo $x - $y . "<br>"; // Output: -30.5
   // multiplication
   echo $x * $y . "<br>"; // Output: 4025
   // division
   echo $x / $y . "<br>"; // Output: 0.621118
   // modulus
   echo $x == $y . "<br>"; // Output: (kono output dibe na karon false)

   // Null value 
   $_amount = 15872; // integer

   /* echo "$_amount". "<br>"; // Output: 15872 */

   $_amount = null;
   echo "$_amount". "<br>"; // Output:  (kono output dibe na karon null value)

?>
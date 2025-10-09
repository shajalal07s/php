<?php

   $_h1 = "This is a Class 9 file 'VAR DUMP'";
   $_p = "Var Dump Function use kore kno variable er data type and value dekhano jay <br>
          aita onk ta JavaScript er typeof er motoi kaj kore";
          
   echo  "<h1> $_h1 </h1>" . "<br>";
   echo "<p> $_p </p>" . "<br>  <br>";

   // variable declare
   $_name = "Shajalal"; // string
   $_Y= 50; // integer
   $_Z= 5.50; // float

   // var_dump function
   var_dump($_name);
   echo"<br>";
   var_dump($_Y);
   echo"<br>";
   var_dump($_name,$_Y);
   echo"<br>";

   // plus
   $plus = "$_name + $_Y";
   var_dump($plus);
   echo"<br>";

   // Null value
   $_vaule = null;
   var_dump($_vaule);
   echo"<br>";  
   
   // boolean value
   $_is_true = true;
   var_dump($_is_true);


   // vule compaier
   echo "<br>";
   echo "$_Y" != "$_Z"; // output dibe na karon false
   echo "<br>";

?>
<?
  
   echo "<h2>Class 19 'Ternary Oparetor'</h2> <br>";

  /* $_user = " ";
   $_user_password = 12345678;

   if ( $_user_password == 12345678 ) {
       $_user = "Vaild User";
   } else {
       $_user = "Not Vaild User";
   };

   echo "br" . $_user; */

   $_name = "Shajalal";
   $_age = "";

   if ( $_name = "Shajalal" ) {
      echo "<br> This name is vaild";
   } else {
      echo "<br> This name is not vaild";
   }

   $_name1 = ( $_name == "Shajalal" ) ? "<br> This name is vaild" : "<br> This name is not vaild";
   echo $_name1;

   


?>
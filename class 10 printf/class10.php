<?php

   $_h1 = "This is a Class 10 'PRINTF'";
   echo  "<h1> $_h1 </h1>" . "<br>";
   
   // variable
   $_schoool_name = "uttor bongo";
   $_school_student = 1200;
   
   // constant variable
   define("NAME", "shajalal");
   
   // printf function
   printf ("Colage_Name : %s", $_schoool_name);
   // printf ("Colage_Student : %d", $_schoool_student);

   echo "<br>";
   // string function
   echo "School Name : " . ucwords($_schoool_name) ;

   printf ("<br> School Name : %s", ucwords($_schoool_name));

   printf ("<br> What is your Name : %s <br> What is your colage Name : %s <br> Is Your Colage Student : %d <br> That is : %s", 
         ucfirst(NAME) 
         , ucwords($_schoool_name) , 
         $_school_student , "True");

   echo "<br>";
   echo "<br>";

   echo "<h1>HTML Code To UCWods</h1> <br>";

   // HTML code to ucwords
   $_heading_one = "hello , welcome to my website";
   $_heading_two = "this is my first website";

   // printf ("<h3></h3> %s <br>", ucwords($_heading_one));
   $_html_codde ="<div>
      <h2>%s</h2>
      <h3>%s</h3>
   </div>";

   // echo "$_html_codde";
   printf ($_html_codde, ucwords($_heading_one), ucwords($_heading_two));
   echo "<br>";
   echo "<br>";

   

?>
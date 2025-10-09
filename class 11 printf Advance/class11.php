<?php

   $_h1 = "This is a Class 11 'PRINTF ADVANCE'";
   echo  "<h1> $_h1 </h1>" . "<br>"; 

   // variable
   $_my_name = "shajalal"; // string
   $_last_name = "mia"; // string
   $_my_age = 24; // integer
   $_my_salary = 10000; // integer
   $_my_height = 5.7; // float
   $_my_weight = 65.5; // float

   // constant variable
   define("COUNTRY", "Bangladesh");
   define("IS_MARRIED", false);
   define("CHILDREN", null);

   // printf advance
   
   // ucwords & String er jonne %s
   printf ("Your Name : %s", ucwords($_my_name) ,"<br>"); 
   echo "<br>";
   // strtoupper & String er jonne %s
   printf ("Your Last Name : %s", strtoupper($_last_name) ,"<br>"); 
   echo "<br>";
   // integer er jonne %d
   printf ("Your Age : %d", $_my_age ,"<br>"); 
   echo "<br>";
   // unsigned integer er jonne %u
   printf ("Your Salary : %u", $_my_salary ,"<br>"); 
   echo "<br>";
   // float er jonne %f
   printf ("Your Height : %f", $_my_height ,"<br>");
   echo "<br>";
   // float er jonne %.1f (1 ta digit dekhabe)
   printf ("Your Weight : %.1f", $_my_weight ,"<br>");
   echo"<br>";
   echo "<br>";
   echo "<br>";

   // multiple variable

   $name = "Shajalal Mia";
   $age = 24;

   // printf ("My Name is %s <br> and <br> My Age is %d", ucwords($name), $age);

   printf ('%2$s %1$s <br>', $name, $age); 

   printf ('My Name Is : %1$s <br> My Age Is : %2$d <br> I Live In : %3$s <br> Am I Married : %4$s <br> Do I Have Children : %5$s', 
         ucwords($name), 
         $age, 
         COUNTRY, 
         IS_MARRIED ? 'Yes' : 'No', 
         CHILDREN ?? 'No Data Found'
   );

   echo "<br>";
   echo "<br>";

   printf ("<h3>My Name Is : %-'s15.4s</h3>", $name) // left side space 10 ta, max 4 ta letter dekhabe
   // printf ("<h3>My Name Is : %'10.4s</h3>", $name) // right side space 10 ta, max 4 ta letter dekhabe
   // printf ("<h3>My Name Is : %'10s</h3>", $name) // right side space 10 ta, sob letter dekhabe
   // printf ("<h3>My Name Is : %-'s10s</h3>", $name) // left side space 10 ta, sob letter dekhabe
   

?>
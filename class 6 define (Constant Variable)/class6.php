<?php
  
   // Constants Veriable

   define ("PROFESSION", "Web Developer");

   // Normal way to print constant veriable

   echo "My Profession is : " . PROFESSION . "<br>" . "This my profession" . "<br>";

   define ("YOUTUBECHNANEL", "Lean a professional web development");

      // Normal way to print constant veriable

   echo "Your channel Name is  : " . YOUTUBECHNANEL . "<br>" . "Your Profession : " . PROFESSION . "<br>";

   // PHP constant function

   echo constant ("YOUTUBECHNANEL") . "<br>";

   echo constant ("PROFESSION") . "<br>" . "<br>";




   // Magic Constant Example - 01

   echo "This is Magic Constant Example" . "<br>" . "<br>";

   define ("YOUTUBENAME", "WeboraST");

   $_channale = "constant";

   echo "My Youtube Channel Name : " . $_channale("YOUTUBENAME") . "<br>" ."<br>";

    // Magic Constant Example - 02

   define ("WEBSITE", "www.weborast.com");

   $_web = "constant";

   echo "Your Website Link : " .$_web("WEBSITE") . "<br>" . "<br>";



?>
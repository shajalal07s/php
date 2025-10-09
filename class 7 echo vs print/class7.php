<?php 

    // echo vs print

    // echo statements

    // echo akti statement & Print akti statement

    echo "This is echo statement" . "<br>";

    // echo multipul vaule add korte pari

    echo "hello,", " I", " ", " am", " Shajalal" . "<br>" . "<br>";

    // Example - 01

    /* ===============================
       echo function er moto use kora jai na 
       but print function er moto use kora jai
    =================================== */

    // Example - 02

    /* =============================
       echo te vule return kore na
       but print vule return kore
    ================================ */

    // Example - 03

    /* =============================
       echo te multipule value dite pari
       but print a multipule value dite pari na
    ================================ */


    // print statements
    print "This is print statement" . "<br>";

    // print multipul vaule add korte pari na

    // print ("hello,", " I", " ", " am", " Shajalal" . "<br>" . "<br>"); // Syntax Error Dakabe

    define ("NAME", "WeboraST");

    // print statement

    print "My Youtube Channel Name is : " . NAME . "<br>";


    // print function
    $_amount = print ("15872");

    echo "<br>" . $_amount . "<br>" . "<br>";



    // HTML code in PHP

    $_h1 = "Shajalal";
    $_h2 = "WeboraST";
    $_h3 = "A Button";
    $_button = "Subscribe";
    $_p = "lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,";

    echo "<h1> $_h1 </h1>" ."<br>" . "<h2> $_h2 </h2>";
    
    echo "<h3> $_h3 : </h3>" . "<br>" . "<button> $_button </button>" . "<br>" . "<p> $_p </p>" . "<br>";



?>
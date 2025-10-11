<?php
  
    echo "<h1>Class 14 'Increment and Decrement Operators'</h1> <br>";

    // Increment Operator
    // Increment operator is used to increase the value of a variable by one.
    // There are two types of increment operators:
    
    /* ========================= 
      Postfix  operator
    ========================= */
    
    echo "<h3>Postfix increment & Decrement operator</h3>";

    $_amount = 10;
    
    // Postfix Increment Return kore old value ++
    echo "Postfix Old Value Return ++ : " .$_amount++; // 10
    echo "<br>";
    echo "Postfix Old value final result ++ : ". $_amount . "<br>"; // 11

    // Postfix decrement operator
    $_amount_minus = 20;

    // Postfix decrement Return kore old value --
    echo "Postfix Old Value Return -- : " . $_amount_minus--; // 20
    echo "<br>";
    echo "Postfix Old value final result -- : ". $_amount_minus;  // 19


    /* ======================================
      Prefix Increment and Decrement Operators
    ========================================= */
    
    // Prefix potome ++ return kore new value dei
    // Prefix Increment Return kore new value ++ 
    echo "<br>";
    echo "<h3>Prefix increment & Decrement operator</h3>";
    $_amount2 = 15;

    // Prefix Increment Return kore new value ++
    echo "++ Prefix New Value Return  : " .++$_amount2; // 16
    echo "<br>";
    echo "++ Prefix New value final result : ". $_amount2 . "<br>"; // 16

    // Prefix Decrement Return kore new value --
    $_amount_minus2 = 25;
    echo "-- Prefix New Value Return  : " .--$_amount_minus2; // 24
    echo "<br>";
    echo "-- Prefix New value final result : ". $_amount_minus2; // 24



?>
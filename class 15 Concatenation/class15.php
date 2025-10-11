<?php
   
   echo "<h1>Class 15 'Concatenation'</h1> <br>";

   // Concatenation Operator (.) er kaj holo akta string er sathe onno string ke jora dawa.
    $firstName = "Rasel";
    $lastName = "Ahmed";
    $fullName = $firstName . " " . $lastName; // Concatenation
    echo $fullName; // Output: Rasel Ahmed

    echo "<br>";

    // Concatenation Assignment Operator (.=) er kaj holo akta string er sathe onno string ke jora dawa and sei jora kora string ke abar oi variable e assign kora.
    $greeting = "Hello";
    $greeting .= " World"; // Concatenation Assignment
    echo $greeting; // Output: Hello World

    // Note: Concatenation operator (.) and Concatenation Assignment operator (.=) sudhu string er sathe kaj kore.
    // Jodi apni number er sathe concatenation korte chan, tahole prothome number ke string e convert korte hobe.
    $age = 25;
    $ageString = "I am " . (string)$age . " years old.";
    echo "<br>" . $ageString; // Output: I am 25 years old.

    // Example with variables
    $city = "Dhaka";
    $country = "Bangladesh";
    $location = $city . ", " . $country;
    echo "<br>" . $location; // Output: Dhaka, Bangladesh

    // Example 2

    $part1 = "PHP is ";
    $part2 = "part1";
    $part3 = "awesome!";
    $fullSentence = $part1 . $part2 . " " . $part3;
    echo "<br>" . $fullSentence; // Output: PHP is part1 awesome!

    // Example 3
    $text = "Learning ";

    echo "<br>" . $text .=" PHP is fun!"; // Output: Learning PHP is fun!

?>
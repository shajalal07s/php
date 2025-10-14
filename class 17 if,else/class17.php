<?php

    echo "<h1>Class 17 'if and else'</h1> <br>";

    // if and else in PHP
    // if and else use kore amra kono condition check korte pari and oi condition true kina false kina ta check korte pari
    // if and else er sathe amra comparison operator o use korte pari
    // if and else er sathe amra logical operator o use korte pari
    // if and else er sathe amra arithmetic operator o use korte pari
    // if and else er sathe amra assignment operator o use korte pari
    // if and else er sathe amra string operator o use korte pari
    // if and else er sathe amra array operator o use korte pari
    // if and else er sathe amra bitwise operator o use korte pari
    // if and else er sathe amra error control operator o use korte pari

    $user_name = "admin";
    $password = "12345";
    // if and else use kore amra kono condition check korte pari
    if($user_name == "admin" && $password == "12345"){ // jodi user_name er value admin hoy and password er value 12345 hoy tahole true hbe and output hbe welcome to the admin panel
        echo "Welcome to the admin panel";
    }else { // jodi user_name er value admin na hoy and password er value 12345 na hoy tahole false hbe and output hbe invalid username or password
        echo "Invalid username or password";
    }

    // example 1

    $age = 17;
    if ( $age >= 18 ) {  // jodi age er value 18 hoy tahole true hbe and output hbe eligible to vote
        echo "<br> Youre eligible to vote";
    }else { // jodi age er value 18 na hoy tahole false and output hbe not eligible to vote
        echo "<br> Your are not vote";
    };

    // example 2

    $num = 11;

    if ( $num % 2 == 0 ) { // jodi num er value 2 diye vag kora hoy and vag sesh 0 hoy tahole num true hbe and output hbe even number
        echo "<br> $num is even number";
    }else { // jodi num er value 2 diye vag kora hoy and vag sesh 0 na hoy tahole num flase hbe and output hbe odd number
        echo "<br> $num is odd number";
    }

    echo "<h3>Practice 14-10-25</h3>";
    $_ammount = 500;

    // Gaterthen

    if (  $_ammount >= 501 ) {
        echo "<br>" . $_ammount."Amount is High";
    }else {
        echo "<br> Amount is Lower";
    }

    // Lessthen

    $_my_sallary = 10000;

    if ( $_my_sallary < 9999 ) {
        echo "<br> Ami Job Korbo Na";
    }else {
        echo "<br> Ami Job Korbo";
    }

    // Gaterten Equal To

    $_price = 120;
    $_product = "Clearman";

    if ( $_price >= 120  &&  $_product >= "Clearmen" ) {
        echo "<br> Your product buy sussesfully";
    }else {
        echo "<br> Your product buy not yet";
    }

    // Less then

    $_my_age = 24;
    $_my_name = "Shajalal";

    if ( $_my_age <= 23 && $_my_name == "Shajalal" ){
        echo "<br> That is vail ";
        // var_dump($_my_age);
    }else {
        echo "<br> That is not vail";
    }

    // Not Eqaul

    $_name = "Imarn";

    if ( $_name != "Imarn" ) {
        echo $_name ." <br> That my name";
    }else {
        echo $_name ." <br> is not my name";
    }

    // Module 

    $_number = 13;

    if ( $_number % 2 == 0 ) {
        echo "<br> This is evan number";
    }else {
        echo "<br > this a odd number";
    }

?>
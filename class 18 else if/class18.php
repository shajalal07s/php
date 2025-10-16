<?php

   echo "<h1>Class 18 'else if'</h1> <br>";
    // if, else if and else in PHP
    // if, else if and else use kore amra kono condition check korte pari and oi condition true kina false kina ta check korte pari
    // if, else if and else er sathe amra comparison operator o use korte pari

    $_admin_name = "admin";
    $_autor_name = "author";
    $_user_name = "user";

    if ( $_admin_name = "admin" && $_autor_name == "author" ) { // jodi admin_name er value admin hoy and autor_name er value author hoy tahole true hbe and output hbe welcome to the admin panel
        echo "Welcome to the admin panel";
    } else if ( $_user_name == "user" ) { // jodi user_name er value user hoy tahole true hbe and output hbe welcome to the user panel
        echo "<br> Welcome to the user panel";
    } else if ( $_autor_name == "author" && $_password = "12314" ) {
        echo "<br> Welcome to author panel";
    } else  {
        echo "Your are not valid user";
    }

    // example 1
    $age = 17;
    if ( $age >= 18 ) {  // jodi age er value 18 hoy tahole true hbe and output hbe eligible to vote
        echo "<br> Youre eligible to vote";
    } else if ( $age == 17 ) { // jodi age er value 17 hoy tahole true hbe and output hbe wait for one year
        echo "<br> Wait for one year";
    } else { // jodi age er value 18 na hoy tahole false and output hbe not eligible to vote
        echo "<br> Your are not vote";
    };

    // example 2

    $num = 11;

    if ( $num % 2 == 0 ) { // jodi num er value 2 diye vag kora hoy and vag sesh 0 hoy tahole num true hbe and output hbe even number
        echo "<br> $num is even number";
    } else if ( $num % 2 != 0 ) { // jodi num er value 2 diye vag kora hoy and vag sesh 0 na hoy tahole num flase hbe and output hbe odd number
        echo "<br> $num is odd number";
    } else {
        echo "<br> $num is not a number";
    }

    echo "<h3>Practice 14-10-25</h3>";
    $_ammount = 500;
    // Gaterthen

    if (  $_ammount >= 501 ) {
        echo "<br>" . $_ammount."Amount is High";
    } else if ( $_ammount == 500 ) {
        echo "<br> Amount is Medium";
    } else {
        echo "<br> Amount is Lower";
    }

    // Lessthen

    $_my_sallary = 10000;

    if ( $_my_sallary < 9999 ) {
        echo "<br> Ami Job Korbo Na";
    } else if ( $_my_sallary == 10000 ) {
        echo "<br> Ami Job Korbo";
    } else {
        echo "<br> Ami Job Korbo Yes";
    }

    // Gaterten Equal To

    $_price = 120;
    $_product = "Clearman";

    if ( $_price >= 120  &&  $_product >= "Clearmen" ) {
        echo "<br> Your product buy sussesfully";
    } else if ( $_price == 120  &&  $_product == "Clearmen" ) {
        echo "<br> Your product buy almost sussesfully";
    } else {
        echo "<br> Your product buy not yet";
    }

    // Less then

    $_my_age = 24;
    $_my_name = "Shajalal";

    if ( $_my_age <= 23 && $_my_name == "Shajalal" ){
        echo "<br> That is vail ";
        // var_dump($_my_age);
    } else if ( $_my_age == 24 && $_my_name == "Shajalal" ) {
        echo "<br> That is almost vail";
    } else {
        echo "<br> That is not vail";
    }

    // Not Eqaul

    $_name = "Imarn";

    if ( $_name != "Imarn" ) {
        echo $_name ." <br> That my name";
    } else if ( $_name == "Imarn" ) {
        echo $_name ." <br> is almost my name";
    } else {
        echo $_name ." <br> is not my name";
    }


    // Module

    $_number = 13;

    if ( $_number % 2 == 0 ) {
        echo "<br> This is evan number";
    } else if ( $_number % 2 != 0 ) {
        echo "<br > this a odd number";
    } else {
        echo "<br> This is not a number";
    }
    

?>
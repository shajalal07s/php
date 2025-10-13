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




?>
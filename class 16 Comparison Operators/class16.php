<?php
   
    echo "<h1>Class 16 'Comparison Operators'</h1> <br>";

    // Comparison Operators in PHP
    // ==  Equal
    // === Identical
    // !=  Not Equal
    // <>  Not Equal
    // !== Not Identical
    // <   Less than
    // >   Greater than
    // <=  Less than or Equal to
    // >=  Greater than or Equal to
    // <=> Spaceship
    // ??  Null coalescing operator

    $_num = 20;
    $_num2 = 19;

    // Greater Than
    // Greater than check kore potom vaule take ditiyo value bro ki na jodi bro hoy tahole false na hole true
    var_dump($_num > $_num2); // jodi prothom variable er value ditiyo variable er value take boro hoy thle false and soto hole true
    echo "<br>";

    // Less Than
    // aita grater than er ulta
    var_dump("Less than :" .$_num < $_num2); // 

    // Greater than or Equal to
    // aita check kore prothom variable er value ditiyo variable er value theke boro ba soman kina
    var_dump("Greater than or Equal to :" .$_num >= $_num2); // 20 boro tai true
    echo "<br>";

    // Less than or Equal to
    // aita check kore prothom variable er value ditiyo variable er value theke choto ba soman kina
    var_dump("Less than or Equal to :" .$_num <= $_num2); // 20 choto na tai false
    echo "<br>";

    // Equal
    // aita check kore prothom variable er value ditiyo variable er value er soman kina jodi soman hoy tahole true na hole false
    var_dump("Equal :" .$_num == $_num2); // 20 19 er soman na tai false
    echo "<br>";

    // Not Equal
    // aita check kore prothom variable er value ditiyo variable er value er soman na kina jodi soman na hoy tahole true na hole false
    var_dump("Not Equal :" .$_num != $_num2); // 20 19 er soman na tai true
    echo "<br>";

    // Identical ===
    // aita check kore prothom variable er value ditiyo variable er value er soman kina and data type o same kina jodi soman hoy tahole true na hole false
    var_dump("Identical :" .$_num === $_num2); // 20 19 er soman na tai false
    echo "<br>";

    // Not Identical !==
    // aita check kore prothom variable er value ditiyo variable er value er soman na kina and data type o same kina jodi soman na hoy tahole true na hole false
    var_dump("Not Identical :" .$_num !== $_num2); // 20 19 er soman na tai true
    echo "<br>";
    // Spaceship <=>
    // aita check kore prothom variable er value ditiyo variable er value theke boro kina jodi bro hoy tahole 1 return korbe, jodi choto hoy tahole -1 return korbe, jodi soman hoy tahole 0 return korbe
    var_dump("Spaceship :" .$_num <=> $_num2); // 20 19 er soman na tai 1 return korbe
    echo "<br>";


    // Example 

    echo "<h2>Example of Comparison Operators</h2>";
    $a = 10;
    $b = 20;

    echo "Less than : ";
    var_dump($a < $b);  // true / Karon akane b hocce 20 ja a 10 take boro tai true
    echo "<br>";
    echo "Greater than : ";
    var_dump($a > $b);  // false / Karon akane b hocce 20 ja a 10 take choto tai false
    echo "<br>";
    
    // less than or Equal to

    $c= 10;
    $d= "10";

    echo "Less tan or Equal to : ";
    var_dump($c <= $d); // akane true / Karon akane c hocce 10 and d hocce "10" ja c er soman tai true
    echo "<br>";
    echo "Greater than or Equal to : ";
    var_dump($c >= $d); // akane true / Karon akane c hocce 10 and d hocce "10" ja c er soman tai true
    echo "<br>";
    echo "Equal == : ";
    var_dump($c == $d); // akane true / Karon akane c hocce 10 and d hocce "10" ja c er soman tai true
    echo "<br>";
    echo "Identical === : ";
    var_dump($c === $d); // akane false / Karon akane c hocce 10 and d hocce "10" ja c er soman na tai false
    echo "<br>";
    echo "Not Equal != : ";
    var_dump($c != $d); // akane false / Karon akane c hocce 10 and d hocce "10" ja c er soman tai false
    echo "<br>";
    echo "Not Equal <> or !== : ";
    var_dump($c !== $d); // akane true / Karon akane c hocce 10 and d hocce "10" ja c er soman na tai true
    echo "<br>";

    echo "<h2>Example of Comparison Operators Spaceship Operator</h2>"; 
    // spaceship operator

    $x = 50;
    $y = 30;

    // spaceship operator
    // aita check kore prothom variable er value ditiyo variable er value theke boro kina jodi bro hoy tahole 1 return korbe,
    // jodi choto hoy tahole -1 return korbe, jodi soman hoy tahole 0 return korbe

    var_dump($x <=> $y); // akane 1 return korbe / Karon akane x hocce 50 and y hocce 30 ja x er boro tai 1 return korbe
    echo "<br>";

    $t=3;
    $r=8;

    // spaceship operator
    var_dump($t <=> $r); // akane -1 return korbe / Karon akane t hocce 3 and r hocce 8 ja t er choto tai -1 return korbe
    echo "<br>";

    
?>
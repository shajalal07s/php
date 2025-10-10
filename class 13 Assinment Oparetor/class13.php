<?php
   
   echo "<h1>This is Class 13 'Assignment Operator'</h1> <br>";

   // Assignment Operators

   // =, +=, -=, *=, /=, %=, .=

   $_first_amount = 24;
   $_second_amount = 10;

   // $final_amount = $_first_amount + $_second_amount;
   // echo "The Final Amount is : " . $final_amount . "<br>";

   // += potome fist vule er satha second vule jog kore then jogfol ke first vule te assign kore dey
   // 24 + 10 = 34
   $_result = $_first_amount += $_second_amount;
   echo "+= First + Second Jog : " . $_result . "<br>";

   // -= potome fist vule er satha second vule biyog kore then biyogfol ke first vule te assign kore dey
   // 34 - 10 = 24
   $_result = $_first_amount -= $_second_amount;
   echo "-= First + Second Minus : " . $_result . "<br>";

   // *= potome fist vule er satha second vule gun kore then gunfol ke first vule te assign kore dey
   // 24 * 10 = 240
   $_result = $_first_amount *= $_second_amount;
   echo "*= First + Second Gun : " . $_result . "<br>";

   // /= potome fist vule er satha second vule vag kore then vagfol ke first vule te assign kore dey
   // 240 / 10 = 24
   $_result = $_first_amount /= $_second_amount;
   echo "/= First + Second Vag : " . $_result . "<br>";

   // %= potome fist vule er satha second vule vag ses kore then vag ses ke first vule te assign kore dey
   // 24 % 10 = 4
   $_result = $_first_amount %= $_second_amount;
   echo "%= First + Second VagSes : " . $_result . "<br>";

   // .= potome fist vule er satha second vule jog kore then jogfol ke first vule te assign kore dey String akare jog hoi
   // "24" . "10" = "2410"
   $_result = $_first_amount .= $_second_amount;
   echo ".= First + Second Jog : " . $_result . "<br>";

   // End of the PHP code



?>
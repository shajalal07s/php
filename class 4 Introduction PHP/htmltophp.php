<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prctice 1</title>
</head>
<body>
    <?php 
       $_total_amount =102.2;
       $_your_country = "Bangladesh";
       $_your_city = "Dhaka";
       $_your_name = "Shajalal Hossain";
       $_your_phone = "01712345678";
       $_your_email = "shajalalmia912@gmail.com";
       $_your_profession = "Web Developer";
    ?>

    <div>
        <!-- Name -->
        <h1>
            Your Name : 
            <?php 
              echo $_your_name;
            ?>
        </h1>

        <!-- Country -->
        <h1>
            Your Country : 
            <?php 
              echo $_your_country;
            ?>
        </h1>

        <!-- City -->
        <h1>
            Your City : 
            <?php 
              echo $_your_city;
            ?>
        </h1>

        <!-- phone -->
        <h1>
            Your City : 
            <?php 
              echo $_your_phone;
            ?>
        </h1>

        <!-- Email -->
        <h1>
            Your Email : 
            <?php 
              echo $_your_email;
            ?>
        </h1>

        <!-- Profession -->
        <h1>
            Your Profession : 
            <?php 
              echo $_your_profession;
            ?>
        </h1>

        <!-- Amount -->
        <h1>
            Your Amount : 
            <?php 
              echo $_total_amount;
            ?>
        </h1>

    </div>

    <div class="div">
      <box1>
        <?php
        
         echo $_your_profession;
        ?>
      </box1>
      <box1></box1>
      <box1></box1>
    </div>
</body>
</html>
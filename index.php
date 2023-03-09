<!DOCTYPE html>
<html lang="en">
    <head>
      
    <!-- Meta data -->
    <meta charset="utf-8">
    <meta name="description" content="My Area and Perimeter of a Rectangle in PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="ZoiaB">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- Web page title -->
    <title>Area & Perimeter of Rectangle in PHP</title>
    </head>
    <body>
    <h1><?php echo "Another Area & Perimeter of a Rectangle"; ?></h1>
    <p>I am moving on to building skyscrapers, and now I need to know the area and perimeter of one side of the building. The dimensions are as follows:</p>

    <!-- Statements for length and width -->
    <?php 
      $length = 150;  
      $width = 60; 
      echo "<p>Length = $length m<br>Width = $width m</p>"; 
    ?>

    <!-- Calculations for area and perimeter -->
    <?php 
      echo "<p>The area of a rectangle with dimensions $length m x $width m = " . ($length * $width) . "m<sup>2</sup>.</p>";
    ?>

    <?php 
      echo "<p>The perimeter of a rectangle with dimensions $length m + $width m + $length m + $width m = " . ($length + $width + $length + $width) . "m<sup>2</sup>.</p>";
            ?>
    </body>
</html>
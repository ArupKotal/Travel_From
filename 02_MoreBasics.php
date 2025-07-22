<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 80%;
        background-color: gray;
        margin: auto;
        padding: 23px;
    }
</style>

<body>
    <div class="container">
        <h1>Lets learn about PHP</h1>
        <p>Your party status is here:</p>
        <?php
        $age = 7;
        if ($age > 18) {
            echo "Your can go to the party";
        } else if ($age == 7) {
            echo "You are 7 years old";
        } else if ($age == 6) {
            echo "You are 6 years old";
        } else {
            echo "You can not go to the party";
        }
        // Array in PHP

        echo "<br>";
        $languages = array("python", "C++", "PHP", "NodeJs",);
        echo $languages[0];

        echo "<br>";
        $language = array("python", "C++", "PHP", "NodeJs",);
        echo $languages[1];

        echo "<br>";
        $languages = array("python", "C++", "PHP", "NodeJs",);
        echo count($languages);

        // Loops in PHP
        
        $a = 0;
        while ($a <= 10) {
            echo "<br>The value of a is: ";
            echo $a;
            $a++;
        }

          // Iterating arrays in PHP using While loops
          $a = 0;
          while ($a < count($languages)) {
              echo "<br>The value of languages is: ";
              echo $languages[$a];
              $a++;
          }

          //  do While loops
          $a = 0;
          do  {
              echo "<br>The value of a is: ";
              echo $a;
              $a++;
          } while ($a < 10);

          $a = 20;
          do  {
              echo "<br>The value of a is: ";
              echo $a;
              $a++;
          } while ($a < 10);

          $a = 200;
          do  {
              echo "<br>The value of a is: ";
              echo $a;
              $a++;
          } while ($a < 10);

            //   For loops
              for ($a=0; $a < 10; $a++) { 
                echo "<br>The Value of a from the for loop is:";
                echo $a;
              }

            //   Foreach loop
            foreach ($languages as $value){
                echo "<br>The value from foreach loop is";
                echo $value;
            }

            // function 
            echo "<br>";
            function print5(){
                echo "FIVE";
            }
            print5();
            echo "<br>";
            print5();
            echo "<br>";
            print5();
            echo "<br>";
            print5();
            echo "<br>";
            print5();
            echo "<br>";

            function print_number($number){
                echo "<br>Your number is: ";
                echo $number;
            }
            print_number(45);
            echo "<br>";
            print_number(75);
            echo "<br>";
            print_number(105);
        ?>

    </div>

</body>

</html>
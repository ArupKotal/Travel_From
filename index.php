<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial </title>
</head>

<body>
    <div class="container">
        This is my first php website.

        <br>


        <?php
        define('PI', 3.14);
        echo "Hello world and this is printed using php"
        ?>
        <br>

        
        <?php
        echo "Hello world"
        ?>

        <br>

        <?php
        // srecte algrithom
        $Variable6 = 5;
        $Variable7 = 2;
        echo $Variable6;
        echo $Variable7;
        echo "<br>";
        echo $Variable6 + $Variable7;
        echo "<br>";


        // Operators in PHP
        // Arithmetic Operators
        echo "The Value of variable6 + variable7 is";
        echo "<br>";
        echo $Variable6 + $Variable7;
        echo "<br>";

        echo "The Value of variable6 - variable7 is";
        echo "<br>";
        echo $Variable6 - $Variable7;

        echo "<br>";

        echo "The Value of variable6 * variable7 is";
        echo "<br>";
        echo $Variable6 * $Variable7;

        echo "<br>";

        echo "The Value of variable6 / variable7 is";
        echo "<br>";
        echo $Variable6 / $Variable7;
        echo "<br>";

        // Assignment Operators
        $newVar = $Variable6;
        echo "The Value of new variable is";
        echo "<br>";
        echo $newVar;
        echo "<br>";

        $newVar = $Variable6;
        $newVar +=1;
        echo "The Value of new variable +1 is";
        echo "<br>";
        echo $newVar;
        echo "<br>";

        $newVar = $Variable6;
        $newVar -=1;
        echo "The Value of new variable  -1 is";
        echo "<br>";
        echo $newVar;
        echo "<br>";

        $newVar = $Variable6;
        $newVar *=2;
        echo "The Value of new variable  *2 is";
        echo "<br>";
        echo $newVar;
        echo "<br>";

        $newVar = $Variable6;
        $newVar /=2;
        echo "The Value of new variable  /2 is";
        echo "<br>";
        echo $newVar;
        echo "<br>";

        $newVar = $Variable7;
        echo "The Value of new variable is";
        echo "<br>";
        echo $newVar;
        echo "<br>";

        $newVar = $Variable7;
        $newVar +=1;
        echo "The Value of new variable +1 is";
        echo "<br>";
        echo $newVar;
        echo "<br>";

        $newVar = $Variable7;
        $newVar -=1;
        echo "The Value of new variable  -1 is";
        echo "<br>";
        echo $newVar;
        echo "<br>";

        $newVar = $Variable7;
        $newVar *=2;
        echo "The Value of new variable  *2 is";
        echo "<br>";
        echo $newVar;
        echo "<br>";

        $newVar = $Variable7;
        $newVar /=2;
        echo "The Value of new variable  /2 is";
        echo "<br>";
        echo $newVar;
        echo "<br>";

        // Comparison Operators
        // echo "<h1> Comparison operators </h1>";
        echo "The value of 1==4 is";
        echo var_dump(1==4);
        echo "<br>";

        echo "The value of 4==4 is";
        echo var_dump(4==4);
        echo "<br>";

        echo "The value of 1!=4 is";
        echo var_dump(1!=4);
        echo "<br>";

        echo "The value of 1>=4 is";
        echo var_dump(1>=4);
        echo "<br>";

        echo "The value of 1<=4 is";
        echo var_dump(1<=4);
        echo "<br>";

        // Increment/Decrement Operators
        echo $Variable6++;
        echo "<br>";
        echo $Variable6;
        echo "<br>"; 

        echo $Variable6--;
        echo "<br>";
        echo $Variable6;
        echo "<br>";

        echo ++$Variable6;
        echo "<br>";
        echo $Variable6;
        echo "<br>";

        echo --$Variable6;
        echo "<br>";
        echo $Variable6;
        echo "<br>";

        // Logical operators

        // and (&&)
        // or (||)
        // xor
        // not (!)

        // and (&&)
        $myVar = (true and true);
        echo var_dump($myVar);
        echo "<br>";

        $myVar = (false and false);
        echo var_dump($myVar);
        echo "<br>";

        $myVar = (true and false);
        echo var_dump($myVar);
        echo "<br>";

        $myVar = (false and true);
        echo var_dump($myVar);
        echo "<br>";

        // or (||)
        echo "<br>";
        $myVar = (true or true);
        echo var_dump($myVar);
        echo "<br>";

        $myVar = (false or false);
        echo var_dump($myVar);
        echo "<br>";

        $myVar = (true or false);
        echo var_dump($myVar);
        echo "<br>";

        $myVar = (false or true);
        echo var_dump($myVar);
        echo "<br>";

        // xor
        echo "<br>";
        $myVar = (true xor true);
        echo var_dump($myVar);                                                                               
        echo "<br>";

        $myVar = (false xor false);
        echo var_dump($myVar);
        echo "<br>";

        $myVar = (true xor false);
        echo var_dump($myVar);
        echo "<br>";

        $myVar = (false xor true);
        echo var_dump($myVar);
        echo "<br>";
        ?>

        <?php
        // Data types in PHP
        // 1. String
        // 2. Integer
        // 3. Float
        // 4. Boolean
        // 5. Array
        // 6. Object
        echo "<br>Data types<br>";
        $var = "This is a string";
        echo var_dump($var);
        echo "<br>";
        
        $var = 67;
        echo var_dump($var);
        echo "<br>";

        $var = 67.1;
        echo var_dump($var);
        echo "<br>";

        $var = true;
        echo var_dump($var);
        echo "<br>";
        echo PI;

        ?>


      
    </div>
</body>

</html>
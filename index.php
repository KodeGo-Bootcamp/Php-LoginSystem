<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUR FIRST PHP SCRIPT</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>

</head>
<body>
    <header>
        <div class="header">
            <?php 
                echo 'My first PHP Script with single quotes';
                echo '<br>';
                echo "My third PHP Script with single quotes";
            ?>
            
        </div>
    </header>
    <section>
        <h2>REACT SECTION</h2>
        
        <div id="mydiv"></div>

    </section>
    <br>
    <section>
        <h2>WHAT IS PHP?</h2>
        <ul>
            <li>PHP is an acronmy for Hypertext Preprocessor.</li>
            <li>It is widely used and an open source scripting language.</li>
            <li>PHP scripts are executed on the server.</li>
            <li>PHP is free to download and use.</li>
            <li>It is a powerful scripting language that it is used by the biggest blogging system on the web - WordPress!!</li>

        </ul>
        <hr>

        <hr> 

        <h2>Two common types of programming pardigm that you will encounter</h2>
        <ol>
            <li>Procedural Programming</li>
            <li>Object Oriented Programming</li>
        </ol>

        <hr> 

        <h2>What can PHP DO?</h2>
        <li>It can generate dynamic page content</li>
        <li>It can create, open, read, write, delete and close files on the server.</li>
        <li>Receive and send cookies</li>
        <li>Can perform CRUD - CREATE, READ, UPDATE, DELETE in our databse</li>
        <li>Setup control user-access</li>
        <li>Encrypt data</li>
    </section>

    <br>
    <hr>
    <section>
        <h2>Two basic ways to get output</h2>
        <ul>
            <li>echo statement</li>
            <li>print statement</li>
        </ul>
        <p>
            Hi, this is a paragraph content inside a paragraph element. 
        </p>
        <?php
            echo "Hello world, I'm Rod!!!";
            echo '<br>';
            echo "This is also a paragraph inside of a php tag";
            echo "<br>";
            echo "<br>";
            echo "<p>This is another <b>paragraph</b> that got displayed inside php tags.</p>";


        ?>

        <?php 
           echo "Print statement can be used with or without () parenthesis";
           print "Hello world! <br>";
           print "This is an example of a print statement to display output on the browser";
        ?>
    </section>

    <hr>

    <section>
        <h2>Without escaping</h2>
        <?php // This is an example without escaping
        if(1 == 1){
            echo "<p>This works alright with an if statement!</p>";
        }
        ?>

        <h2>With escaping examples</h2>

        
        <?php
        /*
        This is an example of a multi-line 
        comment in 
        php.
        */
         if(1 == 1) { 
        ?>

        <p>This should also work with the implementation of the concept of excaping in PHP!!!</p>

        <?php 
            }
        ?>
        
    </section>

    <section>
        <h2>Scalar data types</h2>
        <strong>DATA TYPES</strong>

        <strong>NOTE:</strong><p>We have at least 12 PRIMITIVE DATA TYPES</p>

        <h3>Scalar Data Types</h3>
        <ul>
            <li>Strings</li>
            <li>Integers</li>
            <li>Floats</li>
            <li>Boolean</li>
        </ul>

        <h3>Compound</h3>
        <ul>
            <li>Array</li>
            <li>Object</li>
            <li>Callable</li>
            <li>Iterable</li>
        </ul>

        <h2>Special</h2>
        <ul>
            <li>Resource</li>
            <li>NULL</li>
        </ul>

        <h2>Pseudo-Types</h2>

    </section>

    <section>
        <h2>String data types</h2>
            <ul>
                <li>Single quotes</li>
                <li>Double quotes</li>
            </ul>
            <p>It is importnat to take note of cancelling out double quotes in sie of our double quotes</p>
        
        
        <?php
            //"SELECT person WHERE name= 'Rodrigo' ASC"
            
            // INCORRECT
            //echo 'I'm learning how to work with strings in PHP!!!!';
            
            echo "I'm learning how to work with strings in PHP!!!! This is printed out with double quotes.";
            echo '<br>';
            echo 'I\'m learning how to work with strings in PHP!!! This is printed out with single quotes with escape character.';

        ?>

            <hr>
        <h2>Integer Data</h2>
        <?php
           echo 20 . " This is an integer data type."; // this is  a integer data type in php
            echo "<br>";
           echo "20" . " This is a string data type." ; // this is a string data type in php 
           echo "<br>";
           echo "<p>'10' is not equal to 10 in PHP.</p>";
           if ("10" == 10){
              echo "This is not the same data type!";
           }
        ?>


        <h2>Float Data Types</h2>
        <?php
          echo 24.5;
          echo "<br>";
          echo 10.35;
          echo "<br>";
          echo 1000.12345;


          //PHP 
          echo "In PHP we dont need any extra keywords in defining float data types: " . 20.5;
          echo "<br>";
          echo "Unlike with C# we need to define a float: " . '20.5f';
        ?>

        <hr>
        <h2> Adding Line breaks</h2>
        <?php 
        echo "if you view the page source \n you'll find a new line in this string";
        echo "<br>";
        echo nl2br("if you view the page source \n you'll find a new line in this string");
        ?>

        <hr>
        <h2>Boolean</h2>
        <?php 
        $a = true; 
        if ($a === true){
            echo "Variable A is equal to true";
        }
        ?>

        <hr>
        <h2>Declaring Variables</h2>
        <?php
        echo "<h3>Rules in declaring variables</h3>";
        echo "<ul>";
        echo "<li>Don't start your variable name with a number</li>";
        echo "<li>A variable name can start with a letter and an underscore</li>";
        echo "<li>It cannot start with a number</li>";
        echo "<li>It is Case Sensitive</li>";
        echo "<li>A variable name can only have alphanumeric characters</li>";
        echo "</ul>";
        ?>

        <hr>
        <?php 
        print "<h2>Coding Challenge for Variables</h2>";


        //Declare a variable and assign value of string data type
        echo "<p>Declare a variable and assign value of string data type</p>";
        $name = "Gilbert";
        echo "I am " . $name;
        echo "<br>";
        
        
        //Declare a variable and assign number data type
        $number = 16;
        echo "My favorite number is " . $number;
        //Declare a variable and assign a boolean data type
        echo "<br>";
        $a = false;
        echo "The boolean value is" . $a;
        //Declare a variable and assign float data type
        echo "<br>";
        $float = 1.1416;
        echo "The float number is" . $float;

        echo "<hr>";

        echo "<h2>CONSTANTS IN PHP</h2>";


        CONST PI = 3.14;
        CONST BALL_HEIGHT = 5;
        CONST BALL_WIDTH = 5;

        echo PI;
        echo "<br>";
        echo "The ball width is " . BALL_WIDTH . ".";
        echo "<br>";
        echo "The ball height is " . BALL_WIDTH . ".";

        CONST PLAYER_HEIGHT = 5;
        ?>


    </section>

    <section>
        <h2>EXPRESSIONS IN PHP</h2>

        <ul>
            <li>Operators</li>
            <li>Conditions</li>
            <li>Loops</li>
        </ul>

        <hr>
        <h2>OPERATORS</h2>
        <li>Arithmetic Operators</li>
        <li>Assignment Operator</li>
        <li>Comparison Operator</li>
        <li>Increment/Decrement Operators</li>
        <li>Logical Operators</li>
        <li>String Operators</li>
        <li>Array Operator</li>
        <li>Conditional Assignment Operator</li>
        <li>Operator Precedence</li>
        <li>Error control operators</li>
        <li>Execution control operators</li>
        <li>Type operators</li>
        <li>Bitwise operator</li>

        <hr>

        <?php
        $num1 = 1;
        $num2 = 2;
        $sum;
        $product;
        $difference;
        $quotient;
        
        echo  "<h3>ARITHMETIC OPERATORS</h3>";
        $sum = $num1 + $num2;
        echo $sum;
        echo "<br>";
        $product = $num1 * $num2;
        echo $product;
        echo "<br>";
        $difference = $num1 - $num2;
        echo $difference;
        echo "<br>";
        $quotient = $num1 / $num2;
        echo $quotient;

        ?>

        <hr>
        <?php 
        echo  "<h3>ASSIGNMENT OPERATORS</h3>";
        echo  "<h4>Compound assignment with augmented addition</h3>";

        //$num1 =+ $num2; this will only assign the value of 2 to num1

        $num1 += $num2; // shorthand for $num1 = $num1 + $num2;


        // This assignment operator is the same as 1 + 2 which is a shorthand for $num1= $num1 +$num2;
        echo $num1; // Num 1 now has a value of 3
        echo "<br>";
        $num1 = $num1 + $num2;
        print $num1; // We re-assign the value and added 3 to 2
        ?>


        <?php 
        echo "<h2>COMPARISON OPERATORS</h2>";
        $num1 == $num2;
        $num1 === $num2; 
        $num1 !== $num2;
        $num1 < $num2;
        $num1 > $num2;
        $num1 <= $num2;
        $num1 >= $num2;
        $num1 <=> $num2;

        ?>

        <?php 
            $num1 = 1;
            $num2 = "2";
            $num1 == $num2;
            $num1 === $num2;
        ?>
    </section>


    



    <script>
         const PLAYER_SPEED = 10;
        console.log(PLAYER_SPEED);
    </script>

    <script type="text/babel">
      function Hello() {
        return <h1>Hello World! This is an example of REACT embeded on a php file!</h1>;
      }
      
      ReactDOM.render(<Hello />, document.getElementById('mydiv'));
    </script>
</body>
</html>
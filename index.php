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
        $num1 === $num2; // Strict not equality operator this should not be performing any coercion 
        $num1 != $num2; 
        $num1 !== $num2; // Strict not equality operator
        $num1 < $num2;
        $num1 > $num2;
        $num1 <= $num2;
        $num1 >= $num2;
        $num1 <=> $num2;

        ?>

        <?php 
            $num1 = 1;
            $num2 = "1"; 
            //$num1 == $num2;
            //$num1 === $num2;
            echo "Variable \$num1 is an example of an integer!";
            echo "<br>";
            echo gettype($num1);
            echo "<br>";
            echo "Variable \$num2 is an example of a string!";
            echo "<br>";
            echo gettype($num2);
            echo "<br>";

            echo "<p>\$num1 with an assigned value of 1, is not equal to \$num2 with assigned value of '1'</p>";
            if($num1 !== $num2){
                echo "This is printed after an if statement as an example of comparing two data types that are strict not equal to one another.";
            }

            $num3 = "1";
            $num4 = 4;
            $num5 = "4";
            
            echo gettype($num4);
            echo gettype($num5);
            echo "<br>";
            echo "<br>";
            if($num4 != $num5){
                echo "This will not be printed out.";
            }else{
                echo "This gets printed because num4 and num5 are not equal to one another.";
            }


            $num6 = 4;
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            
            echo "<hr>";

            echo "<h3>Greater than or less than comparison operator</h3>";

            $num1 = 1;
            $num2 = 2;
            $num3 = 2;
            $num4 = 4;
            $num5 = 5;
            $num6 = 5;

            if ($num1 < $num2){
                echo "num1 is less than num2";
            }

            echo "<br>";

            if ($num3 <= $num2){
                echo "num3 is less than or equal to num2";
            }

            echo "<br>";

            if($num5 >= $num6){
                echo "num5 is greater than or equal to num6";
            }
            echo "<br>";
            echo "<br>";
            echo "<h3>Spaceship comparison operator</h3>";

            $num1 = 1;
            $num2 = 3;
            $num3 = 3;

            if($num1 <=> $num2){
                print "If the one on the right is greater than the number on the left this should return -1.";
            }; 

            echo "<br>";
            echo "<br>";

            print($num1<=>$num2);

            echo "<br>";
            echo "<br>";
            print($num2<=>$num3); // this should produce a value of 0

            // if($num2 <=> $num3){
            //     print "If both numbers are equal to one another this should return 0.";
            // }; 
            echo "<br>";
            echo "<br>";
            echo $num2 <=> $num1; // this should produce a value of positive 1

            echo "<hr>";
            echo "<h3>Logical Operators : LOGICAL AND &&</h3>";

            $num1 = 5;
            $num2 = 10;

            if($num1 === 5 and $num2 ===10){
                echo "This is the AND operator in action";
                echo "<br>";
            };
            
            if($num1 === 5 && $num2 ===10){
                echo " This is the && shorthand for the and operator in action";
                echo "<br>";
            };


            echo "<h3>Logical Operators : LOGICAL OR ||</h3>";

            
            if($num1 === 5 OR $num2 ===10){
                echo "This is the OR operator in action";
                echo "<br>";
            };
            
            if($num1 === 1 || $num2 === 10){
                echo " This is the || shorthand for the OR operator in action";
                echo "<br>";
            };


            echo "<hr>";


            echo "<h3>Logical Operators : LOGICAL XOR</h3>";

            $num1 = 10;
            $num2 = 20;
            $num3 = 5;
            $num4 = 6;

            if ($num1 === 10 XOR $num2 ===5){
                $result = $num1 === 10 xor $num2 ===5;
                echo "<br>";
                echo "<br>";

                echo "true XOR false";
                echo "<br>";

                echo "If one of these value are true display this text.";
                echo "<br>";
                echo $result ? "true" : "false";
            };

            echo "<h3>Logical Operators : NOT EQUAL</h3>";

            $num1 = 100;

            var_dump($num1 !== 100);
            echo "<br>";
            var_dump($num1);


            echo "<br>";
            echo "<br>";


            echo "<hr>";

            echo "<h2>INCREMENT AND DECREMENT</h2>";

            $num1 = 9;
            //$num1++;
            //var_dump($num1++);
            
            ++$num1;
            var_dump(++$num1);
            

            $num1 = 9;
            $num1--;
            var_dump($num1--);
            
            //--$num1;
            //var_dump(--$num1);
            

            echo "<h2>STRING OPERATORS</h2>";

            $a = "My name ";
            $b = "is Rodrigo! ";
            $c = $a . $b;
            echo "<br>";
            echo "<br>";
            
            echo $a;
            
            echo "<br>";
            echo "<br>";

            echo $b;
            
            echo "<br>";
            echo "<br>";

            echo $c;

            echo "<br>";
            echo "<br>";
            $g = "My name is ";
            $h = $g . ' Rodrigo Lopez!';

            echo $h;

            



            
        ?>


    </section>
    <hr>
    <section>
    <h2>CONTROL STRUCTURES</h2>

    <?php
        echo "<h3>CONDITIONAL STATEMENTS</h3>";

        echo "<h4>IF CONDITIONAL STATEMENTS</h4>";
        /*
        if(){
            // code
        };
        */

        echo "if(condition){";
        echo "<br>";
        echo "//code";
        echo "<br>";
        echo "};";
        echo "<br>";echo "<br>";
       
       
        $a = 20;
        $b = 5;

        if($a === $b){
            echo "Variable \$a is the same value with variable \$b.";
        }elseif($b === 5){
            echo "Variable \$b is equal to 10";
        }
        else{
            echo "They are NOT the same";
        }

        echo "<h4>SWITCH CONDITIONAL STATEMENTS</h4>";

        $a = 0;
        switch($a){ // this is our condition
            case 50: // Thi sis the first value we check if it is true
                echo "Variable is equal to 50!!"; // our code that we want to display if the value is true.
                break; // we add the break statement to add a break to our code when we write our switch cases. 
            case 100:
                echo "Variable is equal to 100!";
                break;
            default: // this is the same feature as the else statement.
            echo "Did not find the equal value";
        }// End of SWTICH STATEMENT.

        echo "<br>";
        $a = false;

        if($a === true){
            echo "variable is true!";
        }

        elseif($a === false){
            echo "varaible is false!";
        }
        
        echo "<br>";
        echo "<h4>LOOPSh4>";

        /*
        $a = 20;
        $b = 20;

        if($a === $b){
            echo "These values are the same";
        }

        */

        echo "<hr>";
        echo "<h4>WHILE LOOPS</h4>";

        $a = 0;
        $b = 10;

        while ($a < $b){
            $a++;
            echo "Keep looping this!";
            echo "<br>";
            echo "<br>";
            
        }

        echo "<br>";
        echo "<br>";
        echo "<h4>INFINITE LOOP<span style='color: red'>THIS IS BAD!!!</span></h4>";


        echo "while (true === true){";
        echo "<br>";
        echo "echo 'This will continue to run FOREVER!!!' <span style='color: red'>DONT DO THIS!!!</span> ";
        echo "<br>";
        echo "}";


        echo "<hr>";
        echo "<h4>DO WHILE LOOPS</h4>";

        $a = 5;
        do {
            echo "Loop number " . $a++;
            echo "<br>";
        } while ($a <= 10);

        echo "<br>";
       
        echo "<h4>FOR LOOPS</h4>";

        for ($i=0; $i< 20; $i++){
            echo "This should run 10 times!!!";
            echo "<br>";
            echo "<br>";
        }

        echo "<hr>";
        
        echo "<h4>FOREACH LOOPS</h4>";
        
        $array = ["Rod",  "Jash", "Don", "Jerome", "Kevin", "Reyna", "Benedict", "Hermart"];

        foreach($array as $value){
            echo $value;
            echo "<br>";
        };

        // ASSOCIATIVE ARRAYS
        echo "<br>";echo "<br>";
            $person = [
                "First Name" => "Rodrigo",
                "Last Name" => "Lopez",
                "Eye Color" => "Black"
            ];

            foreach($person as $key => $value){
                echo $key . ": " . $value;
                echo "<br>";
            }


            // First loop we are gtting the First Name key and the Value of Rodrigo
            // Second loop we are referencing the Last name and the Value of Lopez
            // We are referencing the Eye Color and the Value of Blue.



        

    ?>

     
    </section>

    <section>
        <?php
    
            echo "<h2>BREAK AND CONTINUE STATEMENTS</h2>";

            $a = 1; 

            while ($a <= 10) {
                if($a === 7){
                    break;
                }// end of if statement
                echo $a++;
                echo "<br>";
            }// end of while loop


            // NESTED STATEMENTS 
            echo "<h3>NESTED WHILE LOOP</h3>";
            echo "<br>";
            $a = 1; 
            while ($a++) { // The 
                echo $a;
                while ($a >= 10){
                    break 2; // If you give this break statement a value of 1 it will crash your browser. 
                    
                }
                echo "<br>";
            }// end of while loop

            echo "<br>";

            echo "<h2>CONTINUE STATEMENTS</h2>";

            // ITERATION meaning

            // When we are doing loops we are having ITERATIONS

            // Each time we LOOP we call that ITERATION

            // BREAK STATEMENT WE ARE STOPPING the LOOP vs the SWITCH STATEMENT we are SKIPPING

            // BREAK = STOP , CONTINUE = SKIP

            $a = 0;

            while($a < 10){
                $a++;
                if($a === 5){
                    continue;
                }
                echo $a;
                echo "<br>";

            };




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
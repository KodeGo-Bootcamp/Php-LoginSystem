<?php
include_once 'header.php';
?>

<main>
    <section>
        <div class="functions">
            <h2>FUNCTIONS</h2>
            <h3>TWO THIINGS TO TAKE NOTE OF WHEN WORKING WITH FUNCTIONS</h3>
            <ol style="text-align:left">
                <li>INTERNAL FUNCTIONS - BUILD IN FUNCTIONS (METHODS)</li>
                <li>USER DEFINED FUNCTIONS</li>
            </ol>
            <hr>

            <?php
                echo "<h2>Built in Functins or Internal Functions to the language</h2>";
                $a = "Hello world!";
                // echo $a;
                echo "<br>";
                echo str_replace("world", "Rodrigo!", $a);

                $b = "Hi!";
                echo $b;
                echo "<br>";
                $greeting = " Rod,";
                echo str_repeat($greeting,3);
                echo "<br>";

                $a = "Hello World!";
                //$char = "He"; index of 0
                //$char = "ll"; index of 2
                //$char = "lo"; index of 3
                $char = "Wo"; // index of 6
                echo stripos($a, $char);



                echo "<hr>";
                echo "<h2>USER DEFINED FUNCTIONS</h2>";
                function displayMessage(){
                    echo "Hello world! This is a userDefined function I have created!!!";
                }

                displayMessage();

                // function calculateAdd(int $num1, int $num2){
                //     $add = $num1 + $num2;
                //     return $add;

                // }

            
                

            ?>
        </div>
    </section>
    <section>
                <div class="form">
                    <form action="funcCalc.php" method="get">
                        <input type="text" name="num1" placeholder="Number1">
                        <select name="operations" id="">
                            <label for="operations"></label>
                        </select>
                        
                        <input type="text" name="num2" placeholder="Number2">
                        <button type="submit">CALCULATE</button>
                    </form>
                </div>
    </section>
</main>

<?php
         include_once 'footer.php';
        ?>
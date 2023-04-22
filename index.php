<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Programming - PHP</title>
</head>

<body>

    <h1>OOP - Object Oriented Programming with PHP</h1>

    <p> Compared to other OOP languages (Object oriented programming) PHP is much easier compared
        to some programming languages. </p>

    <p> C#, Python, Java and Ruby</p>

    <p>PHP5 and higher </p>


    <h2>WHY USE OOP? </h2>
    <ul>
        <li>OOP is faster and easier to execute</li>
        <li>Providing a clear structure for your programs</li>
        <li>Practice DRY "Don't Repeat Yourself", we write code that is a lot easier to maintain and debug</li>
        <li>Create Reusable applications</li>
        <li>Companies want OOP</li>
        <li>Better for group work!</li>
        <li>Better organize or code</li>
        <li>Medium - Large websites</li>
    </ul>

    <hr>

    <h2>MVC MODEL</h2>
    <h3>TASKS OF PHP</h3>
    <ol>
        <li>Query and connect to db.</li>
        <li>Get input from users.</li>
        <li>Display things on the website.</li>
    </ol>



    <!-- 
<script>
    setTimeout(() => {
        
    }, timeout);
</script> -->

    <?php
    echo "<hr>";
    echo "<h2>FirstClass Example</h2>";
    echo "<br>";
    include_once 'includes/FirstClass.php';
    ?>


    <hr>

    <h2>CONSTRUCTS</h2>

    <?php
    class Fruit
    {
        //Properties
        public $name;
        public $color;


        //Methods
        function __construct($name)
        {
            $this->name = $name;
        }

        function getName()
        {
            return $this->name;
        }
    }

    $apple = new Fruit('Apple');
    $banana = new Fruit("Banana");

    echo $apple->getName();
    echo "<br>";
    echo $banana->getName();
    // Call using browser when the user clicks on something
    // Call or invoke a funciton inside of our script or code 
    ?>


    <h3>CODING CHALLENGE</h3>
    <?php
    //connection from the Construct.php
    include_once 'includes/Construct.php';

    // ECHO an instance of CAR OBJECT HERE
    echo $bmw->getModel();
    echo "<br>";
    echo $bmw->getColor();
    ?>


    <hr>

    <h2>Visibiliy and Inheritance</h2>
    <?php
    include_once 'includes/Player.php';

    $pet01 = new Pet();
    $player01First = new PlayerName();

    echo $pet01->owner(); // method owner from the PET class is private -> That is why we are getting a uncaught error > This  will be solved if we set private to public access modifier.

    //echo $player01First->petOwner();


    ?>

    <hr>
    <?php
    echo "<h3>CODING CHALLENGE VISIBILITY AND INHERITANCE</h3>";

    // Connect Fruits.php 
    include_once 'includes/Fruit.php';

    // create an object from the class Person.
    $person = new Person("Eric");


    // display output for the favorite food of the person.
    echo $person->eatFruit();
    ?>


</body>

</html>
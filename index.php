<?php
declare(strict_types = 1);
include_once 'includes/header.php';
include 'includes/autoloader.inc.php';

?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Programming - PHP</title>
</head>

<body> -->

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
    include_once 'classes/FirstClass.class.php';
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
    include_once 'classes/Construct.php';

    // ECHO an instance of CAR OBJECT HERE
    echo $bmw->getModel();
    echo "<br>";
    echo $bmw->getColor();
    ?>


    <hr>

    <h2>Visibiliy and Inheritance</h2>
    <?php
    include_once 'classes/Player.php';

    $pet01 = new Pet();
    $player01First = new PlayerName();

    echo $pet01->owner(); // method owner from the PET class is private -> That is why we are getting a uncaught error > This  will be solved if we set private to public access modifier.
    
    echo "<br>";
    echo $player01First->favoriteGame();
    //echo $player01First->petOwner();


    ?>

    <hr>
    <?php
    echo "<h3>CODING CHALLENGE VISIBILITY AND INHERITANCE</h3>";

    // Connect Fruits.php 
    include_once 'classes/Fruit.php';

    // create an object from the class Person.
    $person = new Person();


    // display output for the favorite food of the person.
    echo $person->eatFruit();
    ?>

  <hr> 

  <h2>Constructors Continuation and Destructors</h2>

  <?php

include_once 'classes/Person.php';
  $person2 = new Person2("rod", "green",40);
//   echo $person2->getName();
//   echo $person2->getEyeColor();
//   echo $person2->getAge();

  ?>

<hr>
  <?php 
    echo "<hr>";
    echo "<h3>Construct Destruct Coding Challenge</h3>";

    // connect index.php to Personality.php
  include_once 'classes/Personality.php';

    // Create new instance of the Personality class
  //  $Personality = new Personality("Cheerful", "Comic", "Happy");
  
  ?>
  <br>

<hr> 

  <h2>DELETING OBJECTS IN OOP</h2>
  <?php 
    include_once 'classes/Delete.php';
   // $object = new DeleteObject();
  // unset($object);
   // echo $object->getProperty();

   // var_dump($object);
    
    // echo "<br>";

    //  if ($object == null){
    //      echo "<strong>This is a deleted object</strong>";
    //  }else{
    //      echo "This object has been instantiated!!";
    //  }


    // echo "<br>";
  ?>

  <hr>

  <h2>Static Properties and Methods</h2>
   <p>We want to learn when to use static properties and methods over using objects that we can create our classes.</p>     

    <?php
      include_once 'classes/Static.php';
      include_once 'classes/User.php';
      include_once 'classes/Static-Procedural.php';
    //   $username = new Person3('rod', 'blue', 40);
    //   $username->setName('diguy');
     
    //   echo $username->getName();
    //   echo "<br>";

      echo Person3::$drinkingAge;
      Person3::setDrinkingAge(21);
      echo "<br>";
      echo Person3::$drinkingAge;

      echo "<hr>";
      echo "<h3>Second Example For Constant PI</h3>";
      echo PI::staticMethod();


    //   staticInfo();

   echo $information;
   //staticInfo('Information test'); // this will not work

    ?>


<hr>
<h2>Autoload and Namespaces</h2>
<?php 
$owner1 = new Owner\Owner('Rod', 'red', 40);
echo $owner1->getOwnerName();


$houseAddress = new House('Municipality of Marilao', 23);
echo $houseAddress->getAddress();
?>


<hr>
<h2>Type Declarations</h2>

<p><strong>NOTE:</strong>
Type declaration can be sometimes referred to as Type hinting. They are both essentially just the same. 
</p>
<?php

$cid = new Person5\Person5();

try{
  $cid->setName('Cid');
  echo $cid->getName();
}catch (TypeError $e)
{
  echo "Error!: " . $e->getMessage();
}

?>

<hr>

<?php 

// $s1 = ScopeExample1\ScopeExample1::EXAMPLE;
// $s2 = ScopeExample1\ScopeExample1::test();
// echo $s1;


// $s3 = ScopeExample1\ScopeExample2::anotherTest();
// echo $s3;


$s1 = ScopeExercise\ScopeExample1::EXAMPLE;
$s2 = ScopeExercise\ScopeExample1::test();
echo $s1;


$s3 = ScopeExercise\ScopeExample2::anotherTest();
echo $s3;
?>

<br>
<br>
<br>
<br>
<br>
<br>
<hr>

</body>

</html>
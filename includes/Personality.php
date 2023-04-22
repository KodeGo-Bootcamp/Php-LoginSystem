<?php 

// create a Personality class
class Personality{
// create public properties cheerful, comic, and happy
    public $personality1;
    public $personality2;
    public $personality3;
// Create a construct function to automatically call the function at the beginning of the script 
    public function __construct($personality1, $personality2, $personality3)
    {
        $this->personality1 = $personality1;
        $this->personality2 = $personality2;
        $this->personality3 = $personality3;
    }

// Create a  destruct functin to automatically end this script.
    public function __destruct(){
        echo "The 1st personality is {$this->personality1}.";
        echo "<br>";
        echo "Then, the 2nd one is {$this->personality2}!";
        echo "<br>";
        echo "Last but not the least, {$this->personality3}.";
    }
}


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

    <script type="text/babel">
      function Hello() {
        return <h1>Hello World! This is an example of REACT embeded on a php file!</h1>;
      }
      
      ReactDOM.render(<Hello />, document.getElementById('mydiv'));
    </script>
</body>
</html>
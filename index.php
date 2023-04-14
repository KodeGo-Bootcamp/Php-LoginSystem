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
                echo "My first PHP Script!";
            ?>
            
        </div>
    </header>
    <section>
        <h2>WHAT IS PHP?</h2>
        <ul>
            <li>PHP is an acronmy for Hypertext Preprocessor.</li>
            <li>It is widely used and an open source scripting language.</li>
            <li>PHP scripts are executed on the server.</li>
            <li>PHP is free to download and use.</li>
            
        </ul>

        
    </section>

    <div id="mydiv"></div>

    <script type="text/babel">
      function Hello() {
        return <h1>Hello World! This is an example of REACT embeded on a php file!</h1>;
      }
      
      ReactDOM.render(<Hello />, document.getElementById('mydiv'))
    </script>
</body>
</html>
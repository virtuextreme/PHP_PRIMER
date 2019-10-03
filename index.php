<?php 
    $title = "Index";
    include 'includes/header.php';
    
?>






    <!-- Basic PHP -->
    <h1>Hello World - Php - Primer</h1>
    <?php
    /* Printing to html using echo*/
    //printing to html
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
    ?>

    <?php
        echo '<br/>';
        //declare variable
        $name = 'Damian Salesman';
        $age = 21;
        //echo variable
        echo $name;
    
        echo '<h1> My Name is: ' .$name.' <h1>';
        echo '<h1> My age is: ' .$age.' <h1>';

        echo "<h1>My Name is: $name </h1>";

    
    ?>
    <button type="button" class="btn btn-dark">Click Me</button>
    <button type="button" class="btn btn-primary">Click Me</button>
    <button type="button" class="btn btn-success">Click Me</button>
    <a href="https://www.heroku.com" target= "_blank"class="btn btn-danger">Heroko.com</a>

   <?php require 'includes/footer.php' ?>
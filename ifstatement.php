<?php 
    $title = "If Statement";

include 'includes/header.php';?>

<body>
    <h3 styles = "color: red "> </h3>
    <?php

        echo "<h2> If Statement</h2>";

        $grade = 50;

        if($grade >= 50 ){
            echo '<h3 style ="color: green">You have pass</h3>';
        }
        else{
            echo '<h3 style ="color: red">You have failed</h3>';

        }
        $grade = 'B';
        
        //if - else
        if($grade == 'A'){
            echo "<h2>You are a SUPER STAR</h2>";
        }
        elseif ($grade == 'B') {
            echo '<h2 style ="color: blue">You did Well</h2>';
        }
        else {
            echo '<h2 style ="color: red">You have Failed</h2>';
           
        }
    ?>
<?php require 'includes/footer.php' ?>
<?php 
    $title = "Switch Statement";

include 'includes/header.php';?>

<body>
    <h1>Switch Statement</h1>
    <?php
        $grade = 'A';

        switch ($grade) {
            case 'A':
            echo '<h3 style ="color: green">You are a SUPER STAR</h3>';
                break;
            
            case 'B':
            echo '<h3 style ="color: blue">You did WELL</h3>';           
                break;
            default:
                echo '<h3 style ="color: red">You have Failed</h3>';   
                break;
        }
    ?>
    
    <?php require 'includes/footer.php' ?>
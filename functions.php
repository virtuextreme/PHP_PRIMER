<?php 
    $title = "Function";

include 'includes/header.php';?>

<body>
    <h1>Functions</h1>
    <?php
        //define function
        function writeMessage(){
            echo "You are a really nice person, have a nice time!"; 
        }
        //calling a function
        writeMessage();

        echo "<hr/>";
        writeMessage();
        
        //functio with parameters

        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            echo "The sum if num1 and num2 is : $sum <br/>"; 
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }

        //& pass the value outside the function in stead overwrite by 500
        function changeNum(&$num){
            $num = $num + 10;
            //$num+= 10;
        }

        function returnProduct($num1,$num2){
            $prod = $num1 * $num2;
            return $prod;
        }
        $num = 500;
        addFunction(10,20);
        addFunction(10,$num);
        addFunction(10,20);
        addFunction('10',"50");

        changeNum($num);
        echo $num . '<br/>';

        $return_value = returnProduct(10,200);
        echo $return_value . '<br/>';




    ?>

<?php require 'includes/footer.php' ?>
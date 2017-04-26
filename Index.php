<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php 
$a = 100;
$b = 0xfff;
$c = 0562;
$d = -123.23;
$e  = 0;
$f = 1.7e-5;
    
echo "Result = "  . $a ." , ". $b ." , ". $c ." , ". $d ." , ". $e ." , ". $f;
?>
<p style="color:red">  
<?php 
    $fruits = array(5,10,3);
    $var = 'Something';
    $arr = array(5,10,3,"Some string",false,2.45,$var);
    $apples = $fruits[0];
    $bananas = $fruits[1];
    $fruits[2] = 24;
    $orange = $fruits[2];
    
    echo 'Array fruits: [';
    echo $apples." , ". $bananas ." , ". $orange;
    echo "];";
    echo '<br> Array arr: [';
    echo implode(",",$arr);
    echo "];";
    
    ?>
    </p>
    
     <?php
$myArray = array(10 => 'hello', 20 => 'world');
echo '<pre>';
print_r($myArray);
echo '</pre>';

$Country = array("Paris" => "France", "London" => "England", "Roma" => "Italy", "Madrid" => "Spane", "Tokio" => "Japan");
echo $Country["Paris"];
$Country["Paris"] = 3;
echo '<br>';
echo $Country["Paris"]; 

$fruit = array('apple' => 5, 'banana' => 10);
$vegetable = array('cucumber' => 6, 'eggplant' => 3);
$food = array($fruit, $vegetable);

    
print_r($food);
echo '</pre>';

$mm = array("Author" => "Bulhakov", "Price" => 10);
$dgPortrait = array("Author" => "Wilde", "Price" => 9);
$book = array($mm, $dgPortrait);
echo '<pre>';
print_r($book);
echo '</pre>';
    
$a = false;
$b = true;
$c = null;
var_dump($a, $b, $c,$some_undefined_var);
echo '<br>';
echo '<pre>';
var_dump($myArray);
echo '</pre>';
echo '<br>';
    ?>
<?php
    echo "To boolean <br>";
    $a=0;
    $b=-15;
    $c=23.5;
    $d='hello';
    $e='0';
    $f='';
    
    var_dump((bool)$a,(bool)$b,(bool)$c,(bool)$d,(bool)$e,(bool)$f);
    echo '<br>';
    ?>
<?php
    echo '<br> To string <br>';
    $a = false;
    $b = 23.2;
    
    var_dump((string)$a);
    echo'<br>';
    var_dump((string)$b);
    echo'<br>';
    ?>
<?php
    echo'<br> To numbers <br>';
    $a = false;
    $b = 3.654;
    $c = '-2items';
    $d = '0.5 kg';
    $e = 'Added 10 points';
    
    var_dump((int)$a,(int)$b,(int)$c,(int)$d,(int)$e);
    ?>
    
   
    
<?php
    echo '<br><br>';
    $a ='432';
    $c = 123;
    settype($a,'integer');
    settype($c,'string');
    define('GRAV_AC',9.81);
    define('ENTITY_DIR','Model/Entity');
    echo GRAV_AC;
    ?>
    
<?php
    echo '<br><br>';
    $myVar='hey';
    $hey = 'bro';
    $bro = 'Hello,variable)';
    echo $$hey;
    echo '<br>';
    echo $$$myVar;
   
    ?>
<?php
    echo '<br><br>';
    $hello = 'Hi';
    $Hi = 'Yes';
    $Yes = 'No';
    $No = 'Type';
    $Type = 'Very Good !';
    
    echo $$$$$hello;
    ?>
    
</body>
</html>
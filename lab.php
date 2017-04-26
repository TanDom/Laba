<!DOCTYPE HTML>
<html>

<head>
</head>

<body>
  <?php


$a = 100;
$b = 150;

echo ($a>$b)?"a - max":"b-max";
?>
    <?php
$a =3;
switch($a){
    case 1; echo 'One';break;
case 2; echo 'Two';break;
case 3; echo 'Three';break;
case 4; echo 'Four';break;
default; echo 'NULL';break;
}
?>
      <?php
echo '<br>';
echo '<br>';
for($i=0;$i<10;$i++)
{
    
    echo $i;
    echo '<br>';
}
?>
        <?php
echo '<br>';
echo 'while';
echo '<br>';
$arr = array('One','Two','Three');
$i=0;
while($i<count($arr))
{
    echo $arr[$i];
    $i++;
}
?>
          <?php
echo '<br>';
echo '<br>';
echo 'do-while';
echo '<br>';
$cond = false;
do
{
    echo "It's a miracle!";
}
while($cond);
?>
            <?php
echo '<br>';
echo '<br>';
echo 'foreach';
echo '<br>';
$arr = array('One','Two','Three');
foreach($arr as $item)
{
    echo $item;
}
?>
              <?php
echo '<br>';
echo '<br>';
echo '<br>';
$menu=array('Home'=>'/','About us'=>'/about','Products'=>'/products','Contact us'=>'/contact');
foreach($menu as $name => $link):
?>
                <a href='<?=$link?>'>
                  <?=$name?>
                </a>
                <?php endforeach;?>

<?php
echo '<br>';
echo '<br>';
for($i=0;$i<100;$i++)
{
    if ($i<2)
        continue;
    else
    {
        $check=true;
        for($j=2;$j<$i;$j++)
        {
            if ($i%$j===0)
                $check=false;
        }
        if ($check===true)
            echo $i." ";
    }
}
?>
<?php
function test($x,$y)
{
    if($y==0)
    {
        return false;
    }
    return $x/$y;
}
echo test(1,5) or die('Error');
echo 'Unreached line';
?>

<?php
echo '<br>';
echo "Оператор исполнения команд";

$a=`dir`;
echo $a;
?>

</body>

</html>
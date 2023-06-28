<?php 

echo "hello php!<br>";

$firstName = "Avi";
$lastName= "levi";
$age = 12;

echo "person".$firstName.$lastName.$age."<br>";
echo "person2 $firstName , lastname $lastName , age $age<br>";

$num = 23;

if($num < 0) {
    echo "$num is negative <br>";
}
elseif($num === 0) {
  echo "$num is zero <br>";
}
else {
  echo "$num is positive <br>";
}

$count = 1;

while($count <=10 ){
    echo  $count ." ";
    $count ++;

}
echo "<br>";

for ($i=1; $i<=10; $i++){
      echo $i ." ";
}
echo "<br>";
//array
$arr = array(10,20,30,40);
for ($i=0; $i<count($arr); $i++){
   echo $arr[$i] . " ";
}

echo "<br>";
//object
$cat = new stdClass();

$cat->name = "Mitsi";
$cat->price = "75";

echo $cat->name. $cat->price;

echo "<br>";
function displayMessage($msg,$times=1){
    for($i=1; $i<=$times; $i++){
        echo $msg ." ";
    }
}
displayMessage("php is fun ",3);
echo "<br>";

function getMax($a , $b){
    return $a> $b ? $a :$b;
}

echo "Max between 10 and 20:   ". getMax(10,30)."<br>";

require_once "./calc.php";

echo getAvarage(23,45,65);
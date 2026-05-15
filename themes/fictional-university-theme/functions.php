<?php
function myName(){
 $name1 = "babalo";
 $name2 = "mogqala";
    echo "hi my name is " . $name1;
     echo " hi my name is " . $name2;
}
myName();
$arrayNames = array("hi","you","j");

$count = 1;
while($count <= 2){
echo "<li>$arrayNames[$count]</li>";
$count++;
}
while ($count <= 10) {
    echo "<li>$count</li>";
    $count++;
}

?>
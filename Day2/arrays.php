<?php
$color = array("White", "black", "bule");
echo "This is"." $color[2]";

echo "<br>";

$ages = array("Peter"=>22, "Clark"=>32, "John"=>28);
print_r($ages);

echo "<br>";
echo "<br>";

$contacts = array (
    array (
        "love" => "I Love you Prio",
        "brek" => "I hate you sali",
    ),
    array (
        "pulak" => "Please love me",
        "bithi" => "no way you are a liar",
    ),
);
print_r ($contacts);

echo "<br>";

$bithi = array("I", "love", "you", "mask hacker");
print_r ($bithi);
var_dump($bithi);

echo "<br>";
echo "<br>";

$latter = array('b', 'c', 'f', 'g', 'e');
rsort($latter);
echo ($latter[0]);


echo "<br>";
echo "<br>";

$prime = array("cse" => 50, "bba" => 52, "law" => 51);

asort($prime);
print_r ($prime);
arsort($prime);
print_r ($prime);

echo "<br>";
echo "<br>";

ksort($prime);
print_r($prime);
echo "<br>";
echo "<br>";
krsort($prime);
print_r($prime);
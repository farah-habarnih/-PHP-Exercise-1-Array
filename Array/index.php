<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise #2</title>
</head>
<body>
    <?php
// PHP Array
// (1)  Write a script to generate the following paragraph "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. -Richard M. Nixon" The words 'red', 'green' and 'white' should come from $colors array. 
$colors = array('red','green','white');
$arr = array('The','memory','of','that','scene','for','me','is','like','a','frame','of','film','forever','frozen','at','that','moment:','the',$colors[0],'carpet,','the',$colors[1],'lawn,','the',$colors[2],'house','the','leaden','sky.','The','new','president','and','his','first','lady.','-','Richard','M.','Nixon','"');
echo join(" ",$arr);
echo "<br>"."<br>";


// (2) Write a PHP script that will display the colors as unordered list : $colors = array("Green", "Red", "White"); 
$arr1 = array("Green", "Red", "White"); 
echo "<ul>
<li>$arr1[0]</li>
<li>$arr1[1]</li>
<li>$arr1[2]</li>
</ul>";

echo "<br>"."<br>";


// (3) Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
$cities = array("Italy" => "Rome", "france" => "Paris", "Germany" => "Berlin", "Greece" => "Athens","Netherlands" => "Amsterdam"); 
echo "The capital of Netherlands is ".$cities['Netherlands']."<br>";
echo "The capital of Greece is ".$cities['Greece']."<br>";
echo "The capital of Germany is ".$cities['Germany']."<br>";

echo "<br>"."<br>";


// (4) Write a PHP script to display the first element of the above array. 
$colors1 = array("Green", "Red", "White"); 
echo "$colors1[0]";

echo "<br>"."<br>";


// (5) Write a PHP script that inserts a specific new item in an array in any position. 
$arr2= array(1,2,3,4,5);
array_splice($arr2,3,0,'$');
echo join(" ",$arr2);

echo "<br>"."<br>";


// (6) Write a PHP script to sort the following associative array depending on the key value [asc] : Sample Input:
$fruits = array("d" => "lemon", "a" => "orange","b" => "banana", "c" => "apple"); 
asort($fruits);

foreach($fruits as $x => $fruits)
   {
   echo $x . " = " . $fruits;
   echo "<br>";
   }

echo "<br>"."<br>";



// (7) Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures.
$temp =array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68,73,75,79,73);
echo "Average Temperature is : ".array_sum($temp)/count($temp)."<br>";
echo "List of five lowest temperatures : ";
sort($temp);
for($i=0; $i < 5; $i++)
   {
   echo $temp[$i].",";
   }
echo "<br>";

echo "List of five highest temperatures : ";
rsort($temp);
for($i=0; $i < 5; $i++)
   {
   echo $temp[$i].",";
   }

echo "<br>"."<br>"."<br>";



// (8) Write a PHP program to merge the following two arrays. 

$array1 = array("color" => "red",2,4);
$array2 = array("a","b","color" => "green", "shape" => "trapezoid",4);

print_r(array_merge($array1,$array2));


echo "<br>"."<br>"."<br>";



// (9) Write a PHP function to change the following array's and convert all the strings to upper case. 
$colors2 = array("red","blue","white","yellow");  
$j = 0;
foreach( $colors2 as $element ) {
    $colors2[$j] = strtoupper($element);     
    $j++;
} 
foreach( $colors2 as $element )
    echo $element . "\n";

echo "<br>"."<br>"."<br>";

// (10) Write a PHP function to change the following array's and convert all the strings to lower case. 
$colors2 = array("RED","BLUE","WHITE","YELLOW");  
$j = 0;
foreach( $colors2 as $element ) {
    $colors2[$j] = strtolower($element);     
    $j++;
} 
foreach( $colors2 as $element )
    echo $element . "\n";

echo "<br>"."<br>"."<br>";



// (11) Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4. 
for ($i=200; $i<250; $i=$i+4){
    if($i == 248){
    echo $i;
    }
    else{
    echo $i.",";
    }
}
echo "<br>"."<br>"."<br>";


// (12) Write a PHP script to get the shortest/longest string length from an array. Sample Input: 
$words = array("abcd","abc","de","hjjj","g","wer");
$i=0;
$short =strlen($words[0]);
foreach( $words as $element ) {
    if(strlen($element) < $short ){
    $short = strlen($element);
    }
    $i++;
}
$i=0;
$long =strlen($words[0]);
foreach( $words as $element ) {
    if(strlen($element) > $long ){
    $long = strlen($element);
    }
    $i++;
}
echo "The Shortest array length is ".$short." . "."The longest array length is ".$long.".";

echo "<br>"."<br>"."<br>";


// (13) Write a PHP script to generate unique random 10 numbers within a specific range.
for ($j=0; $j < 10; $j++){ 
echo(rand(11,20)." ");
}

echo "<br>"."<br>"."<br>";



// (14) Write a PHP script that returns the lowest integer in the array that is not 0. 
$array3 = array( 2, 0, 10, 12, 6);
$low = $array3[0];
for($i=0; $i<count($array3); $i++){
if($array3[$i] < $low && $array3[$i]!= 0){
    $low = $array3[$i];
}
}
echo $low;


?>
    
</body>
</html>
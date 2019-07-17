<?php

//variables

 $name = "dolly";
 
 echo " <p>My name is $name.</p> ";
 
 $string1 = " <p>this is the first part";
 
 $string2 = " of a sentence.</p> ";
 
 echo $string1.$string2;
 
 $myNumber = 45;
 
 $calculation = $myNumber * 32 / 97 + 4;
 
 echo " the result of the calculation is $calculation.";
  
 $myBool = FALSE;
 
 echo "<p>This statement is true? ".$myBool."</p>";
 
 $variableName = "name";
 
 echo $$variableName;
 
 
 //arrays
 
 $myArray = array("doll", "rob", "aashuuu", "shrishhh");
 
 $myArray[] ="kitty";
 
 
 print_r($myArray);
 
 echo $myArray[3];
 
 echo "<br><br>";
 
 $anotherArray[0] = "pizza";
 
 $anotherArray[1] = "burger"; 
 
 $anotherArray[5] = "coffee";
  
 $anotherArray["myFavouriteFood"] = "tikki";
 
 print_r($anotherArray);
 
  echo "<br><br>";
 
 $thirdArray = array(
 
 "France" => "French",
 "USA " => "English", 
 "Germany" => "German"

 );
 
 unset($thirdArray["France"]);
 
 print_r($thirdArray);
 
echo sizeof($thirdArray);
 
 
// if statements


echo "<br><br>";

$user = "andy";

if($user == "rob") {
	
	echo "Hello rob!";

	
} else {
	
	
	echo "I dont know you";
	
}

echo "<br><br>";

$age = 15;

if($age >= 18 || $user == "rob") {
	
	echo " you may proceed!";
	
	
} else {
	
	echo "Your are too young, sorry!";
	
}



//for and foreach loops


echo "<br><br>";

for ($i = 2; $i <= 30; $i=$i+2) {
	
	 echo $i."<br>";
	 
}
	
echo "<br><br>";

$family = array("doll", "aashuuu", "shrish", "rajoo");

foreach($family as $key => $value) {
	
	$family[$key] = $value." percival";
	
	echo"Array item ".$key." is ".$value."<br>";
	
	
	
}

for($i = 0; $i < sizeof($family); $i++) {
	
echo $family[$i]."<br>";
	
	
}


for ($i = 10; $i >= 0; $i--) {
	
	 echo $i."<br>";
	
	
	
}






//while loops





echo "<br><br>";

$family = array("doll", "aashuuu", "shrish", "rajat");

$i=0;

while($i < sizeof($family)) {
	
 echo $family[$i]."<br>";

 $i++; 
	
}




 $i= 5;
 
 while($i <= 50) {
	 
	
    echo $i."<br>";

	
	 $i=$i+5;
	 
	  
 }
 





 
 ?>
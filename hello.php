
<?php
	
$headerNumber = 1;
while ($headerNumber <= 6) {
echo "<h$headerNumber>Today is " . date("Y.m.d") . "</h$headerNumber>";
$headerNumber = $headerNumber + 1;
}

$numberOfHeaders = random_int(10, 100);
$colorArray = ["red", "blue", "green"];
while ($numberOfHeaders > 0) {
$typeOfHeader = random_int(1, 6); 
$randomColor = $colorArray[random_int(0,2)];
$number = random_int(100, 1000000); 
//echo "<h$typeOfHeader>$number</h$typeOfHeader>"; // <h3>101</h3>
echo "<h$typeOfHeader style=" . '"color:' . "$randomColor;" . '"' . ">$number</h$typeOfHeader>";//
$numberOfHeaders = $numberOfHeaders - 1;
}

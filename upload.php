<?php

session_start();
$photoArr = [];
$uploaddir = '/Applications/MAMP/htdocs/1312_SSL/Anderson_Jeanna_Practical/Part1/img/';
$uploadfile = $uploaddir . basename($_FILES['upload']['name']);

//move upload like me putting a variable as a destination
move_uploaded_file($_FILES['upload'], "/Applications/MAMP/htdocs/1312_SSL/Anderson_Jeanna_Practical/Part1/img/");

echo '<pre>';
if (move_uploaded_file($_FILES['upload']['tmp_name'], $uploadfile)) {
    
    $photoUp = $_FILES['upload']['name'];
    array_push($photoArr, $photoUp);

    $_Session['photoArr'] = $photoArr;

} else {
    echo "Possible file upload attack!\n";
}

//echo '<img src="img/'. $_FILES['upload']['name'] . '" >';
$photoArr = $_Session['photoArr'];
	foreach ($photoArr as $photo) {
    	echo '<img src="img/'. $photo . '" >';
    }


print "</pre>";
?>
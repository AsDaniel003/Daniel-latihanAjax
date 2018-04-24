<?php
//array with names
$a[] = "AsDaniel";
$a[] = "Ami";
$a[] = "Jihan";
$a[] = "Kurnia";
$a[] = "Cistin";
$a[] = "Madan";

// get the a parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
	$q = strtolower($q);
	$len=strlen($q);
	foreach($a as $name) {
		if (stristr($q, substr($name, 0, $len))) {
			if ($hint === "") {
				$hint = $name;
			} else {
				$hint .= ", $name";
			}
		}
	}
}

// Outtut "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "Bagus bagus lah ko tengok namanya " : $hint;
?>
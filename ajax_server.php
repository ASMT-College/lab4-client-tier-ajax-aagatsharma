<?php

$gods = array();
$gods[] = "Ganesh";
$gods[] = "Ram";
$gods[] = "Shiva";
$gods[] = "Bhisnu";
$gods[] = "Govinda";
$gods[] = "Balram";
$gods[] = "Shyam";
$gods[] = "hari";

$q = $_REQUEST["q"];

$hint = "";


if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($gods as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}


echo $hint === "" ? "Not in array" : $hint;


?>  
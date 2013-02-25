<?php
/**
* normaly we know 4 types for true or false
* php itself knows some more but handles very crazy 
* example: 
* some user savin the text 'false' and 'true' in databases
* some other 1 or 0 instead
* all together means the same
*/
require('toBoolean.php');
$arTest = array(
  "false",false,0,"0",  // all known as values for false
  "true",true,1,"1",     // all known as values for true
  "some",'0,01',-1,"0.5"     // all known as none-boolean values
);

for($i = 0,$n = count($arTest);$i<$n;$i++) {
  $test = toBoolean($arTest[$i]);
  if($test === null) {
    echo $arTest[$i]." could not convert\n";
  } else if($test === true) {
    echo $arTest[$i]." is true\n";
  } else if($test === false) {
    echo $arTest[$i]." is false\n";
  } 
}

/**
* what $excat does
* exact only excepts real true/false values like true,false,0,and 1
* without this, -1 is false and 5 is true 
* and if nothing found you will get the value
**/
for($i = 0,$n = count($arTest);$i<$n;$i++) {
  $test = toBoolean($arTest[$i],false);
  if($test === null) {
    echo $arTest[$i]." could not convert or realy null\n";
  } else if($test === true) {
    echo $arTest[$i]." is true\n";
  } else if($test === false) {
    echo $arTest[$i]." is false\n";
  } else {
    echo $arTest[$i].' is '.$test."\n";
  }
}

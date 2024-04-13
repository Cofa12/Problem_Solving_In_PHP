<?php
/*
 * https://www.linkedin.com/in/mahmoud-gamal-98a7b41b1/
 * time = O(n)
 * space O(n)
 *
 * */




class Solution {

/**
* @param String $s
* @param String $t
* @return Boolean
*/
function isAnagram($s, $t) {
if (strlen($s)!=strlen($t))
return false;

$assciOfS= [];
$assciOft = [];
for($i=0;$i<strlen($s);$i++){
$assciOfS[$s[$i]]++;
$assciOft[$t[$i]]++;
}
if ($assciOfS!=$assciOft)
return false;

return true;
}
}
<?php

/*
 * Intuition
        just you need to think how to Iterate both two arraies in the same time

   Approach
        You make a current pointer that reference to the sunstring and it increases when it finds that the comming value of the index matches the String t

    Complexity
        Time complexity:
            O(n)
        Space complexity:
            O(1)
 * https://www.linkedin.com/in/mahmoud-gamal-98a7b41b1/
 * */

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        $currentIndexOfStringS = 0;
        for($i=0; $i<strlen($t);$i++){
            if ($s[$currentIndexOfStringS]==$t[$i]){
                $currentIndexOfStringS++;
            }
        }
        if($currentIndexOfStringS==strlen($s))
            return true;
        else
            return false;
    }
}
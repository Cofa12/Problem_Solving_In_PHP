<?php

/*
 * time O(n)
 * space O(1)
 *
 * https://www.linkedin.com/in/mahmoud-gamal-98a7b41b1/
 * */

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        // trim($s,'\n');
        $lenghtOfLastWord = 0;
        for($i=strlen($s)-1;$i>=0;$i--){
            if($s[$i]==" "){
                if($lenghtOfLastWord!=0)
                    break;
            }
            else
                $lenghtOfLastWord++;
        }

        return $lenghtOfLastWord;
    }
}

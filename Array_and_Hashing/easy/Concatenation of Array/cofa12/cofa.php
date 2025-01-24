<?php
/*
 * https://www.linkedin.com/in/mahmoud-gamal-98a7b41b1/
 * time = O(n)
 * space O(n)
 *
 * */

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getConcatenation($nums) {
        $ans = new SplFixedArray(count($nums)*2);
        for($i = 0;$i<count($nums);$i++){
            $ans[$i]=$nums[$i];
            $ans[count($nums)+$i]= $nums[$i];
        }
        return $ans->toArray();
    }
}
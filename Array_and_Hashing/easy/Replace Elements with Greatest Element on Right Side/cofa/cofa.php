<?php
/*
 * https://www.linkedin.com/in/mahmoud-gamal-98a7b41b1/
 * time = O(n)
 * space O(1)
 *
 * */

class Solution {

    /**
     * @param Integer[] $arr
     * @return Integer[]
     */

    function replaceElements($arr) {
        if (count($arr)==1)
            $arr[0] = -1;

        $maximuValue = $arr[count($arr)-1];
        for($i =count($arr)-1; $i>=1;$i--){
            $temp = $maximuValue;
            if ($arr[$i-1]>$maximuValue){
                $maximuValue = $arr[$i-1] ;
            }

            $arr[$i-1]=$temp;
        }

        $arr[count($arr)-1] = -1;

        return $arr;

    }
}
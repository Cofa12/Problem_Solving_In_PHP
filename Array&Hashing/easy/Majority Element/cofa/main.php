<?php
class Solution {

    /*
        time : O(n)
        space O(n)
    */

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $hashing = [];
        for($i=0;$i<count($nums);$i++){
            $hashing[$nums[$i]]++;
        }
        return array_search(max($hashing),$hashing);
    }
}
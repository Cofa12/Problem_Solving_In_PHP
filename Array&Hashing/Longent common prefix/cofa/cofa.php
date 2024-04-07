<?php
class Solution {

    /*
     * time : O(n)
     * space : o(1)
     * */

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $i = 0;
        $lenght = strlen($strs[0]);
        $index = 0;
        foreach ($strs as $key=>$value){
            if(strlen($value)<$lenght){
                $lenght = strlen($value);
                $index =  $key;
            }
        }
        $minMatched = $strs[$index]; // flow
        $i = 0;
        while($lenght>0){
            foreach ($strs as $text){
                if($minMatched[$i]!=$text[$i]){
                    $lenght=0;
                    break;
                }
            }
            if($lenght!=0)
                $i++;
            $lenght--;
        }
        return substr($minMatched,0,$i);
    }
}
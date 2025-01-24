<?php

class Solution {

/*
    time O(n)
    space O(1)
*/
    function canPlaceFlowers($flowerbed, $n) {
        $lenght = count($flowerbed);
        $counter=0;
        for($i=0;$i<$lenght;){
            if($flowerbed[$i]==0&&isset($flowerbed[$i+1])&&$flowerbed[$i-1]==0){
                if($flowerbed[$i+1]==0)
                    $counter++;
                else
                    $i++;
             }
             if($flowerbed[$i]==0&&!isset($flowerbed[$i+1])&&$flowerbed[$i-1]==0)
                $counter++;

            $i+=2;
        }

        return $counter>=$n;

     }

}
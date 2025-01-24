<?php
 /*
    time o(m*(n * n log(n))
     m : lenght of array
     n lengh of each string
     space o(m+n)
 */
    function groupAnagrams($strs) {

        $res = [];
        foreach ($strs as $item){
            $count = [];
			for($i =0;$i<strlen($item);$i++){
				$count[$i]=ord($item[$i]);
			}
			sort($count);
			$targed = implode($count);

            $res[$targed][]=$item;
        }
        return $res;

    }
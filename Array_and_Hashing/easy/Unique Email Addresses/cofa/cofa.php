<?php
class Solution {
/*
    time : o (n^2)
    space o(n)
*/


    public function filter_local($localName){
	        $localName = str_replace('.','',$localName);
            if(stripos($localName,'+'))
	            $localName = substr_replace($localName,'',stripos($localName,'+'),strlen($localName));
	        return $localName;
    }
    function numUniqueEmails($emails) {
        $counter = 0;
        $map = [];
        for($i = 0; $i<count($emails);$i++){
            if(!isset($map[explode('@',$emails[$i])[1]])){
            	$counter++;
                $map[explode('@',$emails[$i])[1]]=$this->filter_local(explode('@',$emails[$i])[0]);
            }else {
                if ($map[explode('@',$emails[$i])[1]]!=$this->filter_local(explode('@',$emails[$i])[0]))
                	$counter++;
            }
        }
        return $counter;

    }
}
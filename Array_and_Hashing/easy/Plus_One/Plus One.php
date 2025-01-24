class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $digits = array_reverse($digits);
        $remainder = 1;
        for($i=0; $i<count($digits);$i++){
            $temp = $digits[$i];
            $digits[$i] = ($digits[$i] + $remainder) % 10 ;
            $remainder = $digits[$i] / 10;
            if($remainder==0 && $temp !=0){
                $remainder = 1;
            }
        }
        if($remainder == 1){
            $digits[] = $remainder;
        }

        return array_reverse($digits);
    }
}
class Solution {

/**
 * @param Integer[] $nums
 * @return Integer[][]
 */
function threeSum($nums) {
   sort($nums); 
   $res = []; 

for ($i = 0; $i < count($nums); $i++) {
    if ($nums[$i] > 0) break; 
    if ($i > 0 && $nums[$i] == $nums[$i - 1]) continue; 

    $l = $i + 1;
    $r = count($nums) - 1;

    while ($l < $r) {
        $sum = $nums[$i] + $nums[$l] + $nums[$r];

        if ($sum > 0) {
            $r--;
        } elseif ($sum < 0) {
            $l++;
        } else {
            $res[] = [$nums[$i], $nums[$l], $nums[$r]];
            $l++;
            $r--;

            while ($l < $r && $nums[$l] == $nums[$l - 1]) {
                $l++;
            }
        }
    }
}
return $res;   
}
}
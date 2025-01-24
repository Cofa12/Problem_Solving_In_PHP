class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2,$n) {
        $incrementer = 0;
        for($i = 0; $i < $n; $i++){
            $nums1[$m+$incrementer] = $nums2[$i];
            $incrementer++;
        }
        sort($nums1);
    }
}
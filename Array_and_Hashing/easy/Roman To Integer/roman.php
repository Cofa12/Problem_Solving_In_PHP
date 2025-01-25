class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $romanMap = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        $sum = 0;
        $prevValue = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            $currentValue = $romanMap[$s[$i]];
            if ($currentValue > $prevValue) {
                $sum-=$prevValue;
                $sum += $currentValue - $prevValue;
            } else {
                $sum += $currentValue;
            }

            $prevValue = $currentValue;
        }

        return $sum;
    }
}

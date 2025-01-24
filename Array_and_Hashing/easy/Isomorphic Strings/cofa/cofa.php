<?php

/*
    time: O(n)
    space O(n)
 */
      function isIsomorphic($s, $t) {
              $sCount = [];
              $tCount = [];
              for($i=0;$i<strlen($s);$i++){
                  if((array_key_exists($s[$i],$sCount)&&$sCount[$s[$i]]!=$t[$i])||(array_key_exists($t[$i],$tCount)&&$tCount[$t[$i]]!=$s[$i]))
                      return false;
                  $sCount[$s[$i]] = $t[$i];
                  $tCount[$t[$i]] = $s[$i];
              }
              return true;
          }
<?php
    function luas_lingkaran($r){
        $pi = 3.14;
        $luas = $pi * pow($r, 2);
        return number_format($luas, 2);
      }
      
      function keliling_lingkaran($r){
        $pi = 3.14;
        $keliling = 2 * $pi * $r;
        return number_format($keliling, 2);
      }
      
      function luas_persegi($p, $l){
        $luas = $p * $l;
        return number_format($luas, 2);
      }
      
      for($i = 1; $i <= 100; $i++){
        if($i % 3 == 0 && $i % 5 == 0){
          echo luas_persegi($i / 3, $i / 5) . "\n";
        } elseif($i % 3 == 0){
          echo luas_lingkaran($i / 3) . "\n";
        } elseif($i % 5 == 0){
          echo keliling_lingkaran($i / 5) . "\n";
        } else {
          echo $i . "\n";
        }
      }
?>
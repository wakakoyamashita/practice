<?php

// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function double($suchi){
    return $suchi *2;
}
echo double(8);
echo "\n";

// 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください

function sum($a, $b){
    return $a + $b;
}
echo sum(1,2);
echo "\n";

// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください

function outputMult($arr){
    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }
    return $result;
}
echo outputMult(array(1, 3, 5, 7, 9));
echo "\n";

// 4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください

function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
      if($max_number < $a){
          $max_number = $a;
      }
    // ここで配列の中の1番大きい値を探したい
  }
  return $max_number;
}
echo max_array(array(-1, 1, 50, 30, 20));
echo "\n";
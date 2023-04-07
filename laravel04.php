<?php

// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function double($suchi){
   return $suchi *2;
}
echo double(8) * 4;
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
        // $result *= $a;
        $result = $result * $a;
    }
    return $result;
}
echo outputMult(array(1, 3, 5 ,7, 9));
echo "\n";

// function kakeru($arr){
//   $result = 1;
//   foreach ($arr as $a){
//     $result *= $a;
//     //$result = $result * $a;
//     // $result = 1 * 1;
//     // $result = 1 * 3;
//     // $result = 3 * 5;
//     // $result = 15 * 7;
//     // $result = 105 * 9;
//   }
//   $result = 1;
//   return $result;
// }
// echo kakeru(array(1,3,5,7,9));
// echo "\n";
// $a = 1;
// $a = "あー";
// echo $a;



// 4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください

function max_array($arr){
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
      //もしmax_numberよりもaが大きかったらmax_numberにaを代入する
      if($max_number < $a){
          $max_number = $a;
      }
    // ここで配列の中の1番大きい値を探したい
  }
  return $max_number;
}
echo max_array(array(-1, 1, 50, 30, 20));
echo "\n";

// 5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

// strip_tags　文字列から HTML および PHP タグを取り除く
$str = "<h1>課題５</h1>";
echo strip_tags($str);

// array_push　 一つ以上の要素を配列の最後に追加する
$arr = array(1, 2);
array_push($arr, 3);
var_dump($arr);

// array_merge　ひとつまたは複数の配列をマージする
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array4 = array_merge ($array1, $array2, $array3);

var_dump($array4);

// time, mktime　現在の Unix タイムスタンプを返す、日付を Unix のタイムスタンプとして取得する
echo 'Now:' . time();
echo "\n";

echo mktime(1, 2, 3, 4, 7, 2023);
echo "\n";

// date　Unixタイムスタンプを書式化する
echo date('Y/m/d');

<?php
$br="\n";
function sum($max) {
  $result = 0;
  for ($i = 1; $i <= $max; $i++){
    $result += $i;
  }
  return $result;
} 
echo sum(100);
echo $br;

// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function double($num) {
  $result = $num * 2;
  return $result;
}
echo double(100);
echo $br;

/*
 .$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
　参考）引数は下記のように指定すると、複数の仮引数を使うことができます
 function f($a, $b){
 処理したい内容
 }
*/

function f($a, $b) {
  return $a + $b;
}
$result = f(1, 2);
echo $result;
echo $br;

/*
3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を
渡すとその要素をすべてかけた結果を返す関数を作成してください
*/

function product($arr) {
  $result = 1; 
  for ($i = 0; $i < count($arr); $i++) {
    $result *= $arr[$i];
  }
  return $result;
}
echo product(array(1, 3, 5, 7, 9));
echo $br;

/*
4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という
関数を実装しようとしています。途中の部分を完成させてください
*/

function max_array($arr) {
  // とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach ($arr as $a) {
    if ($max_number < $a) {
      $max_number = $a;
    }
  }
  return $max_number;
}
echo max_array(array(6, 2, 3, 10, 5));
echo $br;



/*
5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください
*/

/*strip_tags
文字列、許可タグ（HTMLタグを取り除く）
array_push
配列、追加データ（文末にデータを追加する）
array_merge
配列１、配列２（配列を結合する）
time
　　　　　　　　　（UNIXタイムスタンプとして返す）
mktime
時間、分、秒、月、日、年（日付をUNIXタイムスタンプとして返す）
date
フォーマット、UNIXタイムスタンプ（UNIXタイムスタンプを日付にする）
*/

$html = "<h1>アイウエオ</h1> <p>かきくけこ</p>";
echo strip_tags($html) ."\n"; //htmlからタグを取り除く
echo $br;

$numbers = array("1", "2", "3");
array_push($numbers, "4", "5"); //配列$numberの後ろに４と５を追加する
print_r($numbers);
echo $br;
            
$numbers1 = ['1', '2', '3'];
$numbers2 = ['4', '5'];
$numbers3 = ['6', '7'];
$numbers_merge = array_merge($numbers1, $numbers2, $numbers3);//numbers1,2,3を結合する。
print_r($numbers_merge);
echo $br;

$time = mktime(1, 2, 3, 12, 30, 2022);//時間、分、秒、月、日、年、サマータイムかどうか。何も数字を入れなければイギリスの標準時刻になる。
var_dump(date('Y年m月d日h時i分s秒', $time));
echo $br;

$date = date('Y年m月d日 H時i分s秒');//date関数を使えば現在の日付を呼び出すことができる。（）内に, strtotime('-1 day')をいれると1日ずらすことができる。
echo $date;
echo $br;
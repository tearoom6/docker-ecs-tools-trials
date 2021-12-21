<!DOCTYPE html>
<html>
<body>

<h1>漢字クイズ</h1>

<?php
$fish_array = [
  "鮭" => "さけ",
  "鯛" => "たい",
  "鯖" => "さば",
  "鯵" => "あじ",
  "鰹" => "かつお",
  "鰤" => "ぶり",
  "鰶" => "さんま",
  "鮍" => "かわはぎ",
  "鱪" => "しいら",
  "鰰" => "はたはた",
];

if (isset($_GET['kanji'])) {
  // Answer
  $kanji = $_GET['kanji'];
  $kana = $fish_array[$kanji];
?>
  <h2><?=$kana?></h2>
  <a href="/">次の問題</a>
<?php

} else {
  // Question
  $fish = array_rand($fish_array);
?>
  <h2><?=$fish?></h2>
  <a href="/?kanji=<?=$fish?>">答え</a>
<?php
}
?>

</body>
</html>


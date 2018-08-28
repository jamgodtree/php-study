<?php
$week_name = ['日','月','火','水','木','金','土'];

print('今日は'. $week_name[date('w')] .'曜日です');
print(date('w'));

$fruits = [
  'apple' => 'りんご',
  'orang' => 'みかん',
  'lemon' => 'レモン',
  'peach' => 'もも',
  'grape' => 'ぶどう',
];

print($fruits['lemon']);
foreach ($fruits as $english => $japanese) {
  print($english . '：' . $japanese . "\n");
}
?>

<?php
print('元の式 ' . 100 / 3000 * 100 . "\n");
print('floor ' . floor(100 / 3000 * 100). "\n");
print('ceil ' . ceil(100 / 3000 * 100). "\n");
print('round ' . round(100 / 3000 * 100, 1). "\n");

$date = sprintf('%04d年 %02d月 %02d日', 2018, 9, 12);
print($date);

$fix = sprintf('%d' , 10);
print($fix);

$fix = sprintf('%d' , 'abc');
print($fix);

$fix = sprintf('%s' , 'abc');
print($fix);

$fix = sprintf('%05d' , 10);
print($fix);

?>

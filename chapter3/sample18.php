<?php
$zip = '987-3454';

$zip = mb_convert_kana($zip, 'a' , 'UTF-8');

if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip)) {
  print('郵便番号： 〒' . $zip);
} else {
  print('※郵便番号を 123-4322の形式でご記入ください。');
}

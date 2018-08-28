<?php
$success = file_put_contents('./news.txt', '2018/09/16 ホームページをリニューアルしました。');
if ($success) {
  print('ファイルへの書き込みが成功しました');
} else {
  print('ファイルへの書き込みが失敗しました。権限など確認してください。');
}

$news = file_get_contents('./news.txt');
print($news);

$news .= "<br /> 2018/12/13 ニュースを追加しました。";
file_put_contents('./news.txt', $news);

readfile('./news.txt');
?>

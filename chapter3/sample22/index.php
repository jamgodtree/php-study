<?php
session_start();
$_SESSION['session_message'] = '値をセッションに保存しました';
?>

<!DOCTYPE html>
<pre>
  セッションを保存しました。次のページに移動してみましょう。
  &raquo; <a href="sample22.php">Page02へ</a>
</pre>

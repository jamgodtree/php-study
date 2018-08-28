<?php
  $value = '変数に保存した値です';
  setcookie('save_message', 'Cookieに保存した値です', time() + 10);
?>

<!DOCTYPE html>
<pre>
  セッションを保存しました。次のページに移動してみましょう。
  &raquo; <a href="sample21.php">Page02へ</a>
</pre>

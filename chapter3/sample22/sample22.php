<?php session_start(); ?>
<!DOCTYPE html>

<pre>
  セッションの値: <?php print($_SESSION['session_message']); ?>
  <?php session_unset(); ?>
</pre>

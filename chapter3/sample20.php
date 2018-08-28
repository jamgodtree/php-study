<table>
  <?php
    for ($i=1; $i<=10; $i++) {
      if ($i % 2) {
        print('<tr style="background-color: #ccc">');
      } else {
        print('<tr>');
      }
      print('<td>' . $i. '行目</td>');
      print('</tr>');
    }
  ?>
</table>

<?php
$week = array('日','月','火','水','木','金','土');
for ($i=1; $i<=31 ; $i++) {
  print($i. '日(' . $week[$i%7] . ')<br />');
}
?>

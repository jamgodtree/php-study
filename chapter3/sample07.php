<?php
for($i=1; $i<=365; $i++) {
  $day = date('n/j(D)', strtotime('+' . $i . 'day'));
  print($day . "\n");
}

$time = time();
print($time);

$dayAfterTomorrow = strtotime('+2day');
$day = date('n/j(D)', $dayAfterTomorrow);
print($day)
?>

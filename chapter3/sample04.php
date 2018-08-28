<?php
date_default_timezone_set('Asia/Tokyo');
$today = new DateTime();
print('現在は'.$today->format('H時 i分 s秒'). 'です');
?>

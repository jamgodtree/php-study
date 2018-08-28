<?php

$xlmTree = simplexml_load_file('https://h2o-space.com/feed');

foreach ($xlmTree -> channel -> item as $item) :
?>

. <a href="<?php print($item->link); ?>"><?php print($item->title); ?></a>

<?php
endforeach;
?>

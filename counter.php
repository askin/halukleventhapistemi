<?php
$m = new Memcached();
$m->addServer('localhost', 11211);
$m->increment('counter');
$count = $m->get('counter');

if ($count == '') {
    $count = 0;
}

echo '{"counter": ' . $count . '}';
?>

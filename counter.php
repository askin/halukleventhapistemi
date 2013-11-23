<?php
$m = new Memcached();
$m->addServer('localhost', 11211);
$m->increment('counter');
$count = $m->get('counter');

echo '{"counter": ' . $count . '}';
?>
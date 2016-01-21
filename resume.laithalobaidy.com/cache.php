<?php

/* procedural API */

$memcache_obj = pconnect('173.174.117.149', 11211);

/* OO API */

$memcache = new Memcache;
$memcache->connect('173.174.117.149', 11211);

?>

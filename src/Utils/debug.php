<?php
declare(strict_types=1);

error_reporting(E_ALL);

ini_set('display_errors','1');


function dump($data) {
    echo "<div class=\"dump\">";
    echo"<pre>";
    print_r($data);
    echo"</pre>";
    echo"</div><br /><br />";
}

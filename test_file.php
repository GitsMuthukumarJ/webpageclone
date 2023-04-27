<?php

$html = file_get_contents('https://www.mfine.co/');

$myfile = fopen("/var/www/hosts/drgalen/wordpress/test/mfine.php", "w") or die("Unable to open file!");
fwrite($myfile, $html);
fclose($myfile);

?>
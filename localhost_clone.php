<?php

$html = file_get_contents('https://www.icliniq.com/en/');

$myfile = fopen("./cliniq.php", "w") or die("Unable to open file!");
fwrite($myfile, $html);
fclose($myfile);

?>

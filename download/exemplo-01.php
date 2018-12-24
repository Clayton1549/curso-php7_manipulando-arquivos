<?php

/*$link = "https://tse3.mm.bing.net/th?id=OIP.uA7WWxCJEtkYPJThWdlA0wHaDR&pid=15.1&P=0&w=402&h=178";*/


$link = "https://www.google.fr/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename  = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>">
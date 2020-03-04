<?php

$header = file_get_contents("texheader.tex");
$oldpaper = file_get_contents("paper.tex");
$newpaper = $header.$oldpaper."\n\\end{document}";

file_put_contents("paper.tex",$newpaper);

?>

<a href = "editor.php">editor.php</a>
<?php
//mkdir.php?dir=[dirname]

$dirname = $_GET["dir"];//get dir

mkdir($dirname);

copy("https://raw.githubusercontent.com/LafeLabs/actiongeometry/master/symbol-simplified/seed/php/replicator.txt",$dirname."/replicator.php");

echo "<a href = \"".$dirname."/replicator.php\">".$dirname."/replicator.php</a>";

?>
<style>
    a{
        font-size:3em;
    }
</style>
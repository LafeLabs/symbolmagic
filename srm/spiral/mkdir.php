<?php
//mkdir.php?dir=[dirname]

$dirname = $_GET["dir"];//get dir

mkdir($dirname);

copy("php/replicator.txt",$dirname."/replicator.php");

echo "<a href = \"".$dirname."/replicator.php\">".$dirname."/replicator.php</a>";

?>
<style>
    a{
        font-size:3em;
    }
</style>
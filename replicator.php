<?php
//replcace the following url with your local data/dna.txt file's global url:

$dnaurl = "https://raw.githubusercontent.com/LafeLabs/symbolmagic/master/data/dna.txt";

$baseurl = explode("data/",$dnaurl)[0];
$dnaraw = file_get_contents($dnaurl);
$dna = json_decode($dnaraw);

mkdir("data");
mkdir("php");
mkdir("iconsymbols");

$postcardreplicator = file_get_contents("https://raw.githubusercontent.com/LafeLabs/symbolmagic/master/postcard/php/replicator.txt");
$shapesreplicator = file_get_contents("https://raw.githubusercontent.com/LafeLabs/symbolmagic/master/shapes/php/replicator.txt");
$srmreplicator = file_get_contents("https://raw.githubusercontent.com/LafeLabs/symbolmagic/master/srm/php/replicator.txt");
$contactreplicator = file_get_contents("https://raw.githubusercontent.com/LafeLabs/symbolmagic/master/contact/php/replicator.txt");

mkdir("postcard");
mkdir("shapes");
mkdir("srm");
mkdir("contact");

file_put_contents("postcard/replicator.php",$postcardreplicator);
file_put_contents("shapes/replicator.php",$shapesreplicator);
file_put_contents("srm/replicator.php",$srmreplicator);
file_put_contents("contact/replicator.php",$contactreplicator);


foreach($dna->html as $value){
    copy($baseurl.$value,$value);
}

foreach($dna->iconsymbols as $value){
    copy($baseurl."iconsymbols/".$value,"iconsymbols/".$value);
}


foreach($dna->data as $value){
    
    copy($baseurl."data/".$value,"data/".$value);
    
}


foreach($dna->php as $value){
    copy($baseurl."php/".$value,"php/".$value);
    copy($baseurl."php/".$value,explode(".",$value)[0].".php");
}



?>
<a href = "index.html">CLICK TO GO TO PAGE</a>
<style>
a{
    font-size:3em;
}
</style>

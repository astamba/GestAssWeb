<?php
use App\AnaAssociazione;

$ana = \App\AnaAssociazione::find(1);


header("Content-type: image/jpeg");
echo $ana->logo;
?>
<?php

$date_format = '%A %d %B %Y à %H:%M';
setlocale(LC_TIME, "fr_FR", "fra");

$rssArray = [
    "http://feeds.aeroweb-fr.net/aerowebfrnet_actualite",
    
];

if (isset($_SESSION["POST"]['articles'])) {
    $A = $_SESSION["POST"]['articles'];
}else{
    $A=2;
};

function recupXML($url)
{
    if (!@$rss = simplexml_load_file($url)) {
        throw new Exception('Flux introuvable');
    } else {
        return $rss->channel->item;
    }
}
$flux1 = recupXML($rssArray[0]);



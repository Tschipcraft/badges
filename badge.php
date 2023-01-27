<?php

$project = $_GET['project'];

// Set User Agent and build url
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36"
  )
);
$context = stream_context_create($opts);
$url = "https://www.planetminecraft.com/{$project}";

// Get HTML code
$html = file_get_contents($url, false, $context);

// Use regular expressions to extract the download count
preg_match('/class="stat">([0-9,]+)<\/span> downloads/', $html, $matches);

// Debug
//print_r($matches);

// Print the download count
if (count($matches) > 1) {
    $downloads = $matches[1];
} else {
    $downloads = "Error retrieving download count!";
}

// Set the shield.io SVG URL
$shields_url = "https://img.shields.io/badge/DOWNLOADS-{$downloads}-3da2ff.svg?";

unset($_GET['project']);
$queryString = http_build_query($_GET);
$shields_url = $shields_url . $queryString;


// Return the SVG image
header('Content-type: image/svg+xml');
echo file_get_contents($shields_url);

?>

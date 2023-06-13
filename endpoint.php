<?php

$project = $_GET['project'];

// Build url
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

// Prepare the JSON response
$response = array(
  "schemaVersion" => 1,
  "label" => "Planet Minecraft",
  "logoSvg" => "data:image/webp;base64,UklGRmYBAABXRUJQVlA4TFoBAAAvP8APEJ/AJgCANDjcRHDt34QCWoH5aqgJAKQBbtzb/k3sYgGvraJIkpq5E3C60M+fbwYBmfkPAPj/78kRNnPJKxVqPkwCMQgq/I1Morbke9f/cc5p9Qji1EawYTDAtm2rakNT77bBxv//Wo6Hg5q2j2tH9H8CUvArNJ36d9a5F2d2dt53ki+UOVUHLOZ6PGmVNA3mKClDf9iVdzcdvi/FAHe2mh/OKOA0envTquspCFwvcwECTMv7VW5ST2f+F6y1Uzm4R0lWLv+5hsrR6erLWxqkSw3m9aqvMlYPkp6msemeJF1PukoGrvIwX8BsZtMzmE8gm1u5Q8en6cnADJyFgxS0OhvwKBL4gJlTpVsAfMxA3XdMchqbmc2lPoO8b+rncmpS7u4+dPfKvBOukW6Fqk1Ss1R9shQp/37YHe8gdwgxHOw1Kfg8qWEEBKQz1u1GOvENBJ+JGIIB",
  "color" => "3da2ff",
  "cacheSeconds" => "172800"
);

// Set the download count or error message
if (count($matches) > 1) {
    $response["message"] = $matches[1];
} else {
    $response["message"] = "Error retrieving download count!";
    $response["isError"] = "true";
}

// Set the Content-Type header and output the JSON response
header('Content-Type: application/json; charset=utf-8');
echo json_encode($response);

?>
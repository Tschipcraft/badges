<?php
// Get the supported, untested and total versions from the URL parameters
$supported_versions = explode(',', $_GET['supported_versions'] ?? '');
$not_updated_versions = explode(',', $_GET['not_updated_versions'] ?? '');
$untested_versions = explode(',', $_GET['untested_versions'] ?? '');
$total_versions = explode(',', $_GET['total_versions'] ?? '');

// Settings
$mc_background = filter_var($_GET['mc_background'] ?? false, FILTER_VALIDATE_BOOLEAN);
$icons = filter_var($_GET['icons'] ?? false, FILTER_VALIDATE_BOOLEAN);
$progress_bar = filter_var($_GET['progress_bar'] ?? false, FILTER_VALIDATE_BOOLEAN);
$desaturated_icons = filter_var($_GET['desaturated_icons'] ?? false, FILTER_VALIDATE_BOOLEAN);
$white_mode = filter_var($_GET['white_mode'] ?? false, FILTER_VALIDATE_BOOLEAN);
$platform = $_GET['platform'] ?? '';

// Generate ETag based on URL parameters for caching
$etag = md5(serialize($_GET));
$last_modified = gmdate('D, d M Y H:i:s T', filemtime(__FILE__));

// Set cache headers
header('ETag: "' . $etag . '"');
header('Last-Modified: ' . $last_modified);
header('Cache-Control: public, max-age=604800'); // Cache for 1 week

// Check if client has cached version
if (isset($_SERVER['HTTP_IF_NONE_MATCH']) && $_SERVER['HTTP_IF_NONE_MATCH'] === '"' . $etag . '"') {
  header('Content-Type: image/png');
  header('HTTP/1.1 304 Not Modified');
  exit;
}

if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) >= filemtime(__FILE__)) {
  header('Content-Type: image/png');
  header('HTTP/1.1 304 Not Modified');
  exit;
}

// Sort given version numbers
usort($total_versions, function($a, $b) {
  return version_compare($a, $b);
});

// Define the dimensions of the image
$width = 5000;
$height = 500;

// Create the image
$image = imagecreatetruecolor($width, $height);

// Allocate colors
if ($white_mode) {
  $white = imagecolorallocate($image, 0, 0, 0);
} else {
  $white = imagecolorallocate($image, 255, 255, 255);
}
$black = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 192, 192, 192);
$green = imagecolorallocate($image, 0, 255, 0);

// Fill the image (if platform is specified; use specific colors)
if ($platform == "curseforge") {
  // CurseForge dark background
  $custom = imagecolorallocate($image, 13, 13, 13);
  imagefill($image, 0, 0, $custom);
} else if ($platform == "modrinth") {
  if ($white_mode) {
    // Modrinth light mode background
    $custom = imagecolorallocate($image, 255, 255, 255);
  } else {
    // Modrinth dark mode background
    $custom = imagecolorallocate($image, 38, 41, 47);
  }
  imagefill($image, 0, 0, $custom);
} else {
  $transparent = imagecolorallocatealpha($image, 0, 0, 0, 127);
  imagefill($image, 0, 0, $transparent);
}

// MC BACKGROUND
if ($mc_background) {
  // Load the Minecraft button image
  $button = imagecreatefrompng('minecraft_button.png');

  // Resize the button to fit the background
  $button_width = imagesx($button);
  $button_height = imagesy($button);
  $ratio = $button_width / $button_height;
  $new_button_width = $width;
  $new_button_height = (int)($new_button_width / $ratio);
  $resized_button = imagecreatetruecolor($new_button_width, $new_button_height);
  imagecopyresampled($resized_button, $button, 0, 0, 0, 0, $new_button_width, $new_button_height, $button_width, $button_height);

  // Add the resized button as the background
  imagecopy($image, $resized_button, 0, 0, 0, 0, $new_button_width, $new_button_height);
}

// ICONS
if ($icons) {

  // Load checkmark, cross and question mark
  if ($desaturated_icons) {
    $checkmark = imagecreatefrompng('checkmark_d.png');
    $cross = imagecreatefrompng('cross_d.png');
    $not_updated_checkmark = imagecreatefrompng('checkmark_d.png');
  } else {
    $checkmark = imagecreatefrompng('checkmark.png');
    $cross = imagecreatefrompng('cross.png');
    $not_updated_checkmark = imagecreatefrompng('checkmark_d.png');
  }

  // Resize to fit
  $checkmark_width = imagesx($checkmark);
  $checkmark_height = imagesy($checkmark);
  $ratio = $checkmark_width / $checkmark_height;
  $new_checkmark_width = 12 * 9;
  $new_checkmark_height = (int)($new_checkmark_width / $ratio);
  $resized_checkmark = imagecreatetruecolor($new_checkmark_width, $new_checkmark_height);
  $transparent = imagecolorallocatealpha($resized_checkmark, 0, 0, 0, 127);
  imagefill($resized_checkmark, 0, 0, $transparent);
  //imagecolortransparent($resized_checkmark, $black);
  imagecopyresampled($resized_checkmark, $checkmark, 0, 0, 0, 0, $new_checkmark_width, $new_checkmark_height, $checkmark_width, $checkmark_height);

  // Cross - not supported
  $cross_width = imagesx($cross);
  $cross_height = imagesy($cross);
  $ratio = $cross_width / $cross_height;
  $new_cross_width = 12 * 9;
  $new_cross_height = (int)($new_cross_width / $ratio);
  $resized_cross = imagecreatetruecolor($new_cross_width, $new_cross_height);
  $transparent = imagecolorallocatealpha($resized_cross, 0, 0, 0, 127);
  imagefill($resized_cross, 0, 0, $transparent);
  imagecopyresampled($resized_cross, $cross, 0, 0, 0, 0, $new_cross_width, $new_cross_height, $cross_width, $cross_height);

  // Desaturated checkmark - not actively updated anymore (same size as checkmark)
  $resized_not_updated_checkmark = imagecreatetruecolor($new_checkmark_width, $new_checkmark_height);
  $transparent = imagecolorallocatealpha($resized_not_updated_checkmark, 0, 0, 0, 127);
  imagefill($resized_not_updated_checkmark, 0, 0, $transparent);
  imagecopyresampled($resized_not_updated_checkmark, $not_updated_checkmark, 0, 0, 0, 0, $new_checkmark_width, $new_checkmark_height, $checkmark_width, $checkmark_height);

}

// Question Mark is excluded from settings
$questionmark = imagecreatefrompng('questionmark.png');

$questionmark_width = imagesx($questionmark);
$questionmark_height = imagesy($questionmark);
$ratio = $questionmark_width / $questionmark_height;
$new_questionmark_width = 12 * 9;
$new_questionmark_height = (int)($new_questionmark_width / $ratio);
$resized_questionmark= imagecreatetruecolor($new_questionmark_width, $new_questionmark_height);
$transparent = imagecolorallocatealpha($resized_questionmark, 0, 0, 0, 127);
imagefill($resized_questionmark, 0, 0, $transparent);
imagecopyresampled($resized_questionmark, $questionmark, 0, 0, 0, 0, $new_questionmark_width, $new_questionmark_height, $questionmark_width, $questionmark_height);


// FONT
// Define the font and size
$font = './minecraft.ttf';
$font_size = 90;

// BAR
// Bar Properties
$bar_x = 225;
$bar_y = 280;
$bar_width = $width - ($bar_x*2);
$bar_height = 95;
$bar_gap = 0;
$bar_border_gap = 18;

if ($progress_bar) {
  // Draw white border around the progress bar
  imagesetthickness($image, 12);
  imagerectangle($image, $bar_x - $bar_border_gap, $bar_y - $bar_border_gap, $bar_x + $bar_width + $bar_border_gap, $bar_y + $bar_height + $bar_border_gap, $white);
  imagesetthickness($image, 1);
}

// Loop through each version and draw the progress bar
$supported_version_count = count($supported_versions);
for ($i = 0; $i < count($total_versions); $i++) {
  $version = $total_versions[$i];
  $version_width = ($bar_width - ($bar_gap * (count($total_versions) - 1))) / count($total_versions);
  $version_x = $bar_x + ($version_width + $bar_gap) * $i;

  // Draw the version name
  $text_width = imagettfbbox($font_size, 0, $font, $version)[4];
  imagettftext($image, $font_size, 0, (int)($version_x + ($version_width - $text_width) / 2), (int)($bar_y - $bar_height - $bar_border_gap + ($font_size/2) - 0), $white, $font, $version);

  // Draw the progress bar background
  //imagefilledrectangle($image, $version_x, $bar_y, $version_x + $version_width, $bar_y + $bar_height, $gray);
  
  if (in_array($version, $supported_versions)) {
    // Draw the progress bar
    if ($progress_bar) {
      imagefilledrectangle($image, $version_x, $bar_y, $version_x + $version_width, $bar_y + $bar_height, $white);
    }
    
    // Draw checkmark
    if ($icons) {
      imagecopy($image, $resized_checkmark, (int)($version_x + ($version_width - $new_checkmark_width) / 2), $bar_y, 0, 0, $new_checkmark_width, $new_checkmark_height);
    }
  } else if (in_array($version, $not_updated_versions)) {
    // Draw diagonal striped progress bar
    if ($progress_bar) {
      $stripe_color = imagecolorallocate($image, 230, 230, 230);
      for($di = 0; $di < $version_width; $di += 10) {
        imageline($image, $version_x + $di, $bar_y, $version_x + $di + 10, $bar_y + $bar_height, $stripe_color); 
      }
    }
    
    // Draw not updated checkmark
    if ($icons) {
      imagecopy($image, $resized_not_updated_checkmark, (int)($version_x + ($version_width - $new_checkmark_width) / 2), $bar_y, 0, 0, $new_checkmark_width, $new_checkmark_height);
    }
  } else if (in_array($version, $untested_versions)) {

    // Draw question mark
    imagecopy($image, $resized_questionmark, (int)($version_x + ($version_width - $new_questionmark_width) / 2), $bar_y, 0, 0, $new_questionmark_width, $new_questionmark_height);
  } else {
    // Draw Cross
    if ($icons) {
      imagecopy($image, $resized_cross, (int)($version_x + ($version_width - $new_cross_width) / 2), $bar_y, 0, 0, $new_cross_width, $new_cross_height);
    }
  }
}

// Output the image
imagesavealpha($image, true);
header('Content-Type: image/png');
imagepng($image);

// Clean up
imagedestroy($image);
?>

<?php
/**
 * This is a itzy pagecontroller.
 *
 */
// Include the essential config-file which also creates the $tardis variable with its defaults.
include(__DIR__.'/config.php');

//
// Ensure error reporting is on
//
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly

$izy['title'] = "Bilder";
$image = new CImage();

$html = null;

$itzy['main'] = <<<EOD
{$html}
EOD;


// Finally, leave it all to the rendering phase of Tardis.
include(ITZY_THEME_PATH);

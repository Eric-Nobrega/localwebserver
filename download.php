<?php
$filename = "windowsserver.iso"; // Name of the file to be downloaded

// Set headers to force the download
header("Content-Disposition: attachment; filename=" . $filename);
header("Content-Type: application/octet-stream");
header("Content-Length: " . filesize($filename));

// Read the file and output it to the browser
readfile($filename);
?>

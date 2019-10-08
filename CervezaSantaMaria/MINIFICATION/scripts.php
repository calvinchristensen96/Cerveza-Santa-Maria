<?php
header('Content-Type: text/javascript');
header('Content-Type: application/javascript');

require 'minify/jsminplus.php';
$input_js1 = file_get_contents('../js/cerveza.js');

$compressor = JSMinPlus::minify("$input_js1");
echo $compressor;
?>
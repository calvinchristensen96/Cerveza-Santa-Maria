<?php
header('Content-Type: text/css');
header("Cache-Control: max-age=2628000"); //30days (60sec * 60min * 24hours * 30days)
require 'minify/cssmin.php';
$input_css1 = file_get_contents('../css/estilo.css');
$compressor = new CSSmin();
$output_css1 = $compressor->run("$input_css1");
echo $output_css1;
?>
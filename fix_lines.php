<?php

$directory = 'docs/Api';
$scanned_directory = array_diff(scandir($directory), array('..', '.'));
foreach ($scanned_directory as $file) {
    $fileContent = file_get_contents('docs/Api/' . $file);
    $fileContent = str_replace("**Usage Plan:**  | Rate (requests per second) | Burst | | ---- | ---- | ", "\n\n**Usage Plan:**\n\n| Rate (requests per second) | Burst |\n| ---- | ---- |\n", $fileContent);
    file_put_contents('docs/Api/' . $file, $fileContent);
}
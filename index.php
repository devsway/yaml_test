<?php
require "vendor/autoload.php";
$yaml_file_data = file_get_contents("test.yaml");
$result = \Symfony\Component\Yaml\Yaml::parse($yaml_file_data);
var_dump($result);
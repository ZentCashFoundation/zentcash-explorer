<?php
require '../util.php';
$config = (require '../../config.php');
$info = fetch_info($config['api']);
print_r($info['height']);
?>
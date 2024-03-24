<?php
// 接受复选框
$sports = $_POST['sport'];
$test = implode(",", $sports);

print_r($test);
echo "<br>";
print_r($_POST);
echo "<br>";
print_r($_POST['sport']);

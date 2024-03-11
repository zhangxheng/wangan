<?php

$arr = array(1, 2, 3, 4, 5);

// 排序
sort($arr);
foreach ($arr as $value) {
  echo $value . " ";
  echo "<br>";
}
echo "<br>";
// 反转
rsort($arr);
foreach ($arr as $value) {

  echo $value . " ";
  echo "<br>";
}

// 关联数组
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

// 数字数组
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
foreach ($cars as $x) {
  echo $x;
  echo "<br>";
}
//关联数组  张三，34   李四，56   王五，78
$arr = array("张三" => "34", "李四" => "56", "王五" => "78");

//判断一个值是否在数组在中
if (array_key_exists("张三", $arr)) {
  echo "张三";
}
// 将字符串转变为数组
$str = "apple,banana,orange";
$arr = explode(",", $str);
//遍历
foreach ($arr as $value) {
  echo $value . " ";
  echo "<br>";
  // 输出：apple banana orange
}
// 将数组转换为字符串
$arr = array("apple", "banana", "orange");
$str = implode(",", $arr);
echo $str;
// 输出：apple,banana,orange

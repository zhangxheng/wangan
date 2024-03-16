<?php
//使用exec函数执行系统命令
$cmd = "ipconfig"; //要执行的系统命令
exec($cmd, $output, $return_var); //执行命令，并将输出和返回值赋值给$output和$return_var变量
//编码转换
foreach ($output as &$line) {
  $line = iconv('gbk', 'utf-8', $line);
}
//打印输出结果并换行
foreach ($output as $line) {
  echo $line . "<br>";
}

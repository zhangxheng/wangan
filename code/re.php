<?php
function re_01()
{
  $source = "Google";
  $pattern = "/^Go?/";
  $result = preg_match($pattern, $source);
  return $result;
  // 输出 1
}
// 验证IP地址的正则表达式函数
function validateIP($ip)
{
  return preg_match('/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/', $ip);
}

echo  re_01() . "</br>";
echo validateIP('192.168.1.1');

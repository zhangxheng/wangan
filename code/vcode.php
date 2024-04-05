<?php
//生成验证码
session_start();
getcode();


function getcode($length = 4, $width = 100, $heigth = 50)
{
  // 图片类型为png
  header("content-type:image/png");

  // 生成随机验证码字符串保存到session中
  $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $code = "";
  for ($i = 0; $i < $length; $i++) {
    $code .= $chars[mt_rand(0, strlen($chars) - 1)];
  }

  $_SESSION['code'] = $code;



  // 画验证码
  $image = imagecreate($width, $heigth);
  $imagecolor = imagecolorallocate($image, 50, 200, 100);

  // RGB颜色值
  $color = imagecolorallocate($image, 0, 0, 255);
  imagestring($image, 400, 25, 25, $code, $color);

  // 干扰点
  for ($i = 0; $i < 50; $i++) {
    imagesetpixel($image, mt_rand(0, $width), mt_rand(0, $heigth), $color);
  }
  // 干扰线
  for ($i = 0; $i < 3; $i++) {
    $color = imagecolorallocate($image, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
    imageline($image, mt_rand(0, $width), mt_rand(0, $heigth), mt_rand(0, $width), mt_rand(0, $heigth), $color);
  }

  // 输出验证码图片
  imagepng($image);
  imagedestroy($image);
}

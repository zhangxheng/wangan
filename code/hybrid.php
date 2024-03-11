<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>这是PHP页面</title>
</head>

<body>
  <!--用户输入的表单-->
  <form action="" method="post">
    <input type="text" name="name" placeholder="请输入姓名">
    <input type="text" name="age" placeholder="请输入年龄">
    <input type="submit" value="提交">
  </form>

  <?php
  // 编写一个PHP程序，该程序能够获取当前的日期和时间，并将其显示在网页上。
  $currentDateTime = date('Y-m-d H:i:s');
  echo "当前的日期和时间是：" . $currentDateTime . "<br>";

  echo  "qqqq", 20000, "jjdjd", "<br>";
  $addr = "四川成都";
  echo "{$addr}的邮编是：" . 610000 . "<br>" . "<br>";
  // 执行系统命令并解决乱码并实现分行
  $output = shell_exec('chcp 65001');
  $output = shell_exec('ipconfig');
  echo nl2br(mb_convert_encoding($output, "UTF-8", "GBK")), "<br>";

  // 编写一个PHP函数，判断手机号码是否正确。
  function isValidPhoneNumber($phone)
  {
    $pattern = '/^1[3-9]\d{9}$/';
    return preg_match($pattern, $phone);
  }

  // 调用函数判断手机号码是否正确
  $phone = "13812345678";
  if (isValidPhoneNumber($phone)) {
    echo "手机号码格式正确";
  } else {
    echo "手机号码格式错误";
  }


  ?>
</body>

</html>
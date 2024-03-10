<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>这是PHP页面</title>
</head>

<body>
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
  echo nl2br(mb_convert_encoding($output, "UTF-8", "GBK"));


  ?>
</body>

</html>
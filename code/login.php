<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo date("Y-m-d H:i:s"); ?></title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 20px;
    }

    th,
    td {
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2
    }
  </style>
</head>

<body>

  <?php
  include "common.php";

  // 接收表单数据
  $username = ($_POST['username']);

  $password = $_POST['password'];

  $vcode = $_POST['vcode'];


  // 验证码验证
  if (strtolower($vcode) != strtolower($_SESSION['code'])) {
    echo "<p>验证码错误！</p>";
    //清空验证码
    // $_SESSION['vcode'] = "";
    // 跳转到登录页面,延时跳转
    // sleep(2);
    header("refresh:2;url=login.html");
    exit();
  }


  // 数据库查询
  login_normal($username, $password);
  ?>
</body>

</html>
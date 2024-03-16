<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 1.5;
      margin: 0;
      padding: 0;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type="text"],
    input[type="password"] {
      display: block;
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <?php
  // 注册页面
  echo "欢迎注册";

  echo "<form action='register.php' method='post'>";
  echo "用户名：<input type='text' name='username'><br>";
  echo "密码：<input type='password' name='password'><br>";
  echo "<input type='submit' value='注册'>";
  echo "</form>";
  ?>
  <?php
  // 注册，连接数据库
  $servername = "localhost";
  $username = "root";
  $password = "123456";
  $dbname = "test";

  $conn = new mysqli($servername, $username, $password, $dbname);

  // 检测连接
  if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
  }

  // 接收数据
  $username = $_POST['username'];
  $password = $_POST['password'];

  // 验证数据
  if (empty($username)) {
    echo "用户名不能为空";
    exit();
  }

  if (empty($password)) {
    echo "密码不能为空";
    exit();
  }



  // 插入数据
  $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

  if ($conn->query($sql) === TRUE) {
    echo "注册成功";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


  // 关闭连接
  $conn->close();
  ?>
</body>

</html>
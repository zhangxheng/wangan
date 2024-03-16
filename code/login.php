<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo date("Y-m-d H:i:s"); ?></title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
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
  // php访问MySQL
  $servername = "localhost";
  $username = "root";
  $password = "123456";
  $dbname = "test";

  // 创建连接
  $conn = new mysqli($servername, $username, $password, $dbname);


  // 检测连接
  if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
  }

  // 接收表单数据
  $username = $_POST['username'];
  $password = $_POST['password'];

  // 查询数据库
  $sql = "SELECT * FROM user where username='$username' and password='$password'";
  $result = $conn->query($sql);
  // 登录成功，显示弹窗
  echo "<script>alert('登录成功！');</script>";

  if ($result->num_rows > 0) {
    // 将所有数据一次性保存到数组中，以便输出
    $row = $result->fetch_assoc();
    // 用html中的表格输出用户信息
    echo "<table border='1'>
  <tr>
    <th>用户名</th>
    <th>密码</th>
    <th>邮箱</th>
  </tr>
  <tr>
    <td>" . $row["username"] . "</td>
    <td><a href='calc02.html'>" . $row['password'] . "</td>
    <td>" . $row["email"] . "</td>
  </tr>
</table>";
  }


  // 释放查询结果集，关闭连接

  $conn->close();
  ?>

</body>

</html>
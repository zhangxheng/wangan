<?php

include 'common.php';
$username = $_POST['username'];
$password = $_POST['password'];
// 连接数据库
$conn = create_connection();


// 查询语句
$sql = "SELECT * FROM user where username='$username'";

// 执行查询
$result = mysqli_query($conn, $sql);

// 获取查询结果
$row = mysqli_fetch_assoc($result);
echo $row['password'];

if ($row && $row['password'] == $password) {
  // 登录成功
  echo 'username:' . $row['username'];
  echo 'password:' . $row['password'];
  echo "登录成功";
} else {
  // 登录失败
  echo "登录失败";
}

// 关闭数据库连接
mysqli_close($conn);

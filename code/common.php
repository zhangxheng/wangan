<?php

session_start();
$username = $_POST['username'];
$password = $_POST['password'];








// 连接数据库
function create_connection()
{
  $servername = "localhost";
  $username = "root";
  $password = "123456";
  $dbname = "test";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}






// 预处理sql语句
function prepare_sql($sql, $username)
{
  // 连接数据库
  $conn = create_connection();
  // 预处理sql语句
  $stmt = $conn->prepare($sql);
  // 绑定参数
  $stmt->bind_param("s", $username);
  // 绑定结果集
  $stmt->bind_result($username, $password, $id);
  // 执行sql语句
  $stmt->execute();
  // 获取结果集
  $stmt->store_result();

  if ($stmt->num_rows > 0) {
    $stmt->fetch();
    echo $stmt->num_rows . '<br>';
    if ($password == $_POST['password']) {
      // 登录成功
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;

      $_SESSION['login'] = true;
      echo 'username:' . $username . '<br>';
      echo 'password:' . $password . '<br>';
      echo "登录成功";
    } else {
      // 密码错误
      echo "密码错误";
    }
  } else {
    // 用户不存在
    echo "用户不存在";
  }
  //关闭连接

  $stmt->close();
  $conn->close();
}
function login_normal($username, $password)
{

  // 连接数据库
  $conn = create_connection();
  // 查询语句
  $sql = "SELECT * FROM user where username='$username'";

  // 执行查询
  $result = mysqli_query($conn, $sql);

  // 获取查询结果
  $row = mysqli_fetch_assoc($result);


  if ($row && $row['password'] == $password) {
    // 登录成功
    echo 'username:' . $row['username'] . '<br>';
    echo 'password:' . $row['password'] . '<br>';
    echo "登录成功";
  } else {
    // 登录失败
    echo "登录失败";
  }

  // 关闭数据库连接
  mysqli_close($conn);
}
// 执行sql语句
// login_normal($username, $password);


// 预处理sql语句
// $sql = "SELECT * FROM user where username=?";
// $params = $username;
// prepare_sql($sql, $params);

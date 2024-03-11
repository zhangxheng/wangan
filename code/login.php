
<?php
// php访问MySQL
$servername = "localhost";
$username = $_POST["username"];
$password = $_POST["password"];
$dbname = "test";

// 创建连接
$conn = new mysqli($servername, 'root', '123456', $dbname);
// 检测连接
if ($conn->connect_error) {
  die("连接失败: " . $conn->connect_error);
} else {
  echo "连接成功" . "</br>";
}
$sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "新记录插入成功";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>











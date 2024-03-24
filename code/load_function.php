<?php

// 函数封账，实现单文件上传，并将文件名存入数据库
function load_file($file_name, $file_path, $file_type, $file_size, $file_md5, $file_sha1, $file_date, $file_user_id, $file_user_name)
{
  // 连接数据库
  $conn = mysqli_connect("localhost", "root", "root", "zhangheng");
  // 检测连接
  if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
  }
  // 准备sql语句
  $sql = "INSERT INTO file_info (file_name, file_path, file_type, file_size, file_md5, file_sha1, file_date, file_user_id, file_user_name) VALUES ('$file_name', '$file_path', '$file_type', '$file_size', '$file_md5', '$file_sha1', '$file_date', '$file_user_id', '$file_user_name')";
  // 执行sql语句
  if (mysqli_query($conn, $sql)) {
    echo "文件上传成功";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  // 关闭数据库连接
  mysqli_close($conn);
}

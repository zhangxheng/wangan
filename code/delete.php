<?php
//删除指定id的记录
$id = $_GET['id'];
$link = new mysqli("localhost", "root", "123456", "test");
$sql = "DELETE FROM `user` WHERE `id`=$id";
$result = $link->query($sql);
if ($result) {
  echo "删除成功";
} else {
  echo "删除失败";
}
$link->close();

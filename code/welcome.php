<?php

include "common.php";

if (!isset($_SESSION['username']) or $_SESSION['is_login'] != 1) {
  die("你还没有登录，请先登录！");
}
echo "Welcome, " . $_SESSION['username'] . "!";

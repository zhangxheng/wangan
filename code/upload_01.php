<?php
print_r($_FILES);
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $file_count = count($_FILES['file']['name']);
  for ($i = 0; $i < $file_count; $i++) {
    $target_dir = "G:/Web/phpstudy/phpstudy_pro/WWW/zhangheng/uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"][$i]);
    if (move_uploaded_file($_FILES["file"]["tmp_name"][$i], $target_file)) {
      echo "文件" . $i . "上传成功。<br>";
    } else {
      echo "抱歉，上传文件" . $i . "时出现了问题。<br>";
    }
  }
}

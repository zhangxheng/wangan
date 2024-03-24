<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  // 上传文件
  // print_r($_FILES);
  // echo '<br>';
  // print_r($_FILES['image']);

  // echo '<br>';
  if (isset($_FILES['image'])) {
    $file = $_FILES['image'];
    $filename = $file['name'];
    $tmp_name = $file['tmp_name'];
    $size = $file['size'];
    $type = $file['type'];

    // 判断文件是否上传成功
    if ($file['error'] == 0) {
      // 判断文件是否合法
      if (in_array($type, array('image/jpeg', 'image/png', 'image/gif'))) {
        // 移动文件到指定目录
        $encode_filename = iconv('UTF-8', 'GBK', $filename);
        $save_path = 'G:/Web/phpstudy/phpstudy_pro/WWW/zhangheng/uploads/' . $encode_filename;
        move_uploaded_file($tmp_name, $save_path);
        echo '文件上传成功！';
      } else {
        echo '文件类型不合法！';
      }
    } else {
      echo '文件上传失败！';
    }
  }

  ?>
</body>

</html>
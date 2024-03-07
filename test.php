<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>欢迎来到蜗牛学院！</h1>
  <br>
  <font color="blue" size="5">欢迎</font>
  <br>
  <div>蜗牛</div>
  <img src="./R-C.jpg" width="200">
  <br>
  <table width="500" height="200" border="1">
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
  <input type="text" placeholder="请输入你的用户名">
  <input type="button">
  <button>点我</button>
  <a href="https://www.baidu.com" target="_blank">haha</a>
  <?php
  class Site
  {
    /* 成员变量 */
    var $url;
    var $title;

    /* 成员函数 */
    function setUrl($par)
    {

      $this->url = $par;
    }

    function getUrl()
    {
      echo $this->url . PHP_EOL;
    }

    function setTitle($par)
    {
      $this->title = $par;
    }

    function getTitle()
    {
      echo $this->title . PHP_EOL;
    }
  }

  $runoob = new Site;
  $taobao = new Site;
  $google = new Site;

  // 调用成员函数，设置标题和URL
  $runoob->setTitle("菜鸟教程");
  $taobao->setTitle("淘宝");
  $google->setTitle("Google 搜索");

  $runoob->setUrl('www.runoob.com');
  $taobao->setUrl('www.taobao.com');
  $google->setUrl('www.google.com');

  // 调用成员函数，获取标题和URL
  $runoob->getTitle();
  $taobao->getTitle();
  $google->getTitle();

  $runoob->getUrl();
  $taobao->getUrl();
  $google->getUrl();
  ?>
</body>

</html>
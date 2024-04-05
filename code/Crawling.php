
<?php
function getHyperlinks($url)
{
  $html = file_get_contents($url);
  $dom = new DomDocument;
  @$dom->loadHTML($html);
  $links = $dom->getElementsByTagName('a');
  foreach ($links as $link) {
    echo $link->getAttribute('href') . "\n";
  }
}

$url = "https://msdn.itellyou.cn/"; // Replace with the website URL
getHyperlinks($url);
?>

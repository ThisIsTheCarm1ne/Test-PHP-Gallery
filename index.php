<?php
$base_dir = dirname(__FILE__);

require_once($base_dir . '/setup.php');

$smarty = new Smarty_TestGallery();

class Images{
  public $id;
  public $url;
  public $alt;

  public function __construct($id, $url, $alt) {
    $this->id= $id;
    $this->url = $url;
    $this->alt = $alt;
  }
}

$imgArray = [
  new Images(0, "https://cdn.pixabay.com/photo/2023/04/13/09/56/alps-7922246_640.jpg", "Alps"),
  new Images(1, "https://cdn.pixabay.com/photo/2023/04/06/02/54/bird-7902724_640.jpg", "bird"),
  new Images(2, "https://cdn.pixabay.com/photo/2023/04/16/11/27/bridge-7930004_640.jpg", "bridge"),
  new Images(3, "https://cdn.pixabay.com/photo/2023/11/09/19/36/zoo-8378189_640.jpg", "parrot"),
  new Images(4, "https://cdn.pixabay.com/photo/2024/02/25/02/24/insect-8595107_640.png", "insect")
];

$smarty->assign('imgArray', $imgArray);

$smarty->display('index.tpl');
?>
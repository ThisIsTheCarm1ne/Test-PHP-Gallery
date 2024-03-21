<?php
$base_dir = dirname(__FILE__);

require_once($base_dir . '/vendor/smarty/smarty/libs/Smarty.class.php');

class Smarty_TestGallery extends Smarty {
  function Smarty_TestGallery() {
    $this->Smarty();

    $smarty->template_dir = $base_dir . '/templates/';
    $smarty->compile_dir  = $base_dir . '/templates_c/';
    $smarty->config_dir   = $base_dir . '/config/';
    $smarty->cache_dir    = $base_dir . '/cache/';

    $this->caching = true;
    $this->assign('app_name', 'Test Gallery');
  }
}
?>

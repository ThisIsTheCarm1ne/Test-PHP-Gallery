<?php
/* Smarty version 4.4.1, created on 2024-03-21 16:05:17
  from '/home/peter/docs/php/test_gallery/templates/components/mainImage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65fc5abd9bfd32_36325189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a07d9cd61dcccc22e32ff57741c19f5e3d9e348' => 
    array (
      0 => '/home/peter/docs/php/test_gallery/templates/components/mainImage.tpl',
      1 => 1710186189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fc5abd9bfd32_36325189 (Smarty_Internal_Template $_smarty_tpl) {
?><button id="main_image_btn">
  <img
    id="main_image"
    src=<?php echo $_smarty_tpl->tpl_vars['imgArray']->value[0]->url;?>

    alt=<?php echo $_smarty_tpl->tpl_vars['imgArray']->value[0]->alt;?>

    onclick="openFullImage()"
  />
</button>
<?php }
}

<?php
/* Smarty version 4.4.1, created on 2024-03-21 16:05:17
  from '/home/peter/docs/php/test_gallery/templates/components/popupImage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65fc5abd9c5952_35444654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1961aa26985900bd69be6cdacc9c26022da27bb5' => 
    array (
      0 => '/home/peter/docs/php/test_gallery/templates/components/popupImage.tpl',
      1 => 1710186184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./commentSection.tpl' => 1,
  ),
),false)) {
function content_65fc5abd9c5952_35444654 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="backdrop">
  <div class="img_wrapper">
    <img
      id="full_image"
      src=""
      alt=""
    />
  </div>
  <?php $_smarty_tpl->_subTemplateRender("file:./commentSection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<style>
.backdrop {
  width: 100vw;
  min-height: 100vh;
  background: #000000a1;
  z-index: 15;
  position: absolute;
  top: 0;
  left: 0;
  display: flex;
  align-content: center;
  justify-content: center; 
  flex-wrap: wrap;
  gap: 2vw;
}
.img_wrapper {
  height: min-content;
}
</style>
<?php }
}

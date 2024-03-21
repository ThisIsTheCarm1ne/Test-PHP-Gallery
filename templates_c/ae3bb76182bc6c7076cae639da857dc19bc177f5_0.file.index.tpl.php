<?php
/* Smarty version 4.4.1, created on 2024-03-21 18:19:15
  from '/home/peter/docs/php/test_gallery/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65fc7a23558266_17179113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae3bb76182bc6c7076cae639da857dc19bc177f5' => 
    array (
      0 => '/home/peter/docs/php/test_gallery/templates/index.tpl',
      1 => 1711045151,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:components/mainImage.tpl' => 1,
    'file:components/popupImage.tpl' => 1,
  ),
),false)) {
function content_65fc7a23558266_17179113 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
  <head>
    <title>Test Gallery</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php $_smarty_tpl->_subTemplateRender("file:components/mainImage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div id="popup_image" style="display: none;">
      <?php $_smarty_tpl->_subTemplateRender("file:components/popupImage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div class="gallery_feed">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imgArray']->value, 'img');
$_smarty_tpl->tpl_vars['img']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->do_else = false;
?>
        <button class="feed_item" onclick="pickImage('<?php echo $_smarty_tpl->tpl_vars['img']->value->url;?>
', '<?php echo $_smarty_tpl->tpl_vars['img']->value->alt;?>
')">
          <img
            src=<?php echo $_smarty_tpl->tpl_vars['img']->value->url;?>

            alt=<?php echo $_smarty_tpl->tpl_vars['img']->value->alt;?>

            class="image"
          />
        </button>
      <?php
}
if ($_smarty_tpl->tpl_vars['img']->do_else) {
?>
        <span>No Images</span>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <?php echo '<script'; ?>
>
      $(document).ready(function(){
        $("#main_image_btn").click(function(){
          $("#popup_image").fadeIn(100);
        });
        $(".backdrop").click(function(){
          $("#popup_image").fadeOut(100);
        })
      });
      function pickImage(url, alt) {
        $("#main_image").attr("src", url, "alt", alt);
      }
      function openFullImage() {
        $("#full_image").attr("src", $('#main_image').attr('src'), "alt", $('#main_image').attr('alt'));
      }
    <?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}

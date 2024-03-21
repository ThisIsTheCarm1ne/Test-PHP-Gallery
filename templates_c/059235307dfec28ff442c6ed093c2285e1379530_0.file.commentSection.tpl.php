<?php
/* Smarty version 4.4.1, created on 2024-03-21 16:11:49
  from '/home/peter/docs/php/test_gallery/templates/components/commentSection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_65fc5c45bdc917_53220436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '059235307dfec28ff442c6ed093c2285e1379530' => 
    array (
      0 => '/home/peter/docs/php/test_gallery/templates/components/commentSection.tpl',
      1 => 1711037508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fc5c45bdc917_53220436 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="comment_section">
</div>
<?php echo '<script'; ?>
>
  $(document).ready(function () {
    $.ajax({
      url: 'comments.php',
      type: 'GET',
      dataType: 'json',
      success: function (data) {
        $.each(data, function (index, comment) {
          var commentHtml = '<div class="comment">' +
            '<h2>' + comment.author + '</h2>' +
            '<p>' + comment.comment + '</p>' +
            '</div>';
          $('.comment_section').append(commentHtml);
        });
      },
      error: function (xhr, status, error) {
        console.error('Error fetching comments:', status, error);
      }
    });
  });
<?php echo '</script'; ?>
>
<style>
.comment_section {
  display: flex;
  flex-direction: column;
  color: white;
  background-color: #0000009e;
  padding: 1em;
}
</style>
<?php }
}

{* Smarty *}
<div class="comment_section">
</div>
<script>
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
</script>
<style>
.comment_section {
  display: flex;
  flex-direction: column;
  color: white;
  background-color: #0000009e;
  padding: 1em;
}
</style>

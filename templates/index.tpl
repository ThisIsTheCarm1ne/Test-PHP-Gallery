{* Smarty *}
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Test Gallery</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
  </head>
  <body>
    {include file="components/mainImage.tpl"}
    <div id="popup_image" style="display: none;">
      {include file="components/popupImage.tpl"}
    </div>
    <div class="gallery_feed">
      {foreach $imgArray as $img}
        <button class="feed_item" onclick="pickImage('{$img->url}', '{$img->alt}')">
          <img
            src={$img->url}
            alt={$img->alt}
            class="image"
          />
        </button>
      {foreachelse}
        <span>No Images</span>
      {/foreach}
    </div>
    <script>
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
    </script>
  </body>
</html>

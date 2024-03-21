{* Smarty *}
<div class="backdrop">
  <div class="img_wrapper">
    <img
      id="full_image"
      src=""
      alt=""
    />
  </div>
  {include file="./commentSection.tpl"}
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

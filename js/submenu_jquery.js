$(document).ready(function(){
  $(".drawer-sub-menu").hide();
  $(".menu-item-has-children").click(function(e){
    $this = $(this).find(".drawer-sub-menu");
    $this.toggle();
  });
});

$(".menu-item-has-children").click(function(){
  $(this).toggleClass("down");
})
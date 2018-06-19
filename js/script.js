function toggle() {
  $(".menu-mask").toggleClass("active");
  $(".menu").toggleClass("active");
}

$(".btn-menu").click(function() {
  toggle();
});

$(".btn-close").click(function() {
  toggle();
}); 
         
$(".menu-mask").click(function() {
  toggle();
});          

$(".menu ul li a").click(function() {
  toggle();
});
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package focus3
 */

?>

	

<?php wp_footer(); ?>

 <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        appendArrows: $('.portada'),
        fade:true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 3000,
        arrows: false
      });
      
    });

  $('#myTabs a').click(function (e) {
    e.preventDefault()
    $(this).tab('show')
  })

$(window).load(function() {
  alturaSlider = $('.single-proyectos .slider.container').height();
  $(".single-proyectos .contenido").css("padding-top", alturaSlider/2+50);
  $(".single-proyectos .entry-content").css("margin-top", alturaSlider/2);
  $(".single-proyectos .slider.container").css("top", -(alturaSlider/2));

 alturaSliderLinea = $('.single-lineas .slider.container').height();
  $(".single-lineas .contenido").css("padding-top", alturaSliderLinea/2+50);
  $(".single-lineas .entry-content").css("margin-top", alturaSliderLinea/2);
  $(".single-lineas .slider.container").css("top", -(alturaSliderLinea/2));

  
});



$( window ).resize(function() {
 alturaSlider = $('.single-proyectos .slider.container').height();
  $(".single-proyectos .contenido").css("padding-top", alturaSlider/2+50);
  $(".single-proyectos .entry-content").css("margin-top", alturaSlider/2);
  $(".single-proyectos .slider.container").css("top", -(alturaSlider/2));

  alturaSliderLinea = $('.single-lineas .slider.container').height();
  $(".single-lineas .contenido").css("padding-top", alturaSliderLinea/2+50);
  $(".single-lineas .entry-content").css("margin-top", alturaSliderLinea/2);
  $(".single-lineas .slider.container").css("top", -(alturaSliderLinea/2));

});
</script>

</body>
</html>

<?php
/**
 * Template Name: Inicio
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package focus3
 */

get_header(); ?>
<div data-spy="affix" data-offset-top="600" class="navegacion">

<div class="navbar-header"> 
  <button aria-controls="bs-navbar" aria-expanded="false" class="collapsed navbar-toggle" data-target="#bs-navbar" data-toggle="collapse" type="button"> 
  <span class="sr-only">Toggle navigation</span> 
  <span class="icon-bar"></span> 
  <span class="icon-bar"></span> 
  <span class="icon-bar"></span> 
  </button> 
  <a href="/#top" class="navbar-brand">Bootstrap</a> 
</div>
<nav class="collapse navbar-collapse" id="bs-navbar">

 <ul class="nav navbar-nav main-menu"> 
  <li><a href="#empresa">Nuestra empresa</a></li> 
  <li><a href="#proyectos">Proyectos</a></li> 
  <li><a href="#lineas">Líneas de negocio</a></li>
  <li><a href="#contacto">Contacto</a></li>
  
  </ul> 
  

   <ul class="nav navbar-nav social"> 

  <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li> 
  <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li> 
  <li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>
  </ul> 
  
  </nav>
</div>


	<div class="portada">
    <div class="portada-int">
      <div class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo focus 3"/></div>
      <div class="container">
      <div class="row"><div class="col-md-12"><h1>Where focus goes energy flows</h1></div></div>
<div class="row btn-down-cont"><div class="col-md-12"><a href="#empresa" class="btn-down"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a></div></div>  
      </div>
    </div>
     <section class="regular slider">
    <div class="fondo4" style="background: url('<?php echo get_template_directory_uri(); ?>/images/fondo4.jpg') no-repeat scroll center / cover;" > </div>
    <div class="fondo1" style="background: url('<?php echo get_template_directory_uri(); ?>/images/fondo1.jpg') no-repeat scroll center / cover;" > </div>
    <div class="fondo2" style="background: url('<?php echo get_template_directory_uri(); ?>/images/fondo2.jpg') no-repeat scroll center / cover;" > </div>
    <div class="fondo3" style="background: url('<?php echo get_template_directory_uri(); ?>/images/fondo3.jpg') no-repeat scroll center / cover;" > </div>
    

 
    </section>
    </div>
    <div id="empresa" class="nuestra-empresa">
    <div class="container">
    <h1>Nuestra empresa</h1>
    <div class="row">
    <?php
    $value = get_field( "entradilla" );
    echo $value;
      ?>
      </div>

     
     



  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist" id="myTabs">
    <li role="presentation" ><a href="#fortalezas" aria-controls="fortalezas" role="tab" data-toggle="tab"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-fortalezas.png" alt="" width="70"/><span>Fortalezas</span></a></li>
    <li role="presentation"><a href="#mision" aria-controls="mision" role="tab" data-toggle="tab"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-vision.png" alt="" width="70"/><span>Visión y misión</span></a></li>
    <li role="presentation"><a href="#valores" aria-controls="valores" role="tab" data-toggle="tab"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-nuestros.png" alt="" width="70"/><span>Lo que nos diferencia</span></a></li>
    <li role="presentation"><a href="#trabajamos" aria-controls="trabajamos" role="tab" data-toggle="tab"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-asi.png" alt="" width="70"/><span>Así trabajamos</span></a></li>
    <li role="presentation"><a href="#compromisos" aria-controls="compromisos" role="tab" data-toggle="tab"><img src="<?php echo get_template_directory_uri(); ?>/images/ico-compromisos.png" alt="" width="70"/><span>Nuestros compromisos</span></a></li>
  </ul>

     </div>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade" id="fortalezas"> 
    <div class="container">
    <div  class="close" ><i class="fa fa-times" aria-hidden="true"></i></div>
    <?php
    $value = get_field( "fortalezas" );
    echo $value;
      ?>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="mision" > 
<div class="container">
 <div  class="close" ><i class="fa fa-times" aria-hidden="true"></i></div>
    <?php
    $value = get_field( "vision_y_mision" );
    echo $value;
      ?>
        </div>
      </div>
    <div role="tabpanel" class="tab-pane fade" id="valores"> 
<div class="container">
 <div  class="close" ><i class="fa fa-times" aria-hidden="true"></i></div>
    <?php
    $value = get_field( "nuestros_valores" );
    echo $value;
      ?>
        </div>
      </div>
    <div role="tabpanel" class="tab-pane fade" id="trabajamos">
<div class="container">
 <div  class="close" ><i class="fa fa-times" aria-hidden="true"></i></div>
     <?php
    $value = get_field( "asi_trabajamos" );
    echo $value;
      ?>
        </div>
      </div>
    <div role="tabpanel" class="tab-pane" id="compromisos"> 
<div class="container">
 <div  class="close" ><i class="fa fa-times" aria-hidden="true"></i></div>
    <?php
    $value = get_field( "nuestros_compromisos" );
    echo $value;
      ?>
        </div>
      </div>
  </div>


 
   
    </div>
   
      

       <div id="proyectos" class="proyectos">
       <div class="container">
        <h1>Proyectos</h1>
        </div>
 <div class="proyectos-int container">
        <div class="row">
          

<?php 

$args = array( 'post_type' => 'proyectos', 'orderby' => 'order', 'order' => 'ASC' );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();

?>

<div class="col-md-4 col-xs-6 q-height">
    <a href="<?php the_permalink() ?>" class="item_destacados_home">
      <div class="contenedor_destacado_home">
      <div class="imagen">
<?php 
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'lineas-ico' ); 

if ($image) : ?>
    <img src="<?php echo $image[0]; ?>" alt="" />
<?php endif; ?> 
      </div>
      </div>
      
      <div class="titular"><?php the_title(); ?></div>
      
              </a>
  </div>
    
   
<?php



  
  
endwhile;
?>

        </div>

</div>
</div> 

   
    <div id="lineas" class="lineas_negocio">
      <div class="container">
        <h1>Líneas de negocio</h1>
        <div class="row">
         <div class="col-md-12"><p>Focus 3 es una empresa de construcción especializada en la ejecución de proyectos en el marco de las obras de construcción, las rehabilitaciones integrales y el asesoramiento en el sector normativo y energético.</p></div>
        </div>
        <div class="row">
         <div class="col-md-4"><div class="home-linea-img"><img src="/wp-content/uploads/2017/04/12-320x320.jpg" alt="" width="160"/></div><h2>Construcción</h2><p>Realización de Proyectos y Soluciones integrales en el ámbito de la construcción de Obra Nueva y Rehabilitación para Clientes Privados y Administraciones Públicas.</p> <div class="cont-center"><a href="/lineas/construccion" class="btn btn-w">Ver más</a></div></div>
         <div class="col-md-4"><div class="home-linea-img"><img src="/wp-content/uploads/2017/04/13-320x320.jpg" alt="" width="160"/></div><h2>Mantenimiento Industrial y desarrollo de aplicaciones</h2><p>Obtención de Soluciones personalizadas para la industria ofreciendo asesoramiento en el mantenimiento de instalaciones.</p> <div class="cont-center"><a href="/lineas/mantenimiento-industrial-y-desarrollo-de-aplicaciones/" class="btn btn-w">Ver más</a></div></div>
         <div class="col-md-4"><div class="home-linea-img"><img src="/wp-content/uploads/2017/04/14-320x320.jpg" alt="" width="160" /></div><h2>Project Management</h2><p>Participación y desarrollo de proyectos completos, asesorando al Cliente desde el Management de la ejecución, así como dando soporte en la obtención de los permisos necesarios para la concesión de Proyecto.</p> <div class="cont-center"><a href="/lineas/project-management-asesoramiento-industrial-y-legalizacion" class="btn btn-w">Ver más</a></div></div>
        </div>
      </div>

    </div>
    <div id="logos">
    <div class="container">
      <div class="row">
        <div class="col-xs-3"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-abengoa.png" alt=""/></div>
         <div class="col-xs-3"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-atlantica.png" alt=""/></div>
       <div class="col-xs-3"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-ningenia.png" alt=""/></div>
       <div class="col-xs-3"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-auser.png" alt=""/></div>
      </div>
    </div>
      
    </div>
     <div id="contacto" class="contacto">
      <div class="container">
      <h1>Contacta con nosotros</h1>
      <div class="col-md-4">
      <p>Avda José Galán Merino s/n <br/>Edificio Crea,<br/> 41015 Sevilla</p>
      <p>Tel. 670 63 43 73</p>
      </div>
   
      <div class="col-md-8">
      <?php echo do_shortcode( '[contact-form-7 id="4" title="Formulario de contacto 1"]' ); ?>
      </div>
      </div>
    </div>
    <script>
    $( document ).ready(function() {
      $( ".nuestra-empresa  .nav-tabs li a" ).click(function() {
   $(".nuestra-empresa").addClass("active-sub") ;     

});
      $('.close').click(function(){
     $(".nuestra-empresa").removeClass("active-sub") ;
     if ($(".nuestra-empresa .tab-pane").hasClass("active")){
      $(".nuestra-empresa .tab-pane.active").removeClass("active");
     }

     if ($("#myTabs li").hasClass("active")){
      $("#myTabs li.active").removeClass("active");
     }
});
    
});
      
    </script>

     <script type="text/javascript">
      
      equalheight = function(container){

var currentTallest = 0,
     currentRowStart = 0,
     rowDivs = new Array(),
     $el,
     topPosition = 0;
 $(container).each(function() {

   $el = $(this);
   $($el).height('auto')
   topPostion = $el.position().top;

   if (currentRowStart != topPostion) {
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
   } else {
     rowDivs.push($el);
     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
  }
   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
     rowDivs[currentDiv].height(currentTallest);
   }
 });
}

 $( document ).ready(function() {
$(window).load(function() {
  

  equalheight('.item_destacados_home');
});


$(window).resize(function(){
 

  equalheight('.item_destacados_home');
});
    
});

$(document).on('click', '.main-menu a', function(event){
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
});

$(document).on('click', '.btn-down', function(event){
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 1000);
});
    </script>

<?php

get_footer();

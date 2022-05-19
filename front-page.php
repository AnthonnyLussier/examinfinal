<?php get_header() ?>
<main class="site__main" style="background-color:<?=get_theme_mod('couleur_background_body');?>;">

<section class="animation">
    
    <div class="animation__bloc">4</div>
    <div class="animation__bloc">W</div>
    <div class="animation__bloc">4</div>
    <div class="animation__bloc">T</div>
    <div class="animation__bloc">I</div>
    <div class="animation__bloc">M</div>
</section>
<section class="sticky">
  <div class="bubbles">
      <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    
  </div>
</section>
<h2>Le departement Tim</h2>
<?php 
wp_nav_menu(array("menu" => 'accueil', "container" => 'nav'));

?>
<h2>Les Evenement au Cegep</h2>
<?php 
wp_nav_menu(array("menu" => 'evenement', "container" => 'nav'));
?>

<h2>Les Evenement au Cegep2</h2>
<?php 
wp_nav_menu(array("menu" => 'Atelier', "container" => 'nav'));
?>
    
   <?php if (have_posts()): the_post(); ?>
        <h1><?php the_title() ?></h1>
        <?php the_content() ?>   
  
   <?php endif ?>
   
</main>
<?php get_footer() ?>
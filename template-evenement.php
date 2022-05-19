<?php

/**

* Template Name: Atelier

*

* @package WordPress

* @subpackage cidw_4w4

*/

?>
<?php get_header() ?>
<main class="site__main">

    <h1></h1>

   <?php if (have_posts()): the_post(); ?>
   <?php the_post_thumbnail(); ?>
          <?php the_title() ?>
         
          
          <h1>description</h1>
          <p><?php the_field('description_de_l_atelier'); ?></p>
          <p>Date de l'événement: <?php the_field('date'); ?></p>  
          <p>L'heure: <?php the_field('heure'); ?></p>
          <p>L'heure: <?php the_field('jour_de_semaine'); ?></p>
          <h3>Résumé de l'événement</h3>
          <p><?php the_field('resume'); ?></p>
          <h3>Organisateur de l'événement</h3>
          <p><?php the_field('organisateur'); ?></p>
   <?php endif ?>
</main>
<?php get_footer() ?>

<?php

/**

* Template Name: atelier

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
          <p><?php the_field('description_de_latelier'); ?> </p>
          <p>Date de l'événement: <?php the_field('date_de_debut_de_latelier'); ?>  </p>  
          <p> date de fin: <?php the_field('datefin'); ?> </p>
          <p>L'heure: <?php the_field('jour_de_semaine'); ?> </p>
          <h3>Résumé de l'événement</h3>
          <p><?php the_field('resume'); ?> </p>
          <h3></h3>
          <p><?php the_field('organisateur'); ?> </p>
          <h3>Duré de l'evenement</h3>
          <p><?php the_field('duré'); ?> </p>
          <h3>local</h3>
          <p><?php the_field('local'); ?> </p>
   <?php endif ?>
</main>
<?php get_footer() ?>

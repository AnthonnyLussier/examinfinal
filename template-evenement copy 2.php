<?php

/**

* Template Name: git

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
          <p><?php the_field('description_de_l_atelier'); ?>  The command finds the most recent tag that is reachable from a commit. If the tag points to the commit, then only the tag is shown. Otherwise, it suffixes the tag name with the number of additional commits on top of the tagged object and the abbreviated object name of the most recent commit. The result is a "human-readable" object name which can also be used to identify the commit to other git commands.</p>
          <p>Date de l'événement: <?php the_field('date'); ?>  02/04/2021</p>  
          <p> date de fin: <?php the_field('datefin'); ?> 08/06/2022</p>
          <p>L'heure: <?php the_field('jour_de_semaine'); ?> jeudi et vendredi</p>
          <h3>Résumé de l'événement</h3>
          <p><?php the_field('resume'); ?> Et prima post Osdroenam quam, ut dictum est, ab hac descriptione discrevimus, Commagena, nunc Euphratensis, clementer adsurgit, Hierapoli, vetere Nino et Samosata civitatibus amplis inlustris.</p>
          <h3>Organisateur de l'événement</h3>
          <p><?php the_field('organisateur'); ?> Mathieu peper</p>
          <h3>Duré de l'evenement</h3>
          <p><?php the_field('duré'); ?>  2 heure</p>
          <h3>local</h3>
          <p><?php the_field('local'); ?> B-1166</p>
   <?php endif ?>
</main>
<?php get_footer() ?>

<?php

/**

* Template Name: css

*

* @package WordPress

* @subpackage cidw_4w4

*/

?>
 <?php if (have_posts()): the_post(); ?>
   <?php the_post_thumbnail(); ?>
          <?php the_title() ?>
         
          
          <h1>description</h1>
          <p><?php the_field('description_de_l_atelier'); ?>Le CSS pour Cascading Style Sheets, est un langage informatique utilisé sur Internet pour la mise en forme de fichiers et de pages HTML. On le traduit en français par feuilles de style en cascade.  </p>
          <p>Date de l'événement: <?php the_field('date'); ?>  02/04/2022</p>  
          <p> date de fin: <?php the_field('datefin'); ?> 08/03/2023</p>
          <p>L'heure: <?php the_field('jour_de_semaine'); ?> mardi</p>
          <h3>Résumé de l'événement</h3>
          <p><?php the_field('resume'); ?> Iam in altera philosophiae parte. quae est quaerendi ac disserendi, quae logikh dicitur, iste vester plane, ut mihi quidem videtur, inermis ac nudus est. tollit definitiones, nihil de dividendo ac partiendo docet, non quo modo efficiatur concludaturque ratio tradit, non qua via captiosa solvantur ambigua distinguantur ostendit; iudicia rerum in sensibus ponit, quibus si semel aliquid falsi pro vero probatum sit, sublatum esse omne iudicium veri et falsi putat.</p>
          <h3>Organisateur de l'événement</h3>
          <p><?php the_field('organisateur'); ?> Camille Semaan</p>
          <h3>Duré de l'evenement</h3>
          <p><?php the_field('duré'); ?>  2 heure</p>
          <h3>local</h3>
          <p><?php the_field('local'); ?> B-1165</p>
   <?php endif ?>
</main>
<?php get_footer() ?>

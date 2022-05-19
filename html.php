<?php

/**

* Template Name: html

*

* @package WordPress

* @subpackage cidw_4w4

*/

?>

 <?php if (have_posts()): the_post(); ?>
   <?php the_post_thumbnail(); ?>
          <?php the_title() ?>
         
          
          <h1>description</h1>
          <p><?php the_field('description_de_l_atelier'); ?>Le HyperText Markup Language, généralement abrégé HTML ou, dans sa dernière version, HTML5, est le langage de balisage conçu pour représenter les pages web. Ce langage permet : d’écrire de l’hypertexte, d’où son nom, de structurer sémantiquement la page, de mettre en forme le contenu, </p>
          <ph>Date de l'événement: <?php the_field('date'); ?>  02/04/2022</p>  
          <p> date de fin: <?php the_field('datefin'); ?> 08/03/2023</p>
          <p>L'heure: <?php the_field('jour_de_semaine'); ?> mercredi</p>
          <h3>Résumé de l'événement</h3>
          <p><?php the_field('resume'); ?> Iam in altera philosophiae parte. quae est quaerendi ac disserendi, quae logikh dicitur, iste vester plane, ut mihi quidem videtur, inermis ac nudus est. tollit definitiones, nihil de dividendo ac partiendo docet, non quo modo efficiatur concludaturque ratio tradit, non qua via captiosa solvantur ambigua distinguantur ostendit; iudicia rerum in sensibus ponit, quibus si semel aliquid falsi pro vero probatum sit, sublatum esse omne iudicium veri et falsi putat.</p>
          <h3>Organisateur de l'événement</h3>
          <p><?php the_field('organisateur'); ?> Camille Semaan</p>
          <h3>Duré de l'evenement</h3>
          <p><?php the_field('duré'); ?>  1 heure</p>
          <h3>local</h3>
          <p><?php the_field('local'); ?> B-1125</p>
   <?php endif ?>
</main>
<?php get_footer() ?>

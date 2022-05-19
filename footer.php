<footer class="site__footer" style="background-color:<?=get_theme_mod('couleur_background_footer');?>;">
    <div class="site__footer__colonne">
   <section class="footer__article">
        <?php get_sidebar("footer_colonne_1");  ?>
        </section>
        <section class="footer__lien">
        <?php get_sidebar("footer_colonne_2");  ?>
        </section>
        <section class="footer__adresse">
        <?php get_sidebar("footer_colonne_3");  ?>
        </section>
    </div>
    <div class="site__footer__ligne">
        <section class="footer__description">
            <?php get_sidebar("footer_ligne_2");  ?>
        </section>
        <section class="footer__copyright">
            <p>&copy; Tous droit réservé </p>
        </section>
        <section class="footer_sociaux">
         <?php get_sidebar("footer_ligne_1");  ?>
        </section>
        <section class="footer__auteur">
            <p>créeateur: Anthonny Lussier</p>
        </section>
        <section class="footer__menu">
        <?php    
       
        /* 
        wp_nav_menu(array(
                        "menu"=>"simple",
                        "container"=>"nav",
                        "container_class"=>"footer__menu__nav",
                        "menu_class"=>"footer__menu__nav__ul",
                        "link_before"=>$icone)); */ ?>
                <div class="footer__recherche">
        </section>
        <section class="footer__recherche">
            <?php get_search_form(); ?>
        </section>
    </div>
</footer>
<div class="boite__modale" >
<button class="boite__modale__ferme"> X </button>
    <article class="boite__modale__text">
                

    </article>
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
</div>
<div class="boite__carrousel">
<button class="boite__carrousel__ferme"> X </button>
 <section class="boite__carrousel__navigation"></section>
 <section class="boite__carrousel__img">
     
 </section>
</div>
</body>
<?php wp_footer(); ?>
</html>
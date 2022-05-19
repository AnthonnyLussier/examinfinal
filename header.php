<?php
/**
 * L'entête « header » de chacune des pages de notre site
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@0,400;1,100&family=Cormorant+Garamond:ital@1&family=Orbitron:wght@500&family=Tangerine&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital@1&family=Orbitron:wght@500&display=swap" rel="stylesheet">
    
    
    <?php wp_head(); ?>
 
    <?php show_admin_bar(true); ?>
</head>
<body  <?php body_class("site"); ?> >
<header class="site__header" >
    <section class="site__header__titre">
        <?php the_custom_logo();  ?>
        <h1 class="header__titre">
       
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">    
                <?php bloginfo('name'); ?></h1>
                <a href="" class="cercle1"></a>
        <a href="" class="cercle2"></a>
        <a href="" class="cercle3"></a>
        <a href="" class="cercle4"></a>
         
            </a>
        <h2 class="header__description"><?php bloginfo('description'); ?></h2>
    </section>
    <section class="util">
        <div class="util_lien">
            <a href="">
            <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color=$color__icone-header><path d="M4.97 11.03a.75.75 0 111.06-1.06L11 14.94V2.75a.75.75 0 011.5 0v12.19l4.97-4.97a.75.75 0 111.06 1.06l-6.25 6.25a.75.75 0 01-1.06 0l-6.25-6.25zm-.22 9.47a.75.75 0 000 1.5h14.5a.75.75 0 000-1.5H4.75z"></path></svg>
            </a>
            <a href="">
            <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#d27474"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
            </a>
            <a href="">
            <svg width="32px" height="32px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#d27474"><path fill-rule="evenodd" d="M3.25 4a.25.25 0 00-.25.25v12.5c0 .138.112.25.25.25h2.5a.75.75 0 01.75.75v3.19l3.72-3.72a.75.75 0 01.53-.22h10a.25.25 0 00.25-.25V4.25a.25.25 0 00-.25-.25H3.25zm-1.75.25c0-.966.784-1.75 1.75-1.75h17.5c.966 0 1.75.784 1.75 1.75v12.5a1.75 1.75 0 01-1.75 1.75h-9.69l-3.573 3.573A1.457 1.457 0 015 21.043V18.5H3.25a1.75 1.75 0 01-1.75-1.75V4.25z"></path></svg>
            </a>
            <a href="">
            <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#d27474"><path d="M0 0h24v24H0z" fill="none"></path><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-1.57 1.97c-2.83-1.35-5.48-3.9-6.89-6.83l1.95-1.66c.27-.28.35-.67.24-1.02-.37-1.11-.56-2.3-.56-3.53 0-.54-.45-.99-.99-.99H4.19C3.65 3 3 3.24 3 3.99 3 13.28 10.73 21 20.01 21c.71 0 .99-.63.99-1.18v-3.45c0-.54-.45-.99-.99-.99z"></path></svg>
            </a>
            

        </div>
        <?php get_search_form(); ?>
    </section>
</header>
<section class="site__barre">
    <input type="checkbox"  id="chk-burger">
    <label for="chk-burger" id="burger" class="burger">
       <div class="burger__ligne"></div>
       <div class="burger__ligne"></div>
       <div class="burger__ligne"></div>
       <div class="burger__ligne"></div>
    </label>
    
    <?php 
    $icone='<svg width="32px" height="20px" viewBox="0 0 45 45" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" color="#000000"><g fill="none" fill-rule="evenodd" transform="translate(1 1)" stroke-width="2"><circle cx="22" cy="22" r="6"><animate attributeName="r" begin="1.5s" dur="3s" values="6;22" calcMode="linear" repeatCount="indefinite"></animate><animate attributeName="stroke-opacity" begin="1.5s" dur="3s" values="1;0" calcMode="linear" repeatCount="indefinite"></animate><animate attributeName="stroke-width" begin="1.5s" dur="3s" values="2;0" calcMode="linear" repeatCount="indefinite"></animate></circle><circle cx="22" cy="22" r="6"><animate attributeName="r" begin="3s" dur="3s" values="6;22" calcMode="linear" repeatCount="indefinite"></animate><animate attributeName="stroke-opacity" begin="3s" dur="3s" values="1;0" calcMode="linear" repeatCount="indefinite"></animate><animate attributeName="stroke-width" begin="3s" dur="3s" values="2;0" calcMode="linear" repeatCount="indefinite"></animate></circle><circle cx="22" cy="22" r="8"><animate attributeName="r" begin="0s" dur="1.5s" values="6;1;2;3;4;5;6" calcMode="linear" repeatCount="indefinite"></animate></circle></g></svg>';
    wp_nav_menu(array("menu"=>"principal",
                            "container"=>"nav",
                            "link_before" => $icone)); ?>
</section>

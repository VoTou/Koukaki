<?php

get_header();
?>
    <main id="primary" class="site-main">
        <section  class="banner heroAnim" >
            <video class="banner-video" src="<?php echo get_stylesheet_directory_uri() . '/assets/videos/video_header.mp4'; ?>" autoplay muted loop></video>
            <div class="parallax-container" data-bottom-top="transform:translate3d(0, 108px, 0)" data-top-bottom="transform:translate3d(0, 408px, 0)">
                <img   class="banner-logo logoAnim "  src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> "  alt="logo Fleurs d'oranger & chats errants">
            </div>
        </section>
        <section id="story" class="story toAnim">
            <h2><span class="toAnimTitle">L'histoire</span></h2>
            <article class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',
            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters" class="toAnim">
                <div class="main-character">
                    <h3><span class="toAnimTitle">Les&nbsp;</span><span class="toAnimTitle2">personnages</span></h3>
                </div>
            <?php get_template_part( 'template-parts/carroussel-section' ); ?>
            </article>
            <article id="place" class="toAnim">
                <div>
                    <div class="parallax-container"data-bottom-top="transform:translate3d(0px, 0, 0)" data-top-bottom="transform:translate3d(300px, 0, 0)">
                        <img class="big-cloud blur-effect" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'; ?> " alt="Grand nuage" >
                        <img class="little-cloud blur-effect" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'; ?> " alt="Petit nuage">
                    </div>
                    <h3><span class="toAnimTitle">Le&nbsp;</span><span class="toAnimTitle2">Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
            </article>
        </section>
        <section id="studio" class="toAnim">
            <h2><span class="toAnimTitle">Studio&nbsp;</span><span class="toAnimTitle2">Koukaki</span></h2>
            <div class="studioPara">
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
<!--             Ajout de la section pour les oscars --> 
            <?php get_template_part( 'template-parts/oscars-section' ); ?>
    </main><!-- #main -->
<?php
get_footer(); ?>


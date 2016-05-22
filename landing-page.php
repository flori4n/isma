<?php
/**
* Template Name: Landing page
*/
?>

<div id="background-video" >
    <div id="the-video-background" style="width: 100%; height:600px;" class="" data-vide-bg="mp4:<?php echo get_stylesheet_directory_uri(); ?>/assets/videos/video-snk-2.mp4" data-vide-options="posterType: jpg, loop: true, muted: true, resizing: true, position: 50% 50%">
        <br>
        <br>
        <div class="ui centered header" >
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-isma-testw.png" class="ui large image" />
        </div>
        <h1 class="ui centered header text-shadow bright" >Boost Your Events</h1>
        <div id="home-bottom-icon" class="ui stackable center aligned page grid">
            <i class="massive angle down icon bright"></i>
        </div>
    </div>
</div>

<?php get_template_part('templates/menu'); ?>

<div id="context">
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', 'page'); ?>
    <?php endwhile; ?>
</div>

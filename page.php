<?php 
  get_template_part('templates/menu');
?>

<div id="context">
  <!-- Long flowing text content !-->

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
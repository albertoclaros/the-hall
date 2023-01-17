<?php get_header(); ?>



<!-- empieza el LOOP -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- aquí va el contenido -->

<div class="ancho">
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
</div>




<?php endwhile; endif; ?>
<!-- termina el LOOP -->

<?php get_footer(); ?>
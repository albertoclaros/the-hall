<?php get_header(); ?>

<div class="ancho proximas categoria">

    <h1><?php single_cat_title(); ?></h1>

    <div class="bloque-proximas">

        <?php

        // La consulta con sus argumentos

        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

        $the_query1 = new WP_Query( array('posts_per_page' => 2, 'orderby' => 'date', 
        'order' => 'asc', 'cat' => get_query_var('cat'), 'paged' => $paged));
        ?>

        <!--El loop-->
        <?php while ( $the_query1->have_posts() ) : $the_query1->the_post();?>

        <!-- aquí va el contenido -->

        <div class="tarjeta">
            <div class="proximas-texto">
                <h4><?php the_title(); ?></h4>
                <div class="proximas-texto-flex">
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>"><div class="proximas-enlace">
                        <div></div>
                        <div></div>
                    </div></a>

                </div>
            </div>
                            
            <?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?>
        </div>


        <?php endwhile; ?>
        
        <ul class="paginador">
    <li><?php previous_posts_link('<p>Anterior</p>'); ?></li>
    <li class="paginador__numeros"><?php echo paginate_links(); ?></li>
    <li><?php next_posts_link('<p>Siguiente</p>'); ?></li>           
    </div>

    
</ul>   







</div>














<?php get_footer(); ?>
<?php get_header(); ?>

    <div class="hero">
        <!-- comienza wp-query -->
        <?php

        // La consulta con sus argumentos
        $the_query1 = new WP_Query( array('cat' => 4, 'posts_per_page' => 1 ));

        // El loop
        if ( $the_query1->have_posts() ) {while ( $the_query1->have_posts() ) {$the_query1->the_post();?>

        <!-- aquí estructuramos HTML y llamadas como siempre -->

        
        <div class="hero-texto">
            <h1><?php the_title(); ?></h1>
            <div class="hero-texto-flex">
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>"><div class="hero-enlace">
                    <div></div>
                    <div></div>
                </div></a>

            </div>
        </div>

        <?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?>

        <?php }} wp_reset_postdata(); ?>
        <!-- fin del wp-query -->
    </div>

    <div class="ancho tarjeta bloque-uno">
        <!-- comienza wp-query -->
        <?php

        // La consulta con sus argumentos
        $the_query2 = new WP_Query( array('cat' => 6, 'posts_per_page' => 1 ));

        // El loop
        if ( $the_query2->have_posts() ) {while ( $the_query2->have_posts() ) {$the_query2->the_post();?>

        <!-- aquí estructuramos HTML y llamadas como siempre -->


        <div class="texto">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
        </div>
        <div class="imagen"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></div>
        <?php }} wp_reset_postdata(); ?>
        <!-- fin del wp-query -->
    </div>

        <div class="ancho proximas">

            <h2><?php echo get_cat_name(7); ?></h2>
            <div class="bloque-proximas">
                <!-- comienza wp-query -->
                <?php

                // La consulta con sus argumentos
                $the_query3 = new WP_Query( array('cat' => 7, 'posts_per_page' => 2, 'orderby' => 'date', 
                'order' => 'asc'));

                

                // El loop
                if ( $the_query3->have_posts() ) {while ( $the_query3->have_posts() ) {$the_query3->the_post();?>

                <!-- aquí estructuramos HTML y llamadas como siempre -->

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
                
                <?php }} wp_reset_postdata(); ?>
                
                <!-- fin del wp-query -->
               
                <?php
                // Get the ID of a given category
                $category_id = get_cat_ID( 'Futuras actuaciones' );
            
                // Get the URL of this category
                $category_link = get_category_link( $category_id );
                ?>
 
                <!-- Print a link to this category -->
                <a href="<?php echo esc_url( $category_link ); ?>" title="Futuras actuaciones" class="boton">Ver más</a>

                
            </div>
        </div>
        
        <div class="separador">
            <div class="ancho separador-contenido">
                <!-- comienza wp-query -->
                <?php

                // La consulta con sus argumentos
                $the_query4 = new WP_Query( array('cat' => 8, 'posts_per_page' => 1));

                // El loop
                if ( $the_query4->have_posts() ) {while ( $the_query4->have_posts() ) {$the_query4->the_post();?>

                <!-- aquí estructuramos HTML y llamadas como siempre -->
                <p><?php the_title(); ?></p>
                <?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?>
                <?php }} wp_reset_postdata(); ?>
                <!-- fin del wp-query -->
            </div>
        </div>

        <div class="ancho contacto">

            <h2><?php echo get_cat_name(9); ?></h2>
            <div class="bloque-contacto">
                <!-- comienza wp-query -->
                <?php

                // La consulta con sus argumentos
                $the_query5 = new WP_Query( array('cat' => 9, 'posts_per_page' => 1 ));

                

                // El loop
                if ( $the_query5->have_posts() ) {while ( $the_query5->have_posts() ) {$the_query5->the_post();?>

                <!-- aquí estructuramos HTML y llamadas como siempre -->

                <div class="informacion">

                    <h3><?php the_title(); ?></h3>
                    <div class="tarjeta">
                            <p><?php the_content(); ?></p>                    
                    </div>

                </div>
                <?php }} wp_reset_postdata(); ?>
                
                <!-- fin del wp-query -->

                <div class="contacto">

                <h3 id="contacto"><?php echo get_cat_name(10); ?></h3>
                <?php echo do_shortcode('[contact-form-7 id="62" title="Formulario de contacto 1"]') ?>

                </div>

            </div>
        </div>
        


<?php get_footer(); ?>
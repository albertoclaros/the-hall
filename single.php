<?php get_header(); ?>


<!-- empieza el LOOP -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- aquí va el contenido -->

<div class="hero">

    <div class="hero-texto">
        <h1><?php the_title(); ?></h1>
        <div class="hero-texto-flex">
            <?php the_excerpt(); ?>
        </div>
    </div>

        <?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?>
</div>

<div class="ancho">

    <div class="informacion-artista">

    <!-- DATOS EVENTO -->
    <?php if( have_rows('datos_del_evento') ): ?>
        <?php while( have_rows('datos_del_evento') ): the_row(); 

        
            // label Datos evento
            $datos = get_field_object('datos_del_evento');
            $label_datos = $datos['label'];
            // label Precio
        $precio = get_sub_field_object('precio');
        $label_precio = $precio['label'];
        
        // label Edad
        $edad_minima = get_sub_field_object('edad_minima');
        $label_edad_minima = $edad_minima['label'];

        // label Vendedor
        $venta_de_entradas = get_sub_field_object('venta_de_entradas');
        $label_venta_de_entradas = $venta_de_entradas['label'];

        // label Aforo
        $aforo = get_sub_field_object('aforo');
        $label_aforo = $aforo['label'];
        
        ?>

        <div class="tarjeta">

            <h4><?php echo $label_datos; ?></h4>


            <ul>
                <li>
                    <h5><?php echo $label_precio; ?>:</h5>
                    <p><?php the_sub_field('precio'); ?></p>
                </li>

                <li>
                    <h5><?php echo $label_edad_minima; ?></h5>
                    <p><?php the_sub_field('edad_minima'); ?></p>
                </li>

                <li>
                    <h5><?php echo $label_venta_de_entradas; ?></h5>
                    <?php the_sub_field('venta_de_entradas'); ?>
                </li>

                <li>
                    <h5><?php echo $label_aforo; ?></h5>
                    <p><?php the_sub_field('aforo'); ?></p>
                </li>

            </ul>   

        </div>

        <?php endwhile; ?>
    <?php endif; ?>

    <!-- FIN DATOS EVENTO -->

    <!-- DATOS EVENTO -->
    <?php if( have_rows('datos_del_artista') ): ?>
        <?php while( have_rows('datos_del_artista') ): the_row();?>

        <div class="incrustado">

            <?php the_sub_field('embed'); ?>

        </div>

        <?php endwhile; ?>
    <?php endif; ?>

    <!-- FIN EMBED-->
    </div>

<?php the_content(); ?>





    
</div>


<?php endwhile; endif; ?>
<!-- termina el LOOP -->


<?php get_footer(); ?>
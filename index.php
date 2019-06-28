<?php get_header(); ?>
        <main>
            <section id="capa" class="containeir-fluid text-white">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-9 col-lg-8 pt-4 pb-5 pt-lg-0 pb-lg-0">
                        <div class="lead">
                        <?php
                        $post_sobre= query_posts( 'page_id=294' );
                        if ( have_posts($post_sobre) ) :
                        while ( have_posts($post_sobre) ) :
                        the_post($post_sobre);
                        ?>
                            <?php the_content($post_sobre); ?>
                        <?php
                        endwhile;
                        endif;
                        wp_reset_postdata(); ?>
                        </div>
                        </div>
                        <div class="col-0 col-md-3 col-lg-4">
                            <img src="<?php bloginfo("template_directory"); ?>/img/bg-desktop.png" class="d-none d-lg-block img-fluid">
                            <img src="<?php bloginfo("template_directory"); ?>/img/bg.png" class="d-none d-md-block d-lg-none img-fluid">
                        </div>
                    </div>
                </div>
            </section>
            <section id="destaques" class="container py-5">
                <h2 class="mb-0 pb-3">
                <?php echo __('[:pb]Últimos destaques[:pb][:en]Latest highlights[:en]'); ?>
                </h2>
                <div class="row justify-content-center">
                   <?php
                   if (qtranxf_getLanguage() == 'pb') {
                        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                    }
                    $query_destaque1 = array(
                        'post_type' => 'portfolio',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'capa',
                                'field'    => 'slug',
                                'terms'    => 'destaque-1',
                            ),
                        ), 'orderby' => 'date', 'order' => 'desc', 'posts_per_page' => '1');
                    $loop_destaque1 = new WP_Query( $query_destaque1 );
                    if ( $loop_destaque1->have_posts() ) :
                            while ( $loop_destaque1->have_posts() ) :
                            $loop_destaque1->the_post();
                                $thumb_destaque1 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
                                $src_destaque1 = $thumb_destaque1['0'];
                                $data0 = get_post_meta($post->ID, 'wpcf-data-traduzivel', true);
                                $data3= date('m/d/y',$data0);
                                date('c',$timestamp);
                                $data4= strftime("%B - %G",strtotime($data3))
                    ?>
                    <article class="col-12 col-md-6 col-xl-4 destaque py-3">
                    <a href="<?php the_permalink(); ?>">
                        <time>
                            <?php echo $data4;
                            ?>
                        </time>
                        <h3><?php the_title(); ?></h3>
                        <img src="<?php echo $src_destaque1; ?>" class="img-fluid thumb">
                        <?php the_excerpt(); ?>
                    </a>
                    </article>
                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                    <?php
                    $query_destaque2 = array(
                        'post_type' => 'portfolio',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'capa',
                                'field'    => 'slug',
                                'terms'    => 'destaque-2',
                            ),
                        ), 'orderby' => 'date', 'order' => 'desc', 'posts_per_page' => '1');
                    $loop_destaque2 = new WP_Query( $query_destaque2 );
                    if ( $loop_destaque2->have_posts() ) :
                            while ( $loop_destaque2->have_posts() ) :
                            $loop_destaque2->the_post();
                                $thumb_destaque2 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
                                $src_destaque2 = $thumb_destaque2['0'];
                                $data0 = get_post_meta($post->ID, 'wpcf-data-traduzivel', true);
                                $data3= date('m/d/y',$data0);
                                date('c',$timestamp);
                                $data4= strftime("%B - %G",strtotime($data3))
                    ?>
                    <article class="col-12 col-md-6 col-xl-4 destaque py-3">
                    <a href="<?php the_permalink(); ?>">
                        <time>
                            <?php echo $data4;
                            ?>
                        </time>
                        <h3><?php the_title(); ?></h3>
                        <img src="<?php echo $src_destaque2; ?>" class="img-fluid thumb">
                        <?php the_excerpt(); ?>
                    </a>
                    </article>
                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                    <?php
                    $query_destaque3 = array(
                        'post_type' => 'portfolio',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'capa',
                                'field'    => 'slug',
                                'terms'    => 'destaque-3',
                            ),
                        ), 'orderby' => 'date', 'order' => 'desc', 'posts_per_page' => '1');
                    $loop_destaque3 = new WP_Query( $query_destaque3 );
                    if ( $loop_destaque3->have_posts() ) :
                            while ( $loop_destaque3->have_posts() ) :
                            $loop_destaque3->the_post();
                                $thumb_destaque3 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
                                $src_destaque3 = $thumb_destaque3['0'];
                                $data0 = get_post_meta($post->ID, 'wpcf-data-traduzivel', true);
                                $data3= date('m/d/y',$data0);
                                date('c',$timestamp);
                                $data4= strftime("%B - %G",strtotime($data3))
                    ?>
                    <article class="col-12 col-md-6 col-xl-4 destaque py-3">
                    <a href="<?php the_permalink(); ?>">
                        <time>
                            <?php echo $data4;
                            ?>
                        </time>
                        <h3><?php the_title(); ?></h3>
                        <img src="<?php echo $src_destaque3; ?>" class="img-fluid thumb">
                        <?php the_excerpt(); ?>
                    </a>
                    </article>
                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                    <?php
                    $query_destaque4 = array(
                        'post_type' => 'portfolio',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'capa',
                                'field'    => 'slug',
                                'terms'    => 'destaque-4',
                            ),
                        ), 'orderby' => 'date', 'order' => 'desc', 'posts_per_page' => '1');
                    $loop_destaque4 = new WP_Query( $query_destaque4 );
                    if ( $loop_destaque4->have_posts() ) :
                            while ( $loop_destaque4->have_posts() ) :
                            $loop_destaque4->the_post();
                                $thumb_destaque4 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
                                $src_destaque4 = $thumb_destaque4['0'];
                                $data0 = get_post_meta($post->ID, 'wpcf-data-traduzivel', true);
                                $data3= date('m/d/y',$data0);
                                date('c',$timestamp);
                                $data0 = get_post_meta($post->ID, 'wpcf-data-traduzivel', true);
                                $data3= date('m/d/y',$data0);
                                date('c',$timestamp);
                                $data4= strftime("%B - %G",strtotime($data3))
                    ?>
                    <article class="col-12 col-md-6 col-xl-4 destaque py-3">
                    <a href="<?php the_permalink(); ?>">
                        <time>
                            <?php echo $data4;
                            ?>
                        </time>
                        <h3><?php the_title(); ?></h3>
                        <img src="<?php echo $src_destaque4; ?>" class="img-fluid thumb">
                        <?php the_excerpt(); ?>
                    </a>
                    </article>
                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                    <?php
                    $query_destaque5 = array(
                        'post_type' => 'portfolio',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'capa',
                                'field'    => 'slug',
                                'terms'    => 'destaque-5',
                            ),
                        ), 'orderby' => 'date', 'order' => 'desc', 'posts_per_page' => '1');
                    $loop_destaque5 = new WP_Query( $query_destaque5 );
                    if ( $loop_destaque5->have_posts() ) :
                            while ( $loop_destaque5->have_posts() ) :
                            $loop_destaque5->the_post();
                                $thumb_destaque5 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
                                $src_destaque5 = $thumb_destaque5['0'];
                                $data0 = get_post_meta($post->ID, 'wpcf-data-traduzivel', true);
                                $data3= date('m/d/y',$data0);
                                date('c',$timestamp);
                                $data4= strftime("%B - %G",strtotime($data3))
                    ?>
                    <article class="col-12 col-md-6 col-xl-4 destaque py-3">
                    <a href="<?php the_permalink(); ?>">
                        <time>
                            <?php echo $data4;
                            ?>
                        </time>
                        <h3><?php the_title(); ?></h3>
                        <img src="<?php echo $src_destaque5; ?>" class="img-fluid thumb">
                        <?php the_excerpt(); ?>
                    </a>
                    </article>
                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                    <?php
                    $query_destaque6 = array(
                        'post_type' => 'portfolio',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'capa',
                                'field'    => 'slug',
                                'terms'    => 'destaque-6',
                            ),
                        ), 'orderby' => 'date', 'order' => 'desc', 'posts_per_page' => '1');
                    $loop_destaque6 = new WP_Query( $query_destaque6 );
                    if ( $loop_destaque5->have_posts() ) :
                            while ( $loop_destaque6->have_posts() ) :
                            $loop_destaque6->the_post();
                                $thumb_destaque6 = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
                                $src_destaque6 = $thumb_destaque6['0'];
                                $data0 = get_post_meta($post->ID, 'wpcf-data-traduzivel', true);
                                $data3= date('m/d/y',$data0);
                                date('c',$timestamp);
                                $data4= strftime("%B - %G",strtotime($data3))
                    ?>
                    <article class="col-12 col-md-6 col-xl-4 destaque py-3">
                    <a href="<?php the_permalink(); ?>">
                        <time>
                            <?php echo $data4;
                            ?>
                        </time>
                        <h3><?php the_title(); ?></h3>
                        <img src="<?php echo $src_destaque6; ?>" class="img-fluid thumb">
                        <?php the_excerpt(); ?>
                    </a>
                    </article>
                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                    <?php
                    $query_video = array(
                        'post_type' => 'video', 'orderby' => 'date', 'order' => 'desc', 'posts_per_page' => '1');
                    $loop_video = new WP_Query( $query_video );
                    if ( $loop_video->have_posts() ) :
                        while ( $loop_video->have_posts() ) :
                        $loop_video->the_post();
                        $video = get_post_meta($post->ID, 'wpcf-url', true);
                        $embed_code = wp_oembed_get($video);
                    ?>
                    <article class="col-12 col-lg-9 py-3 destaque video">
                        <div class="text-center"><?php the_content(); ?>
                        </div>
                        <div class="embed-container">
                            <?php echo $embed_code; ?>
                        </div>
                    </article>
                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </section>
        </main>
<?php get_footer(); ?>
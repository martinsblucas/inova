<?php get_header(); ?>
        <main>
            <section id="archive-portfolio" class="container py-5">
                <div class="row justify-content-center">
                <div class="mb-0 pb-3 col-12 col-lg-10">
                    <h2 class="mb-3">
                        <?php post_type_archive_title(); ?> 
                    </h2>
                </div>
                    <?php
                    query_posts( $query_string . '&post_type=portfolio&post_parent=0&orderby=date&order=DESC&posts_per_page=-1');
                    if ( have_posts() ) :
                    while ( have_posts() ) :
                    the_post();

                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
                    $src = $thumb['0'];
                    ?>
                    <article class="col-12 col-lg-10 lista py-3">
                    <a href="<?php the_permalink(); ?>">
                    <div class="media flex-column flex-md-row">
                        <?php if(!empty($src)) : ?>
                            <img src="<?php echo $src; ?>" class="img-fluid thumb mr-0 mr-md-3 mb-1 mb-md-0">
                        <?php endif; ?>
                        <div class="media-body">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                    </a>
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
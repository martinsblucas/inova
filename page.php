<?php get_header(); ?>
        <main>
            <section id="page" class="container py-5">
                <div class="row justify-content-center">
                    <?php
                    $post= query_posts($query_string);
                    if ( have_posts($post) ) :
                    while ( have_posts($post) ) :
                    the_post($post);
                    $post_id= $post->ID;
                    $post_parent= $post->post_parent;
                    ?>
                    <article class="mb-0 pb-3 col-12 col-lg-10">
                        <h2 class="mb-3"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </article>
                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata($post);
                    ?>
                </div>
            </section>
        </main>
<?php get_footer(); ?>
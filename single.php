<?php get_header(); ?>
        <main>
            <section id="archive-portfolio" class="container py-5">
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

                    <?php if (!$post_parent) : 
                    $post_child= query_posts( 'post_type=portfolio&posts_per_page=-1&post_parent='.$post_id.'&orderby=date&order=DESC');
                    if ( have_posts($post_child) ) :
                    while ( have_posts($post_child) ) :
                    the_post($post_child);

                    $thumb_child = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
                    $src_child = $thumb_child['0'];
                    ?>

                    <article class="col-12 col-lg-10 lista py-3">
                    <?php if( '' !== get_post()->post_content ) : ?>
                    <a href="<?php the_permalink(); ?>">
                    <?php endif; ?>
                    <div class="media flex-column flex-md-row">
                        <?php if(!empty($src_child)) : ?>
                        <img src="<?php echo $src_child; ?>" class="img-fluid thumb mr-0 mr-md-3 mb-1 mb-md-0">
                        <?php endif; ?>
                        <div class="media-body">
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                    <?php if( '' !== get_post()->post_content ) : ?>
                    </a>
                    <?php endif; ?>
                    </article>
                    <?php
                    endwhile;
                    endif;
                    wp_reset_postdata($post_child);
                    ?>
                    <?php endif; ?>
                    <div class="col-12 col-lg-10 py-3">
                        <?php if ( !$post_parent ) : ?>
                        <a href="http://localhost/inova/portfolio" >
                            &bull; 
                            <?php echo __('[:pb]VOLTAR PARA O[:pb][:en]RETURN TO[:en]');
                                echo ' <span class="text-uppercase">';
                                post_type_archive_title("<strong>","</strong>");
                                echo '</span>';
                             ?>
                        </a> 
                         <?php else : ?>
                        <a href="<?php echo get_permalink( $post->post_parent ); ?>" >
                            &bull;
                            <?php echo __('[:pb]VOLTAR PARA[:pb][:en]RETURN TO[:en]');
                            ?> <strong class="text-uppercase"><?php echo get_the_title( $post->post_parent ); ?></strong>
                         </a>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </main>
<?php get_footer(); ?>
<?php /* Template Name: Contato */ ?>
<?php get_header(); ?>
        <main>
            <section id="page" class="container py-5">
                <div class="row justify-content-center">
                    <?php
                    $post= query_posts($query_string);
                    if ( have_posts($post) ) :
                    while ( have_posts($post) ) :
                    the_post($post);
                    ?>
                    <article class="mb-0 pb-3 col-12 col-lg-10">
                        <h2 class="mb-3"><?php the_title(); ?></h2>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate" method="post">
                          <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                              <label>Nome</label>
                              <input class="form-control" id="name" type="text" placeholder="Nome" required="required" data-validation-required-message="Por favor, digite seu nome.">
                              <p class="help-block text-danger"></p>
                            </div>
                          </div>
                          <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                              <label>Email</label>
                              <input class="form-control" id="email" type="email" placeholder="Email" required="required" data-validation-required-message="Por favor, digite seu endereço de email">
                              <p class="help-block text-danger"></p>
                            </div>
                          </div>
                          <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                              <label>Telefone</label>
                              <input class="form-control" id="phone" type="tel" placeholder="Telefone (opcional)">
                              <p class="help-block text-danger"></p>
                            </div>
                          </div>
                          <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                              <label>Mensagem</label>
                              <textarea class="form-control" id="message" rows="5" placeholder="Mensagem" required="required" data-validation-required-message="Por favor, digite sua mensagem"></textarea>
                              <p class="help-block text-danger"></p>
                            </div>
                          </div>
                          <br>
                          <div id="success"></div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Enviar</button>
                          </div>
                        </form>
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
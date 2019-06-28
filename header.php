<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Meta tags obrigatórias -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Meta tags do Google -->
        <meta name="robots" content="index, follow">
        <META NAME="description" CONTENT="<?php $page_id = $post->post_name; if(is_home() or $page_id == "sobre") { ?><?php bloginfo("description") ?><?php } elseif(is_single()) { ?><?php
        $post = $wp_query->post;
        $descrip = strip_tags($post->post_content);
        $descrip_more = '';
        if (strlen($descrip) > 155) {
            $descrip = substr($descrip,0,400);
            $descrip_more = ' ...';
        }
        $descrip = str_replace('"', '', $descrip);
        $descrip = str_replace("'", '', $descrip);
        $descripwords = preg_split('/[\n\r\t ]+/', $descrip, -1, PREG_SPLIT_NO_EMPTY);
        array_pop($descripwords);
        $descrip = implode(' ', $descripwords) . $descrip_more;
        echo $descrip;
        ?><?php } else { ?><?php bloginfo("description") ?><?php } ?>">
        <META NAME="keywords" CONTENT="Televisão, Audiovisual, Música, Entretenimento, Internet, Produtora, Produção, Eventos culturais, Eventos institucionais">
        <link rel="canonical" href="<?php bloginfo("url"); ?>">

        <!-- Open Graph Facebook -->
        <meta property="og:site_name" content="<?php bloginfo("name"); ?>">

        <meta property="og:title" content="<?php $parent_post = get_post($post->post_parent); $parent_post_title = $parent_post->post_title; bloginfo('name'); if(!is_front_page()) { echo " | "; if (is_singular("portfolio") and $post->post_parent) { echo __($parent_post_title); echo " | "; } wp_title(""); } ?>"/>

        <meta property="og:image" content="<?php if (is_home () or is_page()) { ?><?php bloginfo('template_directory'); ?>/img/compartilhar_face.png<?php } elseif (has_post_thumbnail()) { ?><?php $thumb_grande = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full'); $url_grande = $thumb_grande['0']; echo $url_grande; ?><?php } else { ?><?php bloginfo('template_directory'); ?>/img/compartilhar_face.png<?php } ?>">
        <?php if (is_home () or is_page()) { ?>
        <meta property="og:image:type" content="image/png">
        <meta property="og:image:width" content="800">
        <meta property="og:image:height" content="600">
        <?php } ?>
        <meta property="og:description" content="<?php $page_id = $post->post_name; if(is_home() or $page_id == "sobre") { ?><?php bloginfo("description") ?><?php } elseif(is_single()) { ?><?php echo $descrip; } else { ?><?php bloginfo("description") ?><?php } ?>">
        <meta property="og:type" content="<?php if (is_single()) { ?>article<?php } else { ?>website<?php } ?>">

        <?php if (is_singular("portfolio")) { ?><meta property="article:section" content="<?php echo __($parent_post_title); ?>"><?php } ?>

        <meta property="og:url" content="<?php if(is_single() or is_page()) { the_permalink(); } elseif(is_post_type_archive("portfolio")) { echo get_post_type_archive_link("portfolio"); } else { bloginfo("url"); } ?>">
        <meta property="fb:app_id" content="297732807758941">

        <!-- Bootstrap -->
        <link id="bootstrap-min-css" rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/ferramentas/bootstrap/css/bootstrap.min.css">

        <!-- Estilo do tema -->
        <link id="style-css" rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/style.min.css">

        <!-- Estilo do Colorbox -->
        <link id="colorbox-css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ferramentas/colorbox/example1/colorbox.min.css">

        <!-- HTML5 shim e Respond.js para suporte aos elementos HTML5 e media queries no IE8 -->
        <!-- ATENÇÃO: Respond.js não funciona via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/icons/favicon.png">

       <title><?php bloginfo('name'); if(!is_front_page()) { echo " | "; if (is_singular("portfolio") and $post->post_parent) { echo __($parent_post_title); echo " | "; } wp_title(""); } ?>
        </title>
        <?php wp_head(); ?>

    </head>
    <body>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '297732807758941',
          xfbml      : true,
          version    : 'v3.2'
        });
        FB.AppEvents.logPageView();
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
        <header id="header" class="container-fluid sticky-top px-0 py-2">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-dark px-0">
                    <!-- Logo -->
                    <div class="navbar-brand">
                        <a href="<?php bloginfo("url"); ?>/">
                        <h1 class="sr-only">Inova.tv</h1>
                        <img src="<?php bloginfo("template_directory"); ?>/img/logo.png" class="logo">
                        </a>
                    </div>

                    <!-- Botão menu mobile -->
                     <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#menu_topo">
                        <span class="navbar-toggler-icon d-flex align-items-center justify-content-center">
                            <span></span>
                        </span>
                    </button>

                    <!-- Menu WP -->
                    <div class="collapse navbar-collapse" id="menu_topo">
                        <?php
                        wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'menu'              => 'menu-principal',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'ml-auto',
                        'container_id'      => '',
                        'menu_class'        => 'navbar-nav pt-2 pt-md-0',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                        ?>
                        <div class="ml-md-2">
                        <?php the_widget('qTranslateXWidget', array('type' => 'image', 'hide-title' => true) ); ?>
                        </div>
                    </div>

                    <!-- Menu html 
                    <div class="collapse navbar-collapse" id="menu_topo">
                        <ul class="navbar-nav ml-auto pt-2 pt-md-0">
                            <li class="nav-item">
                                <a href="<?php bloginfo("url"); ?>" class="nav-link btn btn-dark py-1 btn-sm mb-2 mb-md-0 mr-md-2 inicio">Home</a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php bloginfo("url"); ?>/portfolio" class="nav-link btn btn-dark py-1 btn-sm mb-2 mb-md-0 mr-md-2 portfolio">Portfólio</a>

                                
                                <div class="dropdown-menu py-1 text-center text-md-left">
                                    <a href="" class="dropdown-item px-2 py-1">Item 1</a>
                                    <a href="" class="dropdown-item px-2 py-1">Item 2</a>
                                </div>
                                

                            </li>

                            <li class="nav-item">
                                <a href="<?php bloginfo("url"); ?>/clientes" class="nav-link btn btn-dark py-1 btn-sm mb-2 mb-md-0 mr-md-2 clientes">Clientes</a>

                            </li>

                            <li class="nav-item">
                                <a href="<?php bloginfo("url"); ?>/contato" class="nav-link btn btn-dark py-1 btn-sm mb-2 mb-md-0 mr-md-2 contato">Contato</a>
                            </li>

                            <li class="nav-item">
                                <a href="https://www.facebook.com/inova.tv.br/" class="nav-link btn btn-dark py-1 btn-sm mb-2 mb-md-0 mr-md-2 facebook" target="_blank">Facebook</a>
                            </li>

                        </ul>
                        <div class="ml-md-2">
                        <?php the_widget('qTranslateXWidget', array('type' => 'image', 'hide-title' => true) ); ?>
                        </div>
                    </div>
                    -->
                </nav>
            </div>                
        </header>
        
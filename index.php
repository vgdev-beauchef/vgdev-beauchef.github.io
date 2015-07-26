<!DOCTYPE html>
<html lang="en">

<?php get_header(); ?>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
                          <img class="brand-logo" src="<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                        <?php endif; ?>
                        <h1 class="brand-heading"><?php bloginfo( 'name' ); ?></h1>
                        <p class="intro-text"><?php bloginfo( 'description' ); ?></p>
                        <a href="#featured" class="btn btn-circle page-scroll">
                            <i class="fa fa-gamepad animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Featured Section -->
    <section id="featured" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Destacados</h2>
                Aca se deben mostrar los post destacados
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="galleries" class="content-section text-center">
        <div class="galleries-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Galerías</h2>
                    <div class="col-xs-6 col-sm-3 gallery-icon-container">
                      <div class="gallery-icon hovereffect icon-game">
                        <div class="glyphicon glyphicon-knight" aria-hidden="true"></div>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 gallery-icon-container">
                      <div class="gallery-icon hovereffect icon-music">
                        <div class="glyphicon glyphicon-music" aria-hidden="true"></div>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 gallery-icon-container">
                      <div class="gallery-icon hovereffect icon-video">
                        <div class="glyphicon glyphicon-film" aria-hidden="true"></div>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 gallery-icon-container">
                      <div class="gallery-icon hovereffect icon-picture">
                        <div class="glyphicon glyphicon-picture" aria-hidden="true"></div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog-about-contact" class="container content-section text-center">
      <div class="row">
        <div class="col-sm-offset-2 col-sm-4">
          <h3>Blog</h3>
          aca debe salir un slider de los post mas recientes
        </div>
        <div class="col-sm-4">
          <h3>About</h3>
          informacion sobre vgdev
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contacto</h2>
                TODO:<ul>
                <li>cambiar los colores</li>
                <li>cambiar las imagenes</li>
                <li>agregar los post</li>
                <li>crear la pag del blog</li>
                <li>crear galerias</li>
                <li>actualizar navbar</li>
                <li></li>
                </ul>
                <!--
                <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
                <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>-->
            </div>
        </div>
    </section>

    <?php get_footer(); ?>

</body>

</html>

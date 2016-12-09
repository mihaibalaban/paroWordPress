<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lawyeriax-lite
 */

get_header(); ?>
    <div id="header-image">
        <a title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>"
           rel="home">
            <div class="hero-container">

                <div class="row hero-row">

                    <div class="col-md-6 hero-text">
                        <h1 class="hero-title">Parodontoză?</h1>

                        <h3 class="hero-under-title">În lipsa vaccinului stafilococic, parodontoza poate fi tratată acum
                            cu ajutorul unui vaccin polimicrobian din străinătate, care conține o doză mare de
                            stafilococ.</h3>
                    </div>

                    <div class="col-md-4 hero-text">
                        <img class="hero-image" src="images/borderparo.png">
                    </div>
                </div>

            </div>
        </a>
    </div>

    <div class="content-wrap">

        <div id="primary" class="col-sm-12 col-md-9 content-area">
            <main id="main" class="site-main" role="main">


            </main>
            <!-- #main -->
        </div>
        <!-- #primary -->

        <?php
        get_sidebar();
        ?>

    </div><!-- .content-wrap -->
    <link href="https://file.myfontastic.com/oAnRr49LRSuj7cYjEYP7b9/icons.css" rel="stylesheet">


    <!-- Services section -->

    <div class="container services">

        <div class="row">

            <div class="col-lg-4">

                <div class="icon-list-item">

                    <div class="icon-list-icon">
                        <span class="icon icon-toothbraces"></span>
                    </div>

                    <div class="icon-list-content">
                        <h3 class="icon-list-title">Cauzistică</h3>
                        <h5 class="icon-list-under">Scurta descriere a cauzei.</h5>
                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="icon-list-item">

                    <div class="icon-list-icon">
                        <span class="icon icon-toothstop"></span>
                    </div>

                    <div class="icon-list-content">
                        <h3 class="icon-list-title">Vaccinul</h3>
                        <h5 class="icon-list-under">Doua, maxim 3 fraze despre vaccin.</h5>
                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="icon-list-item">

                    <div class="icon-list-icon">
                        <span class="icon icon-toothimplant"></span>
                    </div>

                    <div class="icon-list-content">
                        <h3 class="icon-list-title">Imunoterapia</h3>
                        <h5 class="icon-list-under">Scurt text despre imunoterapie</h5>
                    </div>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-4">

                <div class="icon-list-item">

                    <div class="icon-list-icon">
                        <span class="icon icon-toothcheck"></span>
                    </div>

                    <div class="icon-list-content">
                        <h3 class="icon-list-title">Dental Prevention</h3>
                        <h5 class="icon-list-under">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                            impedit.</h5>
                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="icon-list-item">

                    <div class="icon-list-icon">
                        <span class="icon icon-toothsparkle"></span>
                    </div>

                    <div class="icon-list-content">
                        <h3 class="icon-list-title">Whitening Teeth</h3>
                        <h5 class="icon-list-under">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                            impedit quo minus id.</h5>
                    </div>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="icon-list-item">

                    <div class="icon-list-icon">
                        <span class="icon icon-toothcrack"></span>
                    </div>

                    <div class="icon-list-content">
                        <h3 class="icon-list-title">Emergency Care</h3>
                        <h5 class="icon-list-under">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                            impedit quo minus.</h5>
                    </div>

                </div>

            </div>

        </div>

    </div>



<?php
get_footer();

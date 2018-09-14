<?php get_header();

/*
    Template Name: Home
*/ ?>
    <section id="home-main">
        <div class="container-fluid">
            <div class="row flex-row">
                <div class="jumbotron">

                    <div class="jumbo-content waypoint text-center">
                        <div class="fade-down">
                            <h1>Welcome to <strong>Mission Hearing Aid Center</strong></h1>
                            <h2><strong>HEARING AID STORE</strong> A FAMILY-OWNED BUSINESS</h2>
                        </div>
                        <a href="<?= SITEURL ?>/contact-us/">
                            <button class="btn btn-lrg btn-primary">Schedule an Appointment</button>
                        </a>
                    </div> 
                </div>
            </div>
        </div>
    </section>
    </div> <!-- end home-bg -->

    <section class="home-module-1">

    </section>

    <section class="home-module-2">

    </section>

    <section class="home-module-3">

    </section>

    <section class="home-module-4">

    </section>


<?php if (is_active_sidebar('form_widgets')) { //if the field is not empty
    ?>
    <section id="contact-form" class="visible-xs">
        <div class="container" id="contact-form2">
            <div class="row">
                <div class="<?= FULLWIDTH ?>">
                    <?php dynamic_sidebar('form_widgets'); ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php get_footer(); ?>
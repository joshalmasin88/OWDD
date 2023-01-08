<?php
/**
 * Template Name: Homepage Static
 */
get_header(); ?>



 <main>
 <div class="circle-1"></div>
 <div class="circle-2"></div>
 <div class="circle-3"></div>

 <section class="hero mb-5">
     <div class="container">
         <div class="row text-center">
             <div class="col-md-10 mx-auto">
                 <h1 class="hero-header tracking-in-expand"><?php echo get_theme_mod( 'hero-h1', 'OWDD' ); ?></h1>
                 <p class="hero-text"><?php echo get_theme_mod('hero-p', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tenetur dolores
                     obcaecati, incidunt non doloremque voluptatibus laboriosam aliquid quia porro totam?'); ?></p>
                 <a href="" class="btn btn-primary">CALL US TODAY</a>
             </div>
         </div>
         <div class="row mt-5">
             <div class="col-md-10 mx-auto text-center">
                 <img class="img-fluid " src="<?php echo get_theme_mod( 'hero-image', get_template_directory_uri() . '/imgs/hero-slide-img.png'); ?>" alt="">
             </div>
         </div>
     </div>
 </section>

 <section class="about mb-5">
     <div class="container">
         <div class="row">
             <div class="col-md-6 mx-auto text-center">
                 <h2 class="mb-5 about-heading"><?php echo get_theme_mod( 'about-heading' , 'Lorem ipsum dolor sit amet.');  ?></h2>
             </div>
         </div>
         <div class="row">
             <div class="col-md-6 mx-auto">
                 <img id="design-1" src="./imgs/design-1.png" alt="">
                 <img class="img-fluid" src="<?php echo get_theme_mod( 'about-image', get_template_directory_uri() . '/imgs/team.png'); ?>" alt="">
                 <img src="./imgs/design-2.png" alt="" id="design-2">
             </div>
             <div class="col-md-6 mx-auto  d-flex align-items-center" style="height:350px">
                 <div>
                     <p class="about-text"><?php echo get_theme_mod( 'about-p', 'We move with make a Creative Strategy for help your business goal, we help to improve your income by a services we have. make your content look interesting and make people look for your business

We move with make a Creative Strategy for help your business goal, we help to improve your income by a services we have. make your content look interesting and make people look for your business'); ?></p>
                     <a href="" class="btn btn-primary">Click Here</a>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section class="portfolio mb-5">
     <div class="container">
         <div class="row">
             <div class="col-md-10 mx-auto text-center">
                 <h1 class="portfolio-heading"><?php echo get_theme_mod( 'work-heading', 'Our Work'); ?></h1>
                 <p class="portfolio-text"><?php echo get_theme_mod('work-p', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores
                     aliquam blanditiis nulla repudiandae pariatur? Assumenda maiores eum fugit dolorem amet.'); ?></p>
             </div>
         </div>
         <div class="row">
            <?php 
                $args = array(
                    'post_type' => 'owd_project',
                    'posts_per_page' => 5,
                );

                $projects = new WP_Query($args);
                while ( $projects->have_posts() ):
                    $projects->the_post();
                ?>
                <div class="slide active"
                    style="background-image: url('<?php the_post_thumbnail_url( ) ?>');">
                    <h3><?php the_title(); ?></h3>
                </div>
            <?php endwhile; ?>

         </div>
     </div>
 </section>

 <section class="contact mb-5">
     <div class="container">
         <div class="row">
             <div class="col-md-12 col-lg-6 mx-auto sm-md-center">
                 <div class="d-flex align-items-center" style="height: 250px;">
                     <div class="">
                         <h2>Got a Project for Us?</h2>
                         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A, consectetur!</p>
                         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur tenetur qui in obcaecati modi, quod velit explicabo vero eos vitae, ipsa, dolore perspiciatis voluptate aliquam voluptates ipsam! Esse, explicabo amet.</p>
                     </div>
                 </div>
             </div>
             <div class="col-md-12 col-lg-6 col-xl-6 ps-5 mx-auto">
                <?php if ( is_active_sidebar( 'owd-contact-form' )): ?>
                    <?php dynamic_sidebar( 'owd-contact-form' ); ?>
                <?php endif; ?>
             </div>
         </div>
     </div>
 </section>
</main>

<?php get_footer(); ?>
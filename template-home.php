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
                 <img class="img-fluid " src="./imgs/hero-slide-img.png" alt="">
             </div>
         </div>
     </div>
 </section>

 <section class="about mb-5">
     <div class="container">
         <div class="row">
             <div class="col-md-6 mx-auto text-center">
                 <h2 class="mb-5 about-heading">Lorem ipsum dolor sit amet.</h2>
             </div>
         </div>
         <div class="row">
             <div class="col-md-6 mx-auto">
                 <img id="design-1" src="./imgs/design-1.png" alt="">
                 <img class="img-fluid" src="./imgs/team.png" alt="">
                 <img src="./imgs/design-2.png" alt="" id="design-2">
             </div>
             <div class="col-md-6 mx-auto  d-flex align-items-center" style="height:350px">
                 <div>
                     <p class="about-text">We move with make a Creative Strategy for help your business goal, we
                         help to improve your income by a services we have. make your content look interesting
                         and make people look for your business</p>
                     <p class="about-text">We move with make a Creative Strategy for help your business goal, we
                         help to improve your income by a services we have. make your content look interesting
                         and make people look for your business</p>
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
                 <h1 class="portfolio-heading">Our Work</h1>
                 <p class="portfolio-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores
                     aliquam blanditiis nulla repudiandae pariatur? Assumenda maiores eum fugit dolorem amet.</p>
             </div>
         </div>
         <div class="row">
             <div class="slide"
                 style="background-image: url('https://images.unsplash.com/photo-1657617832971-6e966739cd10?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1074&q=80');">
                 <h3>Shanti Stupa</h3>
             </div>
             <div class="slide" style="
             background-image: url('https://images.unsplash.com/photo-1658742407793-9339d0668325?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80');
           ">
                 <h3>Kuala Lumpur</h3>
             </div>
             <div class="slide" style="
             background-image: url('https://images.unsplash.com/photo-1658070846367-69ee59dd4c89?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80');
           ">
                 <h3>Truro</h3>
             </div>
             <div class="slide" style="
             background-image: url('https://images.unsplash.com/photo-1626939078937-de13378ff442?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1471&q=80');
           ">
                 <h3>Windsor Castle</h3>
             </div>
             <div class="slide active" style="
             background-image: url('https://images.unsplash.com/photo-1613939887052-a9b6bcaaea89?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80');
           ">
                 <h3>Zhong Shan Da Xue</h3>
             </div>
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
                         <a href="" class="btn btn-primary">Get Started</a>
                     </div>
                 </div>
             </div>
             <div class="col-md-12 col-lg-6 col-xl-6 ps-5 mx-auto">
             </div>
         </div>
     </div>
 </section>
</main>

<?php get_footer(); ?>
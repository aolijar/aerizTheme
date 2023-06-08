<?php 
/* 
Template Name: Home Page
Template Post Type: page
*/ 


?>
<?php get_header(); ?>
     <!---->   
      <!---->
      <main class="main_sections-wrapper">
        <!---->
        <div class="grid-wrapper">
        <section class="section_scroll-content-container">
          <!--  -->
          <!-- <h3 data-trans="100" data-intro="90" class="hero-one fade-in">
            Text Intro One 25%
          </h3>
          <h3 data-trans="-100" data-intro="70" class="hero-two fade-in">
            Text Intro Two 65%
          </h3>
          <h3 data-trans="100" data-intro="45" class="hero-three fade-in">
            Text Intro Three 45%
          </h3> -->
          <!---->
          <!--CANVAS POSITION IN SECTION SO Z-INDEX CAN WORK-->
          <div
            aria-hidden="true"
            data-percent="0"
            data-frame="0"
            class="canvas-container"
            id="canvas-container"
          >
            <!-- data-frame-id-padding sets how many numbers it supposed to be looking for. Thats why its 001 002 etc etc so it has 3 numbers in the string -->
            <!-- THIS INPUT HAS INFO FOR MOVIE - READ BY FRAMESUNPACKER FUNCTION -->
            <input
              name="frames-url"
              type="hidden"
              value="wp-content/uploads/2023/scrollVideoAssets/RootsHomepage_{{id}}.png"
              data-frame-start="00000"
              data-frame-end="00630"
              data-frame-id-padding="5"
            />
            <!-- /Applications/XAMPP/xamppfiles/htdocs/aeriz2023/wp-content/themes/aeriz2023/scrollVideoAssets/RootsHomepage/RootsHomepage_00000.png -->
            <canvas class="canvas" id="canvas"></canvas>
            <!-- the padding thing is the format for fill #'s 000 001 002 etc etc'-->
          </div>
          <!---->
        </section>
        </div>
        <!---->
        <section class="section_default section_main-products">
          <p>PRODUCTS HERE</p>
        </section>
        <!---->
        <section class="section_default section_main-ethos">
          <p>ABOUT HERE</p>
        </section>
        <!---->
        <section class="section_default section_main-picutres">
          <p>PICTURES HERE</p>
        </section>
        <!---->
        <section class="section_default section_main-blog">
          <p>BLOG HERE</p>
          
        </section>
        <!---->
      </main>
      <!---->
    <!---->
<?php 
get_footer();



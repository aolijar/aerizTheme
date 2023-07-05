<?php 
/* 
Template Name: Home Page
Template Post Type: page
*/ 


?>
<?php get_header(); ?>
<!-- <div class="loading-test">
  <p>Loading - <span class="loading-percent"></span>%</p>
</div> -->
     <!---->   
      <!---->
      <main class="main__sections-wrapper">
        <!---->
        <div class="scroll-content-wrapper">
        <section id="hero" class="section__scroll-content-container">
          <!--  -->
          <div class="card__text hero-scroll-one">
              <p aria-label="pristine roots" id="holographic-text " class="mask">Pristine<br>RoØts</p>
          </div>
          <div class="card__text hero-scroll-two">
              <p aria-label="suspended in air" id="holographic-text " class="mask">Suspended<br>in Ai®</p>
          </div>
          <div class="card__text hero-scroll-three">
            <!--NONE OF THESE NEED TO BE H1-->
            <!--ONLY MAKE LAST HERO FRAME H1-->
              <p aria-label="nutured with precision" id="holographic-text " class="mask">Nurtu®ed<br>with Precision</p>
          </div>
          <div class="hero__main-content">
              <button id="btn__hero" class="btn__default ">Shop Our Cannabis</button>
              <div class="card__text">
              <h1 aria-label="Aeroponically Grown Cannabis" id="holographic-text " class="mask">AeRopØni©ally-<br>G®own Cannabis</h1>
              </div>
              <p>For Purity You Can See and Feel.</p>
            </div>
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
              value="wp-content/uploads/2023/redone4/hero_roots_frame-{{id}}.webp"
              data-frame-start="001"
              data-frame-end="107"
              data-frame-id-padding="3"
            />
            <!-- /Applications/XAMPP/xamppfiles/htdocs/aeriz2023/wp-content/themes/aeriz2023/scrollVideoAssets/RootsHomepage/RootsHomepage_00000.png -->
            <canvas class="canvas" id="canvas"></canvas>
            <!-- the padding thing is the format for fill #'s 000 001 002 etc etc'-->
          </div>
          <!---->
        </section>
        </div>
        <!---->
        <section class="section__default section_main-products">
          <p>PRODUCTS HERE</p>
        </section>
        <!---->
        <section class="section__default section_main-ethos">
          <p>ABOUT HERE</p>
        </section>
        <!---->
        <section class="section__default section_main-picutres">
          <p>PICTURES HERE</p>
        </section>
        <!---->
        <section class="section__default section_main-blog">
          <p>BLOG HERE</p>
          
        </section>
        <!---->
      </main>
      <!---->
    <!---->
<?php 
get_footer();



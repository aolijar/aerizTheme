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
        <section id="section__hero" class="section__hero" >
          <div class="section__hero-scroll-content-container">
            <!---->
            <div  class="section__hero-text-mask section__hero-scroll-one">
                <p aria-hidden='true' aria-label="pristine roots" class="section__hero-text section__hero-scroll-one-text">Pristine<br>RoØts</p>
            </div>
            <div class="section__hero-text-mask section__hero-scroll-two">
                <p aria-hidden='true' aria-label="suspended in air" class="section__hero-text section__hero-scroll-two-text">Suspended<br>in Ai®</p>
            </div>
            <div class="section__hero-text-mask section__hero-scroll-three">
                <p aria-hidden='true' aria-label="nutured with precision" class="section__hero-text section__hero-scroll-three-text">Nurtu®ed<br>with Precision</p>
            </div>
            <div id="hero__main" class="section__hero-main-content">
                <a href="" id="btn__hero" class="btn__default">Shop Our Cannabis</a>
                <div class="section__hero-text-mask">
                <h1 aria-hidden='true' aria-label="Aeroponically Grown Cannabis" class="section__hero-text section__hero-main-scroll-text">AeRopØni©ally-<br>G®own Cannabis</h1>
                </div>
                <p aria-hidden='true'>For Purity You Can See and Feel.</p>
             </div>
            <div
              data-percent="0"
              data-frame="0"
              class="section__hero-canvas-container"
              id="section__hero-canvas-container"
              >
              <input
                aria-hidden="true"
                name="frames-url"
                type="hidden"
                value="wp-content/uploads/2023/redone4/hero_roots_frame-{{id}}.webp"
                data-frame-start="001"
                data-frame-end="120"
                data-frame-id-padding="3"
              />
              <canvas role='img' aria-label="images of a aeroponic cannabis plant" class="section__hero-canvas" id="section__hero-canvas"></canvas>
            </div>
            <!---->
          </div>
          <!---->
        </section>
        <!---->
        <section class="section__default section__main-products">
          <p>PRODUCTS HERE</p>
        </section>
        <!---->
        <section class="section__default section__main-ethos">
          <p>ABOUT HERE</p>
        </section>
        <!---->
        <section class="section__default section__main-picutres">
          <p>PICTURES HERE</p>
        </section>
        <!---->
        <section class="section__default section__main-blog">
          <p>BLOG HERE</p>
        </section>
        <!---->
      </main>
      <!---->
    <!---->
<?php 
get_footer();



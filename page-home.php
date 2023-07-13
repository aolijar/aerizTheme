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
      <main class="main__sections-wrapper">
        <!---->
        <section id="section__hero" class="section__hero" >
          <div id="section__hero-scroll-content-container" class="section__hero-scroll-content-container">
            <!---->
            <!--MAIN HERO CONTENT-->
            <!--H1 Z INDEX 1-->
            <div id="hero__main" class="section__hero-main-content-back">
                <div class="section__hero-text-mask">
                <h1 aria-label="Aeroponically Grown Cannabis" class="section__hero-text section__hero-h1">A<span class="korm-text-roman-mask">e</span>RopØ<span class="korm-text-roman-mask">n</span>i©<span class="korm-text-roman-mask">a</span><span class="korm-text-roman-mask">l</span><span class="korm-text-roman-mask">l</span>y-<br>G®ow<span class="korm-text-roman-mask">n</span> Ca<span class="korm-text-roman-mask">n</span><span class="korm-text-roman-mask">n</span><span class="korm-text-roman-mask">a</span>bis</h1>
                </div>
            </div>
              <!--BTN AND TAGLINE Z INDEX 3-->
            <div class="section__hero-main-content-forward">
                <a href="" id="btn__hero" class="btn__default tab--deactivate">Shop Our Cannabis</a>
                  <div class="hidden-hero">
                    <p aria-hidden='true'>A<span class="korm-text-roman-mask">e</span>RopØ<span class="korm-text-roman-mask">n</span>i©<span class="korm-text-roman-mask">a</span><span class="korm-text-roman-mask">l</span><span class="korm-text-roman-mask">l</span>y-<br>G®ow<span class="korm-text-roman-mask">n</span> Ca<span class="korm-text-roman-mask">n</span><span class="korm-text-roman-mask">n</span><span class="korm-text-roman-mask">a</span>bis</>
                  </div>
                <p class="section__hero-tagline">For Purity You Can See and Feel.</p>
            </div>
            <!--END MAIN CONTENT-->
            <div  class="section__hero-text-mask section__hero-scroll-one section__hero-scroll-text--deactive">
                <p  aria-label="pristine roots" class="section__hero-text section__hero-scroll-one-text ">Pristine<br>RoØts</p>
            </div>
            <div class="section__hero-text-mask section__hero-scroll-two">
                <p  aria-label="suspended in air" class="section__hero-text section__hero-scroll-two-text ">Suspended<br>in Ai®</p>
            </div>
            <div class="section__hero-text-mask section__hero-scroll-three">
                <p  aria-label="nutured with precision" class="section__hero-text section__hero-scroll-three-text ">Nurtu®ed<br>with Precision</p>
            </div>
            <!--FRAME CANVAS-->
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
                data-frame-end="150"
                data-frame-id-padding="3"
              />
              <canvas role='img' aria-label="images of a aeroponic cannabis plant" class="section__hero-canvas" id="section__hero-canvas"></canvas>
            </div>
            <!---->
          </div>
          <!---->
        </section>
        <!---->
        <section id="section__products" class="section__products">
          <div class="section__default">
            <div class="section__default-banner">
              <h3 class="section__default-banner-text">clean weed hits different</h3>
              <a href="" class="btn__w-arrow section__default-banner-link tab--deactivate">find your high.<div class="btn__arrow"></div></a>
            </div>
            <div class="section__products-carousel">
              <ul role="tablist" class="section__products-tab-controls">
                <li><button data-tab-id="1" class="section__products-tab-button section__products-tab-button--active tab--deactivate" role="tab" aria-controls="tab-1" aria-selected="true" aria-current="true">Flower</button></li>
                <li><button data-tab-id="2"  class="section__products-tab-button tab--deactivate" role="tab" aria-controls="tab-2" aria-selected="false" aria-current="false">Live Resin</button></li>
                <li><button data-tab-id="3"  class="section__products-tab-button tab--deactivate" role="tab" aria-controls="tab-3" aria-selected="false" aria-current="false">Live Rosin</button></li>
                <li><button data-tab-id="4"  class="section__products-tab-button tab--deactivate" role="tab" aria-controls="tab-4" aria-selected="false" aria-current="false">Vapes</button></li>
                <li><button data-tab-id="5"  class="section__products-tab-button tab--deactivate" role="tab" aria-controls="tab-5" aria-selected="false" aria-current="false">Full Spectrum Hash Oil</button></li>
                <li><button data-tab-id="6"  class="section__products-tab-button tab--deactivate" role="tab" aria-controls="tab-6" aria-selected="false" aria-current="false">Pre-Rolls</button></li> 
                <li><button data-tab-id="7"  class="section__products-tab-button tab--deactivate" role="tab" aria-controls="tab-7" aria-selected="false" aria-current="false">Full Spectrum Hash Drops</button></li>
              </ul>
                <div class="section__products-carousel-content">
                  <div class="section__products-carousel-content-mask"></div>
                  <div class="products-carousel-container">
                    <div data-product-id="1" class="product-carousel-content product_carousel-spotlight ">
                      <a class="product-carousel-links tab--deactivate" tabIndex="0" href="">
                        <img class="product-carousel-image" src="http://localhost/aeriz2023/wp-content/uploads/2023/07/rosin.png" alt="">
                      </a>
                    </div>
                    <div data-product-id="2" class="product-carousel-content product_carousel-spotlight-50">
                      <a class="product-carousel-links" tabIndex="-1" href="">
                        <img class="product-carousel-image" src="http://localhost/aeriz2023/wp-content/uploads/2023/07/Vape.png" alt="">
                      </a>
                    </div>
                    <div data-product-id="3" class="product-carousel-content">
                      <a class="product-carousel-links" tabIndex="-1" href="">
                        <img class="product-carousel-image" src="http://localhost/aeriz2023/wp-content/uploads/2023/07/FSHO.png" alt="">
                      </a>
                    </div>
                    <div data-product-id="4" class="product-carousel-content">
                      <a class="product-carousel-links" tabIndex="-1" href="">
                        <img class="product-carousel-image" src="http://localhost/aeriz2023/wp-content/uploads/2023/07/rosin.png" alt="">
                      </a>
                    </div>
                    <div data-product-id="5" class="product-carousel-content">
                      <a class="product-carousel-links" tabIndex="-1" href="">
                        <img class="product-carousel-image" src="http://localhost/aeriz2023/wp-content/uploads/2023/07/Vape.png" alt="">
                      </a>
                    </div>
                    <div data-product-id="6" class="product-carousel-content">
                      <a class="product-carousel-links" tabIndex="-1" href="">
                        <img class="product-carousel-image" src="http://localhost/aeriz2023/wp-content/uploads/2023/07/FSHO.png" alt="">
                      </a>
                    </div>
                    <div data-product-id="7" class="product-carousel-content">
                      <a class="product-carousel-links" tabIndex="-1" href="">
                        <img class="product-carousel-image" src="http://localhost/aeriz2023/wp-content/uploads/2023/07/Vape.png" alt="">
                      </a>
                    </div>
                    <div data-product-id="8" class="product-carousel-content product_carousel-spotlight">
                      <a class="product-carousel-links" tabIndex="-1" href="">
                        <img class="product-carousel-image" src="http://localhost/aeriz2023/wp-content/uploads/2023/07/rosin.png" alt="">
                      </a>
                    </div>
                    <div data-product-id="9" class="product-carousel-content product_carousel-spotlight-50">
                      <a class="product-carousel-links" tabIndex="-1" href="">
                        <img class="product-carousel-image" src="http://localhost/aeriz2023/wp-content/uploads/2023/07/Vape.png" alt="">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="section__products-carousel-tab-indicator">
                    <div data-indicator-id="1" class="tab-indicator section__products-tab-indicator--active"></div>
                    <div data-indicator-id="2"  class="tab-indicator"></div>
                    <div data-indicator-id="3" class="tab-indicator"></div>
                    <div data-indicator-id="4" class="tab-indicator"></div>
                    <div data-indicator-id="5" class="tab-indicator"></div>
                    <div data-indicator-id="6" class="tab-indicator"></div>
                    <div data-indicator-id="7" class="tab-indicator"></div>
                </div>
            
            </div>
          </div>
        </section>
        <!---->
        <section id="section__ethos" class="section__default section__ethos">
          <div class="section__default-banner">
            <h3 class="section__default-banner-text">Purity with a Purpose</h3>
          </div>
          <article id="section__ethos-article" class="section__ethos-article">
          Our aeroponic cultivation process honors the plant – and planet – first. Instead of soil, we use <span class="text__color-mask-yellow text__hover-img">recyclable clay beds</span> and a <span class="text__color-mask-pink text__hover-img">closed-loop nutrient system</span> to reap consistent, high-quality grows without unnecessary waste. With the <span class="text__color-mask-blue text__hover-img">lowest contamination numbers in the industry</span>, sustainable packaging, and a partnership with Pachama, we’re committed to doing better by Earth. 
          </article>
        </section>
        <!---->
        <section id="section__sustainability" class="section__default section__sustainability">
          <div class="section__default-banner">
            <a href="" id="btn__section-purity" class="btn__w-arrow section__default-banner-link tab--deactivate">go deeper<div class="btn__arrow"></div></a>
            </div>
        </section>
        <!---->
        <section id="section__blog" class="section__blog">
          <div class="section__default">
            <div class="section__default-banner">
              <h3 class="section__default-banner-text">Fresh Takes & Deep Cuts</h3>
            </div>
          </div>
        </section>
        <!---->
      </main>
      <!---->
    <!---->
<?php 
get_footer();



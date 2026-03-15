<?php $__env->startSection('title', 'Home - FLY Trust'); ?>

<?php $__env->startSection('meta'); ?>
<meta name="description"
    content="North Bengal offers premium dairy products, latest news, and world-class services. Explore our departments and services with ease.">
<meta name="keywords" content="North Bengal, dairy products, latest news, services, departments, quality dairy">
<meta property="og:title" content="Home - North Bengal">
<meta property="og:description"
    content="Discover North Bengal’s quality dairy products, latest news, and world-class services.">
<meta property="og:image" content="<?php echo e(asset('frontend/assets/img/northbengal/home-banner.png')); ?>">
<meta property="og:type" content="website">
<meta name="robots" content="index, follow">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<style>
  .client-logo-item img {
    filter: grayscale(0);
    transition: filter 0.3s ease;
}

.client-logo-item img:hover {
    filter: grayscale(100%);
}

</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>


<!-- hereo search start  -->
<?php echo $__env->make('website.layouts.hero_search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- hereo search end  -->
    <!-- ================================
    START HERO-WRAPPER AREA
================================= -->
    
    <!-- end hero-wrapper -->
    <!-- ================================
    END HERO-WRAPPER AREA
================================= -->
<!-- slkdfksjfksjakf askfjskfj klsfjklasjdfkasdjfkaj kfjdsakfj ksdafj kfa  -->
<section class="info-area info-bg padding-top-50px padding-bottom-50px text-center" style="background-color:#ffffff;">
    <div class="container">

        <div id="tutorialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">

            <div class="carousel-inner">

                <!-- SLIDE 1 -->
                <div class="carousel-item active">
                    <div class="row justify-content-center g-2">

                        <div class="col-6 col-md-4 text-center">
                            <img src="<?php echo e(asset('frontend/images/how_do/eng_flight_img.webp')); ?>"
                                 class="tutorial-img img-fluid">
                        </div>

                        <div class="col-6 col-md-4 text-center">
                            <img src="<?php echo e(asset('frontend/images/how_do/eng_hotel-web-3.webp')); ?>"
                                 class="tutorial-img img-fluid">
                        </div>

                        <div class="col-6 col-md-4 text-center">
                            <img src="<?php echo e(asset('frontend/images/how_do/eng_discount-web-3.webp')); ?>"
                                 class="tutorial-img img-fluid">
                        </div>

                    </div>
                </div>

                <!-- SLIDE 2 -->
                <div class="carousel-item">
                    <div class="row justify-content-center g-4">

                        <div class="col-6 col-md-4 text-center">
                            <img src="<?php echo e(asset('frontend/images/how_do/eng_account-web-3.webp')); ?>"
                                 class="tutorial-img img-fluid">
                        </div>

                        <div class="col-6 col-md-4 text-center">
                            <img src="<?php echo e(asset('frontend/images/how_do/eng_flight_img.webp')); ?>"
                                 class="tutorial-img img-fluid">
                        </div>

                        <div class="col-6 col-md-4 text-center">
                            <img src="<?php echo e(asset('frontend/images/how_do/eng_hotel-web-3.webp')); ?> "
                                 class="tutorial-img img-fluid">
                        </div>

                    </div>
                </div>

            </div>

            <!-- CONTROLS -->
            <button class="carousel-control-prev" type="button" data-bs-target="#tutorialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#tutorialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>
    </div>
</section>

<style>
    .tutorial-img {
        max-width: 300px; /* Large size for cards */
        width: 100%;
        margin: auto;
        display: block;
    }

    @media (max-width: 576px) {
        .tutorial-img {
            max-width: 180px; /* Responsive for mobile */
        }
    }

    .carousel-item {
        background: transparent; /* Remove white background */
    }
</style>

<!-- slkdfksjfksjakf askfjskfj klsfjklasjdfkasdjfkaj kfjdsakfj ksdafj kfa  -->


<!-- hot deal tab start   -->
 <?php echo $__env->make('website.layouts.tab', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- hot deal tab end   -->


    <div class="section-block"></div>

    <!-- ================================
    START ROUND-TRIP AREA
================================= -->
    <section class="round-trip-flight section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading text-center">
              <h2 class="sec__title line-height-55">
                Most Popular Round-trip <br />
                Flight Destinations
              </h2>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-50px">
          <div class="col-lg-12">
            <div class="flight-filter-tab text-center">
              <div class="section-tab section-tab-3">
                <ul
                  class="nav nav-tabs justify-content-center"
                  id="myTab4"
                  role="tablist"
                >
                  <li class="nav-item">
                    <a
                      class="nav-link active"
                      id="new-york-tab"
                      data-bs-toggle="tab"
                      href="#new-york"
                      role="tab"
                      aria-controls="new-york"
                      aria-selected="false"
                    >
                      New York
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="hong-kong-tab"
                      data-bs-toggle="tab"
                      href="#hong-kong"
                      role="tab"
                      aria-controls="hong-kong"
                      aria-selected="false"
                    >
                      Hong Kong
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="beijing-tab"
                      data-bs-toggle="tab"
                      href="#beijing"
                      role="tab"
                      aria-controls="beijing"
                      aria-selected="false"
                    >
                      Beijing
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="tokyo-tab"
                      data-bs-toggle="tab"
                      href="#tokyo"
                      role="tab"
                      aria-controls="tokyo"
                      aria-selected="false"
                    >
                      Tokyo
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      class="nav-link"
                      id="seoul-tab"
                      data-bs-toggle="tab"
                      href="#seoul"
                      role="tab"
                      aria-controls="seoul"
                      aria-selected="false"
                    >
                      Seoul
                    </a>
                  </li>
                </ul>
              </div>
              <!-- end section-tab -->
            </div>
            <!-- end flight-filter-tab -->
            <div class="popular-round-trip-wrap padding-top-40px">
              <div class="tab-content" id="myTabContent4">
                <div
                  class="tab-pane fade show active"
                  id="new-york"
                  role="tabpanel"
                  aria-labelledby="new-york-tab"
                >
                  <div class="row">
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              New York<i class="la la-exchange mx-2"></i>Los
                              Angeles
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img2.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              New York<i class="la la-exchange mx-2"></i
                              >Barcelona
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$740</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img3.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              New York<i class="la la-exchange mx-2"></i>Dallas
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$140</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img4.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              New York<i class="la la-exchange mx-2"></i>San
                              Francisco
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img5.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              New York<i class="la la-exchange mx-2"></i>Miami
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$100</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img6.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              New York<i class="la la-exchange mx-2"></i>London
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$640</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                  </div>
                </div>
                <!-- end tab-pane -->
                <div
                  class="tab-pane fade"
                  id="hong-kong"
                  role="tabpanel"
                  aria-labelledby="hong-kong-tab"
                >
                  <div class="row">
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Hong Kong<i class="la la-exchange mx-2"></i
                              >Singapore
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img2.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Hong Kong<i class="la la-exchange mx-2"></i>Tokyo
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$740</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img3.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Hong Kong<i class="la la-exchange mx-2"></i>Seoul
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$140</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img4.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Hong Kong<i class="la la-exchange mx-2"></i>Manila
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img5.png' )); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Hong Kong<i class="la la-exchange mx-2"></i>Nepal
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$100</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img6.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Hong Kong<i class="la la-exchange mx-2"></i
                              >Beijing
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$640</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                  </div>
                </div>
                <!-- end tab-pane -->
                <div
                  class="tab-pane fade"
                  id="seoul"
                  role="tabpanel"
                  aria-labelledby="seoul-tab"
                >
                  <div class="row">
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Seoul<i class="la la-exchange mx-2"></i>Nepal
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img2.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Seoul<i class="la la-exchange mx-2"></i>Taipei
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$740</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img3.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Seoul<i class="la la-exchange mx-2"></i>Beijing
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$140</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img4.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Seoul<i class="la la-exchange mx-2"></i>Tokyo
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img5.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Seoul<i class="la la-exchange mx-2"></i>Hong kong
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$100</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img6.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Seoul<i class="la la-exchange mx-2"></i>Bangkok
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$640</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                  </div>
                </div>
                <!-- end tab-pane -->
                <div
                  class="tab-pane fade"
                  id="tokyo"
                  role="tabpanel"
                  aria-labelledby="tokyo-tab"
                >
                  <div class="row">
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Tokyo<i class="la la-exchange mx-2"></i>Taipei
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img2.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Tokyo<i class="la la-exchange mx-2"></i>Taipei
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$740</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img3.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Tokyo<i class="la la-exchange mx-2"></i>Beijing
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$140</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img4.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Tokyo<i class="la la-exchange mx-2"></i>Tokyo
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img5.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Tokyo<i class="la la-exchange mx-2"></i>Hong kong
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$100</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img6.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Tokyo<i class="la la-exchange mx-2"></i>Hanoi
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$640</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                  </div>
                </div>
                <!-- end tab-pane -->
                <div
                  class="tab-pane fade"
                  id="beijing"
                  role="tabpanel"
                  aria-labelledby="beijing-tab"
                >
                  <div class="row">
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Beijing<i class="la la-exchange mx-2"></i>Taipei
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img2.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Beijing<i class="la la-exchange mx-2"></i>Taipei
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$740</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img3.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Beijing<i class="la la-exchange mx-2"></i>Beijing
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$140</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img4.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Beijing<i class="la la-exchange mx-2"></i>Tokyo
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$340</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img5.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Beijing<i class="la la-exchange mx-2"></i>Hong
                              kong
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$100</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                    <div class="col-lg-4 responsive-column">
                      <div class="deal-card">
                        <div class="deal-title d-flex align-items-center">
                          <img
                            src="<?php echo e(asset('frontend/images/airline-img6.png')); ?>"
                            alt="air-line-img"
                          />
                          <h3 class="deal__title">
                            <a
                              href="flight-single.html"
                              class="d-flex align-items-center"
                            >
                              Beijing<i class="la la-exchange mx-2"></i>Hanoi
                            </a>
                          </h3>
                        </div>
                        <p class="deal__meta">Tue, Jul 14-Fri, Jul 24</p>
                        <div
                          class="deal-action-box d-flex align-items-center justify-content-between"
                        >
                          <div class="price-box d-flex align-items-center">
                            <span class="price__from me-1">From</span
                            ><span class="price__num">$640</span>
                          </div>
                          <a href="flight-single.html" class="btn-text"
                            >See details<i class="la la-angle-right"></i
                          ></a>
                        </div>
                      </div>
                      <!-- end deal-card -->
                    </div>
                    <!-- end col-lg-4 -->
                  </div>
                </div>
                <!-- end tab-pane -->
              </div>
              <!-- end tab-content -->
              <div
                class="tab-content-info d-flex justify-content-between align-items-center"
              >
                <p class="font-size-15">
                  <i class="la la-question-circle me-1"></i>Average round-trip
                  price per person, taxes and fees included.
                </p>
                <a href="#" class="btn-text font-size-15"
                  >Discover More <i class="la la-angle-right"></i
                ></a>
              </div>
              <!-- end tab-content-info -->
            </div>
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end round-trip-flight -->
    <!-- ================================
    END ROUND-TRIP AREA
================================= -->

    <!-- ================================
    START HOTEL AREA
================================= -->
    <section class="hotel-area section-bg section-padding overflow-hidden padding-right-100px padding-left-100px">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading text-center">
              <h2 class="sec__title line-height-55">
                Most Popular Hotel <br />
                Destinations
              </h2>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-50px">
          <div class="col-lg-12">
            <div class="hotel-card-wrap">
              <div class="hotel-card-carousel carousel-action">
                <div class="card-item mb-0">
                  <div class="card-img">
                    <a href="hotel-single.html" class="d-block">
                      <img src="<?php echo e(asset('frontend/images/img1.jpg')); ?>" alt="hotel-img" />
                    </a>
                    <span class="badge">Bestseller</span>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Bookmark"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="hotel-single.html"
                        >The Millennium Hilton New York</a
                      >
                    </h3>
                    <p class="card-meta">124 E Huron St, New york</p>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$88.00</span>
                        <span class="price__text">Per night</span>
                      </p>
                      <a href="hotel-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item mb-0">
                  <div class="card-img">
                    <a href="hotel-single.html" class="d-block">
                      <img src="<?php echo e(asset('frontend/images/img2.jpg')); ?>" alt="hotel-img" />
                    </a>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Bookmark"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="hotel-single.html"
                        >Best Western Grant Park Hotel</a
                      >
                    </h3>
                    <p class="card-meta">124 E Huron St, Chicago</p>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$58.00</span>
                        <span class="price__text">Per night</span>
                      </p>
                      <a href="hotel-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item mb-0">
                  <div class="card-img">
                    <a href="hotel-single.html" class="d-block">
                      <img src="<?php echo e(asset('frontend/images/img3.jpg')); ?>" alt="hotel-img" />
                    </a>
                    <span class="badge">Featured</span>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Bookmark"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="hotel-single.html"
                        >Hyatt Regency Maui Resort & Spa</a
                      >
                    </h3>
                    <p class="card-meta">200 Nohea Kai Dr, Lahaina, HI</p>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$88.00</span>
                        <span class="price__text">Per night</span>
                      </p>
                      <a href="hotel-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item mb-0">
                  <div class="card-img">
                    <a href="hotel-single.html" class="d-block">
                      <img src="<?php echo e(asset('frontend/images/img4.jpg')); ?>" alt="hotel-img" />
                    </a>
                    <span class="badge">Popular</span>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Bookmark"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="hotel-single.html"
                        >Four Seasons Resort Maui at Wailea</a
                      >
                    </h3>
                    <p class="card-meta">3900 Wailea Alanui Drive, Kihei, HI</p>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$88.00</span>
                        <span class="price__text">Per night</span>
                      </p>
                      <a href="hotel-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item mb-0">
                  <div class="card-img">
                    <a href="hotel-single.html" class="d-block">
                      <img src="<?php echo e(asset('frontend/images/img5.jpg')); ?>" alt="hotel-img" />
                    </a>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Bookmark"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="hotel-single.html"
                        >Ibis Styles London Heathrow</a
                      >
                    </h3>
                    <p class="card-meta">272 Bath Road, Harlington, England</p>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$88.00</span>
                        <span class="price__text">Per night</span>
                      </p>
                      <a href="hotel-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item mb-0">
                  <div class="card-img">
                    <a href="hotel-single.html" class="d-block">
                      <img src="<?php echo e(asset('frontend/images/img6.jpg')); ?>" alt="hotel-img" />
                    </a>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Bookmark"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="hotel-single.html"
                        >Hotel Europe Saint Severin Paris</a
                      >
                    </h3>
                    <p class="card-meta">
                      38-40 Rue Saint Séverin, Paris, Paris
                    </p>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$88.00</span>
                        <span class="price__text">Per night</span>
                      </p>
                      <a href="hotel-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item mb-0">
                  <div class="card-img">
                    <a href="hotel-single.html" class="d-block">
                      <img src="<?php echo e(asset('frontend/images/img1.jpg')); ?>" alt="hotel-img" />
                    </a>
                    <span class="badge">Bestseller</span>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Bookmark"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="hotel-single.html"
                        >The Millennium Hilton New York</a
                      >
                    </h3>
                    <p class="card-meta">124 E Huron St, New york</p>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$88.00</span>
                        <span class="price__text">Per night</span>
                      </p>
                      <a href="hotel-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
                <div class="card-item mb-0">
                  <div class="card-img">
                    <a href="hotel-single.html" class="d-block">
                      <img src="<?php echo e(asset('frontend/images/img2.jpg')); ?>" alt="hotel-img" />
                    </a>
                    <div
                      class="add-to-wishlist icon-element"
                      data-bs-toggle="tooltip"
                      data-placement="top"
                      title="Bookmark"
                    >
                      <i class="la la-heart-o"></i>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">
                      <a href="hotel-single.html"
                        >Best Western Grant Park Hotel</a
                      >
                    </h3>
                    <p class="card-meta">124 E Huron St, Chicago</p>
                    <div class="card-rating">
                      <span class="badge text-white">4.4/5</span>
                      <span class="review__text">Average</span>
                      <span class="rating__text">(30 Reviews)</span>
                    </div>
                    <div
                      class="card-price d-flex align-items-center justify-content-between"
                    >
                      <p>
                        <span class="price__from">From</span>
                        <span class="price__num">$58.00</span>
                        <span class="price__text">Per night</span>
                      </p>
                      <a href="hotel-single.html" class="btn-text"
                        >See details<i class="la la-angle-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
                <!-- end card-item -->
              </div>
              <!-- end hotel-card-carousel -->
            </div>
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container-fluid -->
    </section>
    <!-- end hotel-area -->
    <!-- ================================
    END HOTEL AREA
================================= -->

    <!-- ================================
    START DESTINATION AREA
================================= -->
    <section class="destination-area section--padding">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <div class="section-heading">
              <h2 class="sec__title">Top Visited Places</h2>
              <p class="sec__desc pt-3">
                Morbi convallis bibendum urna ut viverra Maecenas quis
              </p>
            </div>

            <!-- end section-heading -->
          </div>
          <!-- end col-lg-8 -->
          <div class="col-lg-4">
            <div class="btn-box btn--box text-end">
              <a href="tour-grid.html" class="theme-btn">Discover More</a>
            </div>
          </div>
        </div>
        <!-- end row -->
        <div class="row padding-top-50px">
          <div class="col-lg-4">
            <div class="card-item destination-card">
              <div class="card-img">
                <img src="<?php echo e(asset('frontend/images/destination-img2.jpg')); ?>" alt="destination-img" />
                <span class="badge">new york</span>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="tour-details.html">Main Street Park</a>
                </h3>
                <div class="card-rating d-flex align-items-center">
                  <span class="ratings d-flex align-items-center me-1">
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star-o"></i>
                    <i class="la la-star-o"></i>
                  </span>
                  <span class="rating__text">(70694 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <p class="tour__text">50 Tours</p>
                  <p>
                    <span class="price__from">Price</span>
                    <span class="price__num">$58.00</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- end card-item -->
            <div class="card-item destination-card">
              <div class="card-img">
                <img src="<?php echo e(asset('frontend/images/destination-img3.jpg')); ?>" alt="destination-img" />
                <span class="badge">chicago</span>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="tour-details.html">Chicago Cultural Center</a>
                </h3>
                <div class="card-rating d-flex align-items-center">
                  <span class="ratings d-flex align-items-center me-1">
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star-o"></i>
                  </span>
                  <span class="rating__text">(70694 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <p class="tour__text">50 Tours</p>
                  <p>
                    <span class="price__from">Price</span>
                    <span class="price__num">$68.00</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4">
            <div class="card-item destination-card">
              <div class="card-img">
                <img src="<?php echo e(asset('frontend/images/destination-img4.jpg')); ?>" alt="destination-img" />
                <span class="badge">Hong Kong</span>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="tour-details.html">Lugard Road Lookout</a>
                </h3>
                <div class="card-rating d-flex align-items-center">
                  <span class="ratings d-flex align-items-center me-1">
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star-o"></i>
                    <i class="la la-star-o"></i>
                  </span>
                  <span class="rating__text">(70694 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <p class="tour__text">150 Tours</p>
                  <p>
                    <span class="price__from">Price</span>
                    <span class="price__num">$79.00</span>
                    <span class="price__num before-price">$89.00</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- end card-item -->
            <div class="card-item destination-card">
              <div class="card-img">
                <img src="<?php echo e(asset('frontend/images/destination-img5.jpg')); ?>" alt="destination-img" />
                <span class="badge">Las Vegas</span>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="tour-details.html">Planet Hollywood Resort</a>
                </h3>
                <div class="card-rating d-flex align-items-center">
                  <span class="ratings d-flex align-items-center me-1">
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star-o"></i>
                  </span>
                  <span class="rating__text">(70694 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <p class="tour__text">50 Tours</p>
                  <p>
                    <span class="price__from">Price</span>
                    <span class="price__num">$88.00</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4">
            <div class="card-item destination-card">
              <div class="card-img">
                <img src="<?php echo e(asset('frontend/images/destination-img.jpg')); ?>" alt="destination-img" />
                <span class="badge">Shanghai</span>
              </div>
              <div class="card-body">
                <h3 class="card-title">
                  <a href="tour-details.html">Oriental Pearl TV Tower</a>
                </h3>
                <div class="card-rating d-flex align-items-center">
                  <span class="ratings d-flex align-items-center me-1">
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                    <i class="la la-star"></i>
                  </span>
                  <span class="rating__text">(70694 Reviews)</span>
                </div>
                <div
                  class="card-price d-flex align-items-center justify-content-between"
                >
                  <p class="tour__text">50 Tours</p>
                  <p>
                    <span class="price__from">Price</span>
                    <span class="price__num">$58.00</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end destination-area -->
    <!-- ================================
    END DESTINATION AREA
================================= -->

    <!-- ================================
    START CAR AREA
================================= -->
    
    <!-- end car-area -->
    <!-- ================================
    END CAR AREA
================================= -->

    <!-- ================================
       START TESTIMONIAL AREA
================================= -->
      <?php if (isset($component)) { $__componentOriginal609a9b4936b0d46ed1e2e59baae41e2b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal609a9b4936b0d46ed1e2e59baae41e2b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.testimonial','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('testimonial'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal609a9b4936b0d46ed1e2e59baae41e2b)): ?>
<?php $attributes = $__attributesOriginal609a9b4936b0d46ed1e2e59baae41e2b; ?>
<?php unset($__attributesOriginal609a9b4936b0d46ed1e2e59baae41e2b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal609a9b4936b0d46ed1e2e59baae41e2b)): ?>
<?php $component = $__componentOriginal609a9b4936b0d46ed1e2e59baae41e2b; ?>
<?php unset($__componentOriginal609a9b4936b0d46ed1e2e59baae41e2b); ?>
<?php endif; ?>
    <!-- end testimonial-area -->
    <!-- ================================
       START TESTIMONIAL AREA
================================= -->

    <!-- ================================
    START CTA AREA
================================= -->
    <section class="cta-area padding-top-100px padding-bottom-180px text-center">
      <div class="video-bg">
        <video autoplay loop>
          <source src="<?php echo e(asset('frontend/video/video-bg.mp4')); ?>" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading">
              <h2 class="sec__title text-white line-height-55">
                Let us show you the world <br />
                Discover our most popular destinations
              </h2>
            </div>
            <!-- end section-heading -->
            <div class="btn-box padding-top-35px">
              <a href="become-local-expert.html" class="theme-btn border-0"
                >Join with us</a
              >
            </div>
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
      <!-- <svg class="cta-svg" viewBox="0 0 500 150" preserveAspectRatio="none">
        <path
          d="M-31.31,170.22 C164.50,33.05 334.36,-32.06 547.11,196.88 L500.00,150.00 L0.00,150.00 Z"
        ></path>
      </svg> -->
    </section>
    <!-- end cta-area -->
    <!-- ================================
    END CTA AREA
================================= -->

    <!-- ================================
       START BLOG AREA
================================= -->
    <section class="blog-area padding-top-30px padding-bottom-90px">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-heading text-center">
              <h2 class="sec__title line-height-55">
                Latest News & Articles <br />
                You Might Like
              </h2>
            </div>
            <!-- end section-heading -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
        <div class="row padding-top-50px">
          <div class="col-lg-4 responsive-column">
            <div class="card-item blog-card">
              <div class="card-img">
                <img src="<?php echo e(asset('frontend/images/blog-img.jpg')); ?>" alt="blog-img" />
                <div class="post-format icon-element">
                  <i class="la la-photo"></i>
                </div>
                <div class="card-body">
                  <div class="post-categories">
                    <a href="#" class="badge">Travel</a>
                    <a href="#" class="badge">lifestyle</a>
                  </div>
                  <h3 class="card-title line-height-26">
                    <a href="blog-single.html"
                      >When Traveling Avoid Expensive Hotels & Resorts</a
                    >
                  </h3>
                  <p class="card-meta">
                    <span class="post__date"> 1 January, 2020</span>
                    <span class="post-dot"></span>
                    <span class="post__time">5 Mins read</span>
                  </p>
                </div>
              </div>
              <div
                class="card-footer d-flex align-items-center justify-content-between"
              >
                <div class="author-content d-flex align-items-center">
                  <div class="author-img">
                    <img src="<?php echo e(asset('frontend/images/small-team1.jpg')); ?>" alt="testimonial image" />
                  </div>
                  <div class="author-bio">
                    <a href="#" class="author__title">Leroy Bell</a>
                  </div>
                </div>
                <div class="post-share">
                  <ul>
                    <li>
                      <i class="la la-share icon-element"></i>
                      <ul class="post-share-dropdown d-flex align-items-center">
                        <li>
                          <a href="#"><i class="lab la-facebook-f"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="lab la-twitter"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="lab la-instagram"></i></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4 responsive-column">
            <div class="card-item blog-card">
              <div class="card-img">
                <img src="<?php echo e(asset('frontend/images/blog-img2.jpg')); ?>" alt="blog-img" />
                <div class="post-format icon-element">
                  <i class="la la-play"></i>
                </div>
                <div class="card-body">
                  <div class="post-categories">
                    <a href="#" class="badge">Video</a>
                  </div>
                  <h3 class="card-title line-height-26">
                    <a href="blog-single.html"
                      >My Best Travel Tips: The Ultimate Travel Guide</a
                    >
                  </h3>
                  <p class="card-meta">
                    <span class="post__date"> 1 February, 2020</span>
                    <span class="post-dot"></span>
                    <span class="post__time">4 Mins read</span>
                  </p>
                </div>
              </div>
              <div
                class="card-footer d-flex align-items-center justify-content-between"
              >
                <div class="author-content d-flex align-items-center">
                  <div class="author-img">
                    <img src="<?php echo e(asset('frontend/images/small-team2.jpg')); ?>" alt="testimonial image" />
                  </div>
                  <div class="author-bio">
                    <a href="#" class="author__title">Phillip Hunt</a>
                  </div>
                </div>
                <div class="post-share">
                  <ul>
                    <li>
                      <i class="la la-share icon-element"></i>
                      <ul class="post-share-dropdown d-flex align-items-center">
                        <li>
                          <a href="#"><i class="lab la-facebook-f"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="lab la-twitter"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="lab la-instagram"></i></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
          <div class="col-lg-4 responsive-column">
            <div class="card-item blog-card">
              <div class="card-img">
                <img src="<?php echo e(asset('frontend/images/blog-img3.jpg')); ?>" alt="blog-img" />
                <div class="post-format icon-element">
                  <i class="la la-music"></i>
                </div>
                <div class="card-body">
                  <div class="post-categories">
                    <a href="#" class="badge">audio</a>
                  </div>
                  <h3 class="card-title line-height-26">
                    <a href="blog-single.html"
                      >By all Means, Travel to Popular Sites & Don’t Rule Out
                      Other Locations</a
                    >
                  </h3>
                  <p class="card-meta">
                    <span class="post__date"> 1 March, 2020</span>
                    <span class="post-dot"></span>
                    <span class="post__time">3 Mins read</span>
                  </p>
                </div>
              </div>
              <div
                class="card-footer d-flex align-items-center justify-content-between"
              >
                <div class="author-content d-flex align-items-center">
                  <div class="author-img">
                    <img src="<?php echo e(asset('frontend/images/small-team3.jpg')); ?>" alt="testimonial image" />
                  </div>
                  <div class="author-bio">
                    <a href="#" class="author__title">Luke Jacobs</a>
                  </div>
                </div>
                <div class="post-share">
                  <ul>
                    <li>
                      <i class="la la-share icon-element"></i>
                      <ul class="post-share-dropdown d-flex align-items-center">
                        <li>
                          <a href="#"><i class="lab la-facebook-f"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="lab la-twitter"></i></a>
                        </li>
                        <li>
                          <a href="#"><i class="lab la-instagram"></i></a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end card-item -->
          </div>
          <!-- end col-lg-4 -->
        </div>
        <!-- end row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="btn-box text-center pt-4">
              <a href="blog-grid.html" class="theme-btn">Read More Post</a>
            </div>
          </div>
        </div>
      </div>
      <!-- end container -->
    </section>
    <!-- end blog-area -->
    <!-- ================================
       START BLOG AREA
================================= -->

    <!-- ================================
    START MOBILE AREA
================================= -->
    
    <!-- end mobile-app -->
    <!-- ================================
    END MOBILE AREA
================================= -->

    <!-- ================================
       START CLIENTLOGO AREA
================================= -->
    <section class="clientlogo-area padding-top-80px padding-bottom-80px text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="client-logo">
              <div class="client-logo-item">
                <img src="<?php echo e(asset('frontend/images/client-logo.png')); ?>" alt="brand image" />
              </div>
              <!-- end client-logo-item -->
              <div class="client-logo-item">
                <img src="<?php echo e(asset('frontend/images/client-logo2.png')); ?>" alt="brand image" />
              </div>
              <!-- end client-logo-item -->
              <div class="client-logo-item">
                <img src="<?php echo e(asset('frontend/images/client-logo3.png')); ?>" alt="brand image" />
              </div>
              <!-- end client-logo-item -->
              <div class="client-logo-item">
                <img src="<?php echo e(asset('frontend/images/client-logo4.png')); ?>" alt="brand image" />
              </div>
              <!-- end client-logo-item -->
              <div class="client-logo-item">
                <img src="<?php echo e(asset('frontend/images/client-logo5.png')); ?>" alt="brand image" />
              </div>
              <!-- end client-logo-item -->
              <div class="client-logo-item">
                <img src="<?php echo e(asset('frontend/images/client-logo6.png')); ?>" alt="brand image" />
              </div>
              <!-- end client-logo-item -->
            </div>
            <!-- end client-logo -->
          </div>
          <!-- end col-lg-12 -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>
    <!-- end clientlogo-area -->
    <!-- ================================
       START CLIENTLOGO AREA
================================= -->


<?php $__env->stopSection(); ?>



<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('website.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\flytrust_exclusive\resources\views/website/index.blade.php ENDPATH**/ ?>
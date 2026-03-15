    <header class="header-area">
      <div class="header-top-bar padding-right-100px padding-left-100px">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="header-top-content">
                <div class="header-left">
                  <ul class="list-items">
                    <li>
                      <a href="#"
                        ><i class="la la-phone me-1"></i> +880 1775 668424, +880 1937 994722</a
                      >
                    </li>
                    <li>
                      <a href="#"
                        ><i class="la la-envelope me-1"></i
                        >flytrustinternational@gmail.com</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="header-top-content">
                <div
                  class="header-right d-flex align-items-center justify-content-end"
                >
                  
                  <?php if(auth()->guard()->check()): ?>
                  <div class="header-right-action">
                      <div class="dropdown">
                          <a class="theme-btn theme-btn-small dropdown-toggle" href="#" role="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="la la-user me-1"></i><?php echo e(Auth::user()->name); ?>

                          </a>
                          <ul class="dropdown-menu" aria-labelledby="userDropdown">
                              
                              <li>
                                  <a class="dropdown-item" 
                                    href="<?php echo e(auth()->user()->role_id == 3 
                                              ? url('/user/profile') 
                                              : (auth()->user()->role_id == 2 
                                                  ? url('/user/profile') 
                                                  : url('/admin'))); ?>">
                                      <i class="la la-dashboard me-2"></i>Dashboard
                                  </a>
                              </li>

                             
                              <li><hr class="dropdown-divider"></li>
                              <li>
                                  <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                      <i class="la la-power-off me-2"></i>Logout
                                  </a>
                                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                      <?php echo csrf_field(); ?>
                                  </form>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <?php else: ?>
                  <div class="header-right-action">
                      <a
                        href="#"
                        class="theme-btn theme-btn-small theme-btn-transparent me-1"
                        data-bs-toggle="modal"
                        data-bs-target="#signupPopupForm"
                        >Sign Up</a
                      >
                      <a
                        href="#"
                        class="theme-btn theme-btn-small"
                        data-bs-toggle="modal"
                        data-bs-target="#loginPopupForm"
                        >Login</a
                      >
                  </div>
                  <?php endif; ?>                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-menu-wrapper padding-right-100px padding-left-100px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="menu-wrapper">
                <a href="#" class="down-button"
                  ><i class="la la-angle-down"></i
                ></a>
                <div class="logo">
                  <a href="<?php echo e(route('home')); ?>"
                    ><img src="<?php echo e(asset('frontend/images/logo.png')); ?>" alt="logo"
                  /></a>
                  <div class="menu-toggler">
                    <i class="la la-bars"></i>
                    <i class="la la-times"></i>
                  </div>
                  <!-- end menu-toggler -->
                </div>
                <!-- end logo -->
                <div class="main-menu-content">
                  <nav>
                    <ul>
                      <li><a href="<?php echo e(route('home')); ?>">Home </a></li>
                      <li><a href="<?php echo e(route('flight')); ?>">Flight </a></li>
                      <li><a href="<?php echo e(route('tour')); ?>">Tour </a></li>
                      <li><a href="<?php echo e(route('hotel')); ?>">Hotel </a></li>
                      <li><a href="<?php echo e(route('visa')); ?>">Visa </a></li>
                      <li><a href="<?php echo e(route('contact')); ?>">Contact </a></li>
                      
                    </ul>
                  </nav>
                </div>
                <!-- end main-menu-content -->
                <div class="nav-btn">
                  <a href="become-local-expert.html" class="theme-btn"
                    >Become Local Expert</a
                  >
                </div>
                <!-- end nav-btn -->
              </div>
              <!-- end menu-wrapper -->
            </div>
            <!-- end col-lg-12 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container-fluid -->
      </div>
      <!-- end header-menu-wrapper -->
    </header><?php /**PATH D:\laragon\laragon\www\flytrust_exclusive\resources\views/website/layouts/header.blade.php ENDPATH**/ ?>
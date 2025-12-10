<?php if($list_item): ?>

<!--themes/Mytravel/Tour/Views/frontend/blocks/testimonial/index.blade.php-->
<div class="bravo-testimonial testimonial-block testimonial-v1 border-bottom border-color-8" 
style="
background-color:#f7f7f791;
background-image: url('uploads/0000/6/2025/01/01/clients-review-2.png') !important;
background-size: cover;
background-position: center;"
>
    <div class="container space-1">
        <div class="w-md-80 w-lg-50 text-center mx-md-auto my-3">
            <h2 class="section-title text-black font-size-30 font-weight-bold mb-0">
                <?php echo e($title); ?>

            </h2>
        </div>
        <!-- Slick Carousel -->
        <style>
            /* Style the rating container */
            .testmonials-item-rating-stars-active {
                
                overflow: hidden;
                display: inline-block;
                height: 26px; /* Adjust based on the star size */
                width: 100%; /* Active rating width - dynamic based on rating value */
            }
            
            /* Style the star container */
            .testmonials-item-rating-stars {
                list-style: none;
                margin: 0;
                padding: 0;
                color: #ccc; /* Inactive star color */
                font-size: 20px; /* Adjust size of stars */
            }
            
            /* Individual star styling */
            .testmonials-item-rating-stars li {
                display: inline-block;
                margin-right: 2px; /* Space between stars */
            }
            
            /* Active stars styling - this is controlled by width of parent container */
            .testmonials-item-rating-stars-active ul {
                white-space: nowrap;
                overflow: hidden;
                pointer-events: none;
            }
            
            .testmonials-item-rating-stars-active .active {
                color: #F0AD4E; /* Gold color for active stars */
            }
        
        </style>
        <div class="travel-slick-carousel u-slick u-slick--equal-height u-slick-bordered-primary u-slick--gutters-3 mb-4 pb-1" data-slides-show="3" data-center-mode="true" data-autoplay="true" data-speed="3000" data-pagi-classes="text-center u-slick__pagination mb-0 mt-n6" data-responsive='[ { "breakpoint": 992, "settings": { "slidesToShow": 2 } }, { "breakpoint": 768, "settings": { "slidesToShow": 1 } } ]'>
            <?php
                $starRatings = [
                    'Saidul Hossain' => 5,
                    'Sumon Ahmed' => 4,
                    'Jannatul Ferdous' => 3,
                ];
            ?>
            <?php $__currentLoopData = $list_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $avatar_url = get_file_url($item['avatar'], 'full') ?>
                <div class="item" style="margin-bottom:4.5rem !important;"> <!--my-10-->
                    <!-- Testimonials -->
                    <div class="card rounded-xs border-color-7 w-100" style="border-radius:10px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <img class="img-fluid rounded-circle" src="<?php echo e($avatar_url); ?>" alt="<?php echo e($item['name']); ?>">
                                    </div>
                                </div>
                                <div class="col-md-8 p-0">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                <div class="mb-1">
                                    <h6 class="font-size-17 font-weight-bold text-gray-6 mb-0"><?php echo e($item['name']); ?></h6>
                                    <span class="text-gray-1 font-size-15" style="text-transform:capitalize;"><?php echo e($item['position'] ?? ''); ?></span>
                                    <div class="testmonials-item-rating-stars-active" style="width: 100%">
                                        
                                        <ul class="testmonials-item-rating-stars">
                                                <?php 
                                                    $activeStars = $starRatings[$item['name']] ?? rand(4, 5); // Default to 5 stars if name not found 
                                                ?>
                                                
                                                <?php for($i = 1; $i <= 5; $i++): ?>
                                                    <li><i class="fa fa-star <?php echo e($i <= $activeStars ? 'active' : ''); ?>"></i></li>
                                                <?php endfor; ?>
                                        </ul>
                                    </div>
                                    
                                </div>
                                
                            </div>
                                </div>
                                <div class="col-md-12 text-center" style="border-top:1px #c2ccd6 solid;">
                                    <p class="mb-0 pt-3 text-dark font-normal text-lh-inherit" id="testimonialReviewText<?php echo e($index); ?>">
                                        <?php echo e($item['desc']); ?>

                                    </p><button class="btn btn-link" id="testimonialReviewTextSeeMore<?php echo e($index); ?>">See More</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- End Testimonials -->
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!-- End Slick Carousel -->
    </div>
</div>
<?php endif; ?>
<?php /**PATH D:\laragon\laragon\www\touriya\themes/Mytravel/Tour/Views/frontend/blocks/testimonial/index.blade.php ENDPATH**/ ?>
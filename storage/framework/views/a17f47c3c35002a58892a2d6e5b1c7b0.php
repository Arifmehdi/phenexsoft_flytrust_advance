<?php if(!is_api()): ?>
    
    <?php if(Request::url() == 'https://cosqbd.com'): ?>
        <?php echo $__env->make('Layout::parts.whatsapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
    <!--
    <h4 class="h6 mb-4 font-weight-bold">Need My Travel Help?</h4>
        <a href="tel:+8801983235354">
            <div class="d-flex align-items-center">
                <div class="mr-4">
                    <i class="fa fa-phone font-size-50" aria-hidden="true"></i>
                </div>
                <div>
                    <div class="mb-2 h6 font-weight-normal text-gray-1">Got Questions ? Call us 24/7</div>
                    <small class="d-block font-size-16 font-weight-normal text-primary">Call Us: <span class="text-primary font-weight-semi-bold">+8801983235354</span></small>
                </div>
            </div>
        </a>
        -->
    <style>
        .background-overlay {
            position: relative;
            background-position: bottom center;
            background-repeat: no-repeat;
            background-size: cover;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            opacity: 1; /* Keep full visibility of the parent image */
            height: 100%; /* Set height appropriately */
            width: 100%; /* Set width appropriately */
        }

        .background-overlay::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(143deg, #092F54 0%, #092F54 100%);
            opacity: 0.91; /* Adjust the transparency of the overlay */
            z-index: 1;
        }
        
        .background-overlay-copyright {
            position: relative;
            z-index: 2; /* To bring text or other elements above the overlay */
            color: #ffffff;
            padding: 5px; /* Adjust padding for inner content */
        }
        
        .background-overlay-img {
            position: relative;
            background-image: url('<?php echo e(asset('uploads/0000/6/2025/01/05/advice-that-will-help-you-with-your-travels.jpg')); ?>');
            background-position: bottom center;
            background-repeat: no-repeat;
            background-size: cover;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
            opacity: 1; /* Keep full visibility of the parent image */
            height: 100%; /* Set height appropriately */
            width: 100%; /* Set width appropriately */
        }

        .background-overlay-img::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(143deg, #092F54 0%, #0085C9F5 100%);
            opacity: 0.91; /* Adjust the transparency of the overlay */
            z-index: 1;
        }
        
        .background-overlay-footer {
            position: relative;
            z-index: 2; /* To bring text or other elements above the overlay */
            color: #ffffff;
            padding: 20px; /* Adjust padding for inner content */
        }

    </style>
    <!--Footer-->
    <div class="bravo_footer mt-4 border-top background-overlay-img">
		<div class="main-footer background-overlay-footer" style="
		margin:0 !important; 
		margin-top:20px !important;
		">
			<div class="container">
				<div class="row justify-content-xl-between">
                    <?php if(!empty($info_contact = clean(setting_item_with_lang('footer_info_text')))): ?>
                        <div class="col-12 col-lg-4 col-xl-3dot1 mb-6 mb-md-10 mb-xl-0">
                            <a class="d-inline-flex align-items-center" href="<?php echo e(url('/')); ?>" aria-label="<?php echo e(setting_item("site_title")); ?>">
                                <img style="width: auto; height:110px;" src="<?php echo e(asset('uploads/resources/white-logoi.png')); ?>" alt="<?php echo e(setting_item("site_title")); ?>">
                                
                                <span class="brand brand-dark d-none"><?php echo e(setting_item_with_lang('logo_text')); ?></span>
                            </a>
                            <br> <br>
                                <span class="mt-2" style="
                                text-align: justify;
                                color: #FFFFFF;
                                font-family: Rubik, Sans-serif;
                                font-size: 13px;
                                font-weight: 400;
                                text-transform: capitalize;
                                line-height: 22px;
                                ">
                                <?php echo e(setting_item("site_title")); ?> is a trusted travel partner offering flight booking, tour packages, hotel reservations, and visa processing services.
                                </span>
                            <?php echo clean($info_contact); ?>

                        </div>
                    <?php endif; ?>
                    <style>
                    
                        /* Important Links */
                        .custom-list .list-group-item {
                            font-size: 12px !important;
                            background-color: transparent !important; /* Removes background color */
                            text-decoration: none !important;         /* Removes underline */
                            color: white !important;                /* Keeps the text color consistent */
                            transition: color 0.3s ease !important;   /* Smooth transition for hover effect */
                        }
                        
                        .custom-list .list-group-item:hover {
                            color: white !important;                  /* Changes text color to white on hover */
                            background-color: transparent !important; /* Ensures no background color on hover */
                            text-decoration: none !important;         /* Ensures no underline on hover */
                        }
                        
                        .custom-list li {
                            position: relative;
                            padding-left: 25px; /* Add padding for the arrow space */
                        }
                        
                        .custom-list li::before {
                            content: "▶"; /* Right angle arrow symbol */
                            position: absolute;
                            left: 0;
                            top: 50%;
                            transform: translateY(-50%);
                            font-size: 12px; /* Adjust size as needed */
                            color: #007bff; /* Arrow color */
                            transition: color 0.3s; /* Optional: Hover transition */
                        }
                        
                        .custom-list li:hover::before {
                            color: white; /* Change arrow color on hover */
                        }
                        
                        
                        /* Contact Information */
                        
                        .contact-list .list-group-item {
                            font-size: 12px !important;
                            background-color: transparent !important; /* Removes background color */
                            text-decoration: none !important;         /* Removes underline */
                            color: white !important;                /* Keeps the text color consistent */
                            transition: color 0.3s ease !important;   /* Smooth transition for hover effect */
                        }
                    
                        .contact-list .list-group-item:hover {
                            color: white !important;                  /* Changes text color to white on hover */
                            background-color: transparent !important; /* Ensures no background color on hover */
                            text-decoration: none !important;      
                        }
                        
                        .contact-list li {
                            width: max-content;
                            position: relative;
                            padding-left: 0px; /* Add padding for the arrow space */
                        }
                        
                        .contact-list li::before {
                            content: ""; /* Right angle arrow symbol */
                            position: absolute;
                            left: 0;
                            top: 50%;
                            transform: translateY(-50%);
                            font-size: 12px; /* Adjust size as needed */
                            color: #007bff; /* Arrow color */
                            transition: color 0.3s; /* Optional: Hover transition */
                        }
                        
                        .text-decoration-on-hover:hover {
                            text-decoration: underline;
                        }
                        
                        .icon-wrapper{
                            position: relative;
                            padding-right: 10px;
                        }
                        
                        .address-wrapper{
                            position: relative;
                            padding-right: 35px;
                        }



                    </style>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-jLKHWMQ17U5BheU9a/f5FgpRI/0Rtb22mRbj38Q8FwV1Df+AkOZT5FEmN1jXIebh" crossorigin="anonymous">
                    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
					<?php if($list_widget_footers = setting_item_with_lang("list_widget_footer")): ?>
                        <?php $list_widget_footers = json_decode($list_widget_footers);?>
						<?php $__currentLoopData = $list_widget_footers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<div class="col-12 col-md-6 col-lg-<?php echo e($item->size ?? '3'); ?> col-xl-1dot8 mb-6 mb-md-10 mb-xl-0">
								<div class="nav-footer">
                                    <h4 style="
                                        margin-bottom: 15px;
                                        width: max-content;
                                        font-family: Rubik, Sans-serif;
                                        font-size: 17px;
                                        font-weight: 500;
                                        text-transform: uppercase;
                                        color: #FFFFFF;
                                        " 
                                        class=""><?php echo e($item->title); ?></h4> <!--h6 font-weight-bold mb-2 mb-xl-4 text-light-->
                                    <?php echo $item->content; ?>

								</div>
							</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php endif; ?>
                    
				</div>
			</div>
		</div>
		
            
        
		
    <!--Payment Method-->
    <div class="container context" style="padding: 0px !important; display:none;">
		<div class="row">
			<div class="col-md-12">
				<div class="f-visa text-center">
				    <img src="<?php echo e(asset('uploads/0000/6/2025/01/20/footer-payment-gatewayqc.png')); ?>" width="100%" />
				    
				</div>
			</div>
		</div>
	</div>
	<!--copyright-->
	
    <div class="background-overlay" style="">
	    <div class="container context" style="">
    		<div class="row background-overlay-copyright">
    		    
    			<div class="col-md-12 text-center" style="color:white;">
    				&copy; 2025 FlyTrust. All rights reserved
    			</div>
    			<!--<div class="col-md-6 text-right">-->
    			<!--	<a style="color:white; text-decoration:none;" href="https://faraitltd.com/">Developed by Fara IT Fusion Ltd.</a>-->
    			<!--</div>-->
    			
    		</div>
	    </div>
	</div>
	
<?php endif; ?>
<a class="travel-go-to u-go-to-modern" href="#" data-position='{"bottom": 15, "right": 15 }' data-type="fixed" data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
    <span class="flaticon-arrow u-go-to-modern__inner"></span>
</a>
<?php echo $__env->make('Layout::parts.login-register-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('Popup::frontend.popup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php if(Auth::id()): ?>
	<?php echo $__env->make('Media::browser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<link rel="stylesheet" href="<?php echo e(asset('libs/flags/css/flag-icon.min.css')); ?>">

<?php echo \App\Helpers\Assets::css(true); ?>



<script src="<?php echo e(asset('libs/lazy-load/intersection-observer.js')); ?>"></script>
<script async src="<?php echo e(asset('libs/lazy-load/lazyload.min.js')); ?>"></script>
<script>
    // Set the options to make LazyLoad self-initialize
    window.lazyLoadOptions = {
        elements_selector: ".lazy",
        // ... more custom settings?
    };

    // Listen to the initialization event and get the instance of LazyLoad
    window.addEventListener('LazyLoad::Initialized', function (event) {
        window.lazyLoadInstance = event.detail.instance;
    }, false);
</script>
<script src="<?php echo e(asset('libs/jquery-3.6.3.min.js')); ?>"></script>
<script src="<?php echo e(asset('themes/mytravel/libs/jquery-migrate/jquery-migrate.min.js')); ?>"></script>
<script src="<?php echo e(asset('themes/mytravel/libs/header.js')); ?>"></script>
<script>
    $(document).on('ready', function () {
        $.MyTravelHeader.init($('#header'));
    });
    
    document.addEventListener('DOMContentLoaded', function () {
        // Find all testimonial blocks by id pattern
        const testimonialBlocks = document.querySelectorAll('[id^="testimonialReviewText"]');
    
        testimonialBlocks.forEach((block, index) => {
            const text = document.getElementById(`testimonialReviewText${index}`);
            const button = document.getElementById(`testimonialReviewTextSeeMore${index}`);
    
            const fullText = text.innerText;
            const maxChars = 100;  // Set a character limit instead of word limit
    
            function truncateText(text, charLimit) {
                return text.length > charLimit 
                    ? text.slice(0, charLimit) + '...' 
                    : text;
            }
    
            // Truncate the text initially
            text.innerText = truncateText(fullText, maxChars);
            
            // Show or hide the 'See More' button based on the text length
            if (fullText.length > maxChars) {
                button.style.display = 'inline';  // Show the button
            } else {
                button.style.display = 'none';  // Hide the button
            }
            
            button.addEventListener('click', function () {
                if (text.innerText === fullText) {
                    // Collapse text
                    text.innerText = truncateText(fullText, maxChars);
                    button.innerText = 'See More';
                } else {
                    // Expand text
                    text.innerText = fullText;
                    button.innerText = 'See Less';
                }
            });
        });
    });

    /*document.addEventListener('DOMContentLoaded', function () {
        // Find all testimonial blocks by class or another identifier
        const testimonialBlocks = document.querySelectorAll('[id^="testimonialReviewText"]');
    
        testimonialBlocks.forEach((block, index) => {
            const text = document.getElementById(`testimonialReviewText${index}`);
            const button = document.getElementById(`testimonialReviewTextSeeMore${index}`);
    
            const fullText = text.innerText;
            const maxWords = 10;
    
            function truncateText(text, wordLimit) {
                const words = text.split(' ');
                return words.length > wordLimit 
                    ? words.slice(0, wordLimit).join(' ') + '...' 
                    : text;
            }
    
            // Truncate the text initially
            text.innerText = truncateText(fullText, maxWords);
    
            button.addEventListener('click', function () {
                if (text.innerText === fullText) {
                    // Collapse text
                    text.innerText = truncateText(fullText, maxWords);
                    button.innerText = 'See More';
                } else {
                    // Expand text
                    text.innerText = fullText;
                    button.innerText = 'See Less';
                }
            });
        });
    }); */

</script>
<script src="<?php echo e(asset('libs/lodash.min.js')); ?>"></script>
<script src="<?php echo e(asset('libs/vue/vue'.(!env('APP_DEBUG') ? '.min':'').'.js')); ?>"></script>
<script src="<?php echo e(asset('libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('libs/bootbox/bootbox.min.js')); ?>"></script>

<script src="<?php echo e(asset('themes/mytravel/libs/fancybox/jquery.fancybox.min.js')); ?>"></script>
<script src="<?php echo e(asset('themes/mytravel/libs/slick/slick.js')); ?>"></script>


<?php if(Auth::id()): ?>
	<script src="<?php echo e(asset('module/media/js/browser.js?_ver='.config('app.asset_version'))); ?>"></script>
<?php endif; ?>
<script src="<?php echo e(asset('libs/carousel-2/owl.carousel.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset("libs/daterange/moment.min.js")); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset("libs/daterange/daterangepicker.min.js")); ?>"></script>
<script src="<?php echo e(asset('libs/select2/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('themes/mytravel/js/functions.js?_ver='.config('app.asset_version'))); ?>"></script>
<script src="<?php echo e(asset('themes/mytravel/libs/custombox/custombox.min.js')); ?>"></script>
<script src="<?php echo e(asset('themes/mytravel/libs/custombox/custombox.legacy.min.js')); ?>"></script>
<script src="<?php echo e(asset('themes/mytravel/libs/custombox/window.modal.js')); ?>"></script>

<?php if(
    setting_item('tour_location_search_style')=='autocompletePlace' || setting_item('hotel_location_search_style')=='autocompletePlace' || setting_item('car_location_search_style')=='autocompletePlace' || setting_item('space_location_search_style')=='autocompletePlace' || setting_item('hotel_location_search_style')=='autocompletePlace' || setting_item('event_location_search_style')=='autocompletePlace'
): ?>
	<?php echo App\Helpers\MapEngine::scripts(); ?>

<?php endif; ?>
<script src="<?php echo e(asset('libs/pusher.min.js')); ?>"></script>
<script src="<?php echo e(asset('themes/mytravel/js/home.js?_ver='.config('app.asset_version'))); ?>"></script>

<?php if(!empty($is_user_page)): ?>
	<script src="<?php echo e(asset('module/user/js/user.js?_ver='.config('app.asset_version'))); ?>"></script>
<?php endif; ?>
<?php if(setting_item('cookie_agreement_type')=='cookie_agreement'): ?>
    and request()->cookie('booking_cookie_agreement_enable') !=1 and !is_api()  and !isset($_COOKIE['booking_cookie_agreement_enable']))
	<div class="booking_cookie_agreement p-3 fixed-bottom">
		<div class="container d-flex ">
            <div class="content-cookie"><?php echo setting_item_with_lang('cookie_agreement_content'); ?></div>
            <button class="btn save-cookie"><?php echo setting_item_with_lang('cookie_agreement_button_text'); ?></button>
        </div>
	</div>
	<script>
        var save_cookie_url = '<?php echo e(route('core.cookie.check')); ?>';
	</script>
	<script src="<?php echo e(asset('js/cookie.js?_ver='.config('app.asset_version'))); ?>"></script>
<?php endif; ?>
<?php echo $__env->renderWhen(setting_item('cookie_agreement_type')=='cookie_consent','Layout::parts.cookie-consent-init', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

<?php if(setting_item('user_enable_2fa')): ?>
    <?php echo $__env->make('auth.confirm-password-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('/module/user/js/2fa.js')); ?>"></script>
<?php endif; ?>
<?php if(request('preview')): ?>
    <script src="<?php echo e(asset('themes/mytravel/module/template/preview.js?_ver='.config('app.asset_version'))); ?>"></script>
<?php endif; ?>
<?php echo \App\Helpers\Assets::js(true); ?>


<?php echo $__env->yieldPushContent('js'); ?>

<?php \App\Helpers\ReCaptchaEngine::scripts() ?>
<?php /**PATH D:\laragon\laragon\www\flytrust_exclusive\themes/Mytravel/Layout/parts/footer.blade.php ENDPATH**/ ?>
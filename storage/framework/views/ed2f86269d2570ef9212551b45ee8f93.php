<div class="bravo-list-news">
    <div class="deals-carousel-block deals-carousel-v1 border-color-8">
        <div class="container space-1">
            <h2 class="section-title text-center mb-5 mt-3"><?php echo e($title); ?></h2>
            <div class="travel-slick-carousel u-slick u-slick--gutters-3" 
            data-slides-show="6" 
            
            data-autoplay="true" 
            data-center-mode="true"
            data-speed="3000"
            data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-classic--v2 u-slick__arrow-centered--y rounded-circle" 
            data-arrow-left-classes="flaticon-back u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-xl-n8" 
            data-arrow-right-classes="flaticon-next u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-xl-n8" 
            data-pagi-classes="d-lg-none text-center u-slick__pagination mt-4" 
            data-responsive='[ 
            { "breakpoint": 1025, "settings": { "slidesToShow": 6 } },
            { "breakpoint": 1025, "settings": { "slidesToShow": 3 } }, 
            { "breakpoint": 992, "settings": { "slidesToShow": 2 } }, 
            { "breakpoint": 768, "settings": { "slidesToShow": 1 } }, 
            { "breakpoint": 554, "settings": { "slidesToShow": 1 } } 
            ]'>
                <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-2 col-md-3">
                        <?php echo $__env->make('News::frontend.blocks.list-news.loop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php if($title=='Our Affiliations Flights & Hotels'): ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <style>
        .counter {
             border-radius: 5px;
             color:;
            background-size: cover; /* Ensures the image covers the entire area */
            background-position: center;
            background-repeat: no-repeat;
            height: 200px; /* Default height, can be adjusted */
            display: flex; /* Center align content (if needed) */
            align-items: center;
            justify-content: center;
            color: #fff; /* Example text color if overlayed text exists */
            text-align: center;
            padding: 20px;
        }
        
        .count-title {
            color: white;
            font-size: 32px;
            font-weight: 600;
            margin-top: 55px;
            margin-bottom: -10px;
            text-align: center;
        }
        
        .count-text {
            color: white;
            font-size: 16px;
            font-weight: normal;
            margin-top: 0px;
            margin-bottom: 0;
            text-align: center;
        }
        
        .fa-2x {
            margin: 0 auto;
            float: none;
            display: table;
            color: #4ad1e5;
        }
        
        @media only screen and (max-width: 768px) {
            .counter {
                height: 240px;
            }
        }
    </style>
    <script>
                    (function ($) {
            $.fn.countTo = function (options) {
                options = options || {};
        
                return $(this).each(function () {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from:            $(this).data('from'),
                        to:              $(this).data('to'),
                        speed:           $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals:        $(this).data('decimals')
                    }, options);
                    
                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;
                    
                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};
                    
                    $self.data('countTo', data);
                    
                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);
                    
                    // initialize the element with the starting value
                    render(value);
                    
                    function updateTimer() {
                        value += increment;
                        loopCount++;
                        
                        render(value);
                        
                        if (typeof(settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }
                        
                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;
                            
                            if (typeof(settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }
                    
                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };
            
            $.fn.countTo.defaults = {
                from: 0,               // the number the element should start at
                to: 0,                 // the number the element should end at
                speed: 100000,           // how long it should take to count between the target numbers
                refreshInterval: 5,  // how often the element should be updated
                decimals: 0,           // the number of decimal places to show
                formatter: formatter,  // handler for formatting the value before rendering
                onUpdate: null,        // callback method for every time the element is updated
                onComplete: null       // callback method for when the element finishes updating
            };
            
            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));
        
        jQuery(function ($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function (value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });
        
            // Setup intersection observer
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        var $el = $(entry.target);
                        var options = $el.data('countToOptions') || {};
                        $el.countTo(options);
                        observer.unobserve(entry.target); // Stop observing after it starts counting
                    }
                });
            }, { threshold: 0.1 }); // Trigger when 10% of the element is visible
        
            // Observe all elements with the class "timer"
            $('.timer').each(function () {
                observer.observe(this);
            });
        });

    </script>
    <div class="container">
        	<div class="row">
        	    <br/>
        	   <div class="col text-center">
        		<h2 class="section-title text-center mb-5 mt-3">Exciting Facts About Us</h2>
        		<p>Your gateway to hassle-free travel experiences! <?php echo e(setting_item("site_title")); ?> is a trusted name in the travel industry</p>
        		</div>
        	</div>
        		<div class="row text-center">
        	        <div class="col-md-3 col-12 mb-3">
        	        <div class="counter" style="background-image: url('https://cosqbd.com/uploads/0000/6/2024/12/30/our-customer.png');">
              
              
              <div>
                  <h2 class="timer count-title count-number"
              data-to="100" data-speed="1500"></h2>
               <p class="count-text">Our Customer</p>
              </div>
            </div>
        	        </div>
                      <div class="col-md-3 col-12 mb-3">
                       <div class="counter" style="background-image: url('https://cosqbd.com/uploads/0000/6/2024/12/30/complete-projects.png');">
              
              
                <div>
                    <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
                    <p class="count-text ">Happy Clients</p>
                </div>
            </div>
                      </div>
                      <div class="col-md-3 col-12 mb-3">
                          <div class="counter" style="background-image: url('https://cosqbd.com/uploads/0000/6/2024/12/30/client-meeting.png');">
              
              
              <div>
                  <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
                  <p class="count-text ">Project Complete</p>
              </div>
            </div></div>
                      <div class="col-md-3 col-12 mb-3">
                      <div class="counter" style="background-image: url('https://cosqbd.com/uploads/0000/6/2024/12/30/happy-client.png');">
              
              
              <div>
                  <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
                  <p class="count-text ">Coffee With Clients</p>
              </div>
            </div>
                      </div>
                 </div>
        </div>
<?php endif; ?><?php /**PATH D:\laragon\laragon\www\touriya\themes/Mytravel/News/Views/frontend/blocks/list-news/index.blade.php ENDPATH**/ ?>
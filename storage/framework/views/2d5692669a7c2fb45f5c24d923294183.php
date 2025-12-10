<?php $key_time = time(); ?>
<!-- 
Book your Hotel
bg img
/home/cosqbdco/public_html/themes/Mytravel/Template/Views/frontend/blocks/list-all-service/style_1.blade.php
-->
<div class="bravo-list-all-service tabs-block tab-v1" 
        style="background-image: url('uploads/0000/6/2024/12/14/bg-book-your-hotel.jpg') !important"
        >
    <div class="container"> <!--space-1-->
        <div class="w-md-80 w-lg-50 text-center mx-md-auto my-3">
            <h2 class="section-title text-black font-size-30 font-weight-bold mb-0"><?php echo e($title ?? ''); ?></h2>
        </div>
        <ul class="nav tab-nav-pill flex-nowrap pb-4 pb-lg-5 tab-nav justify-content-lg-center" role="tablist">
            <?php if(!empty($service_types)): ?>
                <?php $number = 0; ?>
                <?php $__currentLoopData = $service_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $allServices = get_bookable_services();
                        if(empty($allServices[$service_type]) OR empty($rows[$service_type])) continue;
                        $module = new $allServices[$service_type];
                    ?>
                    <!-- d-none -->
                    <li class="nav-item d-none" role="bravo_<?php echo e($service_type); ?>">
                        <a class="nav-link font-weight-medium <?php if($number == 0): ?> active <?php endif; ?>" data-toggle="pill" href="#bravo_<?php echo e($key_time.$service_type); ?>-tab">
                            <div class="d-flex flex-column flex-md-row  position-relative text-dark align-items-center">
                                <span class="tabtext font-weight-semi-bold">
                                    <?php echo e(!empty($modelBlock["title_for_".$service_type]) ? $modelBlock["title_for_".$service_type] : $module->getModelName()); ?>

                                </span>
                            </div>
                        </a>
                    </li>
                    <?php $number++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </ul>
        <div class="tab-content" >
            <?php if(!empty($service_types)): ?>
                <?php $number = 0; ?>
                <?php $__currentLoopData = $service_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $allServices = get_bookable_services();
                        if(empty($allServices[$service_type]) OR empty($rows[$service_type])) continue;
                    ?>

                    <div class="tab-pane fade <?php if($number == 0): ?> active show <?php endif; ?> bravo_<?php echo e($service_type); ?>" id="bravo_<?php echo e($key_time.$service_type); ?>-tab" >
                        <div class="row">
                            <?php $__currentLoopData = $rows[$service_type]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-6 col-lg-3 col-xl-<?php echo e($service_type == 'tour' ? 3 : 4); ?> mb-3 mb-md-3 pb-1">
                                    <?php echo $__env->make(ucfirst($service_type).'::frontend.layouts.search.loop-grid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php $number++; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

        </div>
        <div class="tab-content d-none" >
            <div class="w-md-80 w-lg-50 text-center mx-md-auto my-3">
                <h4 class="text-black font-weight-bold mb-0"><a href="/hotel"> View All </a></h4>
            </div>
        </div>
    </div>
</div><?php /**PATH D:\laragon\laragon\www\flytrust_exclusive\themes/Mytravel/Template/Views/frontend/blocks/list-all-service/style_1.blade.php ENDPATH**/ ?>
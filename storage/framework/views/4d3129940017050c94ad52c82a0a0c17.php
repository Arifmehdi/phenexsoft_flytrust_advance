<div class="bravo-list-event product-card-block product-card-v2 border-bottom border-color-8" 
 style="background-image: url('uploads/0000/6/2024/12/12/top-destrination-bg.png') !important"
 >
    <div class="container space-1">
        <!--d-flex  align-items-end-->
        <?php if(!empty($title)): ?>
            <div class="justify-content-between mb-3 pt-md-3 mt-1 pb-md-3 mb-md-2 align-items-center align-center text-center">
                <div class="font-weight-bold font-size-xs-20 font-size-30 mb-0 text-lh-sm">
                    <?php echo e($title); ?>

                    <small class="font-size-xs-14 font-size-14 mb-0 text-lh-sm d-block mt-1">
                        <?php echo e($desc); ?>

                    </small>
                </div>
                
            </div>
        <?php endif; ?>
        <div class="row">
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 col-lg-<?php echo e($col ?? 3); ?> col-xl-<?php echo e($col ?? 3); ?> mb-3 mb-md-4 pb-1">
                    <?php echo $__env->make('Event::frontend.layouts.search.loop-grid', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row text-center">
            <a href="<?php echo e(route("event.search")); ?>" class="font-weight-bold text-lh-1 mb-md-2 ml-2 align-items-center align-center text-center"><?php echo e(__("More")); ?>

                    <i class="flaticon-right-arrow ml-2"></i>
                </a>
        </div>
    </div>
</div><?php /**PATH D:\laragon\laragon\www\flytrust_exclusive\themes/Mytravel/Event/Views/frontend/blocks/list-event/style_1.blade.php ENDPATH**/ ?>
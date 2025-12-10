<?php if($list_item): ?>
    <div class="bravo-featured-item <?php echo e($style ?? ''); ?> <?php if(empty($border_none)): ?> border-bottom <?php endif; ?>" 
    style="background-image: url('uploads/0000/6/2024/12/26/why-choose-us-2.jpg') !important; background-size: cover; background-position: center; background-repeat: no-repeat; height:100%; width: 100%;">
        <div class="container text-center" style="
        margin-top:10px;
        margin-bottom:30px;
        "> 
            <div class="w-md-80 w-lg-50 text-center mx-md-auto pb-1 pt-5"> 
                <h2 class="section-title text-black font-size-30 font-weight-bold"><?php echo e($title ?? ''); ?></h2>
            </div>
            <div class="row">
                <?php $__currentLoopData = $list_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div style="background-image: url('images/card-bg.png'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 20px; height:100%; width: 100%;">
                            <div class="d-flex align-items-center gap-3 p-3 mt-3">
                                <i class="<?php echo e($item['icon']); ?> text-success font-size-40"></i>
                                <div class="pe-5">
                                    <h5 class="font-size-17 text-black font-weight-bold mb-1"><a href="<?php echo e($item['link'] ?? '#'); ?>"><?php echo e($item['title'] ?? ''); ?></a></h5>
                                    <p class="text-black px-xl-2 font-size-12 px-uw-7"><i><?php echo e($item['sub_title'] ?? ''); ?></i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH D:\laragon\laragon\www\touriya\themes/Mytravel/Template/Views/frontend/blocks/list-featured-item/style_2.blade.php ENDPATH**/ ?>
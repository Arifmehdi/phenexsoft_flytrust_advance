    <?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
        'slug' => null,
        'image' => null,
    ]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
        'slug' => null,
        'image' => null,
    ]); ?>
<?php foreach (array_filter(([
        'slug' => null,
        'image' => null,
    ]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
    <section class="breadcrumb-area <?php echo e($image ?? 'bread-bg-5'); ?>">
      <div class="breadcrumb-wrap">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="breadcrumb-content">
                <div class="section-heading">
                    <h2 class="sec__title text-white">
                        <?php echo e($slug ?? 'Default Title'); ?>

                    </h2>
                </div>
              </div>
              <!-- end breadcrumb-content -->
            </div>
            <!-- end col-lg-6 -->
            <div class="col-lg-6">
              <div class="breadcrumb-list text-end">
                <ul class="list-items">
                  <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
                  
                  <li> <?php echo e($slug ?? 'Default Title'); ?></li>
                </ul>
              </div>
              <!-- end breadcrumb-list -->
            </div>
            <!-- end col-lg-6 -->
          </div>
          <!-- end row -->
        </div>
        <!-- end container -->
      </div>
      <!-- end breadcrumb-wrap -->
      <!-- <div class="bread-svg-box">
        <svg
          class="bread-svg"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 100 10"
          preserveAspectRatio="none"
        >
          <polygon points="100 0 50 10 0 0 0 10 100 10"></polygon>
        </svg>
      </div> -->
      <!-- end bread-svg -->
    </section><?php /**PATH D:\laragon\laragon\www\flytrust_exclusive\resources\views/components/breadcrumb.blade.php ENDPATH**/ ?>
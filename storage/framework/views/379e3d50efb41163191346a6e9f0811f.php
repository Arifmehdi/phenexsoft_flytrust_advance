<?php
    $translation = $row->translate();
?>

<div class="item mb-4">
    <a class="d-block rounded-xs overflow-hidden mb-3"> 
        <?php if($row->image_id): ?>
            <?php if(!empty($disable_lazyload)): ?>
                <img src="<?php echo e(get_file_url($row->image_id,'medium')); ?>" class="img-fluid w-100" alt="<?php echo e($translation->name ?? ''); ?>">
            <?php else: ?>
                <?php echo get_image_tag($row->image_id,'medium',['class'=>'img-fluid w-100','alt'=>$row->title]); ?>

            <?php endif; ?>
        <?php endif; ?>
    </a>
    
    
</div>
<?php /**PATH D:\laragon\laragon\www\flytrust_exclusive\themes/Mytravel/News/Views/frontend/blocks/list-news/loop.blade.php ENDPATH**/ ?>
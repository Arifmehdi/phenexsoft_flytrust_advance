

<?php $__env->startSection('title', 'Privacy - FLY Trust'); ?>

<?php $__env->startSection('meta'); ?>
<meta name="description" content="Flytrust International — Read our Terms & Privacy Policy to understand how we protect your data.">
<meta name="keywords" content="Flytrust, privacy policy, terms, travel agency, data protection">
<meta property="og:title" content="Terms & Privacy Policy - Flytrust International">
<meta property="og:description" content="Know how Flytrust protects your personal data with secure policies and transparency.">
<meta property="og:type" content="website">
<meta name="robots" content="index, follow">
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<style>
    .terms-card{
        background: #ffffff;
        border-radius: 16px;
        padding: 40px;
        box-shadow: 0px 4px 25px rgba(0,0,0,0.07);
        border: 1px solid #eff2f7;
    }

    .terms-title{
        font-size: 26px;
        font-weight: 700;
        color: #0D4077;
    }

    .terms-section-title{
        font-size: 20px;
        font-weight: 600;
        margin-top: 30px;
        color: #0D4077;
    }

    .terms-list li{
        margin-bottom: 6px;
        line-height: 1.6;
    }

    .divider-line{
        width: 100%;
        height: 1px;
        background: #e6e6e6;
        margin: 25px 0;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<!-- Breadcrumb -->
<?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['slug' => 'Terms & Policy','image' => 'bread-bg-7']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['slug' => 'Terms & Policy','image' => 'bread-bg-7']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $attributes = $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2)): ?>
<?php $component = $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2; ?>
<?php unset($__componentOriginale19f62b34dfe0bfdf95075badcb45bc2); ?>
<?php endif; ?>

<section class="section--padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="terms-card">

                    <!-- Page Title -->
                    <h3 class="terms-title mb-3">
                        <i class="la la-lock me-2"></i> Privacy Policy — Flytrust International
                    </h3>

                    <p class="text-muted">
                        At Flytrust International, your privacy and data safety are our top priorities.
                        This policy explains how your information is collected, used, protected, and shared.
                    </p>

                    <div class="divider-line"></div>

                    <!-- Section 1 -->
                    <h4 class="terms-section-title">
                        <i class="la la-database me-2"></i> Information We Collect
                    </h4>

                    <ul class="terms-list mt-2">
                        <li>Full Name</li>
                        <li>Phone Number & Email Address</li>
                        <li>Passport Details (for visa/ticketing)</li>
                        <li>Travel Preferences</li>
                        <li>Payment Information (secured via third-party gateways)</li>
                    </ul>

                    <div class="divider-line"></div>

                    <!-- Section 2 -->
                    <h4 class="terms-section-title">
                        <i class="la la-cogs me-2"></i> How We Use Your Information
                    </h4>

                    <ul class="terms-list mt-2">
                        <li>To issue air tickets</li>
                        <li>To confirm hotel & transport bookings</li>
                        <li>To process visa applications</li>
                        <li>For customer communication & service updates</li>
                        <li>To improve and customize our services</li>
                    </ul>

                    <div class="divider-line"></div>

                    <!-- Section 3 -->
                    <h4 class="terms-section-title">
                        <i class="la la-shield-alt me-2"></i> Data Protection Measures
                    </h4>

                    <ul class="terms-list mt-2">
                        <li>Use of secure and encrypted systems</li>
                        <li>Restricted access for authorized staff only</li>
                        <li>We never sell or trade user data</li>
                        <li>No credit card information is stored on our servers</li>
                        <li>Compliance with Bangladesh Data Protection Standards</li>
                    </ul>

                    <div class="divider-line"></div>

                    <!-- Section 4 -->
                    <h4 class="terms-section-title">
                        <i class="la la-share-alt me-2"></i> Data Sharing Disclosure
                    </h4>

                    <p class="mt-2">Your information may only be shared with:</p>
                    <ul class="terms-list">
                        <li>Airlines</li>
                        <li>Hotels & Travel Partners</li>
                        <li>Visa Processing Authorities</li>
                        <li>Secure Payment Gateways</li>
                    </ul>

                    <p class="mt-3">This is strictly for completing your service request.</p>

                    <div class="divider-line"></div>

                    <!-- Section 5 -->
                    <h4 class="terms-section-title">
                        <i class="la la-file-contract me-2"></i> Policy Updates
                    </h4>

                    <p class="mt-2">
                        Flytrust International may update this policy when necessary.
                        Changes will be posted on this page with an updated revision date.
                    </p>

                </div>

            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('website.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\flytrust_exclusive\resources\views/website/privacy.blade.php ENDPATH**/ ?>
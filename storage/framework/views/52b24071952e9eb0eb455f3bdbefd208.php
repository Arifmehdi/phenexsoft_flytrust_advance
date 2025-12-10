

<?php $__env->startSection('title', 'Refund, Reissue & Cancellation Policy - FLY Trust'); ?>

<?php $__env->startSection('meta'); ?>
<meta name="description"
    content="Flytrust International refund, reissue, and cancellation policy for flights, tours, visas, and hotel bookings.">
<meta name="keywords" content="refund policy, cancellation, flight ticket refund, visa cancellation, tour refund">
<meta property="og:title" content="Refund, Reissue & Cancellation Policy - Flytrust International">
<meta property="og:description"
    content="Learn about Flytrust International’s refund, cancellation, and reissue policy for all travel services.">
<meta property="og:image" content="<?php echo e(asset('frontend/assets/img/northbengal/home-banner.png')); ?>">
<meta property="og:type" content="website">
<meta name="robots" content="index, follow">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Breadcrumb -->
<?php if (isset($component)) { $__componentOriginale19f62b34dfe0bfdf95075badcb45bc2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale19f62b34dfe0bfdf95075badcb45bc2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb','data' => ['slug' => 'Refund, Reissue & Cancellation Policy','image' => 'bread-bg-7']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['slug' => 'Refund, Reissue & Cancellation Policy','image' => 'bread-bg-7']); ?>
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

<section class="job-details-area section--padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="form-box modern-shadow rounded-3">
                    <div class="form-title-wrap d-flex align-items-center">
                        <i class="la la-money-bill-wave me-2 text-gray" style="font-size: 28px;"></i>
                        <h3 class="title">💰 Refund, Reissue & Cancellation Policy — Flytrust International</h3>
                    </div>

                    <div class="form-content contact-form-action">

                        <!-- Flight Ticket Section -->
                        <h4 class="mt-3 mb-2 fw-bold text-dark">✈ Flight Ticket Refund / Reissue</h4>
                        <div class="policy-box p-3 mb-3 bg-light rounded border">
                            <p><strong>✔ Notification Requirement</strong><br>
                                Customers must notify Flytrust International at least <strong>48 hours before travel</strong> for any refund or reissue request.
                            </p>

                            <p><strong>✔ Fees</strong></p>
                            <ul>
                                <li>Airline rules and charges apply</li>
                                <li>Flytrust service charges added separately</li>
                                <li>No-show charges may apply depending on airline regulations</li>
                            </ul>

                            <p><strong>✔ EMI Payments</strong><br>
                                Any EMI transaction fees will be deducted from the refund amount.
                            </p>

                            <p><strong>✔ Refund Timeline</strong><br>
                                Refunds are processed within <strong>1–5 business days</strong> or as per airline/supplier rules.<br>
                                <span class="text-danger fw-bold">All refunds are credited to your wallet only.</span><br>
                                Cash refunds, bank transfers, or other refund channels are strictly not allowed.
                            </p>

                            <p><strong>✔ Non-Refundable Charges</strong></p>
                            <ul>
                                <li>Convenience fees</li>
                                <li>Fare differences during reissue</li>
                            </ul>
                        </div>

                        <!-- Tour + Umrah Section -->
                        <h4 class="mt-4 mb-2 fw-bold text-dark">🌍 Tour Package & Umrah Refund Policy</h4>
                        <div class="policy-box p-3 mb-3 bg-light rounded border">
                            <p><strong>✔ Cancellation Request</strong><br>
                                Email: <a href="mailto:flytrustinternational@gmail.com">flytrustinternational@gmail.com</a>
                            </p>

                            <p><strong>✔ Black-Out Dates</strong><br>
                                No refunds applicable during peak travel or black-out periods.
                            </p>

                            <p><strong>✔ Refund Timeline</strong><br>
                                1–5 working days after processing (if applicable).
                            </p>

                            <p><strong>✔ EMI Charges</strong><br>
                                Any EMI fees will be deducted from the refund.
                            </p>
                        </div>

                        <!-- Visa Section -->
                        <h4 class="mt-4 mb-2 fw-bold text-dark">🛂 Visa Support Cancellation Policy</h4>
                        <div class="policy-box p-3 mb-3 bg-light rounded border">
                            <p>
                                Visa fees are <strong>non-refundable</strong> once submitted to the embassy.<br>
                                Refunds apply only if the respective embassy allows cancellation.
                            </p>
                        </div>

                        <!-- Hotel Section -->
                        <h4 class="mt-4 mb-2 fw-bold text-dark">🏨 Hotel Booking Cancellation Policy</h4>
                        <div class="policy-box p-3 mb-4 bg-light rounded border">
                            <ul>
                                <li>Hotel cancellation policies apply.</li>
                                <li>Date change is not allowed — customer must cancel and rebook.</li>
                                <li>Black-out dates are strictly non-refundable.</li>
                            </ul>
                        </div>

                    </div> <!-- end content -->

                </div> <!-- form-box -->

            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\laragon\www\flytrust_exclusive\resources\views/website/support.blade.php ENDPATH**/ ?>
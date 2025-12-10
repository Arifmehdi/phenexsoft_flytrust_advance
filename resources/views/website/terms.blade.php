@extends('website.layouts.master')

@section('title', 'Terms & Conditions - Flytrust International')

@section('meta')
<meta name="description" content="Terms & Conditions for Flytrust International — Know your rights and service guidelines.">
<meta name="keywords" content="Flytrust, terms, conditions, travel agency policy, service guidelines">
<meta property="og:title" content="Terms & Conditions - Flytrust International">
<meta property="og:description" content="Learn about Flytrust International's terms & conditions for safe and transparent travel services.">
<meta property="og:type" content="website">
<meta name="robots" content="index, follow">
@endsection

@push('css')
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
@endpush

@section('content')

<!-- Breadcrumb -->
<x-breadcrumb slug="Terms & Conditions" image="bread-bg-7"/>

<section class="section--padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="terms-card">

                    <!-- Page Title -->
                    <h3 class="terms-title mb-3">
                        <i class="la la-file-contract me-2"></i> Terms & Conditions — Flytrust International
                    </h3>

                    <p class="text-muted">
                        Please read these Terms & Conditions carefully before using our website or services.  
                        By continuing, you agree to abide by the following policies.
                    </p>

                    <div class="divider-line"></div>

                    <!-- 1. Acceptance of Terms -->
                    <h4 class="terms-section-title">
                        1. Acceptance of Terms
                    </h4>
                    <p class="mt-2">
                        By using the Flytrust International website or any of our services, you acknowledge and accept these Terms & Conditions.
                        If you do not agree, please discontinue usage.
                    </p>

                    <div class="divider-line"></div>

                    <!-- 2. Our Role -->
                    <h4 class="terms-section-title">
                        2. Our Role
                    </h4>
                    <p class="mt-2">
                        Flytrust International operates as a travel service facilitator connecting travelers with:
                    </p>
                    <ul class="terms-list">
                        <li>Airlines</li>
                        <li>Hotels</li>
                        <li>Tour operators</li>
                    </ul>
                    <p class="mt-2">
                        We do not own or operate flights, hotels, or transportation services.  
                        We assist in booking and customer support with the information provided by suppliers.
                    </p>

                    <div class="divider-line"></div>

                    <!-- 3. Booking Accuracy -->
                    <h4 class="terms-section-title">
                        3. Booking Accuracy
                    </h4>
                    <p class="mt-2">
                        All booking data, including flight schedules, hotel availability, and pricing,  
                        is sourced directly from service providers.
                    </p>

                    <p>
                        Flytrust International is not responsible for:
                    </p>

                    <ul class="terms-list">
                        <li>Changes in airline rules or policies</li>
                        <li>Hotel updates or modifications</li>
                        <li>Schedule adjustments by service providers</li>
                    </ul>

                    <div class="divider-line"></div>

                    <!-- 4. Payments -->
                    <h4 class="terms-section-title">
                        4. Payments
                    </h4>

                    <ul class="terms-list mt-2">
                        <li>All payments must be made through Flytrust-approved channels.</li>
                        <li>Convenience or processing charges may apply.</li>
                        <li>By making a payment, you authorize us to verify your payment details.</li>
                    </ul>

                    <p class="mt-2">
                        Failure to complete payment may result in cancellation of services.
                    </p>

                    <div class="divider-line"></div>

                    <!-- 5. Fraud Prevention -->
                    <h4 class="terms-section-title">
                        5. Fraud Prevention
                    </h4>

                    <p class="mt-2">
                        To ensure customer safety, Flytrust International follows strict verification procedures.
                        Any suspicious transaction may be:
                    </p>

                    <ul class="terms-list">
                        <li>Reviewed manually</li>
                        <li>Put on temporary hold</li>
                        <li>Cancelled if deemed fraudulent</li>
                    </ul>

                    <p class="mt-3">
                        We reserve the right to request additional identification or documents when necessary.
                    </p>

                </div>

            </div>
        </div>
    </div>
</section>

@endsection

@push('js')
@endpush

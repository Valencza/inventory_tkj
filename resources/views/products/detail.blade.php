@extends('layouts.app')

@section('content')
<div class="page-content">
    <!-- Start Container Fluid -->
    <div class="container-xxl">
        <div class="row">
            <div class="col-lg-12">
                <div class="card text-center"> <!-- Center align text in card -->
                    <div class="card-body">
                        <!-- Product Title -->
                        <p class="mb-1">
                            <a href="#!" class="fs-24 text-dark fw-bold">Men Black Slim Fit T-shirt</a>
                        </p>
                        
                        <!-- Carousel -->
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/admin/images/product/p-1.png') }}" alt="" class="img-fluid bg-light rounded mx-auto d-block">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/admin/images/product/p-10.png') }}" alt="" class="img-fluid bg-light rounded mx-auto d-block">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/admin/images/product/p-13.png') }}" alt="" class="img-fluid bg-light rounded mx-auto d-block">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/admin/images/product/p-14.png') }}" alt="" class="img-fluid bg-light rounded mx-auto d-block">
                                </div>

                                <!-- Carousel Controls -->
                                <a class="carousel-control-prev rounded" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next rounded" href="#carouselExampleFade" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                            </div>

                            <!-- Carousel Indicators -->
                            <div class="carousel-indicators m-0 mt-2 d-lg-flex d-none position-static h-100 justify-content-center">
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1" class="w-auto h-auto rounded bg-light active">
                                    <img src="{{ asset('assets/admin/images/product/p-1.png') }}" class="d-block avatar-xl" alt="swiper-indicator-img">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2" class="w-auto h-auto rounded bg-light">
                                    <img src="{{ asset('assets/admin/images/product/p-10.png') }}" class="d-block avatar-xl" alt="swiper-indicator-img">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3" class="w-auto h-auto rounded bg-light">
                                    <img src="{{ asset('assets/admin/images/product/p-13.png') }}" class="d-block avatar-xl" alt="swiper-indicator-img">
                                </button>
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="3" aria-label="Slide 3" class="w-auto h-auto rounded bg-light">
                                    <img src="{{ asset('assets/admin/images/product/p-14.png') }}" class="d-block avatar-xl" alt="swiper-indicator-img">
                                </button>
                            </div>
                        </div>

                        <!-- Product Description -->
                        <h4 class="text-dark fw-medium mt-3">Description :</h4>
                        <p class="text-muted">Top in sweatshirt fabric made from a cotton blend with a soft brushed inside. Relaxed fit with dropped shoulders, long sleeves and ribbing around the neckline, cuffs and hem. Small metal text applique.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Container Fluid -->
</div>
@endsection

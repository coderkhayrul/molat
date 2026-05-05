@extends('frontend.layouts.app')
@section('content')
    <!-- Page Header -->
    <div class="bg-white border-bottom py-4 mb-5">
        <div class="container">
            <h2 class="fw-bold mb-0"><i class="fas fa-shopping-cart text-warning me-2"></i> আপনার শপিং কার্ট</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 mt-2">
                    <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none">হোম</a></li>
                    <li class="breadcrumb-item"><a href="books.html" class="text-decoration-none">বইসমূহ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">কার্ট</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row g-5">

            <!-- Cart Items Area -->
            <div class="col-lg-8">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-bold text-muted mb-0">কার্টে মোট ২টি বই আছে</h5>
                    <a href="books.html" class="text-decoration-none fw-bold text-primary"><i
                            class="fas fa-arrow-left me-1"></i> আরও বই কিনুন</a>
                </div>

                <!-- Cart Item 1 -->
                <div class="cart-item">
                    <div class="cart-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                            alt="Book Cover" class="cart-img">
                    </div>

                    <div class="cart-details">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <a href="#" class="cart-title d-block">মহাকাশের রহস্য</a>
                                <p class="text-muted small mb-1">লেখক: ড. মুহম্মদ জাফর ইকবাল</p>
                                <p class="text-muted small mb-3">প্রকাশনী: তাম্রলিপি</p>
                            </div>
                            <button class="btn btn-sm btn-light text-danger rounded-circle" title="রিমুভ করুন"
                                style="width: 35px; height: 35px;">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>

                        <div class="d-flex flex-wrap justify-content-between align-items-center mt-2">
                            <div class="d-flex align-items-center gap-3">
                                <span class="fw-bold text-dark fs-5">৳ ২৮০</span>
                                <span class="text-muted small">/ কপি</span>
                            </div>

                            <div class="d-flex align-items-center gap-4 mt-3 mt-sm-0">
                                <!-- Quantity Control -->
                                <div class="quantity-wrapper">
                                    <button type="button" class="quantity-btn"><i class="fas fa-minus"></i></button>
                                    <input type="text" class="quantity-input" value="1" readonly>
                                    <button type="button" class="quantity-btn"><i class="fas fa-plus"></i></button>
                                </div>
                                <div class="text-end" style="min-width: 80px;">
                                    <span class="fw-bold text-success fs-5">৳ ২৮০</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cart Item 2 -->
                <div class="cart-item">
                    <div class="cart-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80"
                            alt="Book Cover" class="cart-img">
                    </div>

                    <div class="cart-details">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <a href="#" class="cart-title d-block">জোছনা ও জননীর গল্প</a>
                                <p class="text-muted small mb-1">লেখক: হুমায়ূন আহমেদ</p>
                                <p class="text-muted small mb-3">প্রকাশনী: অন্যপ্রকাশ</p>
                            </div>
                            <button class="btn btn-sm btn-light text-danger rounded-circle" title="রিমুভ করুন"
                                style="width: 35px; height: 35px;">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </div>

                        <div class="d-flex flex-wrap justify-content-between align-items-center mt-2">
                            <div class="d-flex align-items-center gap-3">
                                <span class="fw-bold text-dark fs-5">৳ ৪৫০</span>
                                <span class="text-muted small">/ কপি</span>
                            </div>

                            <div class="d-flex align-items-center gap-4 mt-3 mt-sm-0">
                                <!-- Quantity Control -->
                                <div class="quantity-wrapper">
                                    <button type="button" class="quantity-btn"><i class="fas fa-minus"></i></button>
                                    <input type="text" class="quantity-input" value="2" readonly>
                                    <button type="button" class="quantity-btn"><i class="fas fa-plus"></i></button>
                                </div>
                                <div class="text-end" style="min-width: 80px;">
                                    <span class="fw-bold text-success fs-5">৳ ৯০০</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Order Summary Area -->
            <div class="col-lg-4">
                <div class="summary-card">
                    <h4 class="summary-title">অর্ডার সামারি</h4>

                    <div class="summary-row">
                        <span>সাবটোটাল (৩টি বই)</span>
                        <span class="fw-bold text-dark">৳ ১১৮০</span>
                    </div>
                    <div class="summary-row">
                        <span>ডেলিভারি চার্জ</span>
                        <span class="fw-bold text-dark">৳ ৬০</span>
                    </div>
                    <div class="summary-row text-success">
                        <span>ডিসকাউন্ট (Promo)</span>
                        <span class="fw-bold">- ৳ 0</span>
                    </div>

                    <!-- Promo Code Box -->
                    <div class="mt-4 mb-2">
                        <label class="small text-muted fw-bold mb-2">প্রোমো কোড থাকলে দিন:</label>
                        <div class="input-group promo-input">
                            <input type="text" class="form-control" placeholder="কোড লিখুন...">
                            <button class="btn btn-dark" type="button">অ্যাপ্লাই</button>
                        </div>
                    </div>

                    <div class="summary-total">
                        <span>মোট বিল</span>
                        <span class="text-success">৳ ১২৪০</span>
                    </div>

                    <p class="text-center text-muted small mt-3 mb-4">
                        <i class="fas fa-shield-alt text-success me-1"></i> ১০০% নিরাপদ চেকআউট
                    </p>

                    <a href="#" class="btn btn-warning btn-lg w-100 fw-bold rounded-pill shadow-sm">
                        চেকআউট করুন <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection

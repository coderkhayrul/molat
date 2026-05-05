@extends('frontend.layouts.app')
@section('content')
    <!-- Page Header -->
    <div class="bg-white border-bottom py-4 mb-5">
        <div class="container">
            <h2 class="fw-bold mb-0"><i class="fas fa-shield-alt text-success me-2"></i> নিরাপদ চেকআউট</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 mt-2">
                    <li class="breadcrumb-item"><a href="cart.html" class="text-decoration-none">কার্ট</a></li>
                    <li class="breadcrumb-item active" aria-current="page">চেকআউট</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container mb-5">
        <form action="#" method="POST">
            <div class="row g-5">

                <!-- Left Column: Shipping & Payment -->
                <div class="col-lg-8">

                    <!-- Contact Info Section -->
                    <div class="checkout-section">
                        <h4 class="section-title"><i class="fas fa-id-card"></i> যোগাযোগের তথ্য</h4>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="fullName" class="form-label">আপনার পুরো নাম <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="fullName" value="আহমেদ ফয়সাল" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">মোবাইল নম্বর <span
                                        class="text-danger">*</span></label>
                                <input type="tel" class="form-control" id="phone" value="+8801712345678" required>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">ইমেইল এড্রেস</label>
                                <input type="email" class="form-control" id="email" value="faisal.ahmed@example.com">
                            </div>
                        </div>
                    </div>

                    <!-- Shipping Address Section -->
                    <div class="checkout-section">
                        <h4 class="section-title"><i class="fas fa-truck"></i> ডেলিভারি ঠিকানা</h4>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="district" class="form-label">জেলা <span class="text-danger">*</span></label>
                                <select class="form-select" id="district" required>
                                    <option value="" disabled>জেলা নির্বাচন করুন</option>
                                    <option value="dhaka" selected>ঢাকা</option>
                                    <option value="chattogram">চট্টগ্রাম</option>
                                    <option value="sylhet">সিলেট</option>
                                    <option value="rajshahi">রাজশাহী</option>
                                    <option value="khulna">খুলনা</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="area" class="form-label">এরিয়া / থানা <span
                                        class="text-danger">*</span></label>
                                <select class="form-select" id="area" required>
                                    <option value="" disabled>এরিয়া নির্বাচন করুন</option>
                                    <option value="dhanmondi" selected>ধানমন্ডি</option>
                                    <option value="gulshan">গুলশান</option>
                                    <option value="mirpur">মিরপুর</option>
                                    <option value="uttara">উত্তরা</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="address" class="form-label">বিস্তারিত ঠিকানা (বাড়ি নং, রাস্তা, ফ্ল্যাট) <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="address" rows="3" required>বাড়ি নং ১০, রোড নং ৫, ধানমন্ডি</textarea>
                            </div>
                            <div class="col-12">
                                <label for="orderNotes" class="form-label">অতিরিক্ত নির্দেশিকা (অপশনাল)</label>
                                <textarea class="form-control" id="orderNotes" rows="2"
                                    placeholder="ডেলিভারি ম্যানের জন্য কোনো বিশেষ নির্দেশিকা থাকলে এখানে লিখুন..."></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Method Section -->
                    <div class="checkout-section mb-lg-0">
                        <h4 class="section-title"><i class="fas fa-wallet"></i> পেমেন্ট মেথড</h4>
                        <p class="text-muted small mb-4">আপনার সুবিধামতো একটি পেমেন্ট অপশন বেছে নিন।</p>

                        <div class="d-flex flex-column gap-3">
                            <!-- COD Option -->
                            <label class="payment-method-card active" id="card-cod">
                                <input type="radio" name="paymentMethod" value="cod" class="payment-radio" checked>
                                <div class="d-flex justify-content-center align-items-center rounded bg-light"
                                    style="width: 50px; height: 50px;">
                                    <i class="fas fa-hand-holding-usd fs-3 text-success"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1 text-dark">ক্যাশ অন ডেলিভারি (COD)</h6>
                                    <p class="text-muted small mb-0">বই হাতে পেয়ে পেমেন্ট করুন</p>
                                </div>
                            </label>

                            <!-- bKash Option -->
                            <label class="payment-method-card" id="card-bkash">
                                <input type="radio" name="paymentMethod" value="bkash" class="payment-radio">
                                <!-- Using a placeholder colored box for bKash since direct logo might not load -->
                                <div class="d-flex justify-content-center align-items-center rounded"
                                    style="width: 50px; height: 50px; background-color: #E2136E;">
                                    <i class="fas fa-mobile-alt fs-3 text-white"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1 text-dark">বিকাশ পেমেন্ট</h6>
                                    <p class="text-muted small mb-0">অনলাইনে নিরাপদে বিকাশ করুন</p>
                                </div>
                            </label>

                            <!-- SSLCommerz/Card Option -->
                            <label class="payment-method-card" id="card-ssl">
                                <input type="radio" name="paymentMethod" value="sslcommerz" class="payment-radio">
                                <div class="d-flex justify-content-center align-items-center rounded bg-dark"
                                    style="width: 50px; height: 50px;">
                                    <i class="far fa-credit-card fs-3 text-white"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1 text-dark">কার্ড / মোবাইল ব্যাংকিং</h6>
                                    <p class="text-muted small mb-0">ভিসা, মাস্টারকার্ড, রকেট, নগদ (SSLCommerz)</p>
                                </div>
                            </label>
                        </div>
                    </div>

                </div>

                <!-- Right Column: Order Summary -->
                <div class="col-lg-4">
                    <div class="summary-wrapper">
                        <div class="summary-card">
                            <h4 class="fw-bold border-bottom pb-3 mb-4">অর্ডার ওভারভিউ</h4>

                            <!-- Item 1 -->
                            <div class="mini-cart-item">
                                <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80"
                                    alt="Book" class="mini-cart-img">
                                <div class="mini-cart-details">
                                    <h6 class="mini-cart-title">মহাকাশের রহস্য</h6>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <span class="text-muted small">১ কপি</span>
                                        <span class="fw-bold">৳ ২৮০</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="mini-cart-item">
                                <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80"
                                    alt="Book" class="mini-cart-img">
                                <div class="mini-cart-details">
                                    <h6 class="mini-cart-title">জোছনা ও জননীর গল্প</h6>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <span class="text-muted small">২ কপি</span>
                                        <span class="fw-bold">৳ ৯০০</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Totals -->
                            <div class="mt-4 pt-2">
                                <div class="summary-row">
                                    <span>সাবটোটাল</span>
                                    <span class="fw-bold text-dark">৳ ১১৮০</span>
                                </div>
                                <div class="summary-row">
                                    <span>ডেলিভারি চার্জ <small class="text-muted">(ঢাকা)</small></span>
                                    <span class="fw-bold text-dark">৳ ৬০</span>
                                </div>

                                <div class="summary-total">
                                    <span>সর্বমোট</span>
                                    <span class="text-success">৳ ১২৪০</span>
                                </div>
                            </div>

                            <!-- Policy Checkbox -->
                            <div class="form-check mt-4 mb-4">
                                <input class="form-check-input border-secondary" type="checkbox" id="agreePolicy"
                                    required>
                                <label class="form-check-label text-muted small" for="agreePolicy">
                                    আমি ওয়েবসাইটের <a href="#"
                                        class="text-primary text-decoration-none fw-bold">শর্তাবলী</a> ও
                                    রিফান্ড পলিসির সাথে একমত।
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-warning btn-lg w-100 fw-bold rounded-pill shadow-sm">
                                অর্ডার কনফার্ম করুন <i class="fas fa-check-circle ms-2"></i>
                            </button>

                            <div class="text-center mt-3">
                                <small class="text-muted"><i class="fas fa-lock text-success me-1"></i> আপনার তথ্য
                                    সম্পূর্ণ
                                    নিরাপদ</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection

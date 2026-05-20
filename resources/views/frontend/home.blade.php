@extends('frontend.layouts.app')
@section('content')
    <!-- Hero Banner -->
    <header class="hero-banner">
        <div class="container">
            <h1 class="display-3 fw-bold">বছরজুড়ে বইয়ের উৎসব - মলাট</h1>
            <p class="lead">বইয়ের মাঝে ডানা মেলুক নতুন স্বপ্ন। আপনার প্রিয় বই এবং লেখককে খুঁজে নিন এখানে।</p>

            <div class="search-box">
                <div class="input-group input-group-lg shadow">
                    <input type="text" class="form-control" placeholder="বইয়ের নাম, লেখক বা প্রকাশনী দিয়ে খুঁজুন...">
                    <button class="btn btn-warning px-4" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </header>

    <!-- Categories Preview -->
    <section class="container my-5">
        <h3 class="section-title">বইয়ের ধরন (Categories)</h3>
        <div class="row g-3">
            <div class="col-md-2 col-6">
                <a href="{{ route('frontend.category.detail') }}" class="book-card">
                    <div class="category-box shadow-sm">
                        <i class="fas fa-hat-wizard"></i>
                        <h6>উপন্যাস</h6>
                    </div>
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('frontend.category.detail') }}" class="book-card">
                    <div class="category-box shadow-sm">
                        <i class="fas fa-microscope"></i>
                        <h6>বিজ্ঞান</h6>
                    </div>
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('frontend.category.detail') }}" class="book-card">
                    <div class="category-box shadow-sm">
                        <i class="fas fa-history"></i>
                        <h6>ইতিহাস</h6>
                    </div>
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('frontend.category.detail') }}" class="book-card">
                    <div class="category-box shadow-sm">
                        <i class="fas fa-child"></i>
                        <h6>শিশুতোষ</h6>
                    </div>
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('frontend.category.detail') }}" class="book-card">
                    <div class="category-box shadow-sm">
                        <i class="fas fa-feather-alt"></i>
                        <h6>কবিতা</h6>
                    </div>
                </a>
            </div>
            <div class="col-md-2 col-6">
                <a href="{{ route('frontend.category.detail') }}" class="book-card">
                    <div class="category-box shadow-sm">
                        <i class="fas fa-ellipsis-h"></i>
                        <h6>অন্যান্য</h6>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Books -->
    <section class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="section-title mb-0">নির্বাচিত বইসমূহ</h3>
            <a href="{{ route('frontend.category.detail') }}" class="btn btn-outline-primary btn-sm">সব দেখুন</a>
        </div>
        <div class="row g-4">
            <!-- Book 1 -->
            <div class="col-md-3">
                <div class="card book-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=450"
                        class="card-img-top book-img" alt="Book Cover">
                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-warning text-dark mb-2 align-self-start">জনপ্রিয়</span>
                        <h5 class="card-title fw-bold">জোছনা ও জননীর গল্প</h5>
                        <p class="text-muted mb-1">হুমায়ূন আহমেদ</p>
                        <p class="small text-secondary mb-3">অন্যপ্রকাশ প্রকাশনী</p>
                        <!-- Updated Footer with Add to Cart -->
                        <div class="d-flex justify-content-between align-items-center mt-auto pt-3 border-top">
                            <span class="h5 fw-bold text-primary mb-0">৳ ৪৫০</span>
                            <div class="d-flex gap-2">
                                <a href="{{ route('frontend.book.detail') }}" class="btn btn-sm btn-outline-dark"
                                    title="বিস্তারিত"><i class="fas fa-eye"></i></a>
                                <button class="btn btn-sm btn-warning fw-bold text-dark" title="কার্টে যোগ করুন"><i
                                        class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Book 2 -->
            <div class="col-md-3">
                <div class="card book-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=450"
                        class="card-img-top book-img" alt="Book Cover">
                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-info mb-2 align-self-start">নতুন</span>
                        <h5 class="card-title fw-bold">কালো মেঘের ভেলা</h5>
                        <p class="text-muted mb-1">ইমদাদুল হক মিলন</p>
                        <p class="small text-secondary mb-3">অনন্যা প্রকাশনী</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto pt-3 border-top">
                            <span class="h5 fw-bold text-primary mb-0">৳ ৩২০</span>
                            <div class="d-flex gap-2">
                                <a href="{{ route('frontend.book.detail') }}" class="btn btn-sm btn-outline-dark"
                                    title="বিস্তারিত"><i class="fas fa-eye"></i></a>
                                <button class="btn btn-sm btn-warning fw-bold text-dark" title="কার্টে যোগ করুন"><i
                                        class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Book 3 -->
            <div class="col-md-3">
                <div class="card book-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=450"
                        class="card-img-top book-img" alt="Book Cover">
                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-danger mb-2 align-self-start">সেরা বিক্রিত</span>
                        <h5 class="card-title fw-bold">প্যারাডক্সিক্যাল সাজিদ</h5>
                        <p class="text-muted mb-1">আরিফ আজাদ</p>
                        <p class="small text-secondary mb-3">গার্ডিয়ান পাবলিকেশন্স</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto pt-3 border-top">
                            <span class="h5 fw-bold text-primary mb-0">৳ ৩০০</span>
                            <div class="d-flex gap-2">
                                <a href="{{ route('frontend.book.detail') }}" class="btn btn-sm btn-outline-dark"
                                    title="বিস্তারিত"><i class="fas fa-eye"></i></a>
                                <button class="btn btn-sm btn-warning fw-bold text-dark" title="কার্টে যোগ করুন"><i
                                        class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Book 4 -->
            <div class="col-md-3">
                <div class="card book-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1588666309990-d68f08e3d4a6?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=450"
                        class="card-img-top book-img" alt="Book Cover">
                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-secondary mb-2 align-self-start">ক্লাসিক</span>
                        <h5 class="card-title fw-bold">নদী ও নারী</h5>
                        <p class="text-muted mb-1">হুমায়ুন কবির</p>
                        <p class="small text-secondary mb-3">নওরোজ কিতাবিস্তান</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto pt-3 border-top">
                            <span class="h5 fw-bold text-primary mb-0">৳ ২০০</span>
                            <div class="d-flex gap-2">
                                <a href="{{ route('frontend.book.detail') }}" class="btn btn-sm btn-outline-dark"
                                    title="বিস্তারিত"><i class="fas fa-eye"></i></a>
                                <button class="btn btn-sm btn-warning fw-bold text-dark" title="কার্টে যোগ করুন"><i
                                        class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newly Released Books -->
    <section class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="section-title mb-0">নতুন প্রকাশিত বই</h3>
            <a href="{{ route('frontend.category.detail') }}" class="btn btn-outline-primary btn-sm">সব দেখুন</a>
        </div>
        <div class="row g-4">
            <!-- Book 1 -->
            <div class="col-md-3">
                <div class="card book-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=450"
                        class="card-img-top book-img" alt="Book Cover">
                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-warning text-dark mb-2 align-self-start">জনপ্রিয়</span>
                        <h5 class="card-title fw-bold">জোছনা ও জননীর গল্প</h5>
                        <p class="text-muted mb-1">হুমায়ূন আহমেদ</p>
                        <p class="small text-secondary mb-3">অন্যপ্রকাশ প্রকাশনী</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto pt-3 border-top">
                            <span class="h5 fw-bold text-primary mb-0">৳ ৪৫০</span>
                            <div class="d-flex gap-2">
                                <a href="{{ route('frontend.book.detail') }}" class="btn btn-sm btn-outline-dark"
                                    title="বিস্তারিত"><i class="fas fa-eye"></i></a>
                                <button class="btn btn-sm btn-warning fw-bold text-dark" title="কার্টে যোগ করুন"><i
                                        class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Book 2 -->
            <div class="col-md-3">
                <div class="card book-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=450"
                        class="card-img-top book-img" alt="Book Cover">
                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-info mb-2 align-self-start">নতুন</span>
                        <h5 class="card-title fw-bold">কালো মেঘের ভেলা</h5>
                        <p class="text-muted mb-1">ইমদাদুল হক মিলন</p>
                        <p class="small text-secondary mb-3">অনন্যা প্রকাশনী</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto pt-3 border-top">
                            <span class="h5 fw-bold text-primary mb-0">৳ ৩২০</span>
                            <div class="d-flex gap-2">
                                <a href="{{ route('frontend.book.detail') }}" class="btn btn-sm btn-outline-dark"
                                    title="বিস্তারিত"><i class="fas fa-eye"></i></a>
                                <button class="btn btn-sm btn-warning fw-bold text-dark" title="কার্টে যোগ করুন"><i
                                        class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Book 3 -->
            <div class="col-md-3">
                <div class="card book-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=450"
                        class="card-img-top book-img" alt="Book Cover">
                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-danger mb-2 align-self-start">সেরা বিক্রিত</span>
                        <h5 class="card-title fw-bold">প্যারাডক্সিক্যাল সাজিদ</h5>
                        <p class="text-muted mb-1">আরিফ আজাদ</p>
                        <p class="small text-secondary mb-3">গার্ডিয়ান পাবলিকেশন্স</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto pt-3 border-top">
                            <span class="h5 fw-bold text-primary mb-0">৳ ৩০০</span>
                            <div class="d-flex gap-2">
                                <a href="{{ route('frontend.book.detail') }}" class="btn btn-sm btn-outline-dark"
                                    title="বিস্তারিত"><i class="fas fa-eye"></i></a>
                                <button class="btn btn-sm btn-warning fw-bold text-dark" title="কার্টে যোগ করুন"><i
                                        class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Book 4 -->
            <div class="col-md-3">
                <div class="card book-card shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1588666309990-d68f08e3d4a6?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=450"
                        class="card-img-top book-img" alt="Book Cover">
                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-secondary mb-2 align-self-start">ক্লাসিক</span>
                        <h5 class="card-title fw-bold">নদী ও নারী</h5>
                        <p class="text-muted mb-1">হুমায়ুন কবির</p>
                        <p class="small text-secondary mb-3">নওরোজ কিতাবিস্তান</p>
                        <div class="d-flex justify-content-between align-items-center mt-auto pt-3 border-top">
                            <span class="h5 fw-bold text-primary mb-0">৳ ২০০</span>
                            <div class="d-flex gap-2">
                                <a href="{{ route('frontend.book.detail') }}" class="btn btn-sm btn-outline-dark"
                                    title="বিস্তারিত"><i class="fas fa-eye"></i></a>
                                <button class="btn btn-sm btn-warning fw-bold text-dark" title="কার্টে যোগ করুন"><i
                                        class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Authors -->
    <section class="bg-white py-5 overflow-hidden">
        <div class="container text-center">
            <h3 class="section-title d-inline-block">জনপ্রিয় লেখকবৃন্দ</h3>
            <div class="swiper authorSwiper mt-4 pb-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=60"
                            class="author-img mb-3" alt="Author">
                        <h5>হুমায়ূন আহমেদ</h5>
                        <p class="text-muted small">কথাসাহিত্যিক ও চলচ্চিত্রকার</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=60"
                            class="author-img mb-3" alt="Author">
                        <h5>ড. জাফর ইকবাল</h5>
                        <p class="text-muted small">বিজ্ঞান লেখক ও ঔপন্যাসিক</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=60"
                            class="author-img mb-3" alt="Author">
                        <h5>আনিসুল হক</h5>
                        <p class="text-muted small">কবি ও কথাসাহিত্যিক</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=60"
                            class="author-img mb-3" alt="Author">
                        <h5>সেলিনা হোসেন</h5>
                        <p class="text-muted small">কথাসাহিত্যিক</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=60"
                            class="author-img mb-3" alt="Author">
                        <h5>সমরেশ মজুমদার</h5>
                        <p class="text-muted small">ঔপন্যাসিক</p>
                    </div>
                    <div class="swiper-slide">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=60"
                            class="author-img mb-3" alt="Author">
                        <h5>তাহমিমা আনাম</h5>
                        <p class="text-muted small">ইংরেজি সাহিত্য</p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Latest News & Events -->
    <section class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <h3 class="section-title">সর্বশেষ ঘোষণা ও সংবাদ</h3>
                <div class="list-group shadow-sm">
                    <a href="#" class="list-group-item list-group-item-action py-3">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1 fw-bold text-danger">নতুন বইয়ের মোড়ক উন্মোচন</h6>
                            <small class="text-muted">১০ মার্চ ২০২৬</small>
                        </div>
                        <p class="mb-1 small">আগামীকাল দুপুর ২টায় নজরুল মঞ্চে প্রধান অতিথির উপস্থিতিতে নতুন পাঁচটি
                            বইয়ের মোড়ক
                            উন্মোচন করা হবে।</p>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action py-3">
                        <div class="d-flex w-100 justify-content-between">
                            <h6 class="mb-1 fw-bold">লেখক আড্ডা ও সাক্ষর সেশন</h6>
                            <small class="text-muted">০৯ মার্চ ২০২৬</small>
                        </div>
                        <p class="mb-1 small">বিকেলে মুক্তমঞ্চে উপস্থিত থাকবেন দেশের শীর্ষস্থানীয় লেখকবৃন্দ। পাঠকদের
                            সাথে হবে
                            সরাসরি মতবিনিময়।</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <h3 class="section-title">মেলার তথ্য</h3>
                <div class="card border-0 shadow-sm p-3 bg-light">
                    <p><strong><i class="fas fa-calendar-alt me-2"></i> তারিখ:</strong> ১ - ২৮ ফেব্রুয়ারি ২০২৬</p>
                    <p><strong><i class="fas fa-clock me-2"></i> সময়:</strong> দুপুর ৩টা - রাত ৯টা (ছুটির দিন ১১টা হতে)
                    </p>
                    <p><strong><i class="fas fa-map-marker-alt me-2"></i> স্থান:</strong> বাংলা একাডেমি ও সোহরাওয়ার্দী
                        উদ্যান</p>
                    <hr>
                    <button class="btn btn-warning w-100 fw-bold">মেলার ম্যাপ দেখুন</button>
                </div>
            </div>
        </div>
    </section>
@endsection

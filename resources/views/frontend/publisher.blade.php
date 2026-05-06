@extends('frontend.layouts.app')
@section('content')
    <!-- Publisher Cover Section -->
    <div class="publisher-cover"></div>

    <div class="container mb-5">

        <!-- Profile Header Box -->
        <div class="bg-white rounded-4 shadow-sm px-4 pb-4 border mb-4 position-relative"
            style="margin-top: -60px; z-index: 11;">
            <div class="row align-items-center text-center text-md-start">

                <!-- Logo -->
                <div class="col-md-auto d-flex justify-content-center justify-content-md-start pe-md-4">
                    <div class="publisher-logo-wrapper">
                        <!-- Placeholder for Logo -->
                        <i class="fas fa-book-open"></i>
                    </div>
                </div>

                <!-- Name & Stall Badge -->
                <div class="col-md mt-3 mt-md-0 pt-md-4">
                    <h2 class="fw-bold mb-2">অন্যপ্রকাশ <i class="fas fa-check-circle text-primary fs-5"
                            title="Verified Publisher"></i></h2>
                    <div class="stall-highlight-badge mb-3">
                        <i class="fas fa-store"></i> প্যাভিলিয়ন: ১২
                    </div>
                    <div class="d-flex flex-wrap justify-content-center justify-content-md-start gap-2">
                        <button class="btn btn-warning fw-bold px-4 rounded-pill"><i class="fas fa-bell me-2"></i>আপডেট
                            পান</button>
                        <button class="btn btn-outline-dark rounded-pill px-4"><i
                                class="fas fa-map-marker-alt me-2"></i>ম্যাপে স্টল দেখুন</button>
                    </div>
                </div>

                <!-- Stats -->
                <div class="col-lg-auto mt-4 mt-lg-0 pt-lg-4 ms-lg-auto">
                    <div class="d-flex justify-content-center justify-content-md-end bg-light rounded-4 p-2 border">
                        <div class="stat-box">
                            <p class="stat-num">৩২০+</p>
                            <p class="stat-label">বই</p>
                        </div>
                        <div class="stat-box">
                            <p class="stat-num">৪৬</p>
                            <p class="stat-label">লেখক</p>
                        </div>
                        <div class="stat-box">
                            <p class="stat-num">৪.৭</p>
                            <p class="stat-label">রেটিং <i class="fas fa-star text-warning"></i></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row g-4">

            <!-- Left Sidebar: About & Contact -->
            <div class="col-lg-4">

                <!-- About Publisher -->
                <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
                    <h4 class="section-title">প্রকাশনী সম্পর্কে</h4>
                    <p class="text-muted text-justify" style="line-height: 1.7;">
                        অন্যপ্রকাশ বাংলাদেশের অন্যতম শীর্ষস্থানীয় সৃজনশীল প্রকাশনা সংস্থা। ১৯৯৭ সালে প্রতিষ্ঠিত এই প্রকাশনী
                        দীর্ঘ সময় ধরে বাংলা সাহিত্যের জনপ্রিয় এবং মানসম্মত বই প্রকাশ করে আসছে।
                    </p>
                    <p class="text-muted text-justify mb-0" style="line-height: 1.7;">
                        বিশেষ করে প্রখ্যাত কথাসাহিত্যিক হুমায়ূন আহমেদের সর্বাধিক বই প্রকাশের জন্য অন্যপ্রকাশ পাঠক মহলে এক
                        আলাদা গ্রহণযোগ্যতা তৈরি করেছে।
                    </p>
                </div>

                <!-- Contact Info -->
                <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
                    <h4 class="section-title">যোগাযোগের তথ্য</h4>
                    <ul class="info-list mb-0">
                        <li><i class="fas fa-map-marker-alt"></i> <span>৩৮/২ ক, বাংলাবাজার, ঢাকা-১১০০</span></li>
                        <li><i class="fas fa-phone-alt"></i> <span>+৮৮০ ২ ৭১১৪৫৬৭</span></li>
                        <li><i class="fas fa-envelope"></i> <span>info@anyaprokash.com</span></li>
                        <li><i class="fas fa-globe"></i> <a href="#"
                                class="text-decoration-none text-primary fw-bold">www.anyaprokash.com</a></li>
                    </ul>
                </div>

                <!-- Social Links -->
                <div class="bg-white p-4 rounded-4 shadow-sm border">
                    <h4 class="section-title">সোশ্যাল মিডিয়া</h4>
                    <div class="social-links">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

            </div>

            <!-- Right Area: Books & Tabs -->
            <div class="col-lg-8">

                <!-- Dedicated Publisher Search -->
                <div class="publisher-search d-flex align-items-center mb-4">
                    <i class="fas fa-search text-muted fs-5"></i>
                    <input type="text" class="form-control w-100 fs-6"
                        placeholder="অন্যপ্রকাশ এর বই খুঁজুন (বইয়ের নাম বা লেখক দিয়ে)...">
                    <button class="btn btn-dark rounded-pill px-4 fw-bold">খুঁজুন</button>
                </div>

                <!-- Content Tabs -->
                <div class="bg-white p-4 rounded-4 shadow-sm border">
                    <ul class="nav nav-tabs mb-4 border-bottom-0" id="publisherTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#all-books" type="button"
                                role="tab"><i class="fas fa-swatchbook me-2"></i>সকল বই</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#new-releases" type="button"
                                role="tab"><i class="fas fa-fire text-danger me-2"></i>নতুন রিলিজ</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#bestsellers" type="button"
                                role="tab"><i class="fas fa-award text-warning me-2"></i>বেস্টসেলার</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="publisherTabsContent">

                        <!-- All Books Tab -->
                        <div class="tab-pane fade show active" id="all-books" role="tabpanel">

                            <div class="d-flex justify-content-between align-items-center mb-4 bg-light p-2 rounded">
                                <span class="fw-bold text-muted ms-2">মোট ৩২০টি বই</span>
                                <select
                                    class="form-select form-select-sm w-auto border-0 bg-transparent fw-bold text-secondary">
                                    <option value="new">নতুন থেকে পুরোনো</option>
                                    <option value="asc">নাম অনুযায়ী (A-Z)</option>
                                    <option value="price_asc">দাম: কম থেকে বেশি</option>
                                </select>
                            </div>

                            <!-- Books Grid -->
                            <div class="row g-4">
                                <!-- Book Item 1 -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="card book-card">
                                        <span class="badge bg-danger position-absolute m-2 z-1">নতুন</span>
                                        <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                                            class="card-img-top book-img" alt="Book Cover">
                                        <div class="card-body d-flex flex-column p-3">
                                            <h6 class="card-title fw-bold mb-1"><a href="book_details.html"
                                                    class="text-dark text-decoration-none">জোছনা ও জননীর গল্প</a></h6>
                                            <p class="small text-secondary mb-2">হুমায়ূন আহমেদ</p>
                                            <div class="text-warning small mb-3">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star-half-alt"></i>
                                            </div>
                                            <div
                                                class="mt-auto d-flex justify-content-between align-items-center border-top pt-2">
                                                <span class="fw-bold text-success fs-5">৳ ৪৫০</span>
                                                <button class="btn btn-sm btn-outline-warning text-dark"><i
                                                        class="fas fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Book Item 2 -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="card book-card">
                                        <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                                            class="card-img-top book-img" alt="Book Cover">
                                        <div class="card-body d-flex flex-column p-3">
                                            <h6 class="card-title fw-bold mb-1"><a href="#"
                                                    class="text-dark text-decoration-none">দেয়াল</a></h6>
                                            <p class="small text-secondary mb-2">হুমায়ূন আহমেদ</p>
                                            <div class="text-warning small mb-3">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i>
                                            </div>
                                            <div
                                                class="mt-auto d-flex justify-content-between align-items-center border-top pt-2">
                                                <span class="fw-bold text-success fs-5">৳ ৩৫০</span>
                                                <button class="btn btn-sm btn-outline-warning text-dark"><i
                                                        class="fas fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Book Item 3 -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="card book-card">
                                        <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                                            class="card-img-top book-img" alt="Book Cover">
                                        <div class="card-body d-flex flex-column p-3">
                                            <h6 class="card-title fw-bold mb-1"><a href="#"
                                                    class="text-dark text-decoration-none">মিসির আলি অমনিবাস ১</a></h6>
                                            <p class="small text-secondary mb-2">হুমায়ূন আহমেদ</p>
                                            <div class="text-warning small mb-3">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="far fa-star"></i>
                                            </div>
                                            <div
                                                class="mt-auto d-flex justify-content-between align-items-center border-top pt-2">
                                                <span class="fw-bold text-success fs-5">৳ ৬০০</span>
                                                <button class="btn btn-sm btn-outline-warning text-dark"><i
                                                        class="fas fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Book Item 4 -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="card book-card">
                                        <img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                                            class="card-img-top book-img" alt="Book Cover">
                                        <div class="card-body d-flex flex-column p-3">
                                            <h6 class="card-title fw-bold mb-1"><a href="#"
                                                    class="text-dark text-decoration-none">মধ্যাহ্ন</a></h6>
                                            <p class="small text-secondary mb-2">হুমায়ূন আহমেদ</p>
                                            <div class="text-warning small mb-3">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star-half-alt"></i>
                                            </div>
                                            <div
                                                class="mt-auto d-flex justify-content-between align-items-center border-top pt-2">
                                                <span class="fw-bold text-success fs-5">৳ ৪২০</span>
                                                <button class="btn btn-sm btn-outline-warning text-dark"><i
                                                        class="fas fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Book Item 5 -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="card book-card">
                                        <img src="https://images.unsplash.com/photo-1588666309990-d68f08e3d4a6?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                                            class="card-img-top book-img" alt="Book Cover">
                                        <div class="card-body d-flex flex-column p-3">
                                            <h6 class="card-title fw-bold mb-1"><a href="#"
                                                    class="text-dark text-decoration-none">কালো বরফ</a></h6>
                                            <p class="small text-secondary mb-2">সাদাত হোসাইন</p>
                                            <div class="text-warning small mb-3">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="far fa-star"></i>
                                            </div>
                                            <div
                                                class="mt-auto d-flex justify-content-between align-items-center border-top pt-2">
                                                <span class="fw-bold text-success fs-5">৳ ২৮০</span>
                                                <button class="btn btn-sm btn-outline-warning text-dark"><i
                                                        class="fas fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Book Item 6 -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="card book-card">
                                        <img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                                            class="card-img-top book-img" alt="Book Cover">
                                        <div class="card-body d-flex flex-column p-3">
                                            <h6 class="card-title fw-bold mb-1"><a href="#"
                                                    class="text-dark text-decoration-none">মেঘ বলেছে যাব যাব</a></h6>
                                            <p class="small text-secondary mb-2">হুমায়ূন আহমেদ</p>
                                            <div class="text-warning small mb-3">
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i>
                                            </div>
                                            <div
                                                class="mt-auto d-flex justify-content-between align-items-center border-top pt-2">
                                                <span class="fw-bold text-success fs-5">৳ ২৫০</span>
                                                <button class="btn btn-sm btn-outline-warning text-dark"><i
                                                        class="fas fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pagination -->
                            <nav class="mt-5">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled"><a class="page-link" href="#">পূর্ববর্তী</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#"
                                            style="background-color: var(--accent-color); border-color: var(--accent-color);">১</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#"
                                            style="color: var(--primary-color);">২</a></li>
                                    <li class="page-item"><a class="page-link" href="#"
                                            style="color: var(--primary-color);">৩</a></li>
                                    <li class="page-item"><a class="page-link" href="#"
                                            style="color: var(--primary-color);">পরবর্তী</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!-- New Releases Tab Content -->
                        <div class="tab-pane fade" id="new-releases" role="tabpanel">
                            <div class="alert alert-light border border-danger border-start-5 shadow-sm" role="alert">
                                <h5 class="fw-bold text-danger"><i class="fas fa-bullhorn me-2"></i> বইমেলা ২০২৬-এর নতুন
                                    বইসমূহ
                                </h5>
                                <p class="mb-0 text-muted">এই বছর অমর একুশে বইমেলায় এই প্রকাশনী থেকে প্রকাশিত একদম নতুন
                                    বইয়ের
                                    তালিকা।</p>
                            </div>
                            <div class="text-center py-5">
                                <i class="fas fa-books fa-3x text-muted mb-3"></i>
                                <h5 class="text-muted">নতুন রিলিজের বইগুলো খুব শিগগিরই আপডেট করা হবে।</h5>
                            </div>
                        </div>

                        <!-- Bestsellers Tab Content -->
                        <div class="tab-pane fade" id="bestsellers" role="tabpanel">
                            <div class="alert alert-light border border-warning border-start-5 shadow-sm" role="alert">
                                <h5 class="fw-bold text-warning text-darken"><i class="fas fa-trophy me-2"></i> সর্বকালের
                                    সেরা
                                    বিক্রিত বইসমূহ</h5>
                                <p class="mb-0 text-muted">পাঠকদের ভালোবাসায় সিক্ত এই প্রকাশনীর সবচেয়ে জনপ্রিয় ও সর্বাধিক
                                    পঠিত
                                    বইগুলোর তালিকা।</p>
                            </div>
                            <div class="text-center py-5">
                                <i class="fas fa-star fa-3x text-warning opacity-50 mb-3"></i>
                                <h5 class="text-muted">বেস্টসেলার তালিকা প্রস্তুত করা হচ্ছে।</h5>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

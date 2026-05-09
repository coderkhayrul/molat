@extends('frontend.layouts.app')
@section('content')
    <!-- Event Cover & Countdown -->
    <div class="event-cover">
        <div class="container h-100 position-relative">
            <!-- Breadcrumb inside cover -->
            <nav aria-label="breadcrumb" class="pt-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-light text-decoration-none">হোম</a></li>
                    <li class="breadcrumb-item"><a href="events.html" class="text-light text-decoration-none">ইভেন্ট</a></li>
                    <li class="breadcrumb-item active text-white fw-bold" aria-current="page">বইয়ের মোড়ক উন্মোচন</li>
                </ol>
            </nav>

            <div class="position-absolute bottom-0 start-50 translate-middle-x mb-5 pb-5 w-100 text-center">
                <p class="text-warning fw-bold mb-2 tracking-wide text-uppercase"><i class="fas fa-circle text-danger me-2"
                        style="font-size: 8px; vertical-align: middle;"></i>আপকামিং ইভেন্ট</p>
                <!-- Countdown Timer -->
                <div class="countdown-box shadow">
                    <div class="time-block">
                        <span class="time-num">০২</span>
                        <span class="time-label">দিন</span>
                    </div>
                    <span class="fs-2 text-white-50 align-self-center">:</span>
                    <div class="time-block">
                        <span class="time-num">১৪</span>
                        <span class="time-label">ঘণ্টা</span>
                    </div>
                    <span class="fs-2 text-white-50 align-self-center">:</span>
                    <div class="time-block">
                        <span class="time-num">৪৫</span>
                        <span class="time-label">মিনিট</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                <!-- Event Main Info Card -->
                <div class="event-info-card mb-5">
                    <div class="row align-items-center">
                        <div class="col-md-9 mb-4 mb-md-0">
                            <div class="d-flex align-items-center gap-4">
                                <div class="date-badge flex-shrink-0">
                                    <span class="day">১৫</span>
                                    <span class="month">ফেব্রুয়ারি</span>
                                </div>
                                <div>
                                    <span
                                        class="badge bg-primary bg-opacity-10 text-primary border border-primary rounded-pill px-3 py-2 mb-2">
                                        <i class="fas fa-rocket me-1"></i> মোড়ক উন্মোচন
                                    </span>
                                    <h1 class="fw-bold mb-0 text-dark" style="font-size: 2.2rem;">‘মহাকাশের রহস্য’ বইয়ের
                                        আনুষ্ঠানিক মোড়ক উন্মোচন</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-md-end">
                            <button class="btn btn-warning btn-lg fw-bold rounded-pill w-100 shadow-sm"><i
                                    class="far fa-bell me-2"></i> রিমাইন্ডার সেট করুন</button>
                            <div class="mt-3 text-center">
                                <span class="text-muted small me-2">শেয়ার করুন:</span>
                                <a href="#" class="text-primary me-2 fs-5"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="text-info me-2 fs-5"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-success fs-5"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4 border-secondary opacity-25">

                    <ul class="meta-list">
                        <li><i class="far fa-clock"></i> <span>বিকাল ৪:০০ - ৫:৩০ (১.৫ ঘণ্টা)</span></li>
                        <li><i class="fas fa-map-marker-alt"></i> <span>মূল মঞ্চ, বাংলা একাডেমি প্রাঙ্গণ</span></li>
                        <li><i class="fas fa-ticket-alt"></i> <span class="text-success fw-bold">সবার জন্য উন্মুক্ত
                                (ফ্রি)</span></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <!-- Left Content: Description & Speakers -->
            <div class="col-lg-8">

                <!-- Description -->
                <div class="bg-white p-4 rounded-4 shadow-sm border mb-5">
                    <h3 class="section-title">ইভেন্টের বিস্তারিত</h3>
                    <p class="text-muted text-justify" style="line-height: 1.8;">
                        অমর একুশে বইমেলা ২০২৬ উপলক্ষে তাম্রলিপি প্রকাশনীর আয়োজনে অনুষ্ঠিত হতে যাচ্ছে ড. মুহম্মদ জাফর ইকবালের
                        বহুল প্রতীক্ষিত নতুন সায়েন্স ফিকশন বই <strong>"মহাকাশের রহস্য: অজানার খোঁজে"</strong>-এর আনুষ্ঠানিক
                        মোড়ক উন্মোচন অনুষ্ঠান।
                    </p>
                    <p class="text-muted text-justify" style="line-height: 1.8;">
                        অনুষ্ঠানে প্রধান অতিথি হিসেবে উপস্থিত থাকবেন প্রথিতযশা বিজ্ঞানী ও শিক্ষাবিদগণ। মোড়ক উন্মোচনের পর
                        লেখক
                        ড. জাফর ইকবাল তাঁর নতুন বই সম্পর্কে পাঠকদের সাথে কথা বলবেন এবং বইটির লেখার পেছনের গল্প শেয়ার করবেন।
                        অনুষ্ঠান শেষে একটি সংক্ষিপ্ত প্রশ্ন-উত্তর পর্ব (Q&A) এবং অটোগ্রাফ সেশন অনুষ্ঠিত হবে। বিজ্ঞান ও
                        কল্পকাহিনী প্রেমীদের এই আয়োজনে সাদর আমন্ত্রণ জানানো হচ্ছে।
                    </p>

                    <h5 class="fw-bold mt-4 mb-3">অনুষ্ঠানের সূচি:</h5>
                    <ul class="list-group list-group-flush mb-0 text-muted">
                        <li class="list-group-item bg-transparent px-0 py-2"><i
                                class="far fa-circle text-warning me-2 small"></i> <strong>৪:০০ PM:</strong> অতিথিদের আসন
                            গ্রহণ
                            ও স্বাগত বক্তব্য</li>
                        <li class="list-group-item bg-transparent px-0 py-2"><i
                                class="far fa-circle text-warning me-2 small"></i> <strong>৪:১৫ PM:</strong> বইয়ের মোড়ক
                            উন্মোচন
                        </li>
                        <li class="list-group-item bg-transparent px-0 py-2"><i
                                class="far fa-circle text-warning me-2 small"></i> <strong>৪:৩০ PM:</strong> লেখকের বক্তব্য
                            ও
                            অভিজ্ঞতা শেয়ার</li>
                        <li class="list-group-item bg-transparent px-0 py-2 border-bottom-0"><i
                                class="far fa-circle text-warning me-2 small"></i> <strong>৫:০০ PM:</strong> প্রশ্নোত্তর
                            পর্ব ও
                            অটোগ্রাফ সেশন</li>
                    </ul>
                </div>

                <!-- Speakers / Guests -->
                <div class="mb-4">
                    <h3 class="section-title">উপস্থিত থাকবেন</h3>
                    <div class="row g-4">
                        <!-- Speaker 1 -->
                        <div class="col-md-4 col-sm-6">
                            <div class="speaker-card">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                                    alt="Speaker" class="speaker-img">
                                <h5 class="fw-bold mb-1">ড. মুহম্মদ জাফর ইকবাল</h5>
                                <p class="text-warning small fw-bold mb-2">লেখক</p>
                                <p class="text-muted small mb-0">জনপ্রিয় সায়েন্স ফিকশন লেখক ও শিক্ষাবিদ।</p>
                            </div>
                        </div>
                        <!-- Speaker 2 -->
                        <div class="col-md-4 col-sm-6">
                            <div class="speaker-card">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                                    alt="Speaker" class="speaker-img">
                                <h5 class="fw-bold mb-1">অধ্যাপক জামিলুর রেজা</h5>
                                <p class="text-primary small fw-bold mb-2">প্রধান অতিথি</p>
                                <p class="text-muted small mb-0">প্রখ্যাত প্রকৌশলী এবং জাতীয় অধ্যাপক।</p>
                            </div>
                        </div>
                        <!-- Speaker 3 -->
                        <div class="col-md-4 col-sm-6">
                            <div class="speaker-card">
                                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                                    alt="Speaker" class="speaker-img">
                                <h5 class="fw-bold mb-1">তারিক সুজাত</h5>
                                <p class="text-secondary small fw-bold mb-2">প্রকাশক, তাম্রলিপি</p>
                                <p class="text-muted small mb-0">স্বনামধন্য প্রকাশক এবং সাংস্কৃতিক ব্যক্তিত্ব।</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Sidebar: Maps & Actions -->
            <div class="col-lg-4">

                <!-- Action Widget -->
                <div class="widget text-center">
                    <h5 class="fw-bold mb-3">আপনার ক্যালেন্ডারে যুক্ত করুন</h5>
                    <p class="text-muted small mb-4">যাতে ইভেন্টটি মিস না হয়ে যায়, সেজন্য এটি আপনার গুগল বা অ্যাপল
                        ক্যালেন্ডারে সেভ করে রাখুন।</p>
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-dark"><i class="fab fa-google me-2 text-danger"></i> Google
                            Calendar</button>
                        <button class="btn btn-outline-dark"><i class="fab fa-apple me-2"></i> Apple Calendar</button>
                        <button class="btn btn-outline-dark"><i class="fab fa-yahoo me-2 text-primary"></i> Yahoo
                            Calendar</button>
                    </div>
                </div>

                <!-- Location Map Widget -->
                <div class="widget p-0 overflow-hidden">
                    <div class="p-4 border-bottom">
                        <h5 class="fw-bold mb-1"><i class="fas fa-map-marked-alt text-warning me-2"></i> ইভেন্টের স্থান
                        </h5>
                        <p class="text-muted small mb-0 mt-2">মূল মঞ্চ, বাংলা একাডেমি প্রাঙ্গণ, ঢাকা বিশ্ববিদ্যালয় এলাকা,
                            ঢাকা-১০০০</p>
                    </div>
                    <div class="map-container" style="height: 250px; border-radius: 0;">
                        <!-- Embed Google Map for Bangla Academy -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.5539202581625!2d90.39516761536254!3d23.727618995561085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8e8b09d22ad%3A0xc6bf82ce99c759cd!2sBangla%20Academy!5e0!3m2!1sen!2sbd!4v1620000000000!5m2!1sen!2sbd"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="p-3 text-center bg-light">
                        <a href="#" class="text-decoration-none text-primary fw-bold small"><i
                                class="fas fa-directions me-1"></i> ডিরেকশন (Google Maps)</a>
                    </div>
                </div>

                <!-- Related Book Widget -->
                <div class="widget">
                    <h5 class="fw-bold mb-3 border-bottom pb-2">সম্পর্কিত বই</h5>
                    <div class="d-flex align-items-center gap-3">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                            alt="Book" class="rounded shadow-sm"
                            style="width: 70px; height: 100px; object-fit: cover;">
                        <div>
                            <h6 class="fw-bold mb-1"><a href="book_details.html"
                                    class="text-dark text-decoration-none">মহাকাশের রহস্য</a></h6>
                            <p class="text-muted small mb-2">ড. মুহম্মদ জাফর ইকবাল</p>
                            <span class="text-success fw-bold">৳ ২৮০</span>
                        </div>
                    </div>
                    <a href="book_details.html" class="btn btn-sm btn-dark w-100 mt-3">বইয়ের বিস্তারিত দেখুন</a>
                </div>

            </div>
        </div>
    </div>
@endsection

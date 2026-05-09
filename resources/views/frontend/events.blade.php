@extends('frontend.layouts.app')
@section('content')
    <!-- Page Header / Breadcrumb -->
    <div class="events-page-header">
        <div class="container">
            <h2 class="fw-bold mb-1">মেলা প্রাঙ্গণের ইভেন্টসমূহ</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 small">
                    <li class="breadcrumb-item"><a href="home.html" class="text-decoration-none text-muted">হোম</a></li>
                    <li class="breadcrumb-item active fw-bold text-dark" aria-current="page">ইভেন্ট ও প্রোগ্রাম</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container pb-5 mb-5">
        <div class="row g-4">

            <!-- Sidebar / Filters -->
            <aside class="col-lg-4 mb-4">
                <div class="event-filter-sidebar">
                    <h5 class="event-filter-title"><i class="fas fa-filter me-2"></i> ইভেন্ট ফিল্টার করুন</h5>

                    <!-- Date Filter -->
                    <div class="mb-4">
                        <label class="form-label fw-bold small text-muted">তারিখ অনুযায়ী</label>
                        <input type="date" class="form-control mb-2 shadow-sm">
                        <button class="btn btn-dark btn-sm w-100 fw-bold">আজকের ইভেন্ট দেখান</button>
                    </div>

                    <!-- Event Type Filter -->
                    <div class="mb-4 border-top pt-3">
                        <label class="form-label fw-bold small text-muted">ইভেন্টের ধরন</label>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="type1" checked>
                            <label class="form-check-label text-dark" for="type1">বইয়ের মোড়ক উন্মোচন</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="type2" checked>
                            <label class="form-check-label text-dark" for="type2">লেখক আড্ডা ও সেমিনার</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="type3" checked>
                            <label class="form-check-label text-dark" for="type3">অটোগ্রাফ পর্ব</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="type4">
                            <label class="form-check-label text-dark" for="type4">সাংস্কৃতিক অনুষ্ঠান</label>
                        </div>
                    </div>

                    <!-- Venue Filter -->
                    <div class="mb-4 border-top pt-3">
                        <label class="form-label fw-bold small text-muted">ভেন্যু / স্থান</label>
                        <select class="form-select shadow-sm">
                            <option selected>সকল স্থান</option>
                            <option value="1">মূল মঞ্চ (বাংলা একাডেমি)</option>
                            <option value="2">নজরুল মঞ্চ</option>
                            <option value="3">লেখক কুঞ্জ (সোহরাওয়ার্দী উদ্যান)</option>
                            <option value="4">শিশু চত্বর</option>
                        </select>
                    </div>
                </div>
            </aside>

            <!-- Event List Main Area -->
            <main class="col-lg-8">

                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">
                    <h5 class="fw-bold mb-2 mb-md-0 border-start border-warning border-4 ps-2">আসন্ন প্রোগ্রামসমূহ</h5>
                    <span class="badge bg-secondary px-3 py-2 rounded-pill">মোট ৫টি ইভেন্ট</span>
                </div>

                <!-- Event Item 1 -->
                <div class="public-event-card">
                    <div class="event-date-box">
                        <div class="date-day">১৫</div>
                        <div class="text-center">
                            <div class="date-month">ফেব্রুয়ারি</div>
                            <div class="small mt-1 opacity-75">বৃহস্পতিবার</div>
                        </div>
                    </div>
                    <div class="event-details-content">
                        <span class="event-type-badge badge-launch-pub"><i class="fas fa-rocket me-1"></i> মোড়ক
                            উন্মোচন</span>
                        <h3 class="event-main-title"><a href="event_detail.html"
                                class="text-decoration-none text-dark">‘মহাকাশের রহস্য’ বইয়ের মোড়ক উন্মোচন</a></h3>
                        <div class="event-meta-info">
                            <span><i class="far fa-clock"></i> বিকাল ৪:০০ - ৫:৩০</span>
                            <span><i class="fas fa-map-marker-alt"></i> মূল মঞ্চ, বাংলা একাডেমি</span>
                        </div>
                        <p class="text-muted mb-4">ড. মুহম্মদ জাফর ইকবালের নতুন সায়েন্স ফিকশন বই "মহাকাশের রহস্য"-এর
                            আনুষ্ঠানিক মোড়ক উন্মোচন করা হবে। অনুষ্ঠানে বিশেষ অতিথি হিসেবে উপস্থিত থাকবেন প্রথিতযশা বিজ্ঞানী
                            ও শিক্ষাবিদগণ।</p>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="event_detail.html" class="btn btn-dark btn-sm px-4 fw-bold">বিস্তারিত দেখুন</a>
                            <button class="btn btn-outline-warning text-dark btn-sm fw-bold"><i
                                    class="far fa-calendar-plus me-1"></i> রিমাইন্ডার</button>
                        </div>
                    </div>
                </div>

                <!-- Event Item 2 -->
                <div class="public-event-card">
                    <div class="event-date-box" style="background: #34495e;">
                        <div class="date-day text-white">১৭</div>
                        <div class="text-center">
                            <div class="date-month text-white">ফেব্রুয়ারি</div>
                            <div class="small mt-1 opacity-75 text-white">শনিবার</div>
                        </div>
                    </div>
                    <div class="event-details-content">
                        <span class="event-type-badge badge-talk-pub"><i class="fas fa-microphone me-1"></i> লেখক
                            আড্ডা</span>
                        <h3 class="event-main-title"><a href="#" class="text-decoration-none text-dark">সমকালীন
                                সাহিত্য ও তরুন সমাজ</a></h3>
                        <div class="event-meta-info">
                            <span><i class="far fa-clock"></i> সন্ধ্যা ৬:০০ - ৭:৩০</span>
                            <span><i class="fas fa-map-marker-alt"></i> লেখক কুঞ্জ, সোহরাওয়ার্দী উদ্যান</span>
                        </div>
                        <p class="text-muted mb-4">সমকালীন বাংলা সাহিত্য কীভাবে তরুন সমাজকে প্রভাবিত করছে, সে বিষয়ে একটি
                            মুক্ত আলোচনা। আলোচনায় অংশ নেবেন আনিসুল হক এবং সাদাত হোসাইন। পাঠকরা সরাসরি প্রশ্ন করার সুযোগ
                            পাবেন।</p>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="#" class="btn btn-dark btn-sm px-4 fw-bold">বিস্তারিত দেখুন</a>
                            <button class="btn btn-outline-warning text-dark btn-sm fw-bold"><i
                                    class="far fa-calendar-plus me-1"></i> রিমাইন্ডার</button>
                        </div>
                    </div>
                </div>

                <!-- Event Item 3 -->
                <div class="public-event-card">
                    <div class="event-date-box" style="background: #34495e;">
                        <div class="date-day text-white">২১</div>
                        <div class="text-center">
                            <div class="date-month text-white">ফেব্রুয়ারি</div>
                            <div class="small mt-1 opacity-75 text-white">বুধবার</div>
                        </div>
                    </div>
                    <div class="event-details-content">
                        <span class="event-type-badge badge-signing-pub"><i class="fas fa-pen-fancy me-1"></i> অটোগ্রাফ
                            পর্ব</span>
                        <h3 class="event-main-title"><a href="#" class="text-decoration-none text-dark">বিশেষ
                                সিগনেচার সেশন: হুমায়ূন আহমেদ স্মৃতি</a></h3>
                        <div class="event-meta-info">
                            <span><i class="far fa-clock"></i> দুপুর ৩:০০ - ৫:০০</span>
                            <span><i class="fas fa-map-marker-alt"></i> প্যাভিলিয়ন ১২ (অন্যপ্রকাশ)</span>
                        </div>
                        <p class="text-muted mb-4">আন্তর্জাতিক মাতৃভাষা দিবস উপলক্ষে বিশেষ অটোগ্রাফ পর্ব। প্রিয় লেখকদের কাছ
                            থেকে সরাসরি বই সংগ্রহ এবং অটোগ্রাফ নেওয়ার সুযোগ। আগে আসলে আগে পাবেন ভিত্তিতে টোকেন দেওয়া হবে।
                        </p>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="#" class="btn btn-dark btn-sm px-4 fw-bold">বিস্তারিত দেখুন</a>
                            <button class="btn btn-outline-warning text-dark btn-sm fw-bold"><i
                                    class="far fa-calendar-plus me-1"></i> রিমাইন্ডার</button>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav class="mt-5">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link border-0 text-muted" href="#" tabindex="-1"><i
                                    class="fas fa-chevron-left me-1"></i> পূর্ববর্তী</a>
                        </li>
                        <li class="page-item active"><a class="page-link rounded-circle mx-1" href="#"
                                style="background-color: var(--accent-color); border-color: var(--accent-color); width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">১</a>
                        </li>
                        <li class="page-item"><a class="page-link rounded-circle mx-1 text-dark" href="#"
                                style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">২</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link border-0 text-dark fw-bold" href="#">পরবর্তী <i
                                    class="fas fa-chevron-right ms-1"></i></a>
                        </li>
                    </ul>
                </nav>

            </main>
        </div>
    </div>
@endsection

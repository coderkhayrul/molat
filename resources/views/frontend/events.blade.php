@extends('frontend.layouts.app')
@section('content')
    <!-- Page Header -->
    <div class="bg-white border-bottom py-4 mb-5">
        <div class="container">
            <h2 class="fw-bold mb-0">মেলা প্রাঙ্গণের ইভেন্টসমূহ</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none">হোম</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ইভেন্ট ও প্রোগ্রাম</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Sidebar / Calendar -->
            <aside class="col-lg-4 mb-4">
                <div class="filter-sidebar">
                    <h5 class="filter-title">ইভেন্ট ফিল্টার করুন</h5>

                    <!-- Date Filter -->
                    <div class="mb-4">
                        <label class="form-label fw-bold small text-muted">তারিখ অনুযায়ী</label>
                        <input type="date" class="form-control mb-2">
                        <button class="btn btn-outline-dark btn-sm w-100">আজকের ইভেন্ট দেখান</button>
                    </div>

                    <!-- Event Type Filter -->
                    <div class="mb-4">
                        <label class="form-label fw-bold small text-muted">ইভেন্টের ধরন</label>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="type1" checked>
                            <label class="form-check-label" for="type1">বইয়ের মোড়ক উন্মোচন (Book Launch)</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="type2" checked>
                            <label class="form-check-label" for="type2">লেখক আড্ডা (Author Talk)</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="type3" checked>
                            <label class="form-check-label" for="type3">অটোগ্রাফ পর্ব (Signing Session)</label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="type4">
                            <label class="form-check-label" for="type4">সাংস্কৃতিক অনুষ্ঠান</label>
                        </div>
                    </div>

                    <!-- Venue Filter -->
                    <div class="mb-4">
                        <label class="form-label fw-bold small text-muted">ভেন্যু / স্থান</label>
                        <select class="form-select">
                            <option selected>সকল স্থান</option>
                            <option value="1">মূল মঞ্চ (বাংলা একাডেমি)</option>
                            <option value="2">নজরুল মঞ্চ</option>
                            <option value="3">লেখক কুঞ্জ</option>
                            <option value="4">শিশু চত্বর</option>
                        </select>
                    </div>
                </div>
            </aside>

            <!-- Main Content / Event List -->
            <main class="col-lg-8">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-bold mb-0">আসন্ন প্রোগ্রামসমূহ</h5>
                    <span class="badge bg-secondary">মোট ৫টি ইভেন্ট</span>
                </div>

                <!-- Event Item 1 -->
                <div class="event-card">
                    <div class="date-block">
                        <div class="date-month">ফেব্রুয়ারি</div>
                        <div class="date-day">১৫</div>
                        <div class="small mt-1">বৃহস্পতিবার</div>
                    </div>
                    <div class="event-details">
                        <span class="event-badge badge-launch"><i class="fas fa-rocket me-1"></i> মোড়ক উন্মোচন</span>
                        <h3 class="event-title">‘মহাকাশের রহস্য’ বইয়ের মোড়ক উন্মোচন</h3>
                        <div class="event-meta">
                            <span><i class="far fa-clock"></i> বিকাল ৪:০০ - ৫:৩০</span>
                            <span><i class="fas fa-map-marker-alt"></i> মূল মঞ্চ, বাংলা একাডেমি</span>
                        </div>
                        <p class="text-muted mb-4">ড. মুহম্মদ জাফর ইকবালের নতুন সায়েন্স ফিকশন বই "মহাকাশের রহস্য"-এর
                            আনুষ্ঠানিক মোড়ক উন্মোচন করা হবে। অনুষ্ঠানে বিশেষ অতিথি হিসেবে উপস্থিত থাকবেন প্রথিতযশা বিজ্ঞানী
                            ও
                            শিক্ষাবিদগণ।</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-warning btn-sm fw-bold"><i class="fas fa-bell me-1"></i> রিমাইন্ডার সেট
                                করুন</button>
                            <button class="btn btn-outline-dark btn-sm"><i class="far fa-calendar-plus me-1"></i>
                                ক্যালেন্ডারে
                                যোগ</button>
                        </div>
                    </div>
                </div>

                <!-- Event Item 2 -->
                <div class="event-card">
                    <div class="date-block" style="background: #34495e;">
                        <div class="date-month">ফেব্রুয়ারি</div>
                        <div class="date-day">১৭</div>
                        <div class="small mt-1">শনিবার</div>
                    </div>
                    <div class="event-details">
                        <span class="event-badge badge-talk"><i class="fas fa-microphone me-1"></i> লেখক আড্ডা</span>
                        <h3 class="event-title">সমকালীন সাহিত্য ও তরুন সমাজ</h3>
                        <div class="event-meta">
                            <span><i class="far fa-clock"></i> সন্ধ্যা ৬:০০ - ৭:৩০</span>
                            <span><i class="fas fa-map-marker-alt"></i> লেখক কুঞ্জ, সোহরাওয়ার্দী উদ্যান</span>
                        </div>
                        <p class="text-muted mb-4">সমকালীন বাংলা সাহিত্য কীভাবে তরুন সমাজকে প্রভাবিত করছে, সে বিষয়ে একটি
                            মুক্ত
                            আলোচনা। আলোচনায় অংশ নেবেন আনিসুল হক এবং সাদাত হোসাইন। পাঠকরা সরাসরি প্রশ্ন করার সুযোগ পাবেন।</p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-warning btn-sm fw-bold"><i class="fas fa-bell me-1"></i> রিমাইন্ডার সেট
                                করুন</button>
                            <button class="btn btn-outline-dark btn-sm"><i class="far fa-calendar-plus me-1"></i>
                                ক্যালেন্ডারে
                                যোগ</button>
                        </div>
                    </div>
                </div>

                <!-- Event Item 3 -->
                <div class="event-card">
                    <div class="date-block" style="background: #34495e;">
                        <div class="date-month">ফেব্রুয়ারি</div>
                        <div class="date-day">২১</div>
                        <div class="small mt-1">বুধবার</div>
                    </div>
                    <div class="event-details">
                        <span class="event-badge badge-signing"><i class="fas fa-pen-fancy me-1"></i> অটোগ্রাফ পর্ব</span>
                        <h3 class="event-title">বিশেষ সিগনেচার সেশন: হুমায়ূন আহমেদ স্মৃতি</h3>
                        <div class="event-meta">
                            <span><i class="far fa-clock"></i> দুপুর ৩:০০ - ৫:০০</span>
                            <span><i class="fas fa-map-marker-alt"></i> প্যাভিলিয়ন ১২ (অন্যপ্রকাশ)</span>
                        </div>
                        <p class="text-muted mb-4">আন্তর্জাতিক মাতৃভাষা দিবস উপলক্ষে বিশেষ অটোগ্রাফ পর্ব। প্রিয় লেখকদের কাছ
                            থেকে সরাসরি বই সংগ্রহ এবং অটোগ্রাফ নেওয়ার সুযোগ। আগে আসলে আগে পাবেন ভিত্তিতে টোকেন দেওয়া হবে।
                        </p>
                        <div class="d-flex gap-2">
                            <button class="btn btn-warning btn-sm fw-bold"><i class="fas fa-bell me-1"></i> রিমাইন্ডার সেট
                                করুন</button>
                            <button class="btn btn-outline-dark btn-sm"><i class="far fa-calendar-plus me-1"></i>
                                ক্যালেন্ডারে
                                যোগ</button>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">পূর্ববর্তী</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#"
                                style="background-color: var(--accent-color); border-color: var(--accent-color);">১</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#"
                                style="color: var(--primary-color);">২</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" style="color: var(--primary-color);">পরবর্তী</a>
                        </li>
                    </ul>
                </nav>
            </main>
        </div>
    </div>
@endsection

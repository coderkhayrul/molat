@extends('frontend.layouts.app')
@section('content')
    <!-- Page Header -->
    <div class="bg-white border-bottom py-4 mb-4">
        <div class="container">
            <h2 class="fw-bold mb-0">অংশগ্রহণকারী লেখকবৃন্দ</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none">হোম</a></li>
                    <li class="breadcrumb-item active" aria-current="page">লেখকবৃন্দ</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container">
        <!-- Search and Filter Section -->
        <div class="search-filter-section shadow-sm">
            <div class="row g-3 align-items-center">
                <div class="col-md-5">
                    <div class="input-group">
                        <span class="input-group-text bg-white"><i class="fas fa-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0 ps-0"
                            placeholder="লেখকের নাম দিয়ে খুঁজুন...">
                        <button class="btn btn-warning px-4">খুঁজুন</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <select class="form-select">
                        <option selected>সকল ধরন (Genre)</option>
                        <option value="fiction">উপন্যাসিক</option>
                        <option value="sci-fi">সায়েন্স ফিকশন</option>
                        <option value="poetry">কবি</option>
                        <option value="history">প্রাবন্ধিক</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="popular">জনপ্রিয়তা অনুযায়ী</option>
                        <option value="asc">নাম অনুযায়ী (A - Z)</option>
                        <option value="desc">নাম অনুযায়ী (Z - A)</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Authors Grid -->
        <div class="row g-4">

            <!-- Author 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="author-card shadow-sm">
                    <div class="author-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            class="author-img" alt="হুমায়ূন আহমেদ">
                        <div class="book-count-badge" title="মেলায় উপলব্ধ বই">৪৫</div>
                    </div>
                    <h5 class="fw-bold mb-1">হুমায়ূন আহমেদ</h5>
                    <p class="text-warning small fw-bold mb-2">উপন্যাস, সায়েন্স ফিকশন</p>
                    <p class="text-secondary small mb-4 text-truncate-3">বাংলাদেশের অন্যতম জনপ্রিয় কথাসাহিত্যিক, নাট্যকার
                        এবং
                        চলচ্চিত্র নির্মাতা। তাঁর লেখা হিমু এবং মিসির আলি চরিত্র পাঠকদের কাছে অত্যন্ত জনপ্রিয়।</p>
                    <a href="#" class="btn btn-outline-dark btn-sm rounded-pill px-4 w-100"><i
                            class="fas fa-book-open me-2"></i>বইসমূহ দেখুন</a>
                </div>
            </div>

            <!-- Author 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="author-card shadow-sm">
                    <div class="author-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            class="author-img" alt="ড. মুহম্মদ জাফর ইকবাল">
                        <div class="book-count-badge" title="মেলায় উপলব্ধ বই">৩২</div>
                    </div>
                    <h5 class="fw-bold mb-1">ড. জাফর ইকবাল</h5>
                    <p class="text-warning small fw-bold mb-2">সায়েন্স ফিকশন, শিশুতোষ</p>
                    <p class="text-secondary small mb-4 text-truncate-3">জনপ্রিয় বাংলাদেশি বিজ্ঞান কল্পকাহিনী লেখক,
                        পদার্থবিদ
                        ও শিক্ষাবিদ। কিশোর সাহিত্যের জন্য তিনি ব্যাপকভাবে সমাদৃত।</p>
                    <a href="#" class="btn btn-outline-dark btn-sm rounded-pill px-4 w-100"><i
                            class="fas fa-book-open me-2"></i>বইসমূহ দেখুন</a>
                </div>
            </div>

            <!-- Author 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="author-card shadow-sm">
                    <div class="author-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            class="author-img" alt="সেলিনা হোসেন">
                        <div class="book-count-badge" title="মেলায় উপলব্ধ বই">১৮</div>
                    </div>
                    <h5 class="fw-bold mb-1">সেলিনা হোসেন</h5>
                    <p class="text-warning small fw-bold mb-2">উপন্যাস, প্রবন্ধ</p>
                    <p class="text-secondary small mb-4 text-truncate-3">বাংলাদেশের একজন প্রখ্যাত ঔপন্যাসিক। তাঁর উপন্যাসে
                        প্রতিফলিত হয়েছে সমকালের সামাজিক ও রাজনৈতিক দ্বন্দ্ব।</p>
                    <a href="#" class="btn btn-outline-dark btn-sm rounded-pill px-4 w-100"><i
                            class="fas fa-book-open me-2"></i>বইসমূহ দেখুন</a>
                </div>
            </div>

            <!-- Author 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="author-card shadow-sm">
                    <div class="author-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            class="author-img" alt="আনিসুল হক">
                        <div class="book-count-badge" title="মেলায় উপলব্ধ বই">২৫</div>
                    </div>
                    <h5 class="fw-bold mb-1">আনিসুল হক</h5>
                    <p class="text-warning small fw-bold mb-2">উপন্যাস, রম্যরচনা</p>
                    <p class="text-secondary small mb-4 text-truncate-3">কবি, কথাসাহিত্যিক, নাট্যকার এবং সাংবাদিক। 'মা' তাঁর
                        রচিত অত্যন্ত জনপ্রিয় ও সাড়া জাগানো একটি উপন্যাস।</p>
                    <a href="#" class="btn btn-outline-dark btn-sm rounded-pill px-4 w-100"><i
                            class="fas fa-book-open me-2"></i>বইসমূহ দেখুন</a>
                </div>
            </div>

            <!-- Author 5 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="author-card shadow-sm">
                    <div class="author-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            class="author-img" alt="নির্মলেন্দু গুণ">
                        <div class="book-count-badge" title="মেলায় উপলব্ধ বই">১৪</div>
                    </div>
                    <h5 class="fw-bold mb-1">নির্মলেন্দু গুণ</h5>
                    <p class="text-warning small fw-bold mb-2">কবিতা</p>
                    <p class="text-secondary small mb-4 text-truncate-3">বাংলাদেশের জনপ্রিয় কবিদের অন্যতম। তাঁর কবিতায়
                        প্রধানত প্রেম এবং শ্রেণী-সংগ্রামের কথা উঠে এসেছে।</p>
                    <a href="#" class="btn btn-outline-dark btn-sm rounded-pill px-4 w-100"><i
                            class="fas fa-book-open me-2"></i>বইসমূহ দেখুন</a>
                </div>
            </div>

            <!-- Author 6 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="author-card shadow-sm">
                    <div class="author-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            class="author-img" alt="সমরেশ মজুমদার">
                        <div class="book-count-badge" title="মেলায় উপলব্ধ বই">২১</div>
                    </div>
                    <h5 class="fw-bold mb-1">সমরেশ মজুমদার</h5>
                    <p class="text-warning small fw-bold mb-2">উপন্যাস, ছোটগল্প</p>
                    <p class="text-secondary small mb-4 text-truncate-3">প্রখ্যাত বাঙালি ঔপন্যাসিক। উত্তরাধিকার, কালবেলা ও
                        কালপুরুষ উপন্যাসের জন্য তিনি বিশেষ খ্যাতি অর্জন করেছেন।</p>
                    <a href="#" class="btn btn-outline-dark btn-sm rounded-pill px-4 w-100"><i
                            class="fas fa-book-open me-2"></i>বইসমূহ দেখুন</a>
                </div>
            </div>

            <!-- Author 7 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="author-card shadow-sm">
                    <div class="author-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            class="author-img" alt="তাহমিমা আনাম">
                        <div class="book-count-badge" title="মেলায় উপলব্ধ বই">০৫</div>
                    </div>
                    <h5 class="fw-bold mb-1">তাহমিমা আনাম</h5>
                    <p class="text-warning small fw-bold mb-2">ইংরেজি সাহিত্য</p>
                    <p class="text-secondary small mb-4 text-truncate-3">বাংলাদেশের একজন ইংরেজি ভাষার ঔপন্যাসিক। তাঁর লেখা
                        'আ
                        গোল্ডেন এজ' আন্তর্জাতিকভাবে সমাদৃত।</p>
                    <a href="#" class="btn btn-outline-dark btn-sm rounded-pill px-4 w-100"><i
                            class="fas fa-book-open me-2"></i>বইসমূহ দেখুন</a>
                </div>
            </div>

            <!-- Author 8 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="author-card shadow-sm">
                    <div class="author-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1489980557514-251d61e3eeb6?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            class="author-img" alt="সৈয়দ মুজতবা আলী">
                        <div class="book-count-badge" title="মেলায় উপলব্ধ বই">১১</div>
                    </div>
                    <h5 class="fw-bold mb-1">সৈয়দ মুজতবা আলী</h5>
                    <p class="text-warning small fw-bold mb-2">রম্যরচনা, ভ্রমণকাহিনী</p>
                    <p class="text-secondary small mb-4 text-truncate-3">বিখ্যাত বাঙালি লেখক, শিক্ষাবিদ ও বহুভাষাবিদ। 'দেশে
                        বিদেশে' তাঁর লেখা অন্যতম জনপ্রিয় ভ্রমণকাহিনী।</p>
                    <a href="#" class="btn btn-outline-dark btn-sm rounded-pill px-4 w-100"><i
                            class="fas fa-book-open me-2"></i>বইসমূহ দেখুন</a>
                </div>
            </div>

        </div>

        <!-- Pagination -->
        <nav class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">পূর্ববর্তী</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">১</a></li>
                <li class="page-item"><a class="page-link" href="#">২</a></li>
                <li class="page-item"><a class="page-link" href="#">৩</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">পরবর্তী</a>
                </li>
            </ul>
        </nav>

    </div>
@endsection

@extends('frontend.layouts.app')
@section('content')
    <!-- Page Header -->
    <div class="bg-white border-bottom py-4 mb-4">
        <div class="container">
            <h2 class="fw-bold mb-0">অংশগ্রহণকারী প্রকাশনীসমূহ</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">হোম</a></li>
                    <li class="breadcrumb-item active" aria-current="page">প্রকাশনী</li>
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
                            placeholder="প্রকাশনীর নাম দিয়ে খুঁজুন...">
                        <button class="btn btn-warning px-4">খুঁজুন</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <select class="form-select">
                        <option selected>সকল ধরন (Category)</option>
                        <option value="general">সৃজনশীল প্রকাশনী</option>
                        <option value="academic">একাডেমিক ও ক্যারিয়ার</option>
                        <option value="children">শিশুতোষ প্রকাশনী</option>
                        <option value="islamic">ইসলামিক প্রকাশনী</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option value="asc">নাম অনুযায়ী (A - Z)</option>
                        <option value="desc">নাম অনুযায়ী (Z - A)</option>
                        <option value="books">বইয়ের সংখ্যা অনুযায়ী</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Publishers Grid -->
        <div class="row g-4">

            <!-- Publisher 1 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="publisher-card shadow-sm">
                    <div class="publisher-logo-wrapper">
                        <!-- Placeholder for logo -->
                        <i class="fas fa-book-open fa-3x text-muted"></i>
                    </div>
                    <div class="stall-badge"><i class="fas fa-store me-1"></i> প্যাভিলিয়ন: ১২</div>
                    <h5 class="fw-bold mb-1">অন্যপ্রকাশ</h5>
                    <p class="text-truncate-3 mb-2">বাংলাদেশের শীর্ষস্থানীয় সৃজনশীল প্রকাশনা সংস্থা। জনপ্রিয় কথাসাহিত্যিক
                        হুমায়ূন আহমেদের অধিকাংশ বই এখান থেকেই প্রকাশিত।</p>
                    <div class="book-count"><i class="fas fa-swatchbook me-1"></i> ১২০+ বই উপলব্ধ</div>
                    <a href="#" class="btn btn-outline-dark btn-sm w-100"><i class="fas fa-list me-2"></i>বইয়ের
                        তালিকা</a>
                </div>
            </div>

            <!-- Publisher 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="publisher-card shadow-sm">
                    <div class="publisher-logo-wrapper">
                        <i class="fas fa-leaf fa-3x text-success"></i>
                    </div>
                    <div class="stall-badge"><i class="fas fa-store me-1"></i> স্টল: ৪১৫-৪১৮</div>
                    <h5 class="fw-bold mb-1">প্রথমা প্রকাশন</h5>
                    <p class="text-truncate-3 mb-2">প্রথম আলো পত্রিকার একটি প্রকাশনা উদ্যোগ। মানসম্মত প্রবন্ধ, মুক্তিযুদ্ধ
                        ভিত্তিক বই এবং গবেষণামূলক কাজের জন্য বিখ্যাত।</p>
                    <div class="book-count"><i class="fas fa-swatchbook me-1"></i> ৮৫+ বই উপলব্ধ</div>
                    <a href="#" class="btn btn-outline-dark btn-sm w-100"><i class="fas fa-list me-2"></i>বইয়ের
                        তালিকা</a>
                </div>
            </div>

            <!-- Publisher 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="publisher-card shadow-sm">
                    <div class="publisher-logo-wrapper">
                        <i class="fas fa-pen-nib fa-3x text-primary"></i>
                    </div>
                    <div class="stall-badge"><i class="fas fa-store me-1"></i> স্টল: ২২৪-২২৬</div>
                    <h5 class="fw-bold mb-1">তাম্রলিপি</h5>
                    <p class="text-truncate-3 mb-2">সায়েন্স ফিকশন, কিশোর ক্লাসিক এবং অনুবাদ সাহিত্যের জন্য তাম্রলিপি দেশের
                        অন্যতম জনপ্রিয় একটি প্রকাশনী।</p>
                    <div class="book-count"><i class="fas fa-swatchbook me-1"></i> ৯২+ বই উপলব্ধ</div>
                    <a href="#" class="btn btn-outline-dark btn-sm w-100"><i class="fas fa-list me-2"></i>বইয়ের
                        তালিকা</a>
                </div>
            </div>

            <!-- Publisher 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="publisher-card shadow-sm">
                    <div class="publisher-logo-wrapper">
                        <i class="fas fa-book-reader fa-3x text-info"></i>
                    </div>
                    <div class="stall-badge"><i class="fas fa-store me-1"></i> প্যাভিলিয়ন: ০৮</div>
                    <h5 class="fw-bold mb-1">বাতিঘর</h5>
                    <p class="text-truncate-3 mb-2">রুচিশীল ও ব্যতিক্রমী বই প্রকাশের ক্ষেত্রে বাতিঘর একটি আস্থার নাম। ঐতিহ্য
                        এবং সংস্কৃতি নিয়ে তাদের কাজ প্রশংসনীয়।</p>
                    <div class="book-count"><i class="fas fa-swatchbook me-1"></i> ৪৫+ বই উপলব্ধ</div>
                    <a href="#" class="btn btn-outline-dark btn-sm w-100"><i class="fas fa-list me-2"></i>বইয়ের
                        তালিকা</a>
                </div>
            </div>

            <!-- Publisher 5 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="publisher-card shadow-sm">
                    <div class="publisher-logo-wrapper">
                        <i class="fas fa-child fa-3x text-warning"></i>
                    </div>
                    <div class="stall-badge"><i class="fas fa-store me-1"></i> স্টল: ১১০-১১২</div>
                    <h5 class="fw-bold mb-1">ময়ূরপঙ্খি</h5>
                    <p class="text-truncate-3 mb-2">মূলত শিশু-কিশোরদের জন্য রঙিন, সচিত্র এবং মানসম্মত বই প্রকাশের একটি
                        আধুনিক
                        প্রকাশনা প্রতিষ্ঠান।</p>
                    <div class="book-count"><i class="fas fa-swatchbook me-1"></i> ৩৫+ বই উপলব্ধ</div>
                    <a href="#" class="btn btn-outline-dark btn-sm w-100"><i class="fas fa-list me-2"></i>বইয়ের
                        তালিকা</a>
                </div>
            </div>

            <!-- Publisher 6 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="publisher-card shadow-sm">
                    <div class="publisher-logo-wrapper">
                        <i class="fas fa-globe-asia fa-3x text-secondary"></i>
                    </div>
                    <div class="stall-badge"><i class="fas fa-store me-1"></i> স্টল: ৩৩০-৩৩২</div>
                    <h5 class="fw-bold mb-1">ঐতিহ্য</h5>
                    <p class="text-truncate-3 mb-2">বাংলা সাহিত্যের ক্লাসিক বই এবং বড় বড় রচনাবলি প্রকাশ করে ঐতিহ্য পাঠকমহলে
                        বিপুল জনপ্রিয়তা পেয়েছে।</p>
                    <div class="book-count"><i class="fas fa-swatchbook me-1"></i> ১১০+ বই উপলব্ধ</div>
                    <a href="#" class="btn btn-outline-dark btn-sm w-100"><i class="fas fa-list me-2"></i>বইয়ের
                        তালিকা</a>
                </div>
            </div>

            <!-- Publisher 7 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="publisher-card shadow-sm">
                    <div class="publisher-logo-wrapper">
                        <i class="fas fa-mosque fa-3x text-success"></i>
                    </div>
                    <div class="stall-badge"><i class="fas fa-store me-1"></i> স্টল: ৫১০-৫১২</div>
                    <h5 class="fw-bold mb-1">গার্ডিয়ান পাবলিকেশন্স</h5>
                    <p class="text-truncate-3 mb-2">আধুনিক ধারায় ইসলামিক সাহিত্য, ইতিহাস এবং আত্মউন্নয়নমূলক বই প্রকাশে এটি
                        বর্তমানে শীর্ষস্থানীয় প্রকাশনী।</p>
                    <div class="book-count"><i class="fas fa-swatchbook me-1"></i> ৬৫+ বই উপলব্ধ</div>
                    <a href="#" class="btn btn-outline-dark btn-sm w-100"><i class="fas fa-list me-2"></i>বইয়ের
                        তালিকা</a>
                </div>
            </div>

            <!-- Publisher 8 -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="publisher-card shadow-sm">
                    <div class="publisher-logo-wrapper">
                        <i class="fas fa-graduation-cap fa-3x text-danger"></i>
                    </div>
                    <div class="stall-badge"><i class="fas fa-store me-1"></i> প্যাভিলিয়ন: ০২</div>
                    <h5 class="fw-bold mb-1">পাঞ্জেরী পাবলিকেশন্স</h5>
                    <p class="text-truncate-3 mb-2">একাডেমিক, ক্যারিয়ার সহায়ক বইয়ের পাশাপাশি শিশুতোষ এবং সৃজনশীল সাহিত্যের
                        বড়
                        একটি সম্ভার রয়েছে তাদের।</p>
                    <div class="book-count"><i class="fas fa-swatchbook me-1"></i> ২০০+ বই উপলব্ধ</div>
                    <a href="#" class="btn btn-outline-dark btn-sm w-100"><i class="fas fa-list me-2"></i>বইয়ের
                        তালিকা</a>
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

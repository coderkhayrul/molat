@extends('frontend.layouts.app')
@section('content')
    <!-- Breadcrumb -->
    <div class="bg-light border-bottom py-2 mb-4">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 small">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">হোম</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">ক্যাটাগরি</a></li>
                    <li class="breadcrumb-item active" aria-current="page">সায়েন্স ফিকশন</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container mb-5">

        <!-- Category Banner -->
        <div class="category-header shadow">
            <i class="fas fa-space-shuttle category-icon-large"></i>
            <div class="row align-items-center px-4">
                <div class="col-md-8">
                    <span class="badge bg-warning text-dark mb-2 px-3 py-2 rounded-pill"><i class="fas fa-star me-1"></i>
                        জনপ্রিয় ক্যাটাগরি</span>
                    <h1 class="display-5 fw-bold mb-3">সায়েন্স ফিকশন</h1>
                    <p class="lead mb-0 text-white-50">মহাবিশ্বের রহস্য, এলিয়েন, টাইম ট্রাভেল আর বিজ্ঞানের অদ্ভুত সব
                        কল্পকাহিনী নিয়ে সাজানো হয়েছে আমাদের সায়েন্স ফিকশন কালেকশন। ভবিষ্যতের পৃথিবীতে আপনাকে স্বাগতম!</p>
                </div>
            </div>
        </div>

        <!-- Sorting & Filter Header -->
        <div class="sort-header d-flex flex-column flex-md-row justify-content-between align-items-center">
            <p class="mb-md-0 mb-3 fw-bold text-muted"><i class="fas fa-book-open me-2 text-warning"></i> এই ক্যাটাগরিতে
                মোট <span class="text-primary">৮৫টি</span> বই পাওয়া গেছে</p>
            <div class="d-flex align-items-center gap-3">
                <div class="input-group input-group-sm w-auto">
                    <input type="text" class="form-control" placeholder="এই ক্যাটাগরিতে খুঁজুন...">
                    <button class="btn btn-outline-secondary"><i class="fas fa-search"></i></button>
                </div>
                <select class="form-select form-select-sm" style="width: auto; min-width: 150px;">
                    <option value="popular">জনপ্রিয়তা অনুযায়ী</option>
                    <option value="new">নতুন প্রকাশিত</option>
                    <option value="price_low">দাম: কম থেকে বেশি</option>
                    <option value="price_high">দাম: বেশি থেকে কম</option>
                </select>
            </div>
        </div>

        <!-- Books Grid for Specific Category -->
        <div class="row g-4">
            <!-- Book 1 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card book-card">
                    <div class="book-img-container">
                        <span class="badge bg-danger book-badge shadow-sm">নতুন</span>
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            class="book-img" alt="Book Cover">
                    </div>
                    <div class="card-body card-body-custom d-flex flex-column">
                        <h5 class="card-title fw-bold mb-1"><a href="#"
                                class="text-decoration-none text-dark">মহাকাশের রহস্য</a></h5>
                        <p class="text-muted small mb-2">ড. মুহম্মদ জাফর ইকবাল</p>

                        <div class="text-warning small mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span class="text-muted ms-1">(৪.৮)</span>
                        </div>

                        <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                            <span class="fs-5 fw-bold text-success">৳ ২৮০</span>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-secondary" title="প্রিভিউ দেখুন"><i
                                        class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning text-dark fw-bold"><i
                                        class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Book 2 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card book-card">
                    <div class="book-img-container">
                        <span class="badge bg-warning text-dark book-badge shadow-sm">বেস্টসেলার</span>
                        <img src="https://images.unsplash.com/photo-1614730321146-b6fa6a46bcb4?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            class="book-img" alt="Book Cover">
                    </div>
                    <div class="card-body card-body-custom d-flex flex-column">
                        <h5 class="card-title fw-bold mb-1"><a href="#" class="text-decoration-none text-dark">সায়েন্স
                                ফিকশন
                                সমগ্র ১</a></h5>
                        <p class="text-muted small mb-2">ড. মুহম্মদ জাফর ইকবাল</p>

                        <div class="text-warning small mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                            <span class="text-muted ms-1">(৫.০)</span>
                        </div>

                        <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                            <span class="fs-5 fw-bold text-success">৳ ৬৫০</span>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-secondary" title="প্রিভিউ দেখুন"><i
                                        class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning text-dark fw-bold"><i
                                        class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Book 3 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card book-card">
                    <div class="book-img-container">
                        <img src="https://images.unsplash.com/photo-1444703686981-a3abbc4d4fe3?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            class="book-img" alt="Book Cover">
                    </div>
                    <div class="card-body card-body-custom d-flex flex-column">
                        <h5 class="card-title fw-bold mb-1"><a href="#"
                                class="text-decoration-none text-dark">অন্ধকারের
                                বাসিন্দা</a></h5>
                        <p class="text-muted small mb-2">আহসান হাবীব</p>

                        <div class="text-warning small mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="far fa-star"></i>
                            <span class="text-muted ms-1">(৪.০)</span>
                        </div>

                        <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                            <span class="fs-5 fw-bold text-success">৳ ২২০</span>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-secondary" title="প্রিভিউ দেখুন"><i
                                        class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning text-dark fw-bold"><i
                                        class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Book 4 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card book-card">
                    <div class="book-img-container">
                        <span class="badge bg-info book-badge shadow-sm">জনপ্রিয়</span>
                        <img src="https://images.unsplash.com/photo-1462331940025-496dfbfc7564?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            class="book-img" alt="Book Cover">
                    </div>
                    <div class="card-body card-body-custom d-flex flex-column">
                        <h5 class="card-title fw-bold mb-1"><a href="#"
                                class="text-decoration-none text-dark">ক্রেনিয়াল</a>
                        </h5>
                        <p class="text-muted small mb-2">ড. মুহম্মদ জাফর ইকবাল</p>

                        <div class="text-warning small mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span class="text-muted ms-1">(৪.৫)</span>
                        </div>

                        <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                            <span class="fs-5 fw-bold text-success">৳ ৩০০</span>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-secondary" title="প্রিভিউ দেখুন"><i
                                        class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning text-dark fw-bold"><i
                                        class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Book 5 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card book-card">
                    <div class="book-img-container">
                        <img src="https://images.unsplash.com/photo-1543722530-d2c3201371e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            class="book-img" alt="Book Cover">
                    </div>
                    <div class="card-body card-body-custom d-flex flex-column">
                        <h5 class="card-title fw-bold mb-1"><a href="#" class="text-decoration-none text-dark">নিওন
                                আলোয়
                                মহাকাশ</a></h5>
                        <p class="text-muted small mb-2">মোহাম্মদ নাজিম উদ্দিন</p>

                        <div class="text-warning small mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="far fa-star"></i>
                            <span class="text-muted ms-1">(৪.২)</span>
                        </div>

                        <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                            <span class="fs-5 fw-bold text-success">৳ ৩৪০</span>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-secondary" title="প্রিভিউ দেখুন"><i
                                        class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning text-dark fw-bold"><i
                                        class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Book 6 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card book-card">
                    <div class="book-img-container">
                        <span class="badge bg-secondary book-badge shadow-sm">অনুবাদ</span>
                        <img src="https://images.unsplash.com/photo-1462331940025-496dfbfc7564?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            class="book-img" alt="Book Cover">
                    </div>
                    <div class="card-body card-body-custom d-flex flex-column">
                        <h5 class="card-title fw-bold mb-1"><a href="#" class="text-decoration-none text-dark">দ্য
                                মার্শিয়ান
                                (অনুবাদ)</a></h5>
                        <p class="text-muted small mb-2">অ্যান্ডি উইয়ার</p>

                        <div class="text-warning small mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                            <span class="text-muted ms-1">(৪.৯)</span>
                        </div>

                        <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                            <span class="fs-5 fw-bold text-success">৳ ৪২০</span>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-secondary" title="প্রিভিউ দেখুন"><i
                                        class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning text-dark fw-bold"><i
                                        class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Book 7 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card book-card">
                    <div class="book-img-container">
                        <img src="https://images.unsplash.com/photo-1534447677768-be436bb09401?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            class="book-img" alt="Book Cover">
                    </div>
                    <div class="card-body card-body-custom d-flex flex-column">
                        <h5 class="card-title fw-bold mb-1"><a href="#"
                                class="text-decoration-none text-dark">প্রজেক্ট হেইল
                                মেরি</a></h5>
                        <p class="text-muted small mb-2">অ্যান্ডি উইয়ার</p>

                        <div class="text-warning small mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span class="text-muted ms-1">(৪.৭)</span>
                        </div>

                        <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                            <span class="fs-5 fw-bold text-success">৳ ৩৮0</span>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-secondary" title="প্রিভিউ দেখুন"><i
                                        class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning text-dark fw-bold"><i
                                        class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Book 8 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="card book-card">
                    <div class="book-img-container">
                        <span class="badge bg-danger book-badge shadow-sm">নতুন</span>
                        <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            class="book-img" alt="Book Cover">
                    </div>
                    <div class="card-body card-body-custom d-flex flex-column">
                        <h5 class="card-title fw-bold mb-1"><a href="#" class="text-decoration-none text-dark">টাইম
                                মেশিন</a>
                        </h5>
                        <p class="text-muted small mb-2">এইচ জি ওয়েলস</p>

                        <div class="text-warning small mb-3">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i>
                            <span class="text-muted ms-1">(৪.৯)</span>
                        </div>

                        <div class="mt-auto pt-3 border-top d-flex justify-content-between align-items-center">
                            <span class="fs-5 fw-bold text-success">৳ ২৫০</span>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-secondary" title="প্রিভিউ দেখুন"><i
                                        class="fas fa-eye"></i></button>
                                <button class="btn btn-sm btn-warning text-dark fw-bold"><i
                                        class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Pagination -->
        <nav class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">পূর্ববর্তী</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#"
                        style="background-color: var(--accent-color); border-color: var(--accent-color);">১</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color: var(--primary-color);">২</a>
                </li>
                <li class="page-item"><a class="page-link" href="#" style="color: var(--primary-color);">৩</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" style="color: var(--primary-color);">পরবর্তী</a>
                </li>
            </ul>
        </nav>

    </div>
@endsection

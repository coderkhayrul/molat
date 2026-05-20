@extends('frontend.layouts.app')
@section('content')
    <!-- Author Cover Section with Quote -->
    <div class="author-cover">
        <div class="author-quote-overlay">
            <p>"মানুষের মন হচ্ছে মহাবিশ্বের সবচেয়ে জটিল এবং সুন্দর জিনিস।"</p>
        </div>
    </div>
    <div class="container mb-5">

        <!-- Profile Header Box -->
        <div class="bg-white rounded-4 shadow-sm px-4 pb-4 border mb-4 position-relative"
            style="margin-top: -60px; z-index: 11;">
            <div class="row align-items-center text-center text-md-start">

                <!-- Avatar -->
                <div class="col-md-auto d-flex justify-content-center justify-content-md-start pe-md-4">
                    <div class="author-avatar-wrapper">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                            alt="ড. মুহম্মদ জাফর ইকবাল" class="author-avatar">
                    </div>
                </div>

                <!-- Name & Genres -->
                <div class="col-md mt-3 mt-md-0 pt-md-4">
                    <h2 class="fw-bold mb-1">ড. মুহম্মদ জাফর ইকবাল <i class="fas fa-check-circle text-primary fs-5"
                            title="Verified Author"></i></h2>
                    <p class="text-warning fw-bold mb-2">সায়েন্স ফিকশন, কিশোর সাহিত্য, কলামিস্ট</p>
                    <div class="d-flex flex-wrap justify-content-center justify-content-md-start gap-2 mt-3">
                        <button class="btn btn-warning fw-bold px-4 rounded-pill"><i class="fas fa-user-plus me-2"></i>ফলো
                            করুন</button>
                        <button class="btn btn-outline-dark rounded-pill px-4" data-bs-toggle="modal"
                            data-bs-target="#fanMailModal"><i class="fas fa-envelope me-2"></i>ফ্যান মেইল</button>
                        <button class="btn btn-light border rounded-circle" style="width: 40px; height: 40px;"><i
                                class="fas fa-share-alt"></i></button>
                    </div>
                </div>

                <!-- Stats -->
                <div class="col-lg-auto mt-4 mt-lg-0 pt-lg-4 ms-lg-auto">
                    <div class="d-flex justify-content-center justify-content-md-end bg-light rounded-4 p-2">
                        <div class="stat-box">
                            <p class="stat-num">৩২</p>
                            <p class="stat-label">বই</p>
                        </div>
                        <div class="stat-box">
                            <p class="stat-num">৪.৮</p>
                            <p class="stat-label">রেটিং <i class="fas fa-star text-warning"></i></p>
                        </div>
                        <div class="stat-box border-0">
                            <p class="stat-num">১২.৫k</p>
                            <p class="stat-label">ফলোয়ার</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="row g-4">

            <!-- Left Sidebar: Bio & Info -->
            <div class="col-lg-4">

                <!-- Biography -->
                <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
                    <h4 class="section-title">লেখকের জীবনী</h4>
                    <p class="text-muted text-justify" style="line-height: 1.8;">
                        ড. মুহম্মদ জাফর ইকবাল (জন্ম: ২৩ ডিসেম্বর ১৯৫২) একজন জনপ্রিয় বাংলাদেশি লেখক, পদার্থবিদ, ও শিক্ষাবিদ।
                        তাকে বাংলাদেশে সায়েন্স ফিকশন লেখা ও জনপ্রিয় করার পথিকৃৎ হিসেবে গণ্য করা হয়।
                    </p>
                    <p class="text-muted text-justify" style="line-height: 1.8;">
                        তাঁর লেখা কিশোর সাহিত্য ও বিজ্ঞান কল্পকাহিনী এদেশের তরুণ প্রজন্মের মাঝে বিজ্ঞানমনস্কতা ও মুক্তচিন্তা
                        বিকাশে ব্যাপক অবদান রেখেছে। দীর্ঘকাল শাহজালাল বিজ্ঞান ও প্রযুক্তি বিশ্ববিদ্যালয়ে অধ্যাপনা করেছেন।
                    </p>
                    <button class="btn btn-link text-decoration-none p-0 text-primary fw-bold">আরও পড়ুন <i
                            class="fas fa-angle-down"></i></button>
                </div>

                <!-- Quick Facts -->
                <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
                    <h4 class="section-title">একনজরে</h4>
                    <ul class="info-list">
                        <li><i class="fas fa-birthday-cake"></i> <span><strong>জন্ম:</strong> ২৩ ডিসেম্বর ১৯৫২</span></li>
                        <li><i class="fas fa-map-marker-alt"></i> <span><strong>জন্মস্থান:</strong> সিলেট, বাংলাদেশ</span>
                        </li>
                        <li><i class="fas fa-award"></i> <span><strong>পুরস্কার:</strong> বাংলা একাডেমি পুরস্কার
                                (২০০৪)</span>
                        </li>
                        <li><i class="fas fa-building"></i> <span><strong>প্রধান প্রকাশনী:</strong> তাম্রলিপি, কাকলী
                                প্রকাশনী</span></li>
                    </ul>
                </div>

                <!-- Social Links -->
                <div class="bg-white p-4 rounded-4 shadow-sm border">
                    <h4 class="section-title">কানেক্ট করুন</h4>
                    <div class="social-links">
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="Website"><i class="fas fa-globe"></i></a>
                        <a href="#" title="Goodreads"><i class="fab fa-goodreads-g"></i></a>
                    </div>
                </div>

            </div>

            <!-- Right Area: Books & Tabs -->
            <div class="col-lg-8">

                <!-- Latest Release Highlight -->
                <div class="latest-release-card p-4 shadow-sm mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-3 text-center text-md-start mb-3 mb-md-0">
                            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                                alt="New Book" class="img-fluid rounded shadow" style="max-height: 180px;">
                        </div>
                        <div class="col-md-9">
                            <span class="badge bg-danger mb-2 px-3 py-2 rounded-pill"><i class="fas fa-fire me-1"></i> নতুন
                                প্রকাশিত</span>
                            <h3 class="fw-bold text-dark mb-2">মহাকাশের রহস্য: অজানার খোঁজে</h3>
                            <p class="text-muted mb-3">মহাবিশ্বের অজানা সব রহস্য, ব্ল্যাকহোল, আর ভিনগ্রহের প্রাণীদের নিয়ে
                                কিশোরদের জন্য লেখা এক অনবদ্য সায়েন্স ফিকশন।</p>
                            <div class="d-flex align-items-center gap-3">
                                <span class="fs-4 fw-bold text-success">৳ ২৮০</span>
                                <a href="#" class="btn btn-dark"><i class="fas fa-shopping-cart me-2"></i>
                                    কার্টে যোগ করুন</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Tabs -->
                <div class="bg-white p-4 rounded-4 shadow-sm border">
                    <ul class="nav nav-tabs mb-4" id="authorTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#books" type="button"
                                role="tab"><i class="fas fa-book-open me-2"></i>সকল বই (৩২)</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#series" type="button"
                                role="tab"><i class="fas fa-layer-group me-2"></i>বুক সিরিজ</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#events" type="button"
                                role="tab"><i class="fas fa-calendar-alt me-2"></i>ইভেন্ট ও নিউজ</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="authorTabsContent">

                        <!-- All Books Tab -->
                        <div class="tab-pane fade show active" id="books" role="tabpanel">
                            <!-- Filters -->
                            <div class="d-flex justify-content-between align-items-center mb-4 bg-light p-2 rounded">
                                <select
                                    class="form-select form-select-sm border-0 bg-transparent w-auto fw-bold text-secondary">
                                    <option selected>সকল ক্যাটাগরি</option>
                                    <option value="sci-fi">সায়েন্স ফিকশন</option>
                                    <option value="kids">কিশোর সাহিত্য</option>
                                </select>
                                <select
                                    class="form-select form-select-sm border-0 bg-transparent w-auto fw-bold text-secondary">
                                    <option value="popular">জনপ্রিয়তা অনুযায়ী</option>
                                    <option value="new">নতুন প্রকাশিত</option>
                                </select>
                            </div>

                            <!-- Books Grid -->
                            <div class="row g-4">
                                <!-- Book Item -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="card book-card">
                                        <img src="https://images.unsplash.com/photo-1614730321146-b6fa6a46bcb4?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                                            class="card-img-top book-img" alt="Book Cover">
                                        <div class="card-body d-flex flex-column p-3">
                                            <h6 class="card-title fw-bold mb-1"><a href="#"
                                                    class="text-dark text-decoration-none">সায়েন্স ফিকশন সমগ্র ১</a></h6>
                                            <p class="small text-secondary mb-2">কাকলী প্রকাশনী</p>
                                            <div
                                                class="mt-auto d-flex justify-content-between align-items-center border-top pt-2">
                                                <span class="fw-bold text-success">৳ ৬৫০</span>
                                                <button class="btn btn-sm btn-outline-warning text-dark"><i
                                                        class="fas fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Book Item -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="card book-card">
                                        <img src="https://images.unsplash.com/photo-1462331940025-496dfbfc7564?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                                            class="card-img-top book-img" alt="Book Cover">
                                        <div class="card-body d-flex flex-column p-3">
                                            <h6 class="card-title fw-bold mb-1"><a href="#"
                                                    class="text-dark text-decoration-none">ক্রেনিয়াল</a></h6>
                                            <p class="small text-secondary mb-2">তাম্রলিপি</p>
                                            <div
                                                class="mt-auto d-flex justify-content-between align-items-center border-top pt-2">
                                                <span class="fw-bold text-success">৳ ৩০০</span>
                                                <button class="btn btn-sm btn-outline-warning text-dark"><i
                                                        class="fas fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Book Item -->
                                <div class="col-md-4 col-sm-6">
                                    <div class="card book-card">
                                        <img src="https://images.unsplash.com/photo-1543722530-d2c3201371e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                                            class="card-img-top book-img" alt="Book Cover">
                                        <div class="card-body d-flex flex-column p-3">
                                            <h6 class="card-title fw-bold mb-1"><a href="#"
                                                    class="text-dark text-decoration-none">কপোট্রনিক সুখ দুঃখ</a></h6>
                                            <p class="small text-secondary mb-2">অনন্যা</p>
                                            <div
                                                class="mt-auto d-flex justify-content-between align-items-center border-top pt-2">
                                                <span class="fw-bold text-success">৳ ২২০</span>
                                                <button class="btn btn-sm btn-outline-warning text-dark"><i
                                                        class="fas fa-cart-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Load More Button -->
                            <div class="text-center mt-4">
                                <button class="btn btn-outline-dark px-4 py-2 rounded-pill small">আরও দেখুন <i
                                        class="fas fa-chevron-down ms-1"></i></button>
                            </div>
                        </div>

                        <!-- Series Tab -->
                        <div class="tab-pane fade" id="series" role="tabpanel">
                            <div class="alert alert-light border border-warning" role="alert">
                                <h5 class="alert-heading fw-bold"><i class="fas fa-layer-group text-warning me-2"></i>
                                    সায়েন্স
                                    ফিকশন সমগ্র</h5>
                                <p class="mb-0 text-muted">লেখকের জনপ্রিয় সায়েন্স ফিকশন বইগুলোর কালেকশন খণ্ড আকারে প্রকাশিত
                                    হয়েছে।</p>
                                <hr>
                                <button class="btn btn-sm btn-dark">সিরিজের সব বই দেখুন</button>
                            </div>
                        </div>

                        <!-- Events Tab -->
                        <div class="tab-pane fade" id="events" role="tabpanel">
                            <div class="list-group list-group-flush border-bottom mb-3">
                                <a href="#" class="list-group-item list-group-item-action py-3 px-0 border-top">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1 fw-bold text-primary"><i
                                                class="fas fa-microphone me-2 text-warning"></i>
                                            ‘মহাকাশের রহস্য’ বইয়ের মোড়ক উন্মোচন</h6>
                                        <small class="text-danger fw-bold">আগামীকাল</small>
                                    </div>
                                    <p class="mb-1 small text-muted ms-4">বিকাল ৪:০০ - মূল মঞ্চ, বাংলা একাডেমি</p>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action py-3 px-0 border-top">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1 fw-bold"><i class="fas fa-pen-nib me-2 text-info"></i> অটোগ্রাফ ও
                                            সেলফি
                                            সেশন</h6>
                                        <small class="text-muted">২১ ফেব্রুয়ারি</small>
                                    </div>
                                    <p class="mb-1 small text-muted ms-4">দুপুর ৩:০০ - তাম্রলিপি প্যাভিলিয়ন</p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Fan Mail Modal -->
    <div class="modal fade" id="fanMailModal" tabindex="-1" aria-labelledby="fanMailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg rounded-4">
                <div class="modal-header bg-dark text-white rounded-top-4">
                    <h5 class="modal-title fw-bold" id="fanMailModalLabel"><i
                            class="fas fa-envelope-open-text text-warning me-2"></i> লেখককে বার্তা পাঠান</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">আপনার নাম</label>
                            <input type="text" class="form-control" placeholder="আপনার নাম লিখুন">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-bold">বার্তা</label>
                            <textarea class="form-control" rows="4" placeholder="লেখকের বই নিয়ে আপনার অনুভূতি বা প্রশ্ন লিখুন..."></textarea>
                            <small class="text-muted mt-1 d-block">আপনার বার্তাটি সরাসরি লেখকের প্রোফাইল ড্যাশবোর্ডে চলে
                                যাবে।</small>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-0 pb-4 pe-4">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">বাতিল</button>
                    <button type="button" class="btn btn-warning fw-bold px-4"><i class="fas fa-paper-plane me-2"></i>
                        সেন্ড
                        করুন</button>
                </div>
            </div>
        </div>
    </div>
@endsection

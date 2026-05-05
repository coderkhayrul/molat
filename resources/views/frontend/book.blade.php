@extends('frontend.layouts.app')
@section('content')
    <!-- Breadcrumb -->
    <div class="bg-white border-bottom py-3 mb-5">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html" class="text-decoration-none">হোম</a></li>
                    <li class="breadcrumb-item"><a href="books.html" class="text-decoration-none">বইসমূহ</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">সায়েন্স ফিকশন</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">মহাকাশের রহস্য</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container mb-5">
        <!-- Main Product Section -->
        <div class="row g-5 bg-white p-4 p-md-5 rounded-4 shadow-sm border">

            <!-- Left Side: Image & Preview -->
            <div class="col-lg-4 col-md-5 text-center">
                <div class="position-relative">
                    <span class="badge bg-danger position-absolute top-0 start-0 m-3 px-3 py-2 z-1">নতুন প্রকাশনী</span>
                    <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Book Cover" class="book-cover-large">
                </div>

                <div class="d-grid gap-2 mt-4">
                    <!-- Preview Button with Modal Trigger -->
                    <button class="btn btn-outline-dark fw-bold" data-bs-toggle="modal" data-bs-target="#bookPreviewModal">
                        <i class="fas fa-book-open me-2"></i> একটু পড়ে দেখুন (Preview)
                    </button>
                </div>

                <div class="mt-4">
                    <span class="text-muted small me-2">শেয়ার করুন:</span>
                    <a href="#" class="btn btn-sm btn-outline-primary rounded-circle me-1"><i
                            class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-info rounded-circle me-1"><i
                            class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-success rounded-circle"><i
                            class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <!-- Right Side: Details -->
            <div class="col-lg-8 col-md-7">
                <span class="badge-category mb-3 d-inline-block"><i class="fas fa-microscope me-1"></i> সায়েন্স ফিকশন</span>

                <h2 class="fw-bold mb-2">মহাকাশের রহস্য: অজানার খোঁজে</h2>

                <p class="fs-5 mb-2">লেখক: <a href="authors.html" class="text-primary text-decoration-none fw-bold">ড.
                        মুহম্মদ জাফর ইকবাল</a></p>

                <div class="d-flex align-items-center mb-4">
                    <div class="text-warning me-2">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                            class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="text-muted small">(৪.৮ রেটিং, ৪৫টি রিভিউ)</span>
                </div>

                <h3 class="fw-bold text-success mb-3">৳ ২৮০ <del class="text-muted fs-6 ms-2">৳ ৩৫০</del></h3>
                <p class="badge bg-success bg-opacity-10 text-success border border-success rounded-pill px-3 py-1"><i
                        class="fas fa-check-circle me-1"></i> স্টকে আছে (In Stock)</p>

                <p class="text-muted my-4" style="line-height: 1.8;">
                    <strong>সারসংক্ষেপ:</strong> মহাবিশ্বের অজানা সব রহস্য, ব্ল্যাকহোল, আর ভিনগ্রহের প্রাণীদের নিয়ে কিশোরদের
                    জন্য লেখা এক অনবদ্য সায়েন্স ফিকশন। এই বইটি পড়ে পাঠকরা শুধু রোমাঞ্চিতই হবে লালন, বরং বিজ্ঞানের অনেক জটিল
                    বিষয় খুব সহজেই বুঝতে পারবে।
                </p>

                <!-- Book Info Table -->
                <div class="bg-light p-3 rounded-3 mb-4">
                    <table class="table table-borderless table-sm mb-0 book-info-table">
                        <tbody>
                            <tr>
                                <th><i class="fas fa-building me-2"></i> প্রকাশনী</th>
                                <td>: <a href="#" class="text-decoration-none text-dark">তাম্রলিপি</a></td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-calendar-alt me-2"></i> প্রকাশের বছর</th>
                                <td>: ২০২৬ (১ম প্রকাশ)</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-language me-2"></i> ভাষা</th>
                                <td>: বাংলা</td>
                            </tr>
                            <tr>
                                <th><i class="fas fa-book me-2"></i> পৃষ্ঠাসংখ্যা</th>
                                <td>: ১২০ পাতা</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Actions -->
                <div class="d-flex gap-3 align-items-center mt-4 border-top pt-4">
                    <div class="input-group" style="width: 130px;">
                        <button class="btn btn-outline-secondary" type="button">-</button>
                        <input type="text" class="form-control text-center fw-bold" value="1">
                        <button class="btn btn-outline-secondary" type="button">+</button>
                    </div>
                    <button class="btn btn-add-cart flex-grow-1"><i class="fas fa-shopping-cart me-2"></i> কার্টে যোগ
                        করুন</button>
                    <button class="btn btn-wishlist" title="উইশলিস্টে রাখুন"><i class="fas fa-heart"></i></button>
                </div>
            </div>
        </div>

        <!-- Details Tabs Section -->
        <div class="row mt-5">
            <div class="col-12 bg-white p-4 rounded-4 shadow-sm border">
                <ul class="nav nav-tabs mb-4" id="bookTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc"
                            type="button" role="tab">বিস্তারিত বর্ণনা</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="author-tab" data-bs-toggle="tab" data-bs-target="#author"
                            type="button" role="tab">লেখকের কথা</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                            type="button" role="tab">রিভিউ (৪৫)</button>
                    </li>
                </ul>

                <div class="tab-content" id="bookTabsContent">
                    <!-- Description Tab -->
                    <div class="tab-pane fade show active text-muted" id="desc" role="tabpanel">
                        <p class="mb-3">মহাকাশের রহস্য বইটি বিজ্ঞান কল্পকাহিনীর এক নতুন দিগন্ত। লেখক অত্যন্ত সহজ ও সাবলীল
                            ভাষায় মহাবিশ্বের কঠিন সব তত্ত্বকে কিশোরদের উপযোগী করে তুলে ধরেছেন।</p>
                        <p class="mb-3">বইটিতে মূলত একটি কাল্পনিক মহাকাশযানের গল্প বলা হয়েছে, যা ব্ল্যাকহোলের কাছাকাছি
                            গিয়ে এক
                            অজানা জগতে প্রবেশ করে। সেখানে তারা মুখোমুখি হয় এমন কিছু বাস্তবতার, যা মানব সভ্যতার ধারণারও
                            বাইরে।
                            বিজ্ঞানের থিওরি অফ রিলেটিভিটি থেকে শুরু করে কোয়ান্টাম ফিজিক্সের অনেক বিষয় গল্পের ছলে দারুণভাবে
                            ফুটিয়ে তোলা হয়েছে।</p>
                        <p>যেকোনো বিজ্ঞানপ্রেমী পাঠকের জন্য এটি একটি অবশ্য পাঠ্য বই। মেলার প্রথম দিন থেকেই বইটি পাঠক মহলে
                            বিপুল সাড়া ফেলেছে।</p>
                    </div>

                    <!-- Author Tab -->
                    <div class="tab-pane fade" id="author" role="tabpanel">
                        <div class="d-flex align-items-start">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                                alt="Author" class="rounded-circle me-4" width="100" height="100"
                                style="object-fit: cover;">
                            <div>
                                <h4 class="fw-bold mb-1">ড. মুহম্মদ জাফর ইকবাল</h4>
                                <p class="text-warning small fw-bold mb-3">সায়েন্স ফিকশন, শিশুতোষ</p>
                                <p class="text-muted">জনপ্রিয় বাংলাদেশি বিজ্ঞান কল্পকাহিনী লেখক, পদার্থবিদ ও শিক্ষাবিদ।
                                    কিশোর
                                    সাহিত্যের জন্য তিনি ব্যাপকভাবে সমাদৃত। তাঁর লেখনী এদেশের শিশু-কিশোরদের মাঝে
                                    বিজ্ঞানমনস্কতা
                                    তৈরিতে ব্যাপক ভূমিকা রেখেছে।</p>
                                <a href="#" class="btn btn-sm btn-outline-dark mt-2">লেখকের সব বই দেখুন</a>
                            </div>
                        </div>
                    </div>

                    <!-- Reviews Tab -->
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <div class="row">
                            <!-- Existing Reviews -->
                            <div class="col-md-7">
                                <h5 class="fw-bold mb-4">পাঠকদের মতামত</h5>

                                <div class="review-card">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="d-flex align-items-center">
                                            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80"
                                                class="user-avatar" alt="User">
                                            <div>
                                                <h6 class="fw-bold mb-0">আহমেদ ফয়সাল</h6>
                                                <small class="text-muted">১৫ ফেব্রুয়ারি, ২০২৬</small>
                                            </div>
                                        </div>
                                        <div class="text-warning small"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                    </div>
                                    <p class="text-muted small mb-0 mt-2">অসাধারণ একটি বই! এক নিঃশ্বাসে পড়ে শেষ করেছি।
                                        মহাকাশ
                                        নিয়ে এতো সুন্দর ব্যাখ্যা আগে কখনো পড়িনি। সবাইকে পড়ার অনুরোধ রইলো।</p>
                                </div>

                                <div class="review-card">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="d-flex align-items-center">
                                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=100&q=80"
                                                class="user-avatar" alt="User">
                                            <div>
                                                <h6 class="fw-bold mb-0">সাদিয়া ইসলাম</h6>
                                                <small class="text-muted">১২ ফেব্রুয়ারি, ২০২৬</small>
                                            </div>
                                        </div>
                                        <div class="text-warning small"><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="far fa-star"></i></div>
                                    </div>
                                    <p class="text-muted small mb-0 mt-2">বইয়ের বাঁধাই এবং প্রিন্ট কোয়ালিটি খুব ভালো।
                                        গল্পটিও বেশ
                                        রোমাঞ্চকর। তবে শেষের দিকটা আরেকটু বড় হলে ভালো হতো।</p>
                                </div>
                            </div>

                            <!-- Add Review Form -->
                            <div class="col-md-5">
                                <div class="bg-light p-4 rounded-3 border">
                                    <h5 class="fw-bold mb-3">রিভিউ দিন</h5>
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label small fw-bold">আপনার রেটিং</label>
                                            <div class="text-warning fs-5">
                                                <i class="far fa-star cursor-pointer"></i>
                                                <i class="far fa-star cursor-pointer"></i>
                                                <i class="far fa-star cursor-pointer"></i>
                                                <i class="far fa-star cursor-pointer"></i>
                                                <i class="far fa-star cursor-pointer"></i>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label small fw-bold">আপনার মন্তব্য</label>
                                            <textarea class="form-control" rows="3" placeholder="বইটি সম্পর্কে আপনার মতামত লিখুন..."></textarea>
                                        </div>
                                        <button type="button" class="btn btn-warning w-100 fw-bold">সাবমিট করুন</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Books Section -->
        <div class="row mt-5 pt-4">
            <h3 class="fw-bold mb-4 border-start border-warning border-4 ps-3">একই ধরনের আরও বই (Related Books)</h3>

            <div class="row g-4">
                <!-- Book 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card related-book-card shadow-sm h-100 p-2">
                        <img src="https://images.unsplash.com/photo-1614730321146-b6fa6a46bcb4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                            class="card-img-top rounded" alt="Book Cover" style="height: 220px; object-fit: cover;">
                        <div class="card-body px-2 pb-1">
                            <h6 class="card-title fw-bold mt-1 mb-1 text-truncate">সায়েন্স ফিকশন সমগ্র ১</h6>
                            <p class="text-muted small mb-2">ড. মুহম্মদ জাফর ইকবাল</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">৳ ৬৫০</span>
                                <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Book 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card related-book-card shadow-sm h-100 p-2">
                        <img src="https://images.unsplash.com/photo-1444703686981-a3abbc4d4fe3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                            class="card-img-top rounded" alt="Book Cover" style="height: 220px; object-fit: cover;">
                        <div class="card-body px-2 pb-1">
                            <h6 class="card-title fw-bold mt-1 mb-1 text-truncate">অন্ধকারের বাসিন্দা</h6>
                            <p class="text-muted small mb-2">আহসান হাবীব</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">৳ ২২০</span>
                                <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Book 3 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card related-book-card shadow-sm h-100 p-2">
                        <img src="https://images.unsplash.com/photo-1462331940025-496dfbfc7564?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                            class="card-img-top rounded" alt="Book Cover" style="height: 220px; object-fit: cover;">
                        <div class="card-body px-2 pb-1">
                            <h6 class="card-title fw-bold mt-1 mb-1 text-truncate">ক্রেনিয়াল</h6>
                            <p class="text-muted small mb-2">ড. মুহম্মদ জাফর ইকবাল</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">৳ ৩০০</span>
                                <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Book 4 -->
                <div class="col-lg-3 col-md-4 col-sm-6 d-none d-lg-block">
                    <div class="card related-book-card shadow-sm h-100 p-2">
                        <img src="https://images.unsplash.com/photo-1543722530-d2c3201371e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                            class="card-img-top rounded" alt="Book Cover" style="height: 220px; object-fit: cover;">
                        <div class="card-body px-2 pb-1">
                            <h6 class="card-title fw-bold mt-1 mb-1 text-truncate">নিওন আলোয় মহাকাশ</h6>
                            <p class="text-muted small mb-2">মোহাম্মদ নাজিম উদ্দিন</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">৳ ৩৪০</span>
                                <button class="btn btn-sm btn-outline-warning"><i class="fas fa-cart-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Book Preview Modal -->
    <div class="modal fade" id="bookPreviewModal" tabindex="-1" aria-labelledby="bookPreviewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header bg-light border-bottom">
                    <h5 class="modal-title fw-bold" id="bookPreviewModalLabel"><i
                            class="fas fa-book-open text-warning me-2"></i> মহাকাশের রহস্য - প্রিভিউ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body preview-paper p-4 p-md-5">
                    <h4 class="text-center mb-5 fw-bold text-dark border-bottom pb-3">প্রথম অধ্যায়: ব্ল্যাকহোলের কাছাকাছি
                    </h4>
                    <p>মহাকাশযান 'অন্বেষা' তার নির্দিষ্ট গতিতে এগিয়ে চলছে। ক্যাপ্টেন রিয়াদ কন্ট্রোল প্যানেলের দিকে তাকিয়ে
                        ভ্রু কুঁচকালেন। রাডারে এমন কিছু একটা দেখা যাচ্ছে যা সাধারণ কোনো গ্রহ বা নক্ষত্র নয়।</p>
                    <p>"নেভিগেটর, ঐ সিগন্যালটা কীসের?" রিয়াদ ইন্টারকমে প্রশ্ন করলেন।</p>
                    <p>"ক্যাপ্টেন, এটা একটা বিশাল ভরের বস্তু। সম্ভবত... সম্ভবত একটা ব্ল্যাকহোল!" নেভিগেটর আসিফের গলায় স্পষ্ট
                        আতঙ্কের ছাপ।</p>
                    <p>পুরো ক্রু মেম্বারদের মধ্যে এক মুহূর্তের জন্য পিনপতন নীরবতা নেমে এল। ব্ল্যাকহোল! যার মহাকর্ষ বল থেকে
                        আলোও বের হতে পারে না। 'অন্বেষা' কি তবে তার ইভেন্ট হরাইজনের দিকে এগিয়ে যাচ্ছে?</p>
                    <p>রিয়াদ দ্রুত নেভিগেশন মডিউলের দিকে এগিয়ে গেলেন। স্ক্রিনে ভেসে থাকা ডাটাগুলো পরীক্ষা করে তার কপালে
                        চিন্তার ভাঁজ আরও গভীর হলো। "আমাদের গতিপথ এখনই পরিবর্তন করতে হবে। থ্রাস্টারগুলো সর্বোচ্চ পাওয়ারে চালু
                        করো।"</p>
                    <p>কিন্তু ততক্ষণে হয়তো অনেক দেরি হয়ে গেছে। মহাকাশযানটিতে তীব্র এক কাঁপুনি অনুভূত হলো...</p>
                    <div class="text-center mt-5">
                        <span class="text-muted fst-italic">... (বাকি অংশ পড়তে বইটি সংগ্রহ করুন) ...</span>
                    </div>
                </div>
                <div class="modal-footer bg-light border-top">
                    <button type="button" class="btn btn-secondary fw-bold px-4" data-bs-dismiss="modal">বন্ধ
                        করুন</button>
                    <button type="button" class="btn btn-warning fw-bold px-4"><i class="fas fa-shopping-cart me-2"></i>
                        কার্টে যোগ করুন</button>
                </div>
            </div>
        </div>
    </div>
@endsection

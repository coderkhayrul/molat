<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('frontend.home') }}">Mo<span class="text-warning">lat</span></a>

        <!-- Mobile Actions (Cart, User Profile & Toggler) -->
        <div class="d-flex align-items-center gap-3 d-lg-none">

            <!-- Mobile User Dropdown -->
            <div class="dropdown">
                <a href="#" class="text-white-50 text-decoration-none" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fas fa-user-circle fs-5"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 mt-2 position-absolute">
                    <li>
                        <h6 class="dropdown-header text-primary fw-bold">স্বাগতম, ইউজার!</h6>
                    </li>
                    <li><a class="dropdown-item" href="profile.html"><i class="fas fa-user me-2 text-muted"></i> আমার
                            প্রোফাইল</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-box-open me-2 text-muted"></i> আমার
                            অর্ডারসমূহ</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-heart me-2 text-muted"></i>
                            উইশলিস্ট</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-danger fw-bold" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt me-2"></i> লগআউট</a>
                    </li>
                </ul>
            </div>

            <!-- Mobile Cart Offcanvas Trigger (Right Side) -->
            <a href="#cartOffcanvas" data-bs-toggle="offcanvas"
                class="text-white position-relative text-decoration-none">
                <i class="fas fa-shopping-cart fs-5"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                    style="font-size: 0.6rem;">২</span>
            </a>

            <!-- Mobile Menu Toggler (Left Side Offcanvas) -->
            <button class="navbar-toggler border-0 px-1 shadow-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenuOffcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <!-- Desktop Actions & Collapse Menu (Hidden on Mobile) -->
        <div class="collapse navbar-collapse d-none d-lg-block" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item"><a class="nav-link active" href="{{ route('frontend.home') }}">হোম</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        বইসমূহ
                    </a>
                    <ul class="dropdown-menu shadow-sm" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('frontend.category.detail') }}">নতুন বই</a></li>
                        <li><a class="dropdown-item" href="{{ route('frontend.category.detail') }}">জনপ্রিয় বই</a></li>
                        <li><a class="dropdown-item" href="{{ route('frontend.category.detail') }}">শ্রেণীবদ্ধ বই</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('frontend.authors') }}">লেখকবৃন্দ</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('frontend.publishers') }}">প্রকাশনী</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('frontend.events') }}">ইভেন্ট</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('frontend.contact') }}">যোগাযোগ</a></li>

                <!-- Cart Dropdown (Desktop Only) -->
                <li class="nav-item dropdown ms-lg-3 d-none d-lg-block">
                    <a href="#" class="btn btn-warning btn-sm position-relative fw-bold dropdown-toggle"
                        data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <i class="fas fa-shopping-cart"></i> কার্ট
                        <span
                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">২</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end shadow-lg cart-dropdown border-0 mt-2">
                        <h6 class="fw-bold border-bottom pb-2 px-3">আপনার কার্ট (২টি বই)</h6>
                        <div class="px-3 py-2">
                            <!-- Cart Item 1 -->
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?ixlib=rb-1.2.1&auto=format&fit=crop&w=50&q=60"
                                    alt="Book" class="me-3 rounded shadow-sm"
                                    style="width: 45px; height: 60px; object-fit: cover;">
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 text-truncate fw-bold"
                                        style="max-width: 150px; font-size: 0.95rem;">জোছনা
                                        ও জননীর গল্প</h6>
                                    <small class="text-muted">১ x ৳ ৪৫০</small>
                                </div>
                                <button class="btn btn-sm text-danger"><i class="fas fa-trash-alt"></i></button>
                            </div>
                            <!-- Cart Item 2 -->
                            <div class="d-flex align-items-center mb-2">
                                <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-1.2.1&auto=format&fit=crop&w=50&q=60"
                                    alt="Book" class="me-3 rounded shadow-sm"
                                    style="width: 45px; height: 60px; object-fit: cover;">
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 text-truncate fw-bold"
                                        style="max-width: 150px; font-size: 0.95rem;">কালো
                                        মেঘের ভেলা</h6>
                                    <small class="text-muted">১ x ৳ ৩২০</small>
                                </div>
                                <button class="btn btn-sm text-danger"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </div>
                        <div class="border-top px-3 pt-3 mt-2 bg-light rounded-bottom">
                            <div class="d-flex justify-content-between fw-bold mb-3 text-dark">
                                <span>মোট:</span>
                                <span class="text-success">৳ ৭৭০</span>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="cart.html" class="btn btn-outline-dark btn-sm w-50">কার্ট দেখুন</a>
                                <a href="checkout.html" class="btn btn-warning btn-sm w-50 fw-bold">চেকআউট</a>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- User Dropdown (Desktop Only) -->
                <li class="nav-item dropdown ms-lg-2 d-none d-lg-block">
                    <a href="#" class="nav-link text-white-50 dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="fas fa-user-circle fs-5"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 mt-2">
                        <li>
                            <h6 class="dropdown-header text-primary fw-bold">স্বাগতম, ইউজার!</h6>
                        </li>
                        <li><a class="dropdown-item" href="profile.html"><i class="fas fa-user me-2 text-muted"></i>
                                আমার
                                প্রোফাইল</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-box-open me-2 text-muted"></i>
                                আমার
                                অর্ডারসমূহ</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-heart me-2 text-muted"></i>
                                উইশলিস্ট</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item text-danger fw-bold" href="{{ route('logout') }}">
                                <i class="fas fa-sign-out-alt me-2"></i> লগআউট
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Mobile Menu Offcanvas (Left Side) - Updated with Subcategories -->
<div class="offcanvas offcanvas-start bg-dark text-white d-lg-none" tabindex="-1" id="mobileMenuOffcanvas"
    aria-labelledby="mobileMenuOffcanvasLabel">
    <div class="offcanvas-header border-bottom border-secondary border-opacity-25">
        <h5 class="offcanvas-title fw-bold" id="mobileMenuOffcanvasLabel">বই<span class="text-warning">মেলা</span>
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-0">
        <ul class="navbar-nav">
            <li class="nav-item px-3 mb-2">
                <a class="nav-link active text-white" href="home.html"><i class="fas fa-home me-2 text-muted"></i>
                    হোম</a>
            </li>

            <li class="nav-item mt-3 px-3 mb-1">
                <h6 class="text-warning fw-bold small text-uppercase">ক্যাটাগরি সমূহ</h6>
            </li>

            <!-- Category 1 with Subcategory -->
            <li class="nav-item mobile-menu-item px-3">
                <a class="nav-link text-white-50 d-flex justify-content-between align-items-center py-2"
                    data-bs-toggle="collapse" href="#collapseNovel" role="button" aria-expanded="false"
                    aria-controls="collapseNovel">
                    <span>উপন্যাস</span>
                    <i class="fas fa-plus small toggle-icon"></i>
                </a>
                <div class="collapse" id="collapseNovel">
                    <ul class="list-unstyled ps-3 pb-2 m-0 border-start border-secondary ms-2 mt-1">
                        <li><a href="categories.html" class="nav-link text-white-50 py-1 small">রোমান্টিক উপন্যাস</a>
                        </li>
                        <li><a href="categories.html" class="nav-link text-white-50 py-1 small">ঐতিহাসিক উপন্যাস</a>
                        </li>
                        <li><a href="categories.html" class="nav-link text-white-50 py-1 small">থ্রিলার ও গোয়েন্দা</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Category 2 with Subcategory -->
            <li class="nav-item mobile-menu-item px-3">
                <a class="nav-link text-white-50 d-flex justify-content-between align-items-center py-2"
                    data-bs-toggle="collapse" href="#collapseSciFi" role="button" aria-expanded="false"
                    aria-controls="collapseSciFi">
                    <span>সায়েন্স ফিকশন</span>
                    <i class="fas fa-plus small toggle-icon"></i>
                </a>
                <div class="collapse" id="collapseSciFi">
                    <ul class="list-unstyled ps-3 pb-2 m-0 border-start border-secondary ms-2 mt-1">
                        <li><a href="categories.html" class="nav-link text-white-50 py-1 small">মহাকাশ অভিযান</a></li>
                        <li><a href="categories.html" class="nav-link text-white-50 py-1 small">টাইম ট্রাভেল</a></li>
                        <li><a href="categories.html" class="nav-link text-white-50 py-1 small">এলিয়েন ও ভিনগ্রহ</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Category 3 with Subcategory -->
            <li class="nav-item mobile-menu-item px-3">
                <a class="nav-link text-white-50 d-flex justify-content-between align-items-center py-2"
                    data-bs-toggle="collapse" href="#collapseEdu" role="button" aria-expanded="false"
                    aria-controls="collapseEdu">
                    <span>একাডেমিক ও ক্যারিয়ার</span>
                    <i class="fas fa-plus small toggle-icon"></i>
                </a>
                <div class="collapse" id="collapseEdu">
                    <ul class="list-unstyled ps-3 pb-2 m-0 border-start border-secondary ms-2 mt-1">
                        <li><a href="categories.html" class="nav-link text-white-50 py-1 small">প্রোগ্রামিং ও আইটি</a>
                        </li>
                        <li><a href="categories.html" class="nav-link text-white-50 py-1 small">বিসিএস ও ব্যাংক
                                প্রস্তুতি</a></li>
                        <li><a href="categories.html" class="nav-link text-white-50 py-1 small">বিশ্ববিদ্যালয়
                                ভর্তি</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Direct Category Links -->
            <li class="nav-item mobile-menu-item px-3">
                <a class="nav-link text-white-50 py-2" href="categories.html">কবিতা ও ছড়া</a>
            </li>
            <li class="nav-item mobile-menu-item px-3">
                <a class="nav-link text-white-50 py-2" href="categories.html">শিশুতোষ গল্প</a>
            </li>

            <li class="nav-item mt-4 px-3 mb-1">
                <h6 class="text-warning fw-bold small text-uppercase">অন্যান্য পেজ</h6>
            </li>
            <li class="nav-item px-3"><a class="nav-link text-white-50 py-2" href="authors.html"><i
                        class="fas fa-pen-nib me-2 text-muted"></i> লেখকবৃন্দ</a></li>
            <li class="nav-item px-3"><a class="nav-link text-white-50 py-2" href="publishers.html"><i
                        class="fas fa-building me-2 text-muted"></i> প্রকাশনী</a></li>
            <li class="nav-item px-3"><a class="nav-link text-white-50 py-2" href="events.html"><i
                        class="fas fa-calendar-alt me-2 text-muted"></i> ইভেন্ট</a></li>
            <li class="nav-item px-3"><a class="nav-link text-white-50 py-2" href="contact.html"><i
                        class="fas fa-envelope me-2 text-muted"></i> যোগাযোগ</a></li>
        </ul>
    </div>
</div>

<!-- Mobile Cart Offcanvas (Right Side) - Updated with Shipping -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvas" aria-labelledby="cartOffcanvasLabel">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title fw-bold" id="cartOffcanvasLabel"><i
                class="fas fa-shopping-cart text-warning me-2"></i> আপনার কার্ট (২টি)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column">
        <!-- Cart Item 1 -->
        <div class="d-flex align-items-center mb-3 border-bottom pb-3">
            <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?ixlib=rb-1.2.1&auto=format&fit=crop&w=50&q=60"
                alt="Book" class="me-3 rounded shadow-sm" style="width: 50px; height: 70px; object-fit: cover;">
            <div class="flex-grow-1">
                <h6 class="mb-1 text-truncate fw-bold" style="max-width: 180px; font-size: 1rem;">জোছনা ও জননীর গল্প
                </h6>
                <small class="text-muted d-block">১ x ৳ ৪৫০</small>
            </div>
            <button class="btn btn-sm text-danger shadow-none"><i class="fas fa-trash-alt"></i></button>
        </div>
        <!-- Cart Item 2 -->
        <div class="d-flex align-items-center mb-3 border-bottom pb-3">
            <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?ixlib=rb-1.2.1&auto=format&fit=crop&w=50&q=60"
                alt="Book" class="me-3 rounded shadow-sm" style="width: 50px; height: 70px; object-fit: cover;">
            <div class="flex-grow-1">
                <h6 class="mb-1 text-truncate fw-bold" style="max-width: 180px; font-size: 1rem;">কালো মেঘের ভেলা</h6>
                <small class="text-muted d-block">১ x ৳ ৩২০</small>
            </div>
            <button class="btn btn-sm text-danger shadow-none"><i class="fas fa-trash-alt"></i></button>
        </div>

        <!-- Totals, Shipping & Actions at bottom -->
        <div class="mt-auto pt-2">

            <!-- Free Shipping Progress -->
            <div class="bg-light p-3 rounded mb-3 border">
                <p class="small text-muted text-center mb-2">আর মাত্র <strong class="text-success">৳ ২৩০</strong>
                    টাকার
                    বাজার করলেই <strong>ফ্রি শিপিং!</strong></p>
                <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

            <div class="d-flex justify-content-between text-muted mb-2 small">
                <span>সাবটোটাল:</span>
                <span>৳ ৭৭০</span>
            </div>
            <div class="d-flex justify-content-between text-muted mb-3 border-bottom pb-2 small">
                <span>শিপিং চার্জ (ঢাকা):</span>
                <span>৳ ৫০</span>
            </div>
            <div class="d-flex justify-content-between fw-bold mb-4 fs-5 text-dark">
                <span>মোট বিল:</span>
                <span class="text-success">৳ ৮২০</span>
            </div>
            <div class="d-grid gap-2">
                <a href="cart.html" class="btn btn-outline-dark fw-bold">কার্ট পেজ দেখুন</a>
                <a href="checkout.html" class="btn btn-warning fw-bold text-dark">চেকআউট করুন</a>
            </div>
        </div>
    </div>
</div>

<!-- Authentication -->
<form class="d-none form" method="POST" action="{{ route('logout') }}">
    @csrf
</form>

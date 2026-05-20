@extends('frontend.layouts.app')
@section('content')
    <div class="container my-5">
        <div class="row">
            <!-- Left Sidebar -->
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="profile-sidebar">
                    <div class="profile-header-bg"></div>
                    <div class="profile-user-info">
                        <div class="profile-avatar-wrapper">
                            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                                alt="User Avatar" class="profile-avatar">
                            <div class="edit-avatar-btn" title="ছবি পরিবর্তন করুন">
                                <i class="fas fa-camera"></i>
                            </div>
                        </div>
                        <h4 class="fw-bold mb-1">আহমেদ ফয়সাল</h4>
                        <p class="text-muted small mb-0"><i class="fas fa-envelope text-warning me-1"></i>
                            faisal.ahmed@example.com</p>
                        <p class="text-muted small mt-1">সদস্য হয়েছেন: জানুয়ারি ২০২৬</p>
                    </div>

                    <!-- Navigation Pills -->
                    <div class="nav flex-column nav-pills profile-nav" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-dashboard-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-dashboard" type="button" role="tab">
                            <i class="fas fa-th-large"></i> ড্যাশবোর্ড
                        </button>
                        <button class="nav-link" id="v-pills-orders-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-orders" type="button" role="tab">
                            <i class="fas fa-box-open"></i> আমার অর্ডার
                        </button>
                        <button class="nav-link" id="v-pills-wishlist-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-wishlist" type="button" role="tab">
                            <i class="fas fa-heart"></i> উইশলিস্ট <span class="badge bg-warning text-dark ms-auto">৫</span>
                        </button>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-settings" type="button" role="tab">
                            <i class="fas fa-user-cog"></i> প্রোফাইল সেটিংস
                        </button>
                        <div class="border-top my-2"></div>
                        <a href="#" class="nav-link logout-btn text-decoration-none">
                            <i class="fas fa-sign-out-alt"></i> লগআউট
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Content Area -->
            <div class="col-lg-9">
                <div class="profile-content tab-content" id="v-pills-tabContent">

                    <!-- Tab 1: Dashboard Overview -->
                    <div class="tab-pane fade show active" id="v-pills-dashboard" role="tabpanel">
                        <h3 class="content-title"><i class="fas fa-hand-sparkles text-warning me-2"></i> স্বাগতম, আহমেদ
                            ফয়সাল!
                        </h3>
                        <p class="text-muted mb-4">আপনার ড্যাশবোর্ড থেকে আপনি সাম্প্রতিক অর্ডার দেখতে, ঠিকানা পরিবর্তন করতে
                            এবং একাউন্টের বিস্তারিত তথ্য আপডেট করতে পারবেন।</p>

                        <div class="row g-4 mb-5">
                            <div class="col-md-4">
                                <div class="stat-card">
                                    <div class="stat-icon"><i class="fas fa-shopping-bag"></i></div>
                                    <div class="stat-info">
                                        <h3>০৩</h3>
                                        <p>মোট অর্ডার</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="stat-card">
                                    <div class="stat-icon bg-danger bg-opacity-10 text-danger"><i class="fas fa-heart"></i>
                                    </div>
                                    <div class="stat-info">
                                        <h3 class="text-danger">০৫</h3>
                                        <p>উইশলিস্টে বই</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="stat-card">
                                    <div class="stat-icon bg-success bg-opacity-10 text-success"><i class="fas fa-star"></i>
                                    </div>
                                    <div class="stat-info">
                                        <h3 class="text-success">১২</h3>
                                        <p>রিভিউ দেওয়া হয়েছে</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5 class="fw-bold mb-3">সাম্প্রতিক কার্যকলাপ</h5>
                        <div class="list-group list-group-flush border rounded-3">
                            <div class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <div>
                                    <h6 class="mb-1 fw-bold">অর্ডার #BM2026-1045 সম্পন্ন হয়েছে</h6>
                                    <small class="text-muted">আপনি 'মহাকাশের রহস্য' বইটি সফলভাবে রিসিভ করেছেন।</small>
                                </div>
                                <small class="text-muted">২ দিন আগে</small>
                            </div>
                            <div class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <div>
                                    <h6 class="mb-1 fw-bold">নতুন রিভিউ যোগ করেছেন</h6>
                                    <small class="text-muted">'দেয়াল' বইটিতে আপনি ৫ স্টার রেটিং দিয়েছেন।</small>
                                </div>
                                <small class="text-muted">৫ দিন আগে</small>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 2: Orders History -->
                    <div class="tab-pane fade" id="v-pills-orders" role="tabpanel">
                        <h3 class="content-title"><i class="fas fa-box-open text-warning me-2"></i> আমার অর্ডারসমূহ</h3>

                        <div class="table-responsive">
                            <table class="table table-custom table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>অর্ডার আইডি</th>
                                        <th>তারিখ</th>
                                        <th>মোট মূল্য</th>
                                        <th>স্ট্যাটাস</th>
                                        <th class="text-end">অ্যাকশন</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-bold">#BM2026-1045</td>
                                        <td>১২ ফেব্রুয়ারি, ২০২৬</td>
                                        <td class="fw-bold">৳ ৫৫০</td>
                                        <td><span class="badge-status status-delivered">ডেলিভারড</span></td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-dark rounded-pill">বিস্তারিত</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">#BM2026-1088</td>
                                        <td>১৪ ফেব্রুয়ারি, ২০২৬</td>
                                        <td class="fw-bold">৳ ৩২০</td>
                                        <td><span class="badge-status status-processing">প্রসেসিং</span></td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-dark rounded-pill">বিস্তারিত</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">#BM2026-0922</td>
                                        <td>০৫ ফেব্রুয়ারি, ২০২৬</td>
                                        <td class="fw-bold">৳ ৪২০</td>
                                        <td><span class="badge-status status-cancelled">বাতিলকৃত</span></td>
                                        <td class="text-end">
                                            <button class="btn btn-sm btn-outline-dark rounded-pill">বিস্তারিত</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Tab 3: Wishlist -->
                    <div class="tab-pane fade" id="v-pills-wishlist" role="tabpanel">
                        <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
                            <h3 class="mb-0 fw-bold"><i class="fas fa-heart text-danger me-2"></i> আমার উইশলিস্ট</h3>
                            <button class="btn btn-sm btn-outline-danger rounded-pill"><i
                                    class="fas fa-trash-alt me-1"></i> সব
                                মুছুন</button>
                        </div>

                        <div class="row g-4">
                            <!-- Wishlist Book 1 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="card book-card">
                                    <div class="position-relative">
                                        <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                                            class="card-img-top book-img" alt="Book Cover">
                                        <button
                                            class="btn btn-sm btn-light text-danger position-absolute top-0 end-0 m-2 rounded-circle"
                                            title="রিমুভ করুন" style="width:30px; height:30px; padding:0;"><i
                                                class="fas fa-times"></i></button>
                                    </div>
                                    <div class="card-body p-3 d-flex flex-column">
                                        <h6 class="fw-bold mb-1">জোছনা ও জননীর গল্প</h6>
                                        <p class="small text-muted mb-2">হুমায়ূন আহমেদ</p>
                                        <div class="mt-auto d-flex justify-content-between align-items-center">
                                            <span class="fw-bold text-success">৳ ৪৫০</span>
                                            <button class="btn btn-sm btn-warning text-dark fw-bold"><i
                                                    class="fas fa-cart-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Wishlist Book 2 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="card book-card">
                                    <div class="position-relative">
                                        <img src="https://images.unsplash.com/photo-1532012197267-da84d127e765?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                                            class="card-img-top book-img" alt="Book Cover">
                                        <button
                                            class="btn btn-sm btn-light text-danger position-absolute top-0 end-0 m-2 rounded-circle"
                                            title="রিমুভ করুন" style="width:30px; height:30px; padding:0;"><i
                                                class="fas fa-times"></i></button>
                                    </div>
                                    <div class="card-body p-3 d-flex flex-column">
                                        <h6 class="fw-bold mb-1">মধ্যাহ্ন</h6>
                                        <p class="small text-muted mb-2">হুমায়ূন আহমেদ</p>
                                        <div class="mt-auto d-flex justify-content-between align-items-center">
                                            <span class="fw-bold text-success">৳ ৪২০</span>
                                            <button class="btn btn-sm btn-warning text-dark fw-bold"><i
                                                    class="fas fa-cart-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Wishlist Book 3 -->
                            <div class="col-md-4 col-sm-6">
                                <div class="card book-card">
                                    <div class="position-relative">
                                        <img src="https://images.unsplash.com/photo-1462331940025-496dfbfc7564?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                                            class="card-img-top book-img" alt="Book Cover">
                                        <button
                                            class="btn btn-sm btn-light text-danger position-absolute top-0 end-0 m-2 rounded-circle"
                                            title="রিমুভ করুন" style="width:30px; height:30px; padding:0;"><i
                                                class="fas fa-times"></i></button>
                                    </div>
                                    <div class="card-body p-3 d-flex flex-column">
                                        <h6 class="fw-bold mb-1">ক্রেনিয়াল</h6>
                                        <p class="small text-muted mb-2">ড. মুহম্মদ জাফর ইকবাল</p>
                                        <div class="mt-auto d-flex justify-content-between align-items-center">
                                            <span class="fw-bold text-success">৳ ৩০০</span>
                                            <button class="btn btn-sm btn-warning text-dark fw-bold"><i
                                                    class="fas fa-cart-plus"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 5: Profile Settings -->
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel">
                        <h3 class="content-title"><i class="fas fa-user-cog text-warning me-2"></i> প্রোফাইল সেটিংস</h3>

                        <form>
                            <h5 class="fw-bold mb-3 mt-2">ব্যক্তিগত তথ্য</h5>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-muted">আপনার নাম</label>
                                    <input type="text" class="form-control" value="আহমেদ ফয়সাল">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-muted">ইমেইল এড্রেস</label>
                                    <input type="email" class="form-control" value="faisal.ahmed@example.com" readonly
                                        style="background-color: #f8f9fa;">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-muted">মোবাইল নম্বর</label>
                                    <input type="text" class="form-control" value="+880 1712 345678">
                                </div>
                            </div>

                            <h5 class="fw-bold mb-3 pt-3 border-top">ডেলিভারি ঠিকানা</h5>
                            <div class="row g-3 mb-4">
                                <div class="col-12">
                                    <label class="form-label fw-bold small text-muted">বিস্তারিত ঠিকানা (বাড়ি,
                                        রাস্তা)</label>
                                    <textarea class="form-control" rows="2">বাড়ি নং ১০, রোড নং ৫, ধানমন্ডি</textarea>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-muted">শহর / জেলা</label>
                                    <select class="form-select">
                                        <option selected>ঢাকা</option>
                                        <option>চট্টগ্রাম</option>
                                        <option>সিলেট</option>
                                        <option>রাজশাহী</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold small text-muted">পোস্ট কোড</label>
                                    <input type="text" class="form-control" value="1209">
                                </div>
                            </div>

                            <h5 class="fw-bold mb-3 pt-3 border-top">পাসওয়ার্ড পরিবর্তন</h5>
                            <div class="row g-3 mb-4">
                                <div class="col-md-4">
                                    <label class="form-label fw-bold small text-muted">বর্তমান পাসওয়ার্ড</label>
                                    <input type="password" class="form-control" placeholder="বর্তমান পাসওয়ার্ড">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold small text-muted">নতুন পাসওয়ার্ড</label>
                                    <input type="password" class="form-control" placeholder="নতুন পাসওয়ার্ড">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold small text-muted">নতুন পাসওয়ার্ড (পুনরায়)</label>
                                    <input type="password" class="form-control" placeholder="পাসওয়ার্ডটি আবার দিন">
                                </div>
                            </div>

                            <div class="d-flex justify-content-end border-top pt-4">
                                <button type="button" class="btn btn-light me-2 fw-bold">বাতিল</button>
                                <button type="submit" class="btn btn-warning fw-bold px-5">সেভ করুন</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

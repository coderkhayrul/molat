@extends('backend.layouts.app')
@section('content')
    @push('content-title')
        <h2 class="page-title">Dashboard Overview </h2>
    @endpush
    <!-- Stat Cards Row -->
    <div class="row g-4 mb-4">
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="stat-card">
                <div class="stat-info">
                    <h3>৳ ১,২৫,৪০০</h3>
                    <p>মোট বিক্রি (এই মাসে)</p>
                </div>
                <div class="stat-icon icon-blue"><i class="fas fa-wallet"></i></div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="stat-card">
                <div class="stat-info">
                    <h3>৩,৪৫০</h3>
                    <p>মোট বই যুক্ত আছে</p>
                </div>
                <div class="stat-icon icon-green"><i class="fas fa-book"></i></div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="stat-card">
                <div class="stat-info">
                    <h3>১২৮</h3>
                    <p>নতুন অর্ডার (আজ)</p>
                </div>
                <div class="stat-icon icon-orange"><i class="fas fa-shopping-bag"></i></div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="stat-card">
                <div class="stat-info">
                    <h3>২,১৪০</h3>
                    <p>নিবন্ধিত গ্রাহক</p>
                </div>
                <div class="stat-icon icon-red"><i class="fas fa-users"></i></div>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Sales Chart Section -->
        <div class="col-lg-8">
            <div class="panel-card h-100">
                <div class="panel-header">
                    <h5 class="panel-title">মাসিক বিক্রির পরিসংখ্যান</h5>
                    <button class="btn btn-sm btn-outline-secondary"><i class="fas fa-download me-1"></i>
                        রিপোর্ট</button>
                </div>
                <div class="panel-body">
                    <!-- Visual Bar Chart Placeholder -->
                    <div class="chart-placeholder">
                        <div class="bar" style="height: 30%;" title="জানুয়ারি"><span>জানু</span></div>
                        <div class="bar" style="height: 50%;" title="ফেব্রুয়ারি"><span>ফেব</span></div>
                        <div class="bar" style="height: 80%;" title="মার্চ"><span>মার্চ</span></div>
                        <div class="bar" style="height: 40%;" title="এপ্রিল"><span>এপ্রি</span></div>
                        <div class="bar" style="height: 60%;" title="মে"><span>মে</span></div>
                        <div class="bar" style="height: 70%;" title="জুন"><span>জুন</span></div>
                        <div class="bar" style="height: 90%;" title="জুলাই"><span>জুলাই</span></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions Section -->
        <div class="col-lg-4">
            <div class="panel-card h-100">
                <div class="panel-header">
                    <h5 class="panel-title">কুইক অ্যাকশন</h5>
                </div>
                <div class="panel-body d-flex flex-column gap-3">
                    <button class="btn btn-primary w-100 py-3 text-start fw-bold"
                        style="background-color: var(--admin-primary); border: none;">
                        <i class="fas fa-plus-circle me-2"></i> নতুন বই যোগ করুন
                    </button>
                    <button class="btn btn-warning w-100 py-3 text-start fw-bold text-dark">
                        <i class="fas fa-user-plus me-2"></i> নতুন লেখক যোগ করুন
                    </button>
                    <button class="btn btn-success w-100 py-3 text-start fw-bold">
                        <i class="fas fa-bullhorn me-2"></i> নতুন ইভেন্ট তৈরি করুন
                    </button>
                    <button class="btn btn-info w-100 py-3 text-start fw-bold text-white">
                        <i class="fas fa-newspaper me-2"></i> সংবাদ বা ব্লগ লিখুন
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Orders Table -->
    <div class="row mt-2">
        <div class="col-12">
            <div class="panel-card">
                <div class="panel-header">
                    <h5 class="panel-title">সাম্প্রতিক অর্ডারসমূহ</h5>
                    <a href="#" class="btn btn-sm btn-link text-decoration-none">সব অর্ডার দেখুন <i
                            class="fas fa-arrow-right"></i></a>
                </div>
                <div class="panel-body p-0">
                    <div class="table-responsive">
                        <table class="table table-custom mb-0">
                            <thead>
                                <tr>
                                    <th>অর্ডার আইডি</th>
                                    <th>গ্রাহকের নাম</th>
                                    <th>তারিখ</th>
                                    <th>পেমেন্ট মেথড</th>
                                    <th>মোট মূল্য</th>
                                    <th>স্ট্যাটাস</th>
                                    <th>অ্যাকশন</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold text-primary">#ORD-9081</td>
                                    <td>আহমেদ ফয়সাল</td>
                                    <td>১০ মার্চ, ২০২৬</td>
                                    <td>বিকাশ</td>
                                    <td class="fw-bold">৳ ১,২৪০</td>
                                    <td><span class="badge-status status-pending">প্রক্রিয়াধীন</span></td>
                                    <td>
                                        <button class="action-btn btn-view" title="বিস্তারিত"><i
                                                class="fas fa-eye"></i></button>
                                        <button class="action-btn btn-edit" title="এডিট"><i
                                                class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-primary">#ORD-9080</td>
                                    <td>সাদিয়া ইসলাম</td>
                                    <td>০৯ মার্চ, ২০২৬</td>
                                    <td>ক্যাশ অন ডেলিভারি</td>
                                    <td class="fw-bold">৳ ৪৫০</td>
                                    <td><span class="badge-status status-completed">সম্পন্ন</span></td>
                                    <td>
                                        <button class="action-btn btn-view"><i class="fas fa-eye"></i></button>
                                        <button class="action-btn btn-edit"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-primary">#ORD-9079</td>
                                    <td>করিম উদ্দিন</td>
                                    <td>০৯ মার্চ, ২০২৬</td>
                                    <td>কার্ড (SSL)</td>
                                    <td class="fw-bold">৳ ২,৩০০</td>
                                    <td><span class="badge-status status-cancelled">বাতিলকৃত</span></td>
                                    <td>
                                        <button class="action-btn btn-view"><i class="fas fa-eye"></i></button>
                                        <button class="action-btn btn-delete"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold text-primary">#ORD-9078</td>
                                    <td>রাকিব হাসান</td>
                                    <td>০৮ মার্চ, ২০২৬</td>
                                    <td>বিকাশ</td>
                                    <td class="fw-bold">৳ ৮৯০</td>
                                    <td><span class="badge-status status-completed">সম্পন্ন</span></td>
                                    <td>
                                        <button class="action-btn btn-view"><i class="fas fa-eye"></i></button>
                                        <button class="action-btn btn-edit"><i class="fas fa-edit"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

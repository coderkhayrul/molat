@extends('frontend.layouts.app')
@section('content')
    <!-- Main Content: Success Message -->
    <main>
        <div class="container">
            <div class="success-card">

                <div class="success-icon-wrapper">
                    <i class="fas fa-check success-icon"></i>
                </div>

                <h1 class="fw-bold mb-2 text-dark">ধন্যবাদ!</h1>
                <h4 class="text-muted mb-4">আপনার অর্ডারটি সফলভাবে সম্পন্ন হয়েছে।</h4>
                <p class="text-secondary mb-4">আপনার অর্ডারের বিস্তারিত তথ্য এবং ট্র্যাকিং লিংক আপনার
                    <strong>faisal.ahmed@example.com</strong> ইমেইলে পাঠানো হয়েছে।
                </p>

                <div class="order-info-box">
                    <div class="order-detail-row">
                        <span class="detail-label">অর্ডার আইডি:</span>
                        <span class="detail-value text-primary">#BM2026-1089</span>
                    </div>
                    <div class="order-detail-row">
                        <span class="detail-label">অর্ডারের তারিখ:</span>
                        <span class="detail-value">১০ মার্চ, ২০২৬</span>
                    </div>
                    <div class="order-detail-row">
                        <span class="detail-label">পেমেন্ট মেথড:</span>
                        <span class="detail-value">ক্যাশ অন ডেলিভারি (COD)</span>
                    </div>
                    <div class="order-detail-row">
                        <span class="detail-label">মোট পরিশোধিত বিল:</span>
                        <span class="detail-value text-success fs-5">৳ ১২৪০</span>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 mt-4">
                    <a href="profile.html" class="btn btn-custom btn-primary-action">
                        <i class="fas fa-box-open me-2"></i> অর্ডার ট্র‍্যাক করুন
                    </a>
                    <a href="books.html" class="btn btn-custom btn-secondary-action">
                        <i class="fas fa-shopping-bag me-2"></i> আরও বই কিনুন
                    </a>
                </div>

            </div>
        </div>
    </main>
@endsection

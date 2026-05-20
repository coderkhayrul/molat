@extends('frontend.layouts.app')
@section('content')
    <!-- Page Header / Breadcrumb -->
    <div class="contact-page-header">
        <div class="container">
            <h2 class="fw-bold mb-1">আমাদের সাথে যোগাযোগ করুন</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 small">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-muted">হোম</a></li>
                    <li class="breadcrumb-item active fw-bold text-dark" aria-current="page">যোগাযোগ</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container pb-5 mb-5">

        <!-- Contact Info Cards -->
        <div class="row g-4 mb-5">
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-card">
                    <i class="fas fa-map-marked-alt contact-info-icon"></i>
                    <h5 class="fw-bold">মেলার ঠিকানা</h5>
                    <p class="text-muted mb-0">বাংলা একাডেমি প্রাঙ্গণ ও<br>সোহরাওয়ার্দী উদ্যান, ঢাকা-১০০০</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="contact-info-card">
                    <i class="fas fa-clock contact-info-icon"></i>
                    <h5 class="fw-bold">মেলার সময়সূচি</h5>
                    <p class="text-muted mb-0">রবিবার - বৃহস্পতিবার: বিকাল ৩টা - রাত ৯টা<br>শুক্রবার ও শনিবার: সকাল ১১টা -
                        রাত ৯টা</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="contact-info-card">
                    <i class="fas fa-headset contact-info-icon"></i>
                    <h5 class="fw-bold">হেল্পলাইন ও ইমেইল</h5>
                    <p class="text-muted mb-0">ইমেইল: info@bookfair.com<br>ফোন: +৮৮০ ১২৩৪ ৫৬৭৮৯০</p>
                </div>
            </div>
        </div>

        <div class="row g-5">

            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="contact-form-wrapper">
                    <h3 class="fw-bold mb-4 border-start border-warning border-4 ps-3 text-dark">বার্তা পাঠান</h3>
                    <form action="#" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-bold small text-muted">আপনার নাম <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" placeholder="আপনার পুরো নাম লিখুন"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-bold small text-muted">ইমেইল এড্রেস <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="email" placeholder="example@email.com"
                                    required>
                            </div>
                            <div class="col-12">
                                <label for="subject" class="form-label fw-bold small text-muted">বিষয়</label>
                                <input type="text" class="form-control" id="subject" placeholder="কী বিষয়ে জানতে চান?">
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label fw-bold small text-muted">বিস্তারিত বার্তা <span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="message" rows="6" placeholder="আপনার প্রশ্ন বা মতামত এখানে লিখুন..."
                                    required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-warning px-5 py-2 fw-bold w-100 w-md-auto"><i
                                        class="fas fa-paper-plane me-2"></i> মেসেজ সেন্ড করুন</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Social Links & FAQ -->
            <div class="col-lg-5">

                <!-- Social Media -->
                <div class="bg-white p-4 rounded-3 shadow-sm border mb-4">
                    <h5 class="fw-bold mb-3 border-start border-warning border-4 ps-2 text-dark">সোশ্যাল মিডিয়ায় আমরা</h5>
                    <p class="text-muted small mb-3">মেলার সর্বশেষ খবর ও আপডেট পেতে আমাদের সোশ্যাল মিডিয়া পেজগুলোতে যুক্ত
                        থাকুন।</p>
                    <div class="d-flex flex-wrap">
                        <a href="#" class="contact-social-circle" title="Facebook"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="#" class="contact-social-circle" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="contact-social-circle" title="Instagram"><i
                                class="fab fa-instagram"></i></a>
                        <a href="#" class="contact-social-circle" title="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="contact-social-circle" title="LinkedIn"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- FAQ Accordion -->
                <div class="bg-white p-4 rounded-3 shadow-sm border">
                    <h5 class="fw-bold mb-4 border-start border-warning border-4 ps-2 text-dark">সাধারণ জিজ্ঞাসা (FAQ)</h5>
                    <div class="accordion contact-faq-accordion" id="faqAccordion">
                        <div class="accordion-item border-top-0 border-end-0 border-start-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button px-0 bg-transparent" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq1">
                                    মেলায় প্রবেশের জন্য কি কোনো ফি দিতে হয়?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body px-0 pt-2 pb-3 text-muted small">
                                    না, অমর একুশে বইমেলায় প্রবেশ একদম বিনামূল্যে। যে কেউ কোনো টিকিট ছাড়াই মেলায় প্রবেশ করতে
                                    পারবেন।
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-end-0 border-start-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed px-0 bg-transparent" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq2">
                                    মেলায় কি গাড়ি পার্কিংয়ের ব্যবস্থা আছে?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body px-0 pt-2 pb-3 text-muted small">
                                    হ্যাঁ, দর্শনার্থীদের সুবিধার জন্য টিএসসি এবং সোহরাওয়ার্দী উদ্যানের নির্দিষ্ট স্থানে গাড়ি
                                    পার্কিংয়ের ব্যবস্থা রয়েছে।
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item border-bottom-0 border-end-0 border-start-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed px-0 bg-transparent" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#faq3">
                                    অনলাইনে বই কেনার কোনো সুযোগ আছে কি?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body px-0 pt-2 pb-3 text-muted small">
                                    হ্যাঁ, আপনি আমাদের ওয়েবসাইটের "বইসমূহ" পেজ থেকে সরাসরি আপনার পছন্দের বই কার্টে যুক্ত করে
                                    অনলাইনে অর্ডার করতে পারবেন।
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Google Map Section -->
        <div class="row mt-5 pt-3">
            <div class="col-12">
                <h3 class="fw-bold mb-4 border-start border-warning border-4 ps-3 text-dark">ম্যাপে মেলার অবস্থান</h3>
                <div class="contact-map-container">
                    <!-- Embed Google Map of Bangla Academy / Suhrawardy Udyan -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.447613391779!2d90.34238047589747!3d23.767069888135087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c083149585f5%3A0xeb28ac94751626ca!2sBangladesh%20University!5e0!3m2!1sen!2sbd!4v1778350828723!5m2!1sen!2sbd"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

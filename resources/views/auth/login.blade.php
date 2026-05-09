{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('frontend.layouts.app')
@section('content')
    <div class="user-login-page">
        <div class="container">
            <div class="user-login-wrapper">
                <div class="row g-0 align-items-center">

                    <!-- Left Side Image (Hidden on Mobile) -->
                    <div class="col-lg-5 d-none d-lg-block user-login-img-col h-100">
                        <div class="user-login-overlay">
                            <h2>বইয়ের বিশাল জগতে আপনাকে স্বাগতম</h2>
                            <p>আপনার প্রিয় লেখক, সেরা প্রকাশনী এবং হাজারো বইয়ের সমাহার এখন এক ঠিকানায়। লগইন করে আপনার
                                পছন্দের বইগুলো কার্টে যুক্ত করুন এবং মেলার সেরা ডিলগুলো উপভোগ করুন。</p>

                            <div class="mt-4 pt-4 border-top border-secondary border-opacity-50">
                                <p class="mb-0 small"><i class="fas fa-check-circle text-warning me-2"></i> দ্রুত চেকআউট
                                    সুবিধা</p>
                                <p class="mb-0 small"><i class="fas fa-check-circle text-warning me-2"></i> অর্ডার ট্র্যাকিং
                                </p>
                                <p class="mb-0 small"><i class="fas fa-check-circle text-warning me-2"></i> উইশলিস্ট
                                    ম্যানেজমেন্ট</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side Form -->
                    <div class="col-lg-7">
                        <div class="user-login-form-col">

                            {{-- <a href="home.html" class="user-back-link"><i class="fas fa-arrow-left me-2"></i> হোমে ফিরে
                                যান</a> --}}

                            <div class="mb-4">
                                <a href="home.html" class="user-login-brand">বই<span>মেলা</span></a>
                                <h3 class="fw-bold text-dark">লগইন করুন</h3>
                                <p class="text-muted">আপনার একাউন্টে প্রবেশ করতে ইমেইল এবং পাসওয়ার্ড দিন।</p>
                            </div>

                            <form action="{{ route('login') }}" method="POST" class="user-login-form">
                                @csrf
                                <!-- Email -->
                                <div class="mb-4">
                                    <label for="loginEmail" class="form-label">ইমেইল এড্রেস</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                        <input name="email" type="email" class="form-control" id="loginEmail"
                                            placeholder="your@email.com" required>
                                    </div>

                                    @error('email')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Password -->
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <label for="loginPassword" class="form-label mb-0">পাসওয়ার্ড</label>
                                        <a href="#" class="text-decoration-none small fw-bold"
                                            style="color: var(--accent-color);">পাসওয়ার্ড ভুলে গেছেন?</a>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        <input name="password" type="password" class="form-control border-end-0"
                                            id="loginPassword" placeholder="আপনার পাসওয়ার্ড লিখুন" required>
                                        <span class="input-group-text pwd-toggle-icon" id="togglePassword">
                                            <i class="far fa-eye-slash text-muted"></i>
                                        </span>
                                    </div>
                                </div>

                                <!-- Remember Me -->
                                <div class="mb-4 form-check">
                                    <input name="remember" type="checkbox" class="form-check-input border-secondary"
                                        id="rememberMe">
                                    <label class="form-check-label text-muted small" for="rememberMe">আমাকে মনে
                                        রাখুন</label>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="user-btn-submit">
                                    প্রবেশ করুন <i class="fas fa-sign-in-alt ms-2"></i>
                                </button>
                            </form>

                            <div class="user-login-divider">অথবা সোশ্যাল মিডিয়া দিয়ে লগইন করুন</div>

                            <!-- Social Logins -->
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <a href="#" class="user-btn-social user-btn-google">
                                        <img src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png" alt="Google"
                                            style="width: 20px;"> Google
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#" class="user-btn-social user-btn-fb">
                                        <i class="fab fa-facebook-f fs-5"></i> Facebook
                                    </a>
                                </div>
                            </div>

                            <!-- Register Link -->
                            <div class="text-center mt-4">
                                <p class="text-muted mb-0">একাউন্ট নেই? <a href="register.html"
                                        class="fw-bold text-decoration-none" style="color: var(--primary-color);">নতুন
                                        একাউন্ট তৈরি করুন</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <!-- Password Visibility Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('loginPassword');
            const toggleIcon = togglePassword.querySelector('i');

            togglePassword.addEventListener('click', function() {
                // Toggle the type attribute
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                // Toggle the eye / eye-slash icon
                if (type === 'password') {
                    toggleIcon.classList.remove('fa-eye');
                    toggleIcon.classList.add('fa-eye-slash');
                    toggleIcon.classList.add('text-muted');
                    toggleIcon.classList.remove('text-primary');
                } else {
                    toggleIcon.classList.remove('fa-eye-slash');
                    toggleIcon.classList.add('fa-eye');
                    toggleIcon.classList.remove('text-muted');
                    toggleIcon.classList.add('text-primary');
                }
            });
        });
    </script>
@endpush

@push('styles')
    <style>

    </style>
@endpush

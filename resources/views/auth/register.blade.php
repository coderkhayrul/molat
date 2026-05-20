{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
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
                            <h2>বইয়ের বিশাল জগতে যুক্ত হোন</h2>
                            <p>পাঠকদের এই চমৎকার কমিউনিটিতে যোগ দিয়ে আপনার প্রিয় বইগুলোর তালিকা তৈরি করুন, লেখকদের সাথে
                                যুক্ত থাকুন এবং নতুন বইয়ের আপডেট পান।</p>
                        </div>
                    </div>

                    <!-- Right Side Form -->
                    <div class="col-lg-7">
                        <div class="user-login-form-col">
                            <div class="mb-4">
                                <a href="#" class="user-login-brand">Mo<span>lat</span></a>
                                <h3 class="fw-bold text-dark">নতুন একাউন্ট তৈরি করুন</h3>
                                <p class="text-muted">নিচের তথ্যগুলো দিয়ে আপনার প্রোফাইল সেটআপ করুন।</p>
                            </div>

                            <form action="{{ route('register') }}" method="POST" class="user-login-form">
                                @csrf
                                <!-- Name Input -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">আপনার পুরো নাম</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white"><i class="fas fa-user"></i></span>
                                        <input type="text" class="form-control" id="name"
                                            placeholder="আপনার নাম লিখুন" required>
                                    </div>
                                </div>

                                <!-- Email Input -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">ইমেইল এড্রেস</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white"><i class="fas fa-envelope"></i></span>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="example@email.com" required>
                                    </div>
                                </div>

                                <!-- Password Input -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">পাসওয়ার্ড</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white"><i class="fas fa-lock"></i></span>
                                        <input type="password" class="form-control border-end-0" id="password"
                                            placeholder="একটি শক্তিশালী পাসওয়ার্ড দিন" required>
                                        <span class="input-group-text bg-white cursor-pointer" id="togglePassword"
                                            style="cursor: pointer;">
                                            <i class="far fa-eye-slash"></i>
                                        </span>
                                    </div>
                                </div>

                                <!-- Confirm Password Input -->
                                <div class="mb-4">
                                    <label for="confirmPassword" class="form-label">পাসওয়ার্ড কনফার্ম করুন</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-white"><i class="fas fa-lock"></i></span>
                                        <input type="password" class="form-control border-end-0" id="confirmPassword"
                                            placeholder="পাসওয়ার্ডটি আবার দিন" required>
                                        <span class="input-group-text bg-white cursor-pointer" id="toggleConfirmPassword"
                                            style="cursor: pointer;">
                                            <i class="far fa-eye-slash"></i>
                                        </span>
                                    </div>
                                </div>

                                <!-- Terms & Conditions -->
                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="terms" required>
                                    <label class="form-check-label text-muted small" for="terms">আমি <a href="#"
                                            class="text-primary text-decoration-none fw-bold">শর্তাবলী</a> এবং <a
                                            href="#" class="text-primary text-decoration-none fw-bold">প্রাইভেসি
                                            পলিসির</a> সাথে একমত।</label>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" class="user-btn-submit">
                                    একাউন্ট তৈরি করুন <i class="fas fa-user-plus ms-2"></i>
                                </button>
                            </form>

                            <div class="user-login-divider">অথবা সাইন আপ করুন</div>

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
                                <p class="text-muted mb-0">আগে থেকেই একাউন্ট আছে? <a href="#"
                                        class="fw-bold text-decoration-none" style="color: var(--primary-color);">লগইন
                                        করুন</a></p>
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
        // Toggle for Main Password
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        const toggleIcon = document.querySelector('#togglePassword i');

        togglePassword.addEventListener('click', function(e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            if (type === 'password') {
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        });

        // Toggle for Confirm Password
        const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
        const confirmPassword = document.querySelector('#confirmPassword');
        const toggleConfirmIcon = document.querySelector('#toggleConfirmPassword i');

        toggleConfirmPassword.addEventListener('click', function(e) {
            const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPassword.setAttribute('type', type);
            if (type === 'password') {
                toggleConfirmIcon.classList.remove('fa-eye');
                toggleConfirmIcon.classList.add('fa-eye-slash');
            } else {
                toggleConfirmIcon.classList.remove('fa-eye-slash');
                toggleConfirmIcon.classList.add('fa-eye');
            }
        });
    </script>
@endpush

@push('styles')
    <style>

    </style>
@endpush

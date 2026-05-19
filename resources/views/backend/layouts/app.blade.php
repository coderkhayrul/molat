<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Motal 2026</title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Hind Siliguri -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/styles.css') }}">
</head>

<body>

    @include('backend.includes.sidebar')

    <!-- Main Content Wrapper -->
    <div class="main-content" id="mainContent">

        <!-- Top Navbar -->
        @include('backend.includes.navigation')

        <!-- Content Area -->
        <div class="content-area">
            <h2 class="page-title">ড্যাশবোর্ড ওভারভিউ</h2>
            @yield('content')
        </div>

        <!-- Footer in Main Content -->
        <footer class="mt-auto py-3 text-center text-muted border-top bg-white">
            <small>© ২০২৬ বইমেলা প্রজেক্ট | অ্যাডমিন প্যানেল</small>
        </footer>

    </div>

    @include('backend.includes.footer')
</body>

</html>

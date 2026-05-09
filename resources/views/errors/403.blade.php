<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>৪০৩ অননুমোদিত প্রবেশ | বইমেলা ২০২৬</title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Hind Siliguri -->
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        :root {
            --primary-color: #2c3e50;
            --accent-color: #f39c12;
            --error-color: #e74c3c;
            --bg-light: #f4f6f9;
        }

        body {
            font-family: 'Hind Siliguri', sans-serif;
            background-color: var(--bg-light);
            color: var(--primary-color);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            overflow: hidden;
            /* Prevents scrollbars during animation */
        }

        /* =========================================
           403 Error Page Specific Styles
           (Prefixed to avoid conflicts)
           ========================================= */

        .error-403-wrapper {
            width: 100%;
            padding: 40px 15px;
            display: flex;
            justify-content: center;
        }

        .error-403-card {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            max-width: 650px;
            width: 100%;
            padding: 50px 40px;
            text-align: center;
            position: relative;
            border-top: 6px solid var(--error-color);
            animation: fadeInUp 0.8s ease-out forwards;
        }

        /* Animated Icon Section */
        .error-403-icon-container {
            position: relative;
            width: 150px;
            height: 150px;
            margin: 0 auto 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .error-403-circle-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgba(231, 76, 60, 0.1);
            border-radius: 50%;
            animation: pulseBg 2s infinite;
        }

        .error-403-icon {
            font-size: 5rem;
            color: var(--error-color);
            position: relative;
            z-index: 10;
            animation: floatIcon 3s ease-in-out infinite;
        }

        /* Typography */
        .error-403-code {
            font-size: 6rem;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 10px;
            color: var(--primary-color);
            text-shadow: 4px 4px 0px rgba(231, 76, 60, 0.15);
            letter-spacing: 5px;
        }

        .error-403-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 15px;
            color: var(--error-color);
        }

        .error-403-text {
            font-size: 1.1rem;
            color: #6c757d;
            margin-bottom: 40px;
            line-height: 1.6;
            padding: 0 10px;
        }

        /* Action Buttons */
        .error-403-actions {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn-error-primary {
            background-color: var(--accent-color);
            color: #fff;
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .btn-error-primary:hover {
            background-color: #d68910;
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(243, 156, 18, 0.4);
        }

        .btn-error-secondary {
            background-color: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            padding: 10px 30px;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .btn-error-secondary:hover {
            background-color: var(--primary-color);
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(44, 62, 80, 0.2);
        }

        /* Brand Logo */
        .error-403-brand {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
            opacity: 0.5;
            transition: 0.3s;
        }

        .error-403-brand:hover {
            opacity: 1;
        }

        .error-403-brand span {
            color: var(--accent-color);
        }

        /* =========================================
           Keyframe Animations
           ========================================= */

        /* Floating effect for the lock icon */
        @keyframes floatIcon {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        /* Pulsing background effect behind the icon */
        @keyframes pulseBg {
            0% {
                transform: scale(0.95);
                opacity: 0.8;
            }

            50% {
                transform: scale(1.1);
                opacity: 0.4;
            }

            100% {
                transform: scale(0.95);
                opacity: 0.8;
            }
        }

        /* Slide up and fade in for the whole card */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 575px) {
            .error-403-code {
                font-size: 4.5rem;
            }

            .error-403-title {
                font-size: 1.5rem;
            }

            .error-403-card {
                padding: 40px 20px;
            }

            .error-403-actions {
                flex-direction: column;
                width: 100%;
            }

            .error-403-actions .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="error-403-wrapper">
        <div class="error-403-card">

            <!-- Faded Brand Logo at top -->
            <a href="index.html" class="error-403-brand">বই<span>মেলা</span></a>

            <!-- Animated Lock Icon -->
            <div class="error-403-icon-container mt-4">
                <div class="error-403-circle-bg"></div>
                <i class="fas fa-lock error-403-icon"></i>
            </div>

            <!-- Error Code & Message -->
            <h1 class="error-403-code">৪০৩</h1>
            <h3 class="error-403-title">অননুমোদিত প্রবেশ!</h3>

            <p class="error-403-text">
                দুঃখিত! আপনি যে পেজটিতে প্রবেশ করার চেষ্টা করছেন, সেখানে আপনার প্রবেশের অনুমতি নেই। পেজটি হয়তো শুধুমাত্র
                অ্যাডমিনদের জন্য অথবা আপনার সেশন শেষ হয়ে গেছে।
            </p>

            <!-- Actions -->
            <div class="error-403-actions">
                <a href="{{ route('frontend.home') }}" class="btn-error-primary">
                    <i class="fas fa-home me-2"></i> হোমপেজে যান
                </a>
                <a href="{{ route('login') }}" class="btn-error-secondary">
                    <i class="fas fa-sign-in-alt me-2"></i> লগইন করুন
                </a>
            </div>

        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

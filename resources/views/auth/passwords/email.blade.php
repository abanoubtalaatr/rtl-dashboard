<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>استعادة كلمة المرور - {{ config('adminlte.title', 'نيو سندريلا') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Cairo Font for Arabic -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <!-- AdminLTE -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">

    <style>
        * {
            font-family: 'Cairo', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .password-reset-container {
            width: 100%;
            max-width: 500px;
        }

        .password-reset-box {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .password-reset-logo {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 40px 20px;
            text-align: center;
        }

        .password-reset-logo .logo-icon {
            font-size: 50px;
            color: white;
            margin-bottom: 15px;
            display: block;
            animation: swing 2s ease-in-out infinite;
        }

        @keyframes swing {
            0%, 100% {
                transform: rotate(0deg);
            }
            25% {
                transform: rotate(10deg);
            }
            75% {
                transform: rotate(-10deg);
            }
        }

        .password-reset-logo h1 {
            color: white;
            font-size: 28px;
            font-weight: 700;
            margin: 0;
        }

        .card-body {
            padding: 40px;
        }

        .reset-title {
            font-size: 24px;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
            text-align: center;
        }

        .reset-subtitle {
            color: #666;
            text-align: center;
            margin-bottom: 30px;
            font-size: 14px;
            line-height: 1.6;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .input-group {
            position: relative;
        }

        .form-control {
            border: 2px solid #e8e8e8;
            border-radius: 12px;
            padding: 12px 15px 12px 45px;
            font-size: 15px;
            transition: all 0.3s ease;
            height: 50px;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
        }

        .input-group-text {
            position: absolute;
            right: 0;
            top: 0;
            height: 50px;
            width: 45px;
            background: transparent;
            border: none;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #667eea;
        }

        .btn-reset {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 12px;
            padding: 14px;
            font-size: 16px;
            font-weight: 600;
            color: white;
            width: 100%;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .btn-reset:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
            color: white;
        }

        .btn-reset:active {
            transform: translateY(0);
        }

        .btn-back {
            background: #f8f9fa;
            border: 2px solid #e8e8e8;
            border-radius: 12px;
            padding: 12px;
            font-size: 15px;
            font-weight: 600;
            color: #666;
            width: 100%;
            transition: all 0.3s ease;
        }

        .btn-back:hover {
            background: #e8e8e8;
            color: #333;
        }

        .alert {
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            border: none;
        }

        .alert-danger {
            background-color: #fee;
            color: #c33;
        }

        .alert-success {
            background-color: #efe;
            color: #3c3;
        }

        .alert i {
            margin-left: 8px;
        }

        .invalid-feedback {
            display: block;
            margin-top: 5px;
            color: #dc3545;
            font-size: 13px;
        }

        .form-control.is-invalid {
            border-color: #dc3545;
        }

        @media (max-width: 576px) {
            .card-body {
                padding: 30px 20px;
            }
        }

        .footer-text {
            text-align: center;
            color: white;
            margin-top: 20px;
            font-size: 14px;
        }

        .info-box {
            background: #f0f4ff;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 25px;
            border-right: 4px solid #667eea;
        }

        .info-box i {
            color: #667eea;
            font-size: 18px;
            margin-left: 10px;
        }

        .info-box p {
            margin: 0;
            color: #555;
            font-size: 14px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="password-reset-container">
        <div class="password-reset-box">
            <div class="password-reset-logo">
                <span class="logo-icon">
                    <i class="fas fa-key"></i>
                </span>
                <h1>استعادة كلمة المرور</h1>
            </div>

            <div class="card-body">
                <p class="reset-title">نسيت كلمة المرور؟</p>
                <p class="reset-subtitle">لا مشكلة! أدخل بريدك الإلكتروني وسنرسل لك رابط استعادة كلمة المرور</p>

                @if (session('status'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i>
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle"></i>
                        {{ $errors->first() }}
                    </div>
                @endif

                <div class="info-box">
                    <i class="fas fa-info-circle"></i>
                    <p>سنرسل لك رسالة بريد إلكتروني تحتوي على رابط آمن لإعادة تعيين كلمة المرور الخاصة بك.</p>
                </div>

                <form action="{{ route('password.email') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="email" 
                                   name="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   placeholder="أدخل بريدك الإلكتروني"
                                   value="{{ old('email') }}"
                                   required 
                                   autofocus>
                        </div>
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-reset">
                        <i class="fas fa-paper-plane"></i> إرسال رابط الاستعادة
                    </button>

                    <a href="{{ route('login') }}" class="btn btn-back">
                        <i class="fas fa-arrow-left"></i> العودة لتسجيل الدخول
                    </a>
                </form>
            </div>
        </div>

        <div class="footer-text">
            <p>&copy; {{ date('Y') }} {{ config('adminlte.title', 'نيو سندريلا') }}. جميع الحقوق محفوظة.</p>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>

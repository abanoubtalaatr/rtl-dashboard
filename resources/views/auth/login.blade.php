<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>تسجيل الدخول - {{ config('adminlte.title', 'نيو سندريلا') }}</title>

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

        .login-container {
            width: 100%;
            max-width: 450px;
        }

        .login-box {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        .login-logo {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 40px 20px;
            text-align: center;
        }

        .login-logo a {
            color: white;
            font-size: 32px;
            font-weight: 700;
            text-decoration: none;
            display: block;
        }

        .login-logo .logo-icon {
            font-size: 50px;
            margin-bottom: 15px;
            display: block;
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        .card-body {
            padding: 40px;
        }

        .login-title {
            font-size: 24px;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
            text-align: center;
        }

        .login-subtitle {
            color: #666;
            text-align: center;
            margin-bottom: 30px;
            font-size: 14px;
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

        .btn-login {
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
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
            color: white;
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .icheck-primary {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .icheck-primary input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .icheck-primary label {
            margin-bottom: 0;
            cursor: pointer;
            color: #666;
            font-size: 14px;
        }

        .forgot-password-link {
            color: #667eea;
            text-decoration: none;
            font-size: 14px;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .forgot-password-link:hover {
            color: #764ba2;
            text-decoration: underline;
        }

        .alert {
            border-radius: 10px;
            padding: 12px 15px;
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

        .invalid-feedback {
            display: block;
            margin-top: 5px;
            color: #dc3545;
            font-size: 13px;
        }

        .form-control.is-invalid {
            border-color: #dc3545;
        }

        .remember-forgot-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        @media (max-width: 576px) {
            .remember-forgot-row {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }
            
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
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div class="login-logo">
                <span class="logo-icon">
                    <i class="fas fa-car"></i>
                </span>
                <a href="/">{{ config('adminlte.logo', 'نيو سندريلا') }}</a>
            </div>

            <div class="card-body">
                <p class="login-title">مرحباً بك</p>
                <p class="login-subtitle">الرجاء تسجيل الدخول للمتابعة</p>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle"></i>
                        {{ $errors->first() }}
                    </div>
                @endif

                @if (session('status'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i>
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('login') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="email" 
                                   name="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   placeholder="البريد الإلكتروني"
                                   value="{{ old('email') }}"
                                   required 
                                   autofocus>
                        </div>
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input type="password" 
                                   name="password" 
                                   class="form-control @error('password') is-invalid @enderror" 
                                   placeholder="كلمة المرور"
                                   required>
                        </div>
                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="remember-forgot-row">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember">
                                تذكرني
                            </label>
                        </div>

                        <a href="{{ route('password.request') }}" class="forgot-password-link">
                            <i class="fas fa-key"></i> نسيت كلمة المرور؟
                        </a>
                    </div>

                    <button type="submit" class="btn btn-login">
                        <i class="fas fa-sign-in-alt"></i> تسجيل الدخول
                    </button>
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

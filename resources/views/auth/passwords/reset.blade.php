<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>إعادة تعيين كلمة المرور - {{ config('adminlte.title', 'نيو سندريلا') }}</title>

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
            animation: rotate 3s linear infinite;
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
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
            margin-bottom: 20px;
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
            margin-top: 10px;
        }

        .btn-reset:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
            color: white;
        }

        .btn-reset:active {
            transform: translateY(0);
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

        .password-requirements {
            background: #f0f4ff;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            border-right: 4px solid #667eea;
        }

        .password-requirements h4 {
            font-size: 14px;
            font-weight: 600;
            color: #667eea;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .password-requirements ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .password-requirements li {
            color: #555;
            font-size: 13px;
            margin-bottom: 5px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .password-requirements li i {
            color: #667eea;
            font-size: 10px;
        }

        .toggle-password {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #999;
            z-index: 10;
            transition: color 0.3s ease;
        }

        .toggle-password:hover {
            color: #667eea;
        }
    </style>
</head>
<body>
    <div class="password-reset-container">
        <div class="password-reset-box">
            <div class="password-reset-logo">
                <span class="logo-icon">
                    <i class="fas fa-shield-alt"></i>
                </span>
                <h1>إعادة تعيين كلمة المرور</h1>
            </div>

            <div class="card-body">
                <p class="reset-title">كلمة مرور جديدة</p>
                <p class="reset-subtitle">الرجاء إدخال كلمة المرور الجديدة الخاصة بك</p>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle"></i>
                        @if ($errors->has('email'))
                            {{ $errors->first('email') }}
                        @elseif ($errors->has('password'))
                            {{ $errors->first('password') }}
                        @else
                            {{ $errors->first() }}
                        @endif
                    </div>
                @endif

                <div class="password-requirements">
                    <h4>
                        <i class="fas fa-info-circle"></i>
                        متطلبات كلمة المرور:
                    </h4>
                    <ul>
                        <li><i class="fas fa-circle"></i> يجب أن تحتوي على 8 أحرف على الأقل</li>
                        <li><i class="fas fa-circle"></i> يُفضل استخدام أحرف كبيرة وصغيرة وأرقام</li>
                        <li><i class="fas fa-circle"></i> يجب أن تتطابق كلمة المرور مع التأكيد</li>
                    </ul>
                </div>

                <form action="{{ route('password.update') }}" method="post">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="email" 
                                   name="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   placeholder="البريد الإلكتروني"
                                   value="{{ $email ?? old('email') }}"
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
                                   id="password"
                                   name="password" 
                                   class="form-control @error('password') is-invalid @enderror" 
                                   placeholder="كلمة المرور الجديدة"
                                   required>
                            <span class="toggle-password" onclick="togglePassword('password')">
                                <i class="fas fa-eye" id="password-icon"></i>
                            </span>
                        </div>
                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input type="password" 
                                   id="password_confirmation"
                                   name="password_confirmation" 
                                   class="form-control" 
                                   placeholder="تأكيد كلمة المرور"
                                   required>
                            <span class="toggle-password" onclick="togglePassword('password_confirmation')">
                                <i class="fas fa-eye" id="password_confirmation-icon"></i>
                            </span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-reset">
                        <i class="fas fa-check-circle"></i> إعادة تعيين كلمة المرور
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

    <script>
        function togglePassword(fieldId) {
            const field = document.getElementById(fieldId);
            const icon = document.getElementById(fieldId + '-icon');
            
            if (field.type === 'password') {
                field.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                field.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>

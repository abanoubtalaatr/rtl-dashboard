<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>نظام إدارة الحجوزات والسيارات</title>
    
    <!-- Google Fonts - Arabic Support -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Cairo', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
            overflow-y: auto;
        }
        
        body::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: rotate 30s linear infinite;
        }
        
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .container {
            position: relative;
            z-index: 1;
            text-align: center;
            max-width: 600px;
            animation: fadeInUp 0.8s ease-out;
            margin-bottom: 80px;
        }
        
        .logo {
            margin-bottom: 30px;
            animation: float 3s ease-in-out infinite;
        }
        
        .logo-icon {
            width: 120px;
            height: 120px;
            background: white;
            border-radius: 30px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        
        .logo-icon i {
            font-size: 60px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        h1 {
            color: white;
            font-size: 48px;
            font-weight: 900;
            margin-bottom: 20px;
            text-shadow: 0 2px 20px rgba(0,0,0,0.2);
            line-height: 1.3;
        }
        
        .subtitle {
            color: rgba(255,255,255,0.95);
            font-size: 20px;
            font-weight: 400;
            margin-bottom: 50px;
            line-height: 1.6;
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-bottom: 50px;
        }
        
        .feature {
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            color: white;
            transition: all 0.3s ease;
            border: 1px solid rgba(255,255,255,0.2);
        }
        
        .feature:hover {
            background: rgba(255,255,255,0.25);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .feature i {
            font-size: 32px;
            margin-bottom: 10px;
            display: block;
        }
        
        .feature-title {
            font-size: 16px;
            font-weight: 600;
        }
        
        .login-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: white;
            color: #667eea;
            padding: 18px 50px;
            border-radius: 50px;
            font-size: 20px;
            font-weight: 700;
            text-decoration: none;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
            border: 3px solid transparent;
        }
        
        .login-btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 15px 50px rgba(0,0,0,0.3);
            border-color: white;
            background: transparent;
            color: white;
        }
        
        .login-btn i {
            font-size: 22px;
            transition: transform 0.3s ease;
        }
        
        .login-btn:hover i {
            transform: translateX(-5px);
        }
        
        .footer {
            position: relative;
            z-index: 1;
            padding: 20px;
            text-align: center;
            color: rgba(255,255,255,0.8);
            font-size: 14px;
            margin-top: 40px;
        }
        
        /* Floating particles */
        .particle {
            position: absolute;
            background: rgba(255,255,255,0.3);
            border-radius: 50%;
            animation: particle-float linear infinite;
        }
        
        @keyframes particle-float {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh) rotate(360deg);
                opacity: 0;
            }
        }
        
        .particle:nth-child(1) {
            left: 10%;
            width: 10px;
            height: 10px;
            animation-duration: 15s;
            animation-delay: 0s;
        }
        
        .particle:nth-child(2) {
            left: 30%;
            width: 6px;
            height: 6px;
            animation-duration: 20s;
            animation-delay: 2s;
        }
        
        .particle:nth-child(3) {
            left: 50%;
            width: 8px;
            height: 8px;
            animation-duration: 18s;
            animation-delay: 4s;
        }
        
        .particle:nth-child(4) {
            left: 70%;
            width: 12px;
            height: 12px;
            animation-duration: 22s;
            animation-delay: 1s;
        }
        
        .particle:nth-child(5) {
            left: 90%;
            width: 7px;
            height: 7px;
            animation-duration: 16s;
            animation-delay: 3s;
        }
        
        @media (max-width: 768px) {
            body {
                padding: 15px;
            }
            
            .container {
                margin-bottom: 40px;
            }
            
            h1 {
                font-size: 32px;
            }
            
            .subtitle {
                font-size: 16px;
                margin-bottom: 30px;
            }
            
            .features {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
                margin-bottom: 30px;
            }
            
            .feature {
                padding: 15px;
            }
            
            .feature i {
                font-size: 24px;
            }
            
            .feature-title {
                font-size: 14px;
            }
            
            .login-btn {
                padding: 15px 30px;
                font-size: 16px;
                width: 100%;
                max-width: 250px;
            }
            
            .footer {
                font-size: 12px;
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Floating Particles -->
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    
    <div class="container">
        <div class="logo">
            <div class="logo-icon">
                <i class="fas fa-car-side"></i>
            </div>
        </div>
        
        
        <p class="subtitle">
            نظام متكامل لإدارة الحجوزات الداخلية والخارجية، السيارات، السائقين والمصروفات
        </p>
        
        <div class="features">
            <div class="feature">
                <i class="fas fa-calendar-check"></i>
                <div class="feature-title">إدارة الحجوزات</div>
            </div>
            <div class="feature">
                <i class="fas fa-car"></i>
                <div class="feature-title">متابعة السيارات</div>
            </div>
            <div class="feature">
                <i class="fas fa-users"></i>
                <div class="feature-title">إدارة السائقين</div>
            </div>
            <div class="feature">
                <i class="fas fa-chart-line"></i>
                <div class="feature-title">تقارير مفصلة</div>
            </div>
        </div>
        
        <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap; margin-top: 20px; padding-bottom: 20px;">
            @auth
                <a href="{{ route('home') }}" class="login-btn">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>لوحة التحكم</span>
                </a>
                <form method="POST" action="{{ route('logout') }}" style="display: inline; margin: 0;">
                    @csrf
                    <button type="submit" class="login-btn" style="border: none; cursor: pointer; font-family: 'Cairo', sans-serif;">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>تسجيل الخروج</span>
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="login-btn">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>تسجيل الدخول</span>
                </a>
            @endauth
        </div>
    </div>
    
    <div class="footer">
        <p>&copy; {{ date('Y') }} نظام إدارة الحجوزات والسيارات. جميع الحقوق محفوظة.</p>
    </div>
</body>
</html>

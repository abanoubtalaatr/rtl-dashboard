@extends('layouts.app')

@section('title', 'لوحة التحكم')

@section('content_header')
    <div class="dashboard-header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h1 class="m-0 mb-2">
                    <i class="fas fa-tachometer-alt mr-2"></i>
                    لوحة التحكم
                </h1>
                <p class="text-muted mb-0">
                    <i class="fas fa-user-circle mr-2"></i>
                    {{ $greeting }}، {{ auth()->user()->name }}!
                </p>
            </div>
            <div class="text-right">
                <small class="text-muted d-block">
                    <i class="fas fa-calendar mr-1"></i>
                    {{ now()->translatedFormat('l، d F Y') }}
                </small>
                <small class="text-muted">
                    <i class="fas fa-clock mr-1"></i>
                    {{ now()->format('h:i A') }}
                </small>
            </div>
        </div>
    </div>
@stop

@section('page_content')
    @php
        $cards = [
            [
                'label' => 'السيارات',
                'value' => $stats['cars'] ?? 0,
                'icon' => 'fas fa-car',
                'gradient' => 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)',
                'route' => 'cars.index',
                'description' => 'إجمالي السيارات المسجلة'
            ],
            [
                'label' => 'العملاء',
                'value' => $stats['customers'] ?? 0,
                'icon' => 'fas fa-user-friends',
                'gradient' => 'linear-gradient(135deg, #f093fb 0%, #f5576c 100%)',
                'route' => 'customers.index',
                'description' => 'إجمالي قاعدة العملاء'
            ],
            [
                'label' => 'الحجوزات',
                'value' => $stats['bookings'] ?? 0,
                'icon' => 'fas fa-calendar-check',
                'gradient' => 'linear-gradient(135deg, #4facfe 0%, #00f2fe 100%)',
                'route' => 'bookings.index',
                'description' => 'إجمالي الحجوزات'
            ],
            [
                'label' => 'المستخدمين',
                'value' => $stats['users'] ?? 0,
                'icon' => 'fas fa-users',
                'gradient' => 'linear-gradient(135deg, #43e97b 0%, #38f9d7 100%)',
                'route' => 'users.index',
                'description' => 'مستخدمي النظام'
            ],
            [
                'label' => 'العملاء المميزين',
                'value' => $stats['clients'] ?? 0,
                'icon' => 'fas fa-user-tie',
                'gradient' => 'linear-gradient(135deg, #fa709a 0%, #fee140 100%)',
                'route' => 'customers.index',
                'description' => 'العملاء الخاصين'
            ],
            [
                'label' => 'الشركات',
                'value' => $stats['companies'] ?? 0,
                'icon' => 'fas fa-building',
                'gradient' => 'linear-gradient(135deg, #30cfd0 0%, #330867 100%)',
                'route' => 'companies.index',
                'description' => 'الشركات المسجلة'
            ],
        ];
    @endphp

    <!-- Statistics Cards -->
    <div class="row">
        @foreach ($cards as $card)
            <div class="col-12 col-sm-6 col-lg-4 mb-4">
                <a href="{{ route($card['route']) }}" class="text-decoration-none">
                    <div class="stat-card shadow-sm" style="background: {{ $card['gradient'] }};">
                        <div class="stat-card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <div class="stat-info">
                                    <h3 class="stat-value mb-1">{{ number_format($card['value']) }}</h3>
                                    <p class="stat-label mb-1">{{ $card['label'] }}</p>
                                    <small class="stat-description">{{ $card['description'] }}</small>
                                </div>
                                <div class="stat-icon">
                                    <i class="{{ $card['icon'] }}"></i>
                                </div>
                            </div>
                        </div>
                        <div class="stat-card-footer">
                            <span class="view-more">
                                <i class="fas fa-arrow-left mr-1"></i>
                                عرض التفاصيل
                            </span>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <!-- Recent Activity Section -->
    <div class="row mt-4">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h3 class="card-title">
                        <i class="fas fa-chart-line mr-2"></i>
                        نظرة عامة سريعة
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-4 mb-3">
                            <div class="info-box-content">
                                <span class="info-box-text text-muted">الحجوزات النشطة</span>
                                <span class="info-box-number h4">{{ $stats['bookings'] }}</span>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="info-box-content">
                                <span class="info-box-text text-muted">السيارات المتاحة</span>
                                <span class="info-box-number h4">{{ $stats['cars'] }}</span>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="info-box-content">
                                <span class="info-box-text text-muted">عملاء جدد هذا الشهر</span>
                                <span class="info-box-number h4">{{ $stats['customers'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h3 class="card-title">
                        <i class="fas fa-bell mr-2"></i>
                        إشعارات سريعة
                    </h3>
                </div>
                <div class="card-body">
                    <div class="alert alert-info mb-2">
                        <i class="fas fa-info-circle mr-2"></i>
                        <small>النظام يعمل بشكل طبيعي</small>
                    </div>
                    <div class="alert alert-success mb-0">
                        <i class="fas fa-check-circle mr-2"></i>
                        <small>جميع الخدمات متاحة</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        /* Dashboard Header Enhancement */
        .dashboard-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px;
            border-radius: 12px;
            margin: -15px -15px 20px -15px;
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.3);
        }

        .dashboard-header h1 {
            color: white;
            font-weight: 700;
        }

        .dashboard-header .text-muted {
            color: rgba(255, 255, 255, 0.9) !important;
        }

        /* Enhanced Statistics Cards */
        .stat-card {
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            position: relative;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2) !important;
        }

        .stat-card-body {
            padding: 25px;
            color: white;
        }

        .stat-info {
            flex: 1;
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .stat-label {
            font-size: 1.1rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.95);
            margin: 0;
        }

        .stat-description {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .stat-icon {
            font-size: 3rem;
            color: rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .stat-card:hover .stat-icon {
            color: rgba(255, 255, 255, 0.5);
            transform: scale(1.1) rotate(5deg);
        }

        .stat-card-footer {
            background: rgba(0, 0, 0, 0.1);
            padding: 10px 25px;
            color: white;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .view-more {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .stat-card:hover .view-more {
            color: white;
            transform: translateX(-3px);
        }

        /* Card Animations */
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

        .stat-card {
            animation: fadeInUp 0.6s ease-out;
        }

        .col-12:nth-child(1) .stat-card { animation-delay: 0.1s; }
        .col-12:nth-child(2) .stat-card { animation-delay: 0.2s; }
        .col-12:nth-child(3) .stat-card { animation-delay: 0.3s; }
        .col-12:nth-child(4) .stat-card { animation-delay: 0.4s; }
        .col-12:nth-child(5) .stat-card { animation-delay: 0.5s; }
        .col-12:nth-child(6) .stat-card { animation-delay: 0.6s; }

        /* Enhanced Cards */
        .card {
            border: none;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1) !important;
        }

        .card-header {
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 10px 10px 0 0 !important;
        }

        /* Info Boxes */
        .info-box-content {
            padding: 20px;
            background: #f8f9fa;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .info-box-content:hover {
            background: #e9ecef;
            transform: scale(1.05);
        }

        .info-box-text {
            display: block;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .info-box-number {
            font-weight: 700;
            color: #495057;
        }

        /* Alerts */
        .alert {
            border-left: 3px solid;
            border-radius: 8px;
        }

        .alert-info {
            border-left-color: #17a2b8;
        }

        .alert-success {
            border-left-color: #28a745;
        }

        /* Content Header Enhancement */
        .content-header h1 {
            font-weight: 700;
            color: #2c3e50;
        }

        /* RTL Adjustments for Enhanced UI */
        body.rtl .stat-card-body {
            direction: rtl;
            text-align: right;
        }

        body.rtl .stat-card-footer {
            direction: rtl;
        }

        body.rtl .view-more i {
            margin-right: 0;
            margin-left: 5px;
        }

        body.rtl .stat-card:hover .view-more {
            transform: translateX(3px);
        }

        /* Shadow utilities */
        .shadow-sm {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08) !important;
        }

        /* Remove default link styling */
        a.text-decoration-none:hover {
            text-decoration: none !important;
        }
    </style>
@endsection


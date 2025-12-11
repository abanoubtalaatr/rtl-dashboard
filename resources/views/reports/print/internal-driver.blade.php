<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تفاصيل الرحلة للسائق - رقم {{ $booking->id }}</title>
    <style>
        * {
            font-family: 'Cairo', 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            padding: 20px;
            background: #f5f5f5;
        }

        .driver-sheet {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 28px;
            margin-bottom: 5px;
        }

        .header .subtitle {
            font-size: 16px;
            opacity: 0.9;
        }

        .alert-box {
            background: #fff3cd;
            border: 2px solid #ffc107;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            text-align: center;
        }

        .alert-box strong {
            font-size: 20px;
            color: #856404;
        }

        .details-section {
            margin-bottom: 25px;
        }

        .section-title {
            background: #e9ecef;
            padding: 12px 20px;
            border-right: 4px solid #667eea;
            font-size: 18px;
            font-weight: bold;
            color: #495057;
            margin-bottom: 15px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-bottom: 20px;
        }

        .info-item {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
        }

        .info-label {
            font-size: 12px;
            color: #6c757d;
            margin-bottom: 5px;
        }

        .info-value {
            font-size: 18px;
            font-weight: bold;
            color: #212529;
        }

        .route-box {
            background: linear-gradient(to right, #e7f3ff, #ffe7e7);
            padding: 25px;
            border-radius: 10px;
            margin: 20px 0;
        }

        .route-points {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .point {
            flex: 1;
            text-align: center;
        }

        .point-icon {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .point-label {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 5px;
        }

        .point-name {
            font-size: 20px;
            font-weight: bold;
            color: #212529;
        }

        .arrow-icon {
            font-size: 40px;
            color: #667eea;
        }

        .checklist {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-top: 25px;
        }

        .checklist h3 {
            color: #495057;
            margin-bottom: 15px;
        }

        .checklist-item {
            padding: 10px;
            margin-bottom: 10px;
            background: white;
            border-radius: 5px;
        }

        .checkbox {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 2px solid #667eea;
            border-radius: 3px;
            margin-left: 10px;
            vertical-align: middle;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 2px solid #dee2e6;
        }

        .signature-section {
            display: flex;
            justify-content: space-around;
            margin-top: 40px;
        }

        .signature-box {
            text-align: center;
            padding: 20px;
        }

        .signature-line {
            border-bottom: 2px solid #212529;
            width: 200px;
            margin: 30px auto 10px;
        }

        @media print {
            body {
                background: white;
                padding: 0;
            }

            .driver-sheet {
                box-shadow: none;
                padding: 20px;
            }

            @page {
                margin: 1cm;
            }
        }
    </style>
</head>
<body>
    <div class="driver-sheet">
        <div class="header">
            <h1>🚗 ورقة عمل السائق</h1>
            <div class="subtitle">رقم الحجز: #{{ $booking->id }}</div>
        </div>

        <div class="alert-box">
            <strong>⚠️ الرجاء قراءة جميع التعليمات بعناية قبل بدء الرحلة</strong>
        </div>

        <div class="details-section">
            <div class="section-title">📋 معلومات الرحلة</div>
            <div class="info-grid">
                <div class="info-item">
                    <div class="info-label">📅 التاريخ</div>
                    <div class="info-value">{{ $booking->date->format('Y-m-d') }}</div>
                </div>
                <div class="info-item">
                    <div class="info-label">🕐 الوقت</div>
                    <div class="info-value">{{ $booking->time ?? 'غير محدد' }}</div>
                </div>
                <div class="info-item">
                    <div class="info-label">👤 اسم السائق</div>
                    <div class="info-value">{{ $booking->driver->name ?? '-' }}</div>
                </div>
                <div class="info-item">
                    <div class="info-label">📱 رقم السائق</div>
                    <div class="info-value">{{ $booking->driver->phone ?? '-' }}</div>
                </div>
            </div>
        </div>

        <div class="details-section">
            <div class="section-title">🚙 معلومات السيارة</div>
            <div class="info-grid">
                <div class="info-item">
                    <div class="info-label">🔢 رقم اللوحة</div>
                    <div class="info-value">{{ $booking->car->plate_number ?? '-' }}</div>
                </div>
                <div class="info-item">
                    <div class="info-label">🚗 نوع السيارة</div>
                    <div class="info-value">{{ $booking->car->model ?? '-' }}</div>
                </div>
            </div>
        </div>

        <div class="route-box">
            <div class="route-points">
                <div class="point">
                    <div class="point-icon">📍</div>
                    <div class="point-label">نقطة الانطلاق</div>
                    <div class="point-name">{{ $booking->fromLocation->name ?? $booking->departure_from ?? 'غير محدد' }}</div>
                    @if($booking->fromLocation && $booking->fromLocation->address)
                        <small style="color: #6c757d;">{{ $booking->fromLocation->address }}</small>
                    @endif
                </div>
                <div class="arrow-icon">→</div>
                <div class="point">
                    <div class="point-icon">🎯</div>
                    <div class="point-label">الوجهة</div>
                    <div class="point-name">{{ $booking->toLocation->name ?? $booking->departure_to ?? 'غير محدد' }}</div>
                    @if($booking->toLocation && $booking->toLocation->address)
                        <small style="color: #6c757d;">{{ $booking->toLocation->address }}</small>
                    @endif
                </div>
            </div>
        </div>

        @if($booking->notes)
        <div class="details-section">
            <div class="section-title">📝 ملاحظات مهمة</div>
            <div class="info-item" style="padding: 20px;">
                <p style="font-size: 16px; line-height: 1.8;">{{ $booking->notes }}</p>
            </div>
        </div>
        @endif

        <div class="checklist">
            <h3>✅ قائمة التحقق قبل بدء الرحلة</h3>
            <div class="checklist-item">
                <span class="checkbox"></span>
                التأكد من نظافة السيارة من الداخل والخارج
            </div>
            <div class="checklist-item">
                <span class="checkbox"></span>
                التحقق من مستوى الوقود والزيت
            </div>
            <div class="checklist-item">
                <span class="checkbox"></span>
                فحص الإطارات والإضاءة
            </div>
            <div class="checklist-item">
                <span class="checkbox"></span>
                التأكد من وجود جميع الأوراق المطلوبة
            </div>
            <div class="checklist-item">
                <span class="checkbox"></span>
                الالتزام بمواعيد الرحلة المحددة
            </div>
        </div>

        <div class="signature-section">
            <div class="signature-box">
                <strong>توقيع السائق</strong>
                <div class="signature-line"></div>
                <small>التاريخ: _______________</small>
            </div>
            <div class="signature-box">
                <strong>توقيع المسؤول</strong>
                <div class="signature-line"></div>
                <small>التاريخ: _______________</small>
            </div>
        </div>

        <div class="footer">
            <p><strong>تعليمات عامة:</strong></p>
            <p>• الالتزام بقواعد المرور والسلامة</p>
            <p>• التعامل بأدب واحترام مع العملاء</p>
            <p>• الإبلاغ عن أي مشاكل فوراً</p>
            <small style="display: block; margin-top: 20px;">تم الطباعة: {{ now()->format('Y-m-d H:i') }}</small>
        </div>
    </div>

    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>


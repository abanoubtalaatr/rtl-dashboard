<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورقة عمل السائق - حجز خارجي #{{ $booking->id }}</title>
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
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .header .booking-number {
            font-size: 20px;
            opacity: 0.95;
        }

        .alert-banner {
            background: #dc3545;
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        .section {
            margin-bottom: 30px;
        }

        .section-header {
            background: #f8f9fa;
            padding: 15px 20px;
            border-right: 5px solid #28a745;
            font-size: 18px;
            font-weight: bold;
            color: #495057;
            margin-bottom: 20px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 20px;
        }

        .info-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            border: 2px solid #e9ecef;
        }

        .info-box .label {
            font-size: 13px;
            color: #6c757d;
            margin-bottom: 8px;
            display: block;
        }

        .info-box .value {
            font-size: 20px;
            font-weight: bold;
            color: #212529;
        }

        .customer-highlight {
            background: linear-gradient(135deg, #e7f3ff 0%, #ffe7e7 100%);
            padding: 25px;
            border-radius: 10px;
            margin: 25px 0;
            border: 3px solid #28a745;
        }

        .customer-highlight h3 {
            color: #155724;
            margin-bottom: 15px;
            text-align: center;
            font-size: 22px;
        }

        .customer-info {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .customer-detail {
            background: white;
            padding: 15px;
            border-radius: 8px;
        }

        .customer-detail strong {
            display: block;
            color: #6c757d;
            font-size: 13px;
            margin-bottom: 5px;
        }

        .customer-detail span {
            font-size: 18px;
            color: #212529;
            font-weight: bold;
        }

        .instructions-box {
            background: #fff3cd;
            border: 3px solid #ffc107;
            padding: 20px;
            border-radius: 10px;
            margin: 25px 0;
        }

        .instructions-box h3 {
            color: #856404;
            margin-bottom: 15px;
        }

        .instructions-box ul {
            padding-right: 25px;
        }

        .instructions-box li {
            margin-bottom: 10px;
            line-height: 1.6;
            color: #856404;
        }

        .checklist {
            background: #e7f3ff;
            padding: 25px;
            border-radius: 10px;
            margin: 25px 0;
        }

        .checklist h3 {
            color: #004085;
            margin-bottom: 15px;
        }

        .checklist-item {
            background: white;
            padding: 15px;
            margin-bottom: 12px;
            border-radius: 8px;
            display: flex;
            align-items: center;
        }

        .checkbox {
            width: 25px;
            height: 25px;
            border: 3px solid #28a745;
            border-radius: 5px;
            margin-left: 15px;
            flex-shrink: 0;
        }

        .company-info-box {
            background: #d4edda;
            border: 2px solid #28a745;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 25px;
        }

        .company-info-box h4 {
            color: #155724;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .company-info-box p {
            margin: 5px 0;
            color: #155724;
        }

        .signatures {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
            padding-top: 30px;
            border-top: 2px solid #dee2e6;
        }

        .signature-box {
            text-align: center;
        }

        .signature-box strong {
            display: block;
            margin-bottom: 40px;
            font-size: 16px;
        }

        .signature-line {
            border-bottom: 2px solid #212529;
            width: 200px;
            margin: 0 auto 10px;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 10px;
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
            <h1>🚗 ورقة عمل السائق - حجز خارجي</h1>
            <div class="booking-number">رقم الحجز: #{{ $booking->id }}</div>
        </div>

        <div class="alert-banner">
            ⚠️ حجز خارجي - يرجى الالتزام التام بالمواعيد والتعليمات
        </div>

        <div class="section">
            <div class="section-header">📋 معلومات الرحلة الأساسية</div>
            <div class="info-grid">
                <div class="info-box">
                    <span class="label">📅 التاريخ</span>
                    <span class="value">{{ $booking->date->format('Y-m-d') }}</span>
                </div>
                <div class="info-box">
                    <span class="label">🕐 الوقت</span>
                    <span class="value">{{ $booking->time ?? 'غير محدد' }}</span>
                </div>
                <div class="info-box">
                    <span class="label">👤 اسم السائق</span>
                    <span class="value">{{ $booking->driver->name ?? '-' }}</span>
                </div>
                <div class="info-box">
                    <span class="label">📱 رقم السائق</span>
                    <span class="value">{{ $booking->driver->phone ?? '-' }}</span>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section-header">🚙 معلومات السيارة</div>
            <div class="info-grid">
                <div class="info-box">
                    <span class="label">🔢 رقم اللوحة</span>
                    <span class="value">{{ $booking->car->plate_number ?? '-' }}</span>
                </div>
                <div class="info-box">
                    <span class="label">🚗 نوع/موديل السيارة</span>
                    <span class="value">{{ $booking->car->model ?? '-' }}</span>
                </div>
            </div>
        </div>

        @if($booking->company)
        <div class="company-info-box">
            <h4>🏢 معلومات الشركة المتعاقدة</h4>
            <p><strong>الشركة:</strong> {{ $booking->company->name }}</p>
            @if($booking->company->phone)
            <p><strong>الهاتف:</strong> {{ $booking->company->phone }}</p>
            @endif
            @if($booking->company->email)
            <p><strong>البريد:</strong> {{ $booking->company->email }}</p>
            @endif
        </div>
        @endif

        <div class="customer-highlight">
            <h3>👥 بيانات العميل - مهم جداً</h3>
            <div class="customer-info">
                <div class="customer-detail">
                    <strong>👤 الاسم:</strong>
                    <span>{{ $booking->customer->name ?? '-' }}</span>
                </div>
                <div class="customer-detail">
                    <strong>📱 رقم الهاتف:</strong>
                    <span>{{ $booking->customer->phone ?? '-' }}</span>
                </div>
                @if($booking->customer && $booking->customer->email)
                <div class="customer-detail">
                    <strong>📧 البريد الإلكتروني:</strong>
                    <span>{{ $booking->customer->email }}</span>
                </div>
                @endif
                <div class="customer-detail">
                    <strong>💰 المبلغ:</strong>
                    <span>{{ number_format($booking->price, 2) }} جنيه</span>
                </div>
            </div>
        </div>

        @if($booking->notes)
        <div class="instructions-box">
            <h3>📝 ملاحظات وتعليمات خاصة</h3>
            <p style="font-size: 16px; line-height: 1.8; margin-top: 10px;">{{ $booking->notes }}</p>
        </div>
        @endif

        <div class="checklist">
            <h3>✅ قائمة التحقق الإلزامية</h3>
            <div class="checklist-item">
                <span class="checkbox"></span>
                <span>التأكد من نظافة السيارة بشكل مثالي</span>
            </div>
            <div class="checklist-item">
                <span class="checkbox"></span>
                <span>فحص مستوى الوقود والتأكد من كفايته</span>
            </div>
            <div class="checklist-item">
                <span class="checkbox"></span>
                <span>التحقق من سلامة الإطارات والإضاءة</span>
            </div>
            <div class="checklist-item">
                <span class="checkbox"></span>
                <span>التأكد من وجود جميع الأوراق الرسمية</span>
            </div>
            <div class="checklist-item">
                <span class="checkbox"></span>
                <span>الوصول قبل الموعد بـ 15 دقيقة</span>
            </div>
            <div class="checklist-item">
                <span class="checkbox"></span>
                <span>التواصل مع العميل عند الوصول</span>
            </div>
            <div class="checklist-item">
                <span class="checkbox"></span>
                <span>الالتزام التام بالأدب والاحترام</span>
            </div>
            <div class="checklist-item">
                <span class="checkbox"></span>
                <span>الإبلاغ فوراً عن أي مشاكل أو تأخير</span>
            </div>
        </div>

        <div class="signatures">
            <div class="signature-box">
                <strong>توقيع السائق</strong>
                <div class="signature-line"></div>
                <small>التاريخ: _______________</small>
            </div>
            <div class="signature-box">
                <strong>توقيع المشرف</strong>
                <div class="signature-line"></div>
                <small>التاريخ: _______________</small>
            </div>
        </div>

        <div class="footer">
            <p style="color: #dc3545; font-weight: bold; font-size: 16px; margin-bottom: 10px;">
                ⚠️ تحذير: أي إهمال أو تقصير سيعرضك للمساءلة
            </p>
            <p>نتمنى لك رحلة آمنة وموفقة 🚗</p>
            <small style="display: block; margin-top: 15px; color: #6c757d;">
                تم الطباعة: {{ now()->format('Y-m-d H:i') }}
            </small>
        </div>
    </div>

    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>





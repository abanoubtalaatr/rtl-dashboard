<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إيصال حجز داخلي - رقم {{ $booking->id }}</title>
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

        .invoice {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 40px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            border-bottom: 3px solid #667eea;
            padding-bottom: 20px;
        }

        .header h1 {
            color: #667eea;
            font-size: 32px;
            margin-bottom: 10px;
        }

        .header .invoice-number {
            font-size: 18px;
            color: #666;
        }

        .booking-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #dee2e6;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: bold;
            color: #495057;
        }

        .info-value {
            color: #212529;
        }

        .route-section {
            background: #e7f3ff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .route-section h3 {
            color: #0066cc;
            margin-bottom: 15px;
            text-align: center;
        }

        .route-info {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .location {
            text-align: center;
            flex: 1;
        }

        .location-icon {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .location-name {
            font-weight: bold;
            font-size: 18px;
            color: #212529;
        }

        .arrow {
            font-size: 30px;
            color: #0066cc;
            margin: 0 20px;
        }

        .price-section {
            background: #d4edda;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 30px;
        }

        .price-section h3 {
            color: #155724;
            margin-bottom: 10px;
        }

        .price-amount {
            font-size: 36px;
            font-weight: bold;
            color: #155724;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 2px solid #dee2e6;
            color: #6c757d;
        }

        @media print {
            body {
                background: white;
                padding: 0;
            }

            .invoice {
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
    <div class="invoice">
        <div class="header">
            <h1>🚗 نيو سندريلا للنقل السياحي</h1>
            <div class="invoice-number">إيصال حجز داخلي - رقم #{{ $booking->id }}</div>
        </div>

        <div class="booking-info">
            <div class="info-row">
                <span class="info-label">📅 تاريخ الحجز:</span>
                <span class="info-value">{{ $booking->date->format('Y-m-d') }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">🕐 وقت الحجز:</span>
                <span class="info-value">{{ $booking->time ?? 'غير محدد' }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">👤 السائق:</span>
                <span class="info-value">{{ $booking->driver->name ?? '-' }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">🚙 السيارة:</span>
                <span class="info-value">{{ $booking->car->plate_number ?? '-' }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">💳 نوع الدفع:</span>
                <span class="info-value">
                    @if($booking->payment_type === 'cash')
                        نقدي 💵
                    @elseif($booking->payment_type === 'card')
                        بطاقة 💳
                    @else
                        تحويل بنكي 🏦
                    @endif
                </span>
            </div>
        </div>

        <div class="route-section">
            <h3>📍 تفاصيل الرحلة</h3>
            <div class="route-info">
                <div class="location">
                    <div class="location-icon">🟢</div>
                    <div class="location-name">{{ $booking->fromLocation->name ?? $booking->departure_from ?? 'غير محدد' }}</div>
                    <small>نقطة الانطلاق</small>
                </div>
                <div class="arrow">←</div>
                <div class="location">
                    <div class="location-icon">🔴</div>
                    <div class="location-name">{{ $booking->toLocation->name ?? $booking->departure_to ?? 'غير محدد' }}</div>
                    <small>الوجهة</small>
                </div>
            </div>
        </div>

        <div class="price-section">
            <h3>💰 إجمالي التكلفة</h3>
            <div class="price-amount">{{ number_format($booking->price, 2) }} جنيه</div>
        </div>

        @if($booking->notes)
        <div class="booking-info">
            <div class="info-row">
                <span class="info-label">📝 ملاحظات:</span>
                <span class="info-value">{{ $booking->notes }}</span>
            </div>
        </div>
        @endif

        <div class="footer">
            <p>شكراً لاستخدامكم خدماتنا</p>
            <p>نتمنى لكم رحلة سعيدة 🌟</p>
            <small>تم الطباعة بتاريخ: {{ now()->format('Y-m-d H:i') }}</small>
        </div>
    </div>

    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>


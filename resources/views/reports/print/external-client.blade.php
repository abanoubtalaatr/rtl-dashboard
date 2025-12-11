<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فاتورة حجز خارجي - رقم {{ $booking->id }}</title>
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
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 3px solid #28a745;
        }

        .company-info {
            flex: 1;
        }

        .company-info h1 {
            color: #28a745;
            font-size: 28px;
            margin-bottom: 5px;
        }

        .company-info p {
            color: #666;
            margin: 3px 0;
        }

        .invoice-badge {
            background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            color: white;
            padding: 15px 25px;
            border-radius: 10px;
            text-align: center;
        }

        .invoice-badge strong {
            display: block;
            font-size: 24px;
        }

        .customer-section {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .customer-section h3 {
            color: #495057;
            margin-bottom: 15px;
            border-bottom: 2px solid #dee2e6;
            padding-bottom: 10px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px dotted #dee2e6;
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

        .service-details {
            margin: 30px 0;
        }

        .service-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .service-table th {
            background: #28a745;
            color: white;
            padding: 15px;
            text-align: right;
        }

        .service-table td {
            padding: 15px;
            border-bottom: 1px solid #dee2e6;
        }

        .service-table tr:last-child td {
            border-bottom: none;
        }

        .total-section {
            background: #d4edda;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            margin: 30px 0;
        }

        .total-section h3 {
            color: #155724;
            margin-bottom: 10px;
            font-size: 20px;
        }

        .total-amount {
            font-size: 42px;
            font-weight: bold;
            color: #155724;
        }

        .payment-info {
            background: #fff3cd;
            border: 2px solid #ffc107;
            padding: 15px;
            border-radius: 10px;
            margin: 20px 0;
            text-align: center;
        }

        .payment-info strong {
            color: #856404;
            font-size: 18px;
        }

        .terms {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            margin-top: 30px;
        }

        .terms h4 {
            color: #495057;
            margin-bottom: 10px;
        }

        .terms ul {
            padding-right: 20px;
        }

        .terms li {
            margin-bottom: 8px;
            color: #6c757d;
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
            <div class="company-info">
                <h1>🚗 نيو سندريلا للنقل السياحي</h1>
                <p>📞 للاستفسار: 01234567890</p>
                <p>📧 البريد: info@newcinderella.com</p>
            </div>
            <div class="invoice-badge">
                <strong>فاتورة #{{ $booking->id }}</strong>
                <small>{{ $booking->date->format('Y-m-d') }}</small>
            </div>
        </div>

        <div class="customer-section">
            <h3>📋 بيانات العميل</h3>
            <div class="info-row">
                <span class="info-label">👤 اسم العميل:</span>
                <span class="info-value">{{ $booking->customer->name ?? '-' }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">📱 رقم الهاتف:</span>
                <span class="info-value">{{ $booking->customer->phone ?? '-' }}</span>
            </div>
            @if($booking->company)
            <div class="info-row">
                <span class="info-label">🏢 الشركة:</span>
                <span class="info-value">{{ $booking->company->name }}</span>
            </div>
            @endif
        </div>

        <div class="service-details">
            <table class="service-table">
                <thead>
                    <tr>
                        <th>البيان</th>
                        <th>التفاصيل</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>📅 تاريخ الخدمة</strong></td>
                        <td>{{ $booking->date->format('Y-m-d') }}</td>
                    </tr>
                    <tr>
                        <td><strong>🕐 وقت الخدمة</strong></td>
                        <td>{{ $booking->time ?? 'غير محدد' }}</td>
                    </tr>
                    <tr>
                        <td><strong>👤 اسم السائق</strong></td>
                        <td>{{ $booking->driver->name ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td><strong>📱 رقم السائق</strong></td>
                        <td>{{ $booking->driver->phone ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td><strong>🚙 السيارة</strong></td>
                        <td>{{ $booking->car->plate_number ?? '-' }} - {{ $booking->car->model ?? '' }}</td>
                    </tr>
                    <tr>
                        <td><strong>📍 نوع الخدمة</strong></td>
                        <td>نقل سياحي خارجي</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="payment-info">
            <strong>💳 طريقة الدفع: 
                @if($booking->payment_type === 'cash')
                    نقدي 💵
                @elseif($booking->payment_type === 'card')
                    بطاقة ائتمان 💳
                @else
                    تحويل بنكي 🏦
                @endif
            </strong>
        </div>

        <div class="total-section">
            <h3>💰 إجمالي المبلغ المستحق</h3>
            <div class="total-amount">{{ number_format($booking->price, 2) }} جنيه</div>
        </div>

        @if($booking->notes)
        <div class="customer-section">
            <h3>📝 ملاحظات</h3>
            <p style="padding: 10px; line-height: 1.8;">{{ $booking->notes }}</p>
        </div>
        @endif

        <div class="terms">
            <h4>⚠️ الشروط والأحكام:</h4>
            <ul>
                <li>جميع الأسعار المذكورة شاملة الضرائب</li>
                <li>يجب الالتزام بالموعد المحدد</li>
                <li>في حالة الإلغاء يرجى الإخطار قبل 24 ساعة</li>
                <li>المبلغ المدفوع غير قابل للاسترداد في حالة عدم الحضور</li>
            </ul>
        </div>

        <div class="footer">
            <p><strong>شكراً لثقتكم بنا 🌟</strong></p>
            <p>نتطلع لخدمتكم مرة أخرى</p>
            <small>تم إصدار الفاتورة بتاريخ: {{ now()->format('Y-m-d H:i') }}</small>
        </div>
    </div>

    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>





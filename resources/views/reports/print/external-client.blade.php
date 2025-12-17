<!DOCTYPE html>
<html lang="ar" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إيصال - نيو سندريلا</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Cairo', Arial, sans-serif;
            background: #f9f9f9;
            padding: 20px;
        }

        .receipt {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            padding: 40px 60px;
            border: 1px solid #ddd;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }

        .header-title {
            font-size: 20px;
            font-weight: bold;
            text-decoration: underline;
            margin-bottom: 20px;
        }

        .top-line {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            font-size: 18px;
        }

        .invoice-number {
            font-weight: bold;
            color: #000;
        }

        .logo {
            width: 80px;
            height: auto;
        }

        .field {
            display: flex;
            align-items: baseline;
            margin-bottom: 20px;
            font-size: 18px;
            line-height: 1.8;
        }

        .label {
            width: 140px;
            font-weight: bold;
        }

        .value {
            flex: 1;
            border-bottom: 1px solid #000;
            min-height: 30px;
            padding-right: 10px;
        }

        .inline-fields {
            display: flex;
            justify-content: space-between;
            gap: 40px;
            margin-top: 20px;
        }

        .inline-field {
            flex: 1;
            display: flex;
            align-items: baseline;
        }

        .signature-line {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }

        .signature {
            flex: 1;
            text-align: center;
        }

        .signature label {
            display: block;
            margin-bottom: 40px;
            font-weight: bold;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 50px;
            padding-top: 20px;
            border-top: 1px solid #000;
            font-size: 16px;
        }

        @media print {
            body { background: white; padding: 0; }
            .receipt { box-shadow: none; border: none; padding: 30px 40px; }
            @page { margin: 1cm; }
        }
    </style>
</head>
<body onload="window.print()">
    <div class="receipt">
        <!-- Header -->
        <div class="header">
            <div class="header-title">Taxi Service Offered from New Cinderella Travel</div>
            
            <div class="top-line">
                <div>
                    <span>Date:</span>
                    <span class="value" style="display:inline-block; width:200px; margin-right:10px;">
                        {{ $booking->created_at->format('d/m/Y') }}
                    </span>
                </div>
                <div class="invoice-number">{{ str_pad($booking->id, 8, '0', STR_PAD_LEFT) }}</div>
                <div>
                    <img src="{{ asset('images/logo.jpeg') }}" alt="Logo" class="logo"> <!-- Replace with your actual logo path -->
                </div>
            </div>
        </div>

        <!-- Main Fields -->
        <div class="field">
            <span class="label">Customer Name:</span>
            <div class="value">{{ $booking->customer->name ?? '-' }}</div>
        </div>

        <div class="inline-fields">
            <div class="inline-field">
                <span class="label">From:</span>
                <div class="value">{{ $booking->fromLocation->name ?? $booking->departure_from ?? '-' }}</div>
            </div>
            <div class="inline-field">
                <span class="label">To:</span>
                <div class="value">{{ $booking->toLocation->name ?? $booking->departure_to ?? '-' }}</div>
            </div>
        </div>

        <div class="inline-fields">
            <div class="inline-field">
                <span class="label">Pax:</span>
                <div class="value">{{ $booking->number_of_people ?? '-' }}</div>
            </div>
            <div class="inline-field">
                <span class="label">Company Name:</span>
                <div class="value">{{ $booking->company->name ?? '-' }}</div>
            </div>
        </div>

        <div class="field" style="margin-top: 20px;">
            <span class="label">Price:</span>
            <div class="value"> {{ $booking->currency->name ?? 'EGP' }} {{ number_format($booking->price, 0) }} .</div>
        </div>

        <div class="inline-fields">
            <div class="inline-field">
                <span class="label">Phone No:</span>
                <div class="value">{{ $booking->customer_phone ?? '-' }}</div>
            </div>
            <div class="inline-field">
                <span class="label">Driver:</span>
                <div class="value">{{ $booking->driver->name ?? '-' }}</div>
            </div>
                        
            
        </div>

        <div class="inline-field">
            <span class="label">Supervisor:</span>
            <div class="value">{{ $booking->supervisor->name ?? '-' }}</div>
            <div style="border-bottom:1px solid #000; height:50px;"></div>
        </div>
        <!-- Footer -->
        <div class="footer">
            <div>New Cinderella Travel</div>
            <div>For Complaints: +201095406303 (WhatsApp)</div>
        </div>
    </div>
</body>
</html>
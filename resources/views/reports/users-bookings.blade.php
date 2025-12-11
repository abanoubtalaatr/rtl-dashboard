@extends('layouts.app')

@section('title', 'تقرير الحسابات - إجمالي الحجوزات')

@section('content_header')
    <h1>تقرير الحسابات - إجمالي الحجوزات حسب طريقة الدفع</h1>
    <button onclick="window.print()" class="btn btn-success no-print mb-3 mt-3">
        <i class="fas fa-print"></i> طباعة التقرير
    </button>
@stop

@section('page_content')
<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
            <thead class="thead-dark">
                <tr>
                    <th rowspan="2">الموظف</th>
                    <th colspan="5" class="text-center">عدد الحجوزات</th>
                    <th colspan="5" class="text-center">إجمالي المبالغ</th>
                    <th rowspan="2">الإجمالي الكلي</th>
                </tr>
                <tr>
                    <th>كاش</th>
                    <th>فيزا</th>
                    <th>أجل</th>
                    <th>غرف</th>
                    <th>فري</th>

                    <th>كاش</th>
                    <th>فيزا</th>
                    <th>أجل</th>
                    <th>غرف</th>
                    <th>فري</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td><strong>{{ $user->name }}</strong></td>

                    <!-- عدد الحجوزات -->
                    <td class="text-center">{{ $user->cash_bookings }}</td>
                    <td class="text-center">{{ $user->visa_bookings }}</td>
                    <td class="text-center">{{ $user->credit_bookings }}</td>
                    <td class="text-center">{{ $user->rooms_bookings }}</td>
                    <td class="text-center">{{ $user->free_bookings }}</td>

                    <!-- المبالغ -->
                    <td class="text-right">{{ number_format($user->cash_amount ?? 0, 2) }}</td>
                    <td class="text-right">{{ number_format($user->visa_amount ?? 0, 2) }}</td>
                    <td class="text-right">{{ number_format($user->credit_amount ?? 0, 2) }}</td>
                    <td class="text-right">{{ number_format($user->rooms_amount ?? 0, 2) }}</td>
                    <td class="text-right">{{ number_format($user->free_amount ?? 0, 2) }}</td>

                    <!-- الإجمالي للموظف -->
                    <td class="text-right font-weight-bold">
                        {{ number_format($user->total_amount ?? 0, 2) }}
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot class="thead-light">
                <tr class="font-weight-bold">
                    <td>الإجمالي الكلي</td>
                    <td class="text-center">{{ $grandTotal['cash'] }}</td>
                    <td class="text-center">{{ $grandTotal['visa'] }}</td>
                    <td class="text-center">{{ $grandTotal['credit'] }}</td>
                    <td class="text-center">{{ $grandTotal['rooms'] }}</td>
                    <td class="text-center">{{ $grandTotal['free'] }}</td>

                    <td class="text-right">{{ number_format($grandTotal['cash_amount'], 2) }}</td>
                    <td class="text-right">{{ number_format($grandTotal['visa_amount'], 2) }}</td>
                    <td class="text-right">{{ number_format($grandTotal['credit_amount'], 2) }}</td>
                    <td class="text-right">{{ number_format($grandTotal['rooms_amount'], 2) }}</td>
                    <td class="text-right">{{ number_format($grandTotal['free_amount'], 2) }}</td>

                    <td class="text-right bg-success text-white">
                        {{ number_format($grandTotal['total_amount'], 2) }}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
@stop

{{-- طباعة نظيفة بدون الهيدر والسايدبار --}}
@push('css')
<style type="text/css" media="print">
    /* === 1. Hide everything except the table === */
    .main-header,
    .main-sidebar,
    .content-header,
    .navbar,
    .no-print,
    footer,
    nav,
    aside,
    .btn,
    .main-sidebar.sidebar-dark-primary.elevation-4,
    .card-header {
        display: none !important;
    }

    /* === 2. Force full page width - THIS IS THE KEY FIX === */
    html, body {
        margin: 0 !important;
        padding: 0 !important;
        width: 100% !important;
        height: 100% !important;
        direction: rtl !important;
        background: white !important;
    }

    /* Remove all Bootstrap/AdminLTE containers that limit width */
    .wrapper,
    .content-wrapper,
    .main-content,
    .container-fluid,
    .container,
    .row,
    .col-* {
        width: 100% !important;
        max-width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        float: none !important;
        display: block !important;
    }

    /* === 3. Make card & table use full printable area === */
    .card {
        border: none !important;
        box-shadow: none !important;
        margin: 5mm 10mm !important;  /* Small margin from paper edge */
        width: calc(100% - 20mm) !important;
        background: white !important;
    }

    .card-body {
        padding: 0 !important;
    }

    /* === 4. Table takes full width === */
    table {
        width: 100% !important;
        table-layout: fixed;     /* Forces equal column distribution */
        border-collapse: collapse !important;
        font-size: 10pt !important;
    }

    th, td {
        border: 1px solid #000 !important;
        padding: 8px 5px !important;
        text-align: center !important;
        vertical-align: middle !important;
        word-wrap: break-word;
    }

    th {
        background-color: #e9ecef !important;
        font-weight: bold !important;
        -webkit-print-color-adjust: exact !important;
        color-adjust: exact !important;
    }

    /* Grand total row */
    tfoot td {
        background-color: #d4edda !important;
        font-weight: bold !important;
        font-size: 11pt !important;
        -webkit-print-color-adjust: exact !important;
        color-adjust: exact !important;
    }

    /* Ensure text doesn't get cut */
    tr {
        page-break-inside: avoid;
    }

    thead {
        display: table-header-group;
    }

    tfoot {
        display: table-footer-group;
    }
</style>
@endpush
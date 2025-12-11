@extends('layouts.app')

@section('title', 'تقرير الأرباح والمصروفات')

@section('content_header')
    <h1>تقرير الأرباح والمصروفات</h1>
    <button onclick="window.print()" class="btn btn-success no-print mb-3 mt-4">
        <i class="fas fa-print"></i> طباعة
    </button>
@stop

@section('page_content')

    <div class="card card-primary card-outline mb-4 no-print">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-filter"></i>
                فلتر حسب التاريخ
            </h3>
        </div>
        <form method="GET" id="date-filter-form">
            <div class="card-body">
                <div class="row align-items-end">
                    <div class="col-md-4">
                        <label class="form-label">من تاريخ</label>
                        <input type="date" name="from_date" class="form-control"
                            value="{{ request('from_date', now()->startOfMonth()->format('Y-m-d')) }}" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">إلى تاريخ</label>
                        <input type="date" name="to_date" class="form-control"
                            value="{{ request('to_date', now()->endOfMonth()->format('Y-m-d')) }}" required>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary me-2">
                            <i class="fas fa-search"></i> عرض التقرير
                        </button>
                        <a href="{{ request()->url() }}" class="btn btn-secondary">
                            <i class="fas fa-sync"></i> إعادة تعيين
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0 text-center mt-4">
                تقرير الأرباح والمصروفات<br>

                @php
                    \Carbon\Carbon::setLocale('ar');
                @endphp

                <p class="lead text-center mb-3">
                    الفترة من <strong>{{ $from->translatedFormat('j F Y') }}</strong>
                    إلى <strong>{{ $to->translatedFormat('j F Y') }}</strong>
                </p>
            </h4>
        </div>
        <div class="card-body">
            <div class="row mb-5">
                <div class="col-md-6">
                    <table class="table table-bordered table-hover">
                        <thead class="bg-success text-white">
                            <tr>
                                <th colspan="2" class="text-center">الإيرادات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>حجوزات كاش</td>
                                <td class="text-end">{{ number_format($incomeFromCashBookings, 2) }}</td>
                            </tr>
                            <tr>
                                <td>إيرادات إضافية</td>
                                <td class="text-end">{{ number_format($incomeFromTable, 2) }}</td>
                            </tr>
                            <tr class="table-success">
                                <td><strong>إجمالي الإيرادات</strong></td>
                                <td class="text-end"><strong>{{ number_format($totalIncome, 2) }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-6">
                    <table class="table table-bordered table-hover">
                        <thead class="bg-danger text-white">
                            <tr>
                                <th colspan="2" class="text-center">المصروفات</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>رواتب السائقين</td>
                                <td class="text-end">{{ number_format($salaries, 2) }}</td>
                            </tr>
                            <tr>
                                <td>مصروفات السيارات</td>
                                <td class="text-end">{{ number_format($carExpenses, 2) }}</td>
                            </tr>
                            <tr>
                                <td>مصروفات عامة</td>
                                <td class="text-end">{{ number_format($generalExpenses, 2) }}</td>
                            </tr>
                            <tr class="table-danger">
                                <td><strong>إجمالي المصروفات</strong></td>
                                <td class="text-end"><strong>{{ number_format($totalExpenses, 2) }}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="text-center py-4">
                <h5 class="{{ $netProfit >= 0 ? 'text-success' : 'text-danger' }}">
                    صافي الربح: {{ number_format($netProfit, 2) }} جنيه
                </h5>
                @if ($netProfit < 0)
                    <p class="h5 text-danger">خسارة {{ number_format(abs($netProfit), 2) }} جنيه</p>
                @endif
            </div>
        </div>
    </div>
@stop

@push('css')
    <style media="print">
        .no-print,
        .main-header,
        .main-sidebar,
        footer,
        .card-header small {
            display: none !important;
        }

        body {
            background: white;
        }

        .card {
            border: none;
            box-shadow: none;
            margin: 10mm;
        }

        h2.display-4 {
            font-size: 28pt !important;
        }
    </style>
@endpush

@extends('layouts.app')

@section('title', 'تقرير الحسابات - إجمالي الحجوزات')

@section('content_header')
    <h1 class="text-center">تقرير الحسابات - إجمالي الحجوزات حسب طريقة الدفع والعملة</h1>
    <button onclick="window.print()" class="btn btn-success no-print mb-3">
        <i class="fas fa-print"></i> طباعة التقرير
    </button>
@stop

@section('page_content')
<div class="card">
    <div class="card-body">

        <!-- Main Table: Payment Types per User -->
        <h4 class="text-center mb-4 text-primary">إحصائيات حسب طريقة الدفع لكل موظف</h4>
        <table class="table table-bordered table-hover table-striped mb-5">
            <thead class="thead-dark">
                <tr>
                    <th rowspan="2" class="align-middle">الموظف</th>
                    <th colspan="5" class="text-center">عدد الحجوزات</th>
                    <th colspan="5" class="text-center">إجمالي المبالغ</th>
                    <th rowspan="2" class="align-middle text-center">الإجمالي الكلي</th>
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
                    <tr class="table-info">
                        <td rowspan="2"><strong>{{ $user->name }}</strong></td>
                        <td class="text-center">{{ $user->cash_bookings ?? 0 }}</td>
                        <td class="text-center">{{ $user->visa_bookings ?? 0 }}</td>
                        <td class="text-center">{{ $user->credit_bookings ?? 0 }}</td>
                        <td class="text-center">{{ $user->rooms_bookings ?? 0 }}</td>
                        <td class="text-center">{{ $user->free_bookings ?? 0 }}</td>
                        <td class="text-right">{{ number_format($user->cash_amount ?? 0, 2) }}</td>
                        <td class="text-right">{{ number_format($user->visa_amount ?? 0, 2) }}</td>
                        <td class="text-right">{{ number_format($user->credit_amount ?? 0, 2) }}</td>
                        <td class="text-right">{{ number_format($user->rooms_amount ?? 0, 2) }}</td>
                        <td class="text-right">{{ number_format($user->free_amount ?? 0, 2) }}</td>
                        <td class="text-right font-weight-bold text-success">
                            {{ number_format($user->total_amount ?? 0, 2) }}
                        </td>
                    </tr>

                    <!-- Currency Breakdown Sub-Table for This User -->
                    <tr>
                        <td colspan="11" class="p-0 border-0">
                            <table class="table table-sm table-bordered mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th colspan="3" class="text-center text-primary">
                                            تفصيل حجوزات {{ $user->name }} حسب العملة
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">العملة</th>
                                        <th class="text-center">عدد الحجوزات</th>
                                        <th class="text-center">إجمالي المبلغ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($user->currency_breakdown->isEmpty())
                                        <tr>
                                            <td colspan="3" class="text-center text-muted">لا توجد حجوزات</td>
                                        </tr>
                                    @else
                                        @foreach($user->currency_breakdown as $curr)
                                            <tr>
                                                <td class="text-center font-weight-bold">{{ $curr['name'] }}</td>
                                                <td class="text-center">{{ $curr['count'] }}</td>
                                                <td class="text-right font-weight-bold text-success">
                                                    {{ number_format($curr['total'], 2) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr class="font-weight-bold bg-light">
                                            <td>إجمالي {{ $user->name }}</td>
                                            <td class="text-center">{{ $user->currency_breakdown->sum('count') }}</td>
                                            <td class="text-right">{{ number_format($user->currency_breakdown->sum('total'), 2) }}</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot class="bg-info text-white font-weight-bold">
                <tr>
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
                    <td class="text-right bg-success">
                        {{ number_format($grandTotal['total_amount'], 2) }}
                    </td>
                </tr>
            </tfoot>
        </table>

        <!-- Grand Currency Table -->
        <h4 class="text-center mb-4 text-success">إجمالي الحجوزات حسب العملة (لجميع الموظفين)</h4>
        <table class="table table-bordered table-hover table-striped">
            <thead class="thead-success">
                <tr>
                    <th class="text-center">العملة</th>
                    <th class="text-center">عدد الحجوزات</th>
                    <th class="text-center">إجمالي المبلغ</th>
                </tr>
            </thead>
            <tbody>
                @if($grandCurrency->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center text-muted py-4">لا توجد حجوزات</td>
                    </tr>
                @else
                    @foreach($grandCurrency as $curr)
                        <tr>
                            <td class="text-center font-weight-bold">{{ $curr['name'] }}</td>
                            <td class="text-center">{{ $curr['count'] }}</td>
                            <td class="text-right font-weight-bold text-success">
                                {{ number_format($curr['total'], 2) }}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
            <tfoot class="bg-success text-white font-weight-bold">
                <tr>
                    <td>الإجمالي الكلي</td>
                    <td class="text-center">{{ $grandCurrency->sum('count') }}</td>
                    <td class="text-right">{{ number_format($grandCurrency->sum('total'), 2) }}</td>
                </tr>
            </tfoot>
        </table>

    </div>
</div>
@stop

@push('css')
<style type="text/css" media="print">
    .no-print, .main-header, .main-sidebar, .content-header, nav, footer, .btn {
        display: none !important;
    }
    body, html, .wrapper, .content-wrapper, .card {
        margin: 0 !important;
        padding: 10mm !important;
        background: white !important;
    }
    .card-body { padding: 0 !important; }
    table { 
        width: 100% !important; 
        font-size: 10pt !important; 
        border-collapse: collapse !important;
        margin-bottom: 20mm !important;
    }
    th, td { 
        border: 1px solid #000 !important; 
        padding: 8px !important; 
        text-align: center !important;
    }
    .thead-dark th { background: #343a40 !important; color: white !important; }
    .thead-success th { background: #28a745 !important; color: white !important; }
    .bg-info { background: #17a2b8 !important; }
    .bg-success { background: #28a745 !important; color: white !important; }
    .table-info { background: #d1ecf1 !important; }
    -webkit-print-color-adjust: exact !important;
    color-adjust: exact !important;
</style>
@endpush
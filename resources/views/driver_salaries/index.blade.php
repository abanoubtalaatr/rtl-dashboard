@extends('layouts.app')

@section('title', 'رواتب السائق - ' . $driver->name)

@section('content_header')
    <h1 class="m-0">رواتب السائق: {{ $driver->name }}</h1>
@stop

@section('page_content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title">قائمة الرواتب</h3>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{ route('drivers.salaries.create', $driver) }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> إضافة راتب جديد
                        </a>
                        <a href="{{ route('drivers.index') }}" class="btn btn-secondary ml-2">
                            <i class="fas fa-arrow-left"></i> عودة للسائقين
                        </a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert">×</button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>من تاريخ</th>
                                <th>إلى تاريخ</th>
                                <th>عدد الأيام</th>
                                <th>الراتب الأساسي</th>
                                <th>العمولة</th>
                                <th>السلف</th>
                                <th>الخصومات</th>
                                <th class="text-danger">الصافي</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($salaries as $salary)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $salary->from_date->format('d/m/Y') }}</td>
                                    <td>{{ $salary->to_date->format('d/m/Y') }}</td>
                                    <td>{{ $salary->days }} يوم</td>
                                    <td>{{ number_format($salary->salary) }}</td>
                                    <td>{{ number_format($salary->commission) }}</td>
                                    <td>{{ number_format($salary->advance) }}</td>
                                    <td>{{ number_format($salary->discount) }}</td>
                                    <td class="text-danger font-weight-bold">
                                        {{ number_format($salary->total) }}
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-sm print-salary" 
                data-salary="{{ $salary }}" 
                title="طباعة الراتب">
            <i class="fas fa-print"></i>
        </button>
                                        <a href="{{ route('drivers.salaries.edit', [$driver, $salary]) }}"
                                           class="btn btn-warning btn-sm" title="تعديل">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm delete-salary"
                                                data-id="{{ $salary->id }}" data-name="{{ $salary->from_date->format('m/Y') }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center">لا توجد رواتب مسجلة</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center">
                    {{ $salaries->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<form id="delete-form" method="POST" style="display:none;">
    @csrf
    @method('DELETE')
</form>
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.delete-salary').forEach(btn => {
            btn.addEventListener('click', function() {
                const id = this.dataset.id;
                const name = this.dataset.name;

                Swal.fire({
                    title: 'تأكيد الحذف',
                    text: `هل تريد حذف راتب شهر ${name}؟`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'نعم، احذف',
                    cancelButtonText: 'إلغاء',
                    reverseButtons: true
                }).then(result => {
                    if (result.isConfirmed) {
                        const form = document.getElementById('delete-form');
                        form.action = `/driver-salaries/${id}`;
                        form.submit();
                    }
                });
            });
        });
    });
</script>
@stop
<script>
    document.addEventListener('DOMContentLoaded', function() {
    
        // كود الحذف (يبقى كما هو)
        document.querySelectorAll('.delete-salary').forEach(btn => {
            btn.addEventListener('click', function() {
                const id = this.dataset.id;
                const name = this.dataset.name;
                Swal.fire({
                    title: 'تأكيد الحذف',
                    text: `هل تريد حذف راتب شهر ${name}؟`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'نعم، احذف',
                    cancelButtonText: 'إلغاء',
                    reverseButtons: true
                }).then(result => {
                    if (result.isConfirmed) {
                        const form = document.getElementById('delete-form');
                        form.action = `/driver-salaries/${id}`;
                        form.submit();
                    }
                });
            });
        });
    
        // كود الطباعة المُصحح بالكامل
        document.querySelectorAll('.print-salary').forEach(btn => {
            btn.addEventListener('click', function() {
                const salary = JSON.parse(this.dataset.salary);
    
                // تحويل جميع القيم المالية إلى Number (الحل السحري!)
                const baseSalary     = Number(salary.salary) || 0;
                const commission     = Number(salary.commission) || 0;
                const advance        = Number(salary.advance) || 0;
                const discount       = Number(salary.discount) || 0;
    
                // إعادة حساب الصافي في الجافاسكربت (لا نعتمد على salary.total من الـ DB)
                const netSalary = baseSalary + commission - advance - discount;
    
                const formatDate = (dateString) => {
                    return new Date(dateString).toLocaleDateString('ar-EG', {
                        year: 'numeric', month: 'long', day: 'numeric'
                    });
                };
    
                const printWindow = window.open('', '_blank');
                printWindow.document.write(`
                    <!DOCTYPE html>
                    <html dir="rtl" lang="ar">
                    <head>
                        <meta charset="utf-8">
                        <title>كشف راتب - ${formatDate(salary.from_date)}</title>
                        <style>
                            body { font-family: 'Cairo', 'DejaVu Sans', Arial, sans-serif; padding: 30px; line-height: 1.8; }
                            .container { max-width: 900px; margin: auto; background: white; padding: 40px; border: 2px solid #007bff; border-radius: 12px; }
                            .header { text-align: center; margin-bottom: 40px; padding-bottom: 20px; border-bottom: 4px double #007bff; }
                            .header h1 { color: #007bff; font-size: 32px; margin: 0; }
                            table { width: 100%; border-collapse: collapse; margin: 30px 0; font-size: 18px; }
                            th { background: #007bff; color: white; padding: 15px; }
                            td { padding: 15px; border-bottom: 1px solid #ddd; }
                            .amount { font-weight: bold; text-align: left; }
                            .total-row { background: #e3f2fd !important; font-size: 20px; }
                            .final-total { background: #d4edda !important; font-size: 26px; color: #155724; font-weight: bold; }
                            @media print { body { padding: 10px; } .no-print { display: none; } }
                        </style>
                    </head>
                    <body>
                        <div class="container">
                            <div class="header">
                                <h1>كشف راتب شهري</h1>
                                <p><strong>السائق:</strong> {{ $driver->name }} | <strong>الجوال:</strong> {{ $driver->mobile ?? 'غير محدد' }}</p>
                            </div>
    
                            <table>
                                <tr><th>البند</th><th class="amount">القيمة</th></tr>
                                <tr><td>الفترة</td><td>${formatDate(salary.from_date)} إلى ${formatDate(salary.to_date)}</td></tr>
                                <tr><td>عدد الأيام</td><td><strong>${salary.number_of_days || salary.days || 'غير محدد'}</strong> يوم</td></tr>
                                <tr><td>الراتب الأساسي</td><td>${baseSalary.toLocaleString()} جنيه</td></tr>
                                <tr><td>العمولة</td><td>${commission.toLocaleString()} جنيه</td></tr>
                                <tr class="total-row"><td>الإجمالي قبل الخصومات</td><td>${(baseSalary + commission).toLocaleString()} جنيه</td></tr>
                                <tr><td>السلف</td><td>${advance.toLocaleString()} جنيه</td></tr>
                                <tr><td>الخصومات</td><td>${discount.toLocaleString()} جنيه</td></tr>
                                <tr class="final-total">
                                    <td><strong>الصافي المستحق للصرف</strong></td>
                                    <td><strong>${netSalary.toLocaleString()} جنيه</strong></td>
                                </tr>
                            </table>
    
                            <div style="margin-top: 60px; text-align: center; color: #666;">
                                <p><strong>تاريخ الإصدار:</strong> ${new Date().toLocaleDateString('ar-EG')}</p>
                                <hr style="margin: 40px 0;">
                                <p>توقيع المسؤول: ____________________</p>
                            </div>
    
                            <div class="no-print" style="text-align: center; margin-top: 40px;">
                                <button onclick="window.print()" style="padding: 12px 30px; font-size: 18px; margin: 0 10px; background:#007bff; color:white; border:none; border-radius:5px; cursor:pointer;">طباعة</button>
                                <button onclick="window.close()" style="padding: 12px 30px; font-size: 18px; margin: 0 10px; background:#6c757d; color:white; border:none; border-radius:5px; cursor:pointer;">إغلاق</button>
                            </div>
                        </div>
                    </body>
                    </html>
                `);
                printWindow.document.close();
            });
        });
    });
</script>
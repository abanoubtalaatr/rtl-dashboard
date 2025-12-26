@extends('layouts.app')

@section('title', 'الحجوزات الداخلية')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="m-0">
            <i class="fas fa-calendar-alt mr-2"></i>
            الحجوزات الداخلية
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent m-0 p-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">الرئيسية</a></li>
                <li class="breadcrumb-item active">الحجوزات الداخلية</li>
            </ol>
        </nav>
    </div>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">قائمة الحجوزات الداخلية</h3>
                        </div>
                        @php
                            $query = \App\Models\Booking::internal()->unreturned();
                            if (!Auth::user()->isSuperAdmin()) {
                                $query->where('created_by', Auth::id());
                            }
                            $count = $query->count();
                        @endphp
                        <div class="col-md-6 text-right">
                            <a href="{{ route('internal-bookings.unreturned') }}" class="btn btn-warning mr-2">
                                <i class="fas fa-hourglass-half"></i> الحجوزات الغير مُرجعة
                                <span class="badge badge-danger">{{ $count }}</span>
                            </a>
                            <a href="{{ route('internal-bookings.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> إضافة حجز داخلي جديد
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <!-- Search Form -->
                    <form method="GET" action="{{ route('internal-bookings.index') }}" class="mb-4">
                        <div class="row align-items-end">
                            <div class="col-md-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-default" type="submit"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                    <input type="text" name="search" class="form-control"
                                        placeholder="البحث باسم الغرفة أو السائق" value="{{ request('search') }}">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <input type="date" name="from_date" class="form-control" onchange="this.form.submit()"
                                    value="{{ request('from_date') }}">
                            </div>
                            <div class="col-md-2">
                                <input type="date" name="to_date" class="form-control" onchange="this.form.submit()"
                                    value="{{ request('to_date') }}">
                            </div>
                            @if (Auth::user()->isSuperAdmin())
                                <div class="col-md-3">
                                    <select name="user_id" class="form-control" onchange="this.form.submit()">
                                        <option value="">كل المستخدمين</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}"
                                                {{ request('user_id') == $user->id ? 'selected' : '' }}>
                                                {{ $user->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            @endif
                            <div class="col-md-2">
                                <a href="{{ route('internal-bookings.index') }}" class="btn btn-secondary">
                                    <i class="fas fa-redo"></i> إعادة ضبط
                                </a>
                            </div>
                        </div>
                    </form>

                    <!-- Alerts -->
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <i class="fas fa-check-circle mr-2"></i>{{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show">
                            <i class="fas fa-exclamation-circle mr-2"></i>{{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                        </div>
                    @endif

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم الغرفة</th>
                                    <th>السائق</th>
                                    <th>نوع السيارة</th>
                                    <th>التشغيلة</th>
                                    <th>من تاريخ</th>
                                    <th>السعر</th>
                                    <th>نوع الدفع</th>
                                    <th>على الهاتف</th>
                                    <th class="text-center">حالة الإرجاع</th>
                                    <th class="text-center">الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($bookings as $booking)
                                    <tr>
                                        <td><strong>{{ $booking->id }}</strong></td>
                                        <td>
                                            <i class="fas fa-door-open text-info mr-2"></i>
                                            <strong>{{ $booking->room_name }}</strong><br>
                                            <small class="text-muted"><i
                                                    class="fas fa-users mr-1"></i>{{ $booking->number_of_people }}
                                                فرد</small>
                                        </td>
                                        <td>
                                            <i class="fas fa-user-tie text-primary mr-2"></i>
                                            {{ $booking->driver->name ?? '-' }}
                                            @if ($booking->return_driver_id && $booking->return_driver_id != $booking->driver_id)
                                                <br><small class="text-muted">عودة:
                                                    {{ $booking->returnDriver->name }}</small>
                                            @endif
                                        </td>
                                        <td><span class="badge badge-info">{{ $booking->carType->name ?? '-' }}</span></td>
                                        <td>
                                            <small>
                                                {{ $booking->departureFromLocation->name ?? '-' }}
                                                <i class="fas fa-arrow-left mx-1"></i>
                                                {{ $booking->returnFromLocation->name ?? '-' }}
                                            </small>
                                        </td>
                                        <td>{{ $booking->booking_from->format('Y-m-d H:i') }}</td>
                                        <td>
                                            <strong>{{ number_format($booking->booking_price, 2) }}</strong>
                                            <small>{{ $booking->currency->name ?? '' }}</small>
                                        </td>
                                        <td>
                                            @php
                                                // Clean, centralized color mapping — easy to edit or extend anytime
                                                $paymentColors = [
                                                    'cash'   => 'success',
                                                    'visa'   => 'primary',
                                                    'credit' => 'warning',
                                                    'rooms'  => 'info',
                                                    'free'   => 'secondary',
                                                    // Add new types here easily, e.g.:
                                                    // 'bank_transfer' => 'dark',
                                                ];
                                        
                                                // Get color with fallback
                                                $badgeColor = $paymentColors[$booking->payment_type] ?? 'secondary';
                                            @endphp
                                        
                                            <span class="badge badge-{{ $badgeColor }}">
                                                {{ $booking->payment_type_label }}
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge badge-{{ $booking->on_phone ? 'success' : 'warning' }}">
                                                {{ $booking->on_phone ? 'نعم' : 'لا' }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <form action="{{ route('internal-bookings.toggle-return', $booking) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit"
                                                    class="btn btn-sm {{ $booking->returned ? 'btn-success' : 'btn-secondary' }}"
                                                    title="{{ $booking->returned ? 'تم الإرجاع' : 'لم يتم الإرجاع' }}">
                                                    <i
                                                        class="fas {{ $booking->returned ? 'fa-check-circle' : 'fa-clock' }}"></i>
                                                    {{ $booking->returned ? 'مُرجع' : 'لم يُرجع' }}
                                                </button>
                                            </form>
                                            @if ($booking->returned && $booking->returned_at)
                                                <br><small
                                                    class="text-muted">{{ $booking->returned_at->diffForHumans() }}</small>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="{{ route('internal-bookings.show', $booking) }}"
                                                    class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                                <a href="{{ route('internal-bookings.edit', $booking) }}"
                                                    class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                <button type="button" class="btn btn-danger btn-sm delete-booking"
                                                    data-id="{{ $booking->id }}" data-name="{{ $booking->room_name }}">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="11" class="text-center py-5 text-muted">
                                            <i class="fas fa-calendar-times fa-3x mb-3"></i>
                                            <p>لا توجد حجوزات داخلية</p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center mt-4">
                        {{ $bookings->links() }}
                    </div>

                    <!-- Combined Payment + Currency Statistics -->
                    <div class="mt-5">
                        <h5 class="mb-4 text-center text-primary">
                            <i class="fas fa-chart-pie mr-2"></i>
                            إحصائيات طرق الدفع مقسمة حسب العملة
                        </h5>

                        @if ($paymentCurrencyStats->isEmpty())
                            <p class="text-center text-muted">لا توجد حجوزات في الفترة المحددة</p>
                        @else
                            <div class="row justify-content-center">
                                @foreach ($paymentCurrencyStats as $payment)
                                    @php
                                        $colorMap = [
                                            'cash' => 'success',
                                            'visa' => 'primary',
                                            'credit' => 'warning',
                                            'rooms' => 'info',
                                            'free' => 'secondary',
                                        ];
                                        $borderColor = $colorMap[$payment['key']] ?? 'secondary';
                                        $textColor = $borderColor;
                                    @endphp

                                    <div class="col-lg-4     col-md-6 mb-4">
                                        <div class="card shadow-sm border-left-{{ $borderColor }} h-100">
                                            <!-- Card Header: Payment Type + Total Bookings -->
                                            <div class="card-header bg-transparent border-0 text-center py-4">
                                                <h5 class="mb-2 font-weight-bold text-{{ $textColor }}">
                                                    {{ $payment['label'] }}
                                                </h5>
                                                <p class="mb-0 text-muted">
                                                    <strong>إجمالي الحجوزات:</strong>
                                                    {{ $payment['total_count'] }}
                                                    {{ $payment['total_count'] == 1 ? 'حجز' : 'حجوزات' }}
                                                </p>
                                            </div>

                                            <!-- Card Body: Currencies Side by Side -->
                                            <div class="card-body pt-0">
                                                @if ($payment['items']->isEmpty())
                                                    <p class="text-center text-muted py-4">لا توجد بيانات</p>
                                                @else
                                                    <div class="d-flex flex-wrap justify-content-center gap-4">
                                                        @foreach ($payment['items'] as $currency)
                                                            @php
                                                                $word = $currency['count'] == 1 ? 'حجز' : 'حجوزات';
                                                                $countText =
                                                                    $currency['count'] == 0
                                                                        ? 'لا حجوزات'
                                                                        : $currency['count'] . ' : ' . $word;
                                                            @endphp

                                                            <!-- Mini card for each currency -->
                                                            <div class="text-center p-4 bg-light rounded shadow-sm"
                                                                style="min-width: 160px; flex: 1;">
                                                                <h6
                                                                    class="mb-2 font-weight-bold text-{{ $textColor }}">
                                                                    {{ $countText }}
                                                                </h6>

                                                                <hr class="my-3">
                                                                <p
                                                                    class="mb-0 h5 font-weight-bold text-{{ $textColor }}">
                                                                    {{ number_format($currency['total_price'], 2) }}
                                                                </p>
                                                                <small
                                                                    class="text-muted d-block">{{ $currency['name'] }}</small>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Form -->
        <form id="delete-form" method="POST" style="display: none;">
            @csrf
            @method('DELETE')
        </form>
    @stop

    @section('js')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.delete-booking').forEach(button => {
                    button.addEventListener('click', function() {
                        const id = this.dataset.id;
                        const name = this.dataset.name;

                        Swal.fire({
                            title: 'هل أنت متأكد؟',
                            text: `هل تريد حذف حجز "${name}"؟`,
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#f5576c',
                            cancelButtonColor: '#667eea',
                            confirmButtonText: 'نعم، احذف',
                            cancelButtonText: 'إلغاء',
                            reverseButtons: true
                        }).then(result => {
                            if (result.isConfirmed) {
                                document.getElementById('delete-form').action =
                                    `/internal-bookings/${id}`;
                                document.getElementById('delete-form').submit();
                            }
                        });
                    });
                });
            });
        </script>
    @stop

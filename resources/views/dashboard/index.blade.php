@extends('layouts.app')

@section('title', 'لوحة التحكم')

@section('content_header')
    <div class="dashboard-header">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h1 class="m-0 mb-2">
                    <i class="fas fa-tachometer-alt mr-2"></i>
                    لوحة التحكم
                </h1>
                <p class="text-muted mb-0">
                    <i class="fas fa-user-circle mr-2"></i>
                    {{ $greeting }}، {{ auth()->user()->name }}!
                </p>
            </div>
            <div class="text-right">
                <small class="text-muted d-block">
                    <i class="fas fa-calendar mr-1"></i>
                    {{ now()->translatedFormat('l، d F Y') }}
                </small>
                <small class="text-muted">
                    <i class="fas fa-clock mr-1"></i>
                    {{ now()->format('h:i A') }}
                </small>
            </div>
        </div>
    </div>
@stop

@section('page_content')
    <!-- Recent Activity Section -->
    <div class="row mt-5">
        <div class="col-12">
            <!-- Responsive flex container for the two logos -->
            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4 gap-md-5 py-4">
                
                <!-- Supervisor Image / Signature -->
                <div class="text-center order-1 order-md-1">
                    <img 
                        src="{{ asset('images/nagy.jpeg') }}" 
                        alt="Supervisor Signature / Stamp" 
                        class="img-fluid rounded shadow-sm" 
                        style="max-height: 280px; max-width: 100%; height: auto; object-fit: contain;">
                    <p class="mt-3 mb-0 text-muted fw-medium">Supervisor Signature</p>
                </div>
                
                <!-- Company Logo -->
                <div class="text-center order-2 order-md-2">
                    <img 
                        src="{{ asset('images/logo.jpeg') }}" 
                        alt="New Sinderella Travel Logo" 
                        class="img-fluid rounded shadow-sm" 
                        style="max-height: 280px; max-width: 100%; height: auto; object-fit: contain;">
                    <p class="mt-3 mb-0 text-muted fw-medium">New Sinderella Travel</p>
                </div>
                
            </div>
        </div>
    </div>
@endsection

{{-- @section('css') --}}
    <style>
      

        /* Enhanced Statistics Cards */
        .stat-card {
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            position: relative;
        }
                                    <td>John Doe</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">View All</a>

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2) !important;
        }

        .stat-card-body {
            padding: 25px;
            color: white;
        }

        .stat-info {
            flex: 1;
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 700;
            color: white;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .stat-label {
            font-size: 1.1rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.95);
            margin: 0;
        }

        .stat-description {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .stat-icon {
            font-size: 3rem;
            color: rgba(255, 255, 255, 0.3);
            transition: all 0.3s ease;
        }

        .stat-card:hover .stat-icon {
            color: rgba(255, 255, 255, 0.5);
            transform: scale(1.1) rotate(5deg);
        }

        .stat-card-footer {
            background: rgba(0, 0, 0, 0.1);
            padding: 10px 25px;
            color: white;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .view-more {
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .stat-card:hover .view-more {
            color: white;
            transform: translateX(-3px);
        }

        /* Card Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .stat-card {
            animation: fadeInUp 0.6s ease-out;
        }

        .col-12:nth-child(1) .stat-card { animation-delay: 0.1s; }
        .col-12:nth-child(2) .stat-card { animation-delay: 0.2s; }
        .col-12:nth-child(3) .stat-card { animation-delay: 0.3s; }
        .col-12:nth-child(4) .stat-card { animation-delay: 0.4s; }
        .col-12:nth-child(5) .stat-card { animation-delay: 0.5s; }
        .col-12:nth-child(6) .stat-card { animation-delay: 0.6s; }

        /* Enhanced Cards */
        .card {
            border: none;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1) !important;
        }

        .card-header {
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            border-radius: 10px 10px 0 0 !important;
        }

        /* Info Boxes */
        .info-box-content {
            padding: 20px;
            background: #f8f9fa;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .info-box-content:hover {
            background: #e9ecef;
            transform: scale(1.05);
        }

        .info-box-text {
            display: block;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }

        .info-box-number {
            font-weight: 700;
            color: #495057;
        }

        /* Alerts */
        .alert {
            border-left: 3px solid;
            border-radius: 8px;
        }

        .alert-info {
            border-left-color: #17a2b8;
        }

        .alert-success {
            border-left-color: #28a745;
        }

        /* Content Header Enhancement */
        .content-header h1 {
            font-weight: 700;
            color: #2c3e50;
        }

        /* RTL Adjustments for Enhanced UI */
        body.rtl .stat-card-body {
            direction: rtl;
            text-align: right;
        }

        body.rtl .stat-card-footer {
            direction: rtl;
        }

        body.rtl .view-more i {
            margin-right: 0;
            margin-left: 5px;
        }

        body.rtl .stat-card:hover .view-more {
            transform: translateX(3px);
        }

        /* Shadow utilities */
        .shadow-sm {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08) !important;
        }

        /* Remove default link styling */
        a.text-decoration-none:hover {
            text-decoration: none !important;
        }
    </style>
{{-- @endsection --}}


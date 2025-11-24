{{-- resources/views/layouts/app.blade.php --}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="m-0">داشبورد</h1>  {{-- Persian/Arabic example --}}
@stop

@section('content')
    @hasSection('page_content')
        @yield('page_content')
    @else
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        Welcome to RTL Admin Panel!
                    </div>
                </div>
            </div>
        </div>
    @endif
@stop

@section('css')
    {{-- Google Fonts for better Arabic typography --}}
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        /* Enhanced Typography */
        body, .sidebar, .content-wrapper, .card, .btn {
            font-family: 'Cairo', 'Segoe UI', Tahoma, sans-serif !important;
        }

        /* Smooth transitions everywhere */
        * {
            transition: all 0.2s ease;
        }

        /* Enhanced Main Sidebar */
        body.rtl .main-sidebar,
        body.rtl .sidebar,
        .main-sidebar {
            right: 0 !important;
            left: auto !important;
            border-right: none !important;
            border-left: 1px solid rgba(0, 0, 0, 0.08) !important;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.05);
        }

        /* Enhanced sidebar background */
        .main-sidebar {
            background: linear-gradient(180deg, #343a40 0%, #1a1d20 100%);
        }
        
        /* Force sidebar position for all pages */
        body.rtl .wrapper .main-sidebar {
            position: fixed !important;
            top: 0 !important;
            right: 0 !important;
            left: auto !important;
            bottom: 0 !important;
            z-index: 1038 !important;
        }
        .flex-column {
            display: flex;
    flex-direction: row;          /* row, not column and definitely not "none" */
    justify-content: flex-end;    /* pushes all children to the right */
    align-items: flex-start;          /* optional */
    gap: 1rem;
    padding-right: 0px
        }
        .nav-sidebar>.nav-item{
            width: 100%;
    text-align: start;
        }
        body.rtl .content-wrapper,
        body.rtl .main-footer,
        body.rtl .main-header,
        .content-wrapper,
        .main-footer,
        .main-header {
            margin-right: 250px !important;
            margin-left: 0 !important;
        }

        body.rtl.sidebar-mini .content-wrapper,
        body.rtl.sidebar-mini .main-footer,
        body.rtl.sidebar-mini .main-header {
            margin-right: 4.6rem !important;
            margin-left: 0 !important;
        }

        body.rtl.sidebar-collapse .content-wrapper,
        body.rtl.sidebar-collapse .main-footer,
        body.rtl.sidebar-collapse .main-header {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }

        /* Fix navbar layout for RTL */
        body.rtl .main-header {
            right: 0 !important;
            left: auto !important;
        }

        body.rtl .main-header .navbar {
            flex-direction: row-reverse !important;
        }

        /* Move sidebar toggle button to the right side (next to sidebar) */
        body.rtl .main-header .navbar-nav[class*="left"] {
            order: 2 !important;
            margin-right: auto !important;
            margin-left: 0 !important;
        }

        /* Move user menu to the left side */
        body.rtl .main-header .navbar-nav[class*="right"],
        body.rtl .main-header .navbar-nav.ml-auto,
        body.rtl .main-header .navbar-nav.ms-auto {
            order: 1 !important;
            margin-right: 0 !important;
            margin-left: auto !important;
        }

        /* Fix navbar brand/title position */
        body.rtl .main-header .navbar-brand {
            margin-right: 0 !important;
            margin-left: 1rem !important;
            order: 3 !important;
        }

        /* Ensure toggle button appears on right */
        body.rtl .main-header .nav-link[data-widget="pushmenu"] {
            order: 2 !important;
        }

        /* Fix sidebar brand logo position */
        body.rtl .main-sidebar .brand-link {
            text-align: right;
        }

        /* Adjust sidebar navigation */
        body.rtl .nav-sidebar .nav-link {
            padding-right: 1rem;
            padding-left: 2.5rem;
        }

        body.rtl .nav-sidebar .nav-link > .nav-icon {
            right: 0.5rem !important;
            left: auto !important;
        }

        /* Fix dropdown menus in sidebar */
        body.rtl .nav-sidebar .nav-treeview {
            padding-right: 0;
            padding-left: 0;
        }

        body.rtl .nav-sidebar .nav-treeview .nav-link {
            padding-right: 2rem;
            padding-left: 1rem;
        }

        /* Ensure body has RTL direction */
        body.rtl {
            direction: rtl;
        }

        /* Fix content alignment */
        body.rtl .content {
            text-align: right;
        }
        
        body.rtl .content-wrapper {
            direction: rtl;
        }

        /* Fix sidebar search */
        body.rtl .sidebar .form-control-sidebar {
            text-align: right;
        }

        /* Adjust user menu in header - move to left side */
        body.rtl .main-header .navbar-nav.ml-auto,
        body.rtl .main-header .navbar-nav.ms-auto {
            margin-right: auto !important;
            margin-left: 0 !important;
        }

        /* Fix navbar items spacing */
        body.rtl .main-header .navbar-nav .nav-item {
            margin-right: 0;
            margin-left: 0.5rem;
        }

        /* Fix content header alignment */
        body.rtl .content-header {
            text-align: right;
        }

        body.rtl .content-header .breadcrumb {
            float: left !important;
        }
        
        /* Ensure all cards and content are RTL */
        body.rtl .card,
        body.rtl .card-body,
        body.rtl .card-header {
            direction: rtl;
        }
        
        /* Fix form elements */
        body.rtl .form-control,
        body.rtl input,
        body.rtl textarea,
        body.rtl select {
            text-align: right;
            direction: rtl;
        }
        
        /* Fix select dropdown for RTL */
        body.rtl select.form-control {
            padding-right: 0.75rem;
            padding-left: 2.25rem;
            background-position: left 0.75rem center;
            background-repeat: no-repeat;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            cursor: pointer;
        }
        
        body.rtl select.form-control option {
            text-align: right;
            direction: rtl;
            padding: 8px 12px;
        }
        
        /* Ensure select dropdown list appears correctly */
        body.rtl select.form-control:focus {
            outline: none;
            border-color: #80bdff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        
        /* Fix select dropdown arrow positioning */
        body.rtl select.form-control::-ms-expand {
            display: none;
        }
        
        /* Better styling for select elements */
        body.rtl .form-group select.form-control {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: left 0.5rem center;
            background-size: 1.5em 1.5em;
        }
        
        /* Enhanced Table Design */
        body.rtl .table {
            direction: rtl;
            border-radius: 8px;
            overflow: hidden;
        }
        
        body.rtl .table th,
        body.rtl .table td {
            text-align: right;
            vertical-align: middle;
        }

        body.rtl .table thead th {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            font-weight: 600;
            border: none;
            padding: 15px;
        }

        body.rtl .table tbody tr {
            transition: all 0.3s ease;
        }

        body.rtl .table tbody tr:hover {
            background-color: #f8f9fa;
            transform: scale(1.01);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }
        
        /* Fix pagination for RTL */
        body.rtl .pagination {
            direction: ltr;
            justify-content: center;
            padding-right: 0;
            padding-left: 0;
        }
        
        body.rtl .pagination .page-item {
            margin-right: 0;
            margin-left: 0.25rem;
        }
        
        body.rtl .pagination .page-item:first-child {
            margin-left: 0;
        }
        
        body.rtl .pagination .page-link {
            direction: ltr;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Fix pagination wrapper */
        body.rtl .d-flex.justify-content-center {
            direction: ltr;
        }
        
        /* Ensure pagination numbers are readable */
        body.rtl .pagination .page-link {
            min-width: 38px;
        }

        /* Enhanced Buttons */
        .btn {
            border-radius: 8px;
            font-weight: 600;
            padding: 8px 20px;
            transition: all 0.3s ease;
            border: none;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .btn-success {
            background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        }

        .btn-danger {
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        }

        .btn-info {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .btn-warning {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        /* Enhanced Cards */
        .card {
            border-radius: 12px;
            border: none;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
        }

        .card-header {
            background: white;
            border-bottom: 2px solid #f8f9fa;
            font-weight: 700;
            border-radius: 12px 12px 0 0 !important;
        }

        /* Enhanced Content Wrapper */
        .content-wrapper {
            background: #f4f6f9;
        }

        /* Enhanced Brand Link */
        .brand-link {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            font-weight: 700;
            font-size: 1.2rem;
        }

        .brand-link:hover {
            background: rgba(255, 255, 255, 0.05);
        }

        /* Enhanced Nav Items */
        .nav-sidebar .nav-link {
            border-radius: 8px;
            margin: 4px 8px;
            transition: all 0.3s ease;
        }

        .nav-sidebar .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(-5px);
        }

        body.rtl .nav-sidebar .nav-link:hover {
            transform: translateX(5px);
        }

        .nav-sidebar .nav-link.active {
            background: rgba(255, 255, 255, 0.15);
            font-weight: 600;
        }

        /* Enhanced Main Header */
        .main-header {
            border-bottom: 1px solid rgba(0, 0, 0, 0.08);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        /* Scrollbar Enhancement */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #764ba2;
        }

        /* Page Loading Animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .content {
            animation: fadeIn 0.5s ease-in;
        }

        /* Enhanced Form Controls */
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            padding: 10px 15px;
        }

        /* Enhanced Labels */
        label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 8px;
        }

        /* Badge Enhancement */
        .badge {
            border-radius: 6px;
            padding: 6px 12px;
            font-weight: 600;
        }
    </style>
@stop

@section('js')
    <script>
        // Ensure RTL layout is applied
        document.addEventListener('DOMContentLoaded', function() {
            // Ensure body has rtl class
            if (!document.body.classList.contains('rtl')) {
                document.body.classList.add('rtl');
            }
            
            // Force sidebar to right
            const sidebar = document.querySelector('.main-sidebar');
            if (sidebar) {
                sidebar.style.right = '0';
                sidebar.style.left = 'auto';
            }
            
            // Ensure content wrapper has proper margin
            const contentWrapper = document.querySelector('.content-wrapper');
            if (contentWrapper && !document.body.classList.contains('sidebar-collapse')) {
                contentWrapper.style.marginRight = '250px';
                contentWrapper.style.marginLeft = '0';
            }
        });
    </script>
@stop
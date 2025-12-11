@extends('layouts.app')

@section('title', 'المستخدمون')

@section('content_header')
    <h1 class="m-0">إدارة المستخدمين</h1>
@stop

@section('page_content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">قائمة المستخدمين</h3>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('users.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> إضافة مستخدم جديد
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <!-- Search Form -->
                    <form method="GET" action="{{ route('users.index') }}" class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-default" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                    <input type="text" name="search" class="form-control" 
                                           placeholder="البحث بالاسم أو البريد الإلكتروني" 
                                           value="{{ request('search') }}">
                                </div>
                            </div>
                        </div>
                    </form>

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 80px;">#</th>
                                <th>الاسم</th>
                                <th>البريد الإلكتروني</th>
                                <th style="width: 180px;">الصلاحيات</th>
                                <th style="width: 220px;" class="text-center">الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                                <tr>
                                    <td><strong>{{ $user->id }}</strong></td>
                                    <td>
                                        @if($user->isSuperAdmin())
                                            <i class="fas fa-crown text-warning mr-1"></i>
                                        @elseif($user->isAdmin())
                                            <i class="fas fa-user-shield text-info mr-1"></i>
                                        @else
                                            <i class="fas fa-user text-secondary mr-1"></i>
                                        @endif
                                        {{ $user->name }}
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if($user->isSuperAdmin())
                                            <span class="badge badge-warning badge-lg">
                                                <i class="fas fa-crown"></i> {{ $user->role_label }}
                                            </span>
                                        @elseif($user->isAdmin())
                                            <span class="badge badge-info badge-lg">
                                                <i class="fas fa-user-shield"></i> {{ $user->role_label }}
                                            </span>
                                        @else
                                            <span class="badge badge-secondary badge-lg">
                                                <i class="fas fa-user"></i> {{ $user->role_label }}
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('users.show', $user) }}"
                                               class="btn btn-info btn-sm me-1 mx-1" title="عرض">
                                                <i class="fas fa-eye"></i>
                                                عرض
                                            </a>
                                    
                                            <a href="{{ route('users.edit', $user) }}"
                                               class="btn btn-warning btn-sm me-1 mx-1" title="تعديل">
                                                <i class="fas fa-edit"></i>
                                                تعديل
                                            </a>
                                    
                                            <button type="button"
                                                    class="btn btn-danger btn-sm delete-user mx-1"
                                                    data-id="{{ $user->id }}"
                                                    data-name="{{ $user->name }}"
                                                    title="حذف">
                                                <i class="fas fa-trash"></i>
                                                حذف
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">لا توجد بيانات</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                        {{ $users->links() }}
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
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
            // Delete confirmation
            document.querySelectorAll('.delete-user').forEach(button => {
                button.addEventListener('click', function() {
                    const userId = this.getAttribute('data-id');
                    const userName = this.getAttribute('data-name');
                    
                    Swal.fire({
                        title: 'هل أنت متأكد؟',
                        text: `هل تريد حذف المستخدم "${userName}"؟`,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'نعم، احذف',
                        cancelButtonText: 'إلغاء',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const form = document.getElementById('delete-form');
                            form.action = `/users/${userId}`;
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@stop


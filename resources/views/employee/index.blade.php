@extends('layouts.admin')

@section('pagetitle')
    Employee
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Employee List</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-primary"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                aria-labelledby="dropdownMenuLink">
                {{-- <div class="dropdown-header">Dropdown Header:</div> --}}
                <a class="dropdown-item" href="{{url('employee/create')}}">
                    <i class="fas fa-plus fa-sm fa-fw mr-2 text-primary"></i>
                    Add
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{url('export_employee_pdf')}}">
                    <i class="fas fa-file-pdf fa-sm fa-fw mr-2 text-primary"></i>
                    PDF
                </a>
            </div>
        </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Designation</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Designation</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                        $sl = 1;
                    @endphp
                    @foreach ($allemployee as $emp)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $emp->name }}</td>
                        <td>{{ $emp->mobile }}</td>
                        <td>{{ $emp->email }}</td>
                        <td>{{ $emp->address }}</td>
                        <td>{{ $emp->designation }}</td>
                        <td>{{ $emp->salary }}</td>
                        <td class="d-flex justify-content-center">
                            {!! Form::open(['method' => 'delete','route' => ['employee.destroy', $emp->id],'id'=>'deleteform']) !!}
                            <a href="javascript:void(0)" class="btn btn-primary btn-circle btn-sm" title="Delete" onclick="event.preventDefault();if (!confirm('Are you sure?')) return; document.getElementById('deleteform').submit();">
                                <i class="fas fa-trash"></i>
                            </a>
                            {!! Form::close() !!}
                            <a href="{{url('employee/'.$emp->id.'/edit')}}" class="btn btn-primary btn-circle btn-sm" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="{{url('employee/'.$emp->id)}}" class="btn btn-primary btn-circle btn-sm" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
        $(document).ready( function () {
        $('#dataTable').DataTable();
        });
    </script>
@endsection
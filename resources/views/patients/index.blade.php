@extends('layouts.app')

@push('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@push('content-header')
<section class="content-header">
  <h1>
    {{ __('Patients') }}
    <small>{{ __('Control panel') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>{{ __('Dashboard') }}</a></li>
    <li class="active">{{ __('Patients') }}</li>
  </ol>
</section>
@endpush

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">{{ __('Patients List') }}</h3>
                <a href="{{ route('patients.create') }}" class="btn btn-primary pull-right">Add</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="patients_table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>{{ __('#') }}</th>
                                <th>{{ __('Registration Number') }}</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Age') }}</th>
                                <th>{{ __('Mobile') }}</th>
                                <th>{{ __('Dr Name') }}</th>
                                <th>{{ __('Aadhar') }}</th>
                                <th>{{ __('Created At') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($patients as $key => $patient)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $patient->registration_number }}</td>
                                <td>{{ $patient->first_name }} {{ $patient->last_name }}</td>
                                <td>{{ $patient->age }}</td>
                                <td>{{ $patient->mobile }}</td>
                                <td>{{ $patient->madamName }}</td>
                                <td>{{ $patient->aadhar_card }}</td>
                                <td>{{ $patient->created_at }}</td>
                                <td>
                                    <a href="{{ route('patients.edit', $patient) }}" class="btn btn-info">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                        <form action="{{ route('patients.destroy', $patient) }}" method="POST" class="d-none">
                                            @method('DELETE')
                                            @csrf
                                        </form>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection

@push('scripts')
<!-- DataTables -->
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script>
  $(function () {
    $('#patients_table').DataTable();

    $('a.btn-danger').click(function (event) {
        event.preventDefault();
        if (confirm('Are you sure?')) {
            $(this).find('form').submit();
        }
    });
  })
</script>
@endpush

@extends('layouts.app')

@push('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endpush

@push('content-header')
<section class="content-header">
  <h1>
    {{ __('Monthly Pregnancies') }}
    <small>{{ __('Control panel') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>{{ __('Dashboard') }}</a></li>
    <li class="active">{{ __('Monthly Pregnancies') }}</li>
  </ol>
</section>
@endpush

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">{{ __('Monthly Pregnancies List') }}</h3>
                <a href="{{ route('monthly-pregnancies.create') }}" class="btn btn-primary pull-right">Add</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="monthly_pregnancies_table" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>{{ __('#') }}</th>
                                <th>{{ __('First Name') }}</th>
                                <th>{{ __('Last Name') }}</th>
                                <th>{{ __('Pregregnancy Result Date') }}</th>
                                <th>{{ __('Pregregnancy Type') }}</th>
                                <th>{{ __('Created At') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pregnancies as $key => $pregnancy)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $pregnancy->first_name }}</td>
                                <td>{{ $pregnancy->last_name }}</td>
                                <td><b>{{ $pregnancy->result_pregnancy->format('d F, Y') }}</b></td>
                                <td><b>{{ $pregnancy->type_pregnancy }}</b></td>
                                <td>{{ $pregnancy->created_at }}</td>
                                <td>
                                    <a href="{{ route('monthly-pregnancies.edit', $pregnancy) }}" class="btn btn-info">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                        <form action="{{ route('monthly-pregnancies.destroy', $pregnancy) }}" method="POST" class="d-none">
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
    $('#monthly_pregnancies_table').DataTable();

    $('a.btn-danger').click(function (event) {
        event.preventDefault();
        if (confirm('Are you sure?')) {
            $(this).find('form').submit();
        }
    });
  })
</script>
@endpush

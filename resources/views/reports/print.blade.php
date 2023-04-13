@extends('layouts.print')
@section('content')
    <style>
        .d-flex {
            display: flex !important;
        }
        
        .justify-content-space-between {
            justify-content: space-between !important;
        }

        .widget-user-header {
            height: 180px !important;
        }
    </style>
    @include('reports.generate', [
        'patient' => $patient,
        'ancReports' => $ancReports,
        'inReports' => $inReports,
        'plReports' => $plReports
    ])
@endsection

@push('scripts')
<script>
    $(function () {
        $('.box > .overlay').hide();
        window.print();
    });
</script>
@endpush

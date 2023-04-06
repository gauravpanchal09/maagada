@extends('layouts.print')
@section('content')

@endsection
    @include('reports.generate', [
        'patient' => $patient,
        'ancReports' => $ancReports,
        'inReports' => $inReports,
        'plReports' => $plReports
    ])
@push('scripts')
<script>
    $(function () {
        $('.box > .overlay').hide();
        window.print();
    });
</script>
@endpush

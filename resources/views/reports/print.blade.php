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
        $("span.form-control").each(function() {
            let element = $(this);

            if (!(element.text() && element.text() != 'N/A')) {
                element.addClass('marked-as-hide');
            }
        });

        $(".report-content .row").each(function() {
            let row = $(this);
            let markAsHide = row.find('span.form-control.marked-as-hide').length, 
            total = row.find('span.form-control').length;

            if (markAsHide === total) {
                row.hide();
            }
        });

        $(".report-content table.table").each(function() {
            let row = $(this);
            let markAsHide = row.find('span.form-control.marked-as-hide').length, 
            total = row.find('span.form-control').length;

            if (markAsHide === total) {
                row.hide();
            }
        });

        setTimeout(() => {
            window.print();
        }, 300);
    });
</script>
@endpush

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
                element.parents('div.form-group').parent().remove();
            }
        });

        $("table.table").each(function() {
            $(this).find('tbody > tr').each(function () {
                let row = $(this), hide = true;
                let exist = row.find('span.form-control');

                if (exist.length == 0) {
                    row.hide();
                }
            });
        });

        $(".report-content .row").each(function() {
            let row = $(this);
            let exist = row.find('span.form-control');

            if (exist.length == 0) {
                row.hide();
            }
        });

        setTimeout(() => {
            window.print();
        }, 300);
    });
</script>
@endpush

<div class="row">
    <div class="col-xs-12">
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
                <div class="d-flex justify-content-space-between">
                    <h3 class="widget-user-username">#{{ $patient->registration_number }} {{ $patient->first_name }} {{ $patient->last_name }}, {{ __('Age') }}: {{ $patient->age }}</h3>
                    <h3 class="widget-user-username">{{ $patient->doctor }}</h3>
                </div>
                <h5 class="widget-user-desc">{{ __('Husband') }} : {{ $patient->husband_name }}, {{ __('Age') }}: {{ $patient->husband_age }}</h5>
                <h5 class="widget-user-desc">{{ __('Mobile') }} : {{ $patient->mobile ?: 'N/A' }}</h5>
                <h5 class="widget-user-desc">{{ __('Aadhar Card') }} : {{ $patient->aadhar_card ?: 'N/A' }}</h5>
                <h5 class="widget-user-desc">{{ $patient->address ?: 'N/A' }}</h5>
            </div>
            <div class="widget-user-image">
                <img class="img-circle" src="{{ asset('dist/img/avatar6.png') }}" alt="User Avatar">
            </div>
            <div class="box-footer">
                <div class="row">
                    <!-- <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">{{ count($ancReports) }}</h5>
                            <span class="description-text">ANC Test</span>
                        </div>
                    </div> -->
                    <!-- /.col -->
                    <div class="col-sm-12 border-right">
                        <div class="description-block">
                            <h5 class="description-header">{{ count($inReports) }}</h5>
                            <span class="description-text">Infertility Test</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <!-- <div class="col-sm-4">
                        <div class="description-block">
                            <h5 class="description-header">{{ count($plReports) }}</h5>
                            <span class="description-text">Gynae Test</span>
                        </div>
                    </div> -->
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
    <!-- <x-anc-reports :reports="$ancReports" /> -->
    <x-in-reports :reports="$inReports" />
    <!-- <x-pl-reports :reports="$plReports" /> -->
</div>

<script>
$(function () {
    $('.btn-box-tool').click(function (event) {
        event.preventDefault();
        const url = $(this).data('href');
        window.location.replace(url);
    });

    $('.btn-remove').click(function (event) {
        event.preventDefault();
        const url = $(this).data('href');
        $.ajax({
            url : url,
            type : 'DELETE',
            data: { "_token": "{{ csrf_token() }}" },
            success : function(){
                window.location.reload(true)
            }
        });
    });

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

    $(".exclude-hide").each(function() {
        $(this).parents('.row').show().parents('.main-row').show();
    });
});
</script>

@extends('layouts.app')

@push('styles')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}">
<style rel="stylesheet">
    .select2-container .select2-selection--single {
        height: 35px !important;
    }

    .centered-text th, .centered-text td {
        text-align: center !important;
    }

    button.mb-2 {
        margin-bottom: 20px;
    }
</style>
@endpush

@push('content-header')
<section class="content-header">
  <h1>
    {{ __('Infertility') }}
    <small>{{ __('Control panel') }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>{{ __('Dashboard') }}</a></li>
    <li><a href="#"><i class="fa fa-medkit"></i>{{ __('Tests') }}</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i>{{ __('Infertility') }}</a></li>
    <li class="active">{{ __('Edit') }}</li>
  </ol>
</section>
@endpush

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-body">
                @include('tests.in._form', ['test' => $test, 'patients' => $patients])
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection

@push('scripts')
<!-- Select2 -->
<script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>

<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        var files = [];
        $('input[type="file"]').change(function (event) {
            if (files.length) {
                $(this).parent().parent().children('.row').remove();
                files = [];
            }

            let target = event.target.files;
            for(let i=0; i < target.length; i++) {
                files.push({
                    "name": target[i].name,
                    "url": URL.createObjectURL(target[i])
                });
            }

            handleFileUpload($(this));
        });

        function handleFileUpload(target) {
            if (files.length && target) {
                let html = `<div class="row" style="margin-bottom: 1rem;">`;
                files.forEach(function (file) {
                    html += `
                    <div class="col-md-4">
                        <span>${file.name}</span>
                        <img class="img-thumbnail" src="${file.url}" />
                    </div>`;
                });
                html += `</div>`;
                target.parent().after(html);
            }
        }

        function showResultElements(target) {
            $(`div.${target}-div`).show();
        }

        function hideResultElements(target) {
            $(`div.${target}-div`).hide();
        }

        $('input[name="result_ivf"]').on('input', function (event) {
            let value = $(this).val();
            if (value > 0) {
                showResultElements('ivf');
            } else {
                hideResultElements('ivf');
            }
        });

        $('input[name="result_icsi"]').on('input', function (event) {
            let value = $(this).val();
            if (value > 0) {
                showResultElements('icsi');
            } else {
                hideResultElements('icsi');
            }
        });

        $('select[name="treatment_plan"]').on('change' , function (event) {
            let value = event.target.value;
            if (value && value == 'iui') {
                showResultElements('iui-treatment-plan');
                hideResultElements('ivf-treatment-plan');
            } else if (value && value == 'ivf') {
                showResultElements('ivf-treatment-plan');
                hideResultElements('iui-treatment-plan');
            } else {
                hideResultElements('ivf-treatment-plan');
                hideResultElements('iui-treatment-plan');
            }
        });

        let result_ivf = $('input[name="result_ivf"]').val();
        let result_icsi = $('input[name="result_icsi"]').val();
        let treatment_plan = $('select[name="treatment_plan"] :selected').val();
        if (result_ivf > 0) {
            showResultElements('ivf');
        } else {
            hideResultElements('ivf');
        }

        if (result_icsi > 0) {
            showResultElements('icsi');
        } else {
            hideResultElements('icsi');
        }

        if (treatment_plan && treatment_plan == 'iui') {
            showResultElements('iui-treatment-plan');
            hideResultElements('ivf-treatment-plan');
        } else if (treatment_plan && treatment_plan == 'ivf') {
            showResultElements('ivf-treatment-plan');
            hideResultElements('iui-treatment-plan');
        } else {
            hideResultElements('ivf-treatment-plan');
            hideResultElements('iui-treatment-plan');
        }

        const generateTableRow = (count, key) => {
            return `
                <tr>
                    <td>${count}</td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="wife_ici_extra_data[${key}][day]" class="form-control"/>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="date" name="wife_ici_extra_data[${key}][date]" class="form-control"/>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="wife_ici_extra_data[${key}][endo]" class="form-control"/>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="wife_ici_extra_data[${key}][rtov]" class="form-control"/>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="wife_ici_extra_data[${key}][ltov]" class="form-control"/>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" name="wife_ici_extra_data[${key}][remark]" class="form-control"/>
                        </div>
                    </td>
                </tr>
            `;
        };

        $('button.add-more-btn').on('click', function() {
            let target = $('table.wife-ici-table > tbody'), 
            totalRow = $('table.wife-ici-table tr').length - 1;

            for (let index = 1; index < 11; index++) {
                let count = totalRow + index, key = (totalRow - 11) + index;
                target.append(generateTableRow(count, key));
            }
        });

        $('button.remove-more-btn').on('click', function() {
            let target = $('table.wife-ici-table > tbody'), 
            totalRow = $('table.wife-ici-table tr').length - 1;

            if (totalRow <= 10) {
                return;
            }

            for (let index = 1; index < 11; index++) {
                target.find('tr:last').remove();
            }
        });
    });
</script>
@endpush

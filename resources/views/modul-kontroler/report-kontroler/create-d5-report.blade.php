@extends('layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('set-user') }}
@endsection

@push('page-styles')

@endpush

@section('content')

<div class="card card-custom gutter-b">
    <div class="card-header justify-content-start">
        <div class="card-title">
            <span class="card-icon">
                <i class="flaticon2-plus-1 text-primary"></i>
            </span>
            <h3 class="card-label">                
                Tabel Cetak D5 (General Ledger)
            </h3>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-xl-12">
                <div class="form-group mb-8">
                    <div class="alert alert-custom alert-default" role="alert">
                        <div class="alert-text">Header Tabel Cetak D5 (General Ledger)</div>
                    </div>
                </div>
                <form class="form" id="formD5Report" action="{{ route('modul_kontroler.d5_report.export') }}" method="POST">
					@csrf
					<div class="form-group row">
						<label for="bulan-tahun-input" class="col-2 col-form-label">Bulan/Tahun<span class="text-danger">*</span></label>
						<div class="col-4">
                            @php
                                $tahun = substr($data_tahun[0]->sbulan, 0, 4);
                                $bulan = substr($data_tahun[0]->sbulan, 4, 2);
                                $suplesi = substr($data_tahun[0]->sbulan, 6);
                            @endphp
							<select class="form-control kt-select2" name="bulan">
                                <option value="">-- All --</option>
                                <option value="01" <?php if($bulan  == '01' ) echo 'selected' ; ?>>Januari</option>
                                <option value="02" <?php if($bulan  == '02' ) echo 'selected' ; ?>>Februari</option>
                                <option value="03" <?php if($bulan  == '03' ) echo 'selected' ; ?>>Maret</option>
                                <option value="04" <?php if($bulan  == '04' ) echo 'selected' ; ?>>April</option>
                                <option value="05" <?php if($bulan  == '05' ) echo 'selected' ; ?>>Mei</option>
                                <option value="06" <?php if($bulan  == '06' ) echo 'selected' ; ?>>Juni</option>
                                <option value="07" <?php if($bulan  == '07' ) echo 'selected' ; ?>>Juli</option>
                                <option value="08" <?php if($bulan  == '08' ) echo 'selected' ; ?>>Agustus</option>
                                <option value="09" <?php if($bulan  == '09' ) echo 'selected' ; ?>>September</option>
                                <option value="10" <?php if($bulan  == '10' ) echo 'selected' ; ?>>Oktober</option>
                                <option value="11" <?php if($bulan  == '11' ) echo 'selected' ; ?>>November</option>
                                <option value="12" <?php if($bulan  == '12' ) echo 'selected' ; ?>>Desember</option>
                            </select>
						</div>
                        <div class="col-4" >
                            <input class="form-control" type="text" value="{{$tahun}}"   name="tahun" size="4" maxlength="4" onkeypress="return hanyaAngka(event)" autocomplete='off' required> 
                        </div>
                        <div class="col-2" >
                            <input class="form-control" type="text" value="{{$suplesi}}"   name="suplesi" size="4" maxlength="4" onkeypress="return hanyaAngka(event)" autocomplete='off' required>
                        </div>
					</div>
                    <div class="form-group row">
						<label for="dari-input" class="col-2 col-form-label">Sandi Perkiraan</label>
						<div class="col-10">
                            <select class="cariaccount form-control" style="width: 100% !important;" name="sanper"></select>
                        </div>
					</div>
					<div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <a href="{{ url()->previous() }}" class="btn btn-warning"><i class="fa fa-reply"></i> Batal</a>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-print" aria-hidden="true"></i> Cetak</button>
                        </div>
                    </div>
				</form>
            </div>
        </div>        
    </div>
</div>

@endsection

@push('page-scripts')
{{-- {!! JsValidator::formRequest('App\Http\Requests\D5ReportStore', '#formD5Report'); !!} --}}
<script>
    $(document).ready(function () {
	$('.kt-select2').select2().on('change', function() {
		$(this).valid();
	});
	$('.cariaccount').select2({
		placeholder: '-Pilih-',
		allowClear: true,
		ajax: {
			url: "{{ route('modul_kontroler.d5_report.search.account') }}",			
            processResults: function (data) {
                return {
                    results:  $.map(data, function (item) {
                        return {
                            text: item.kodeacct +'--'+ item.descacct,
                            id: item.kodeacct
                        }
                    })
                };
		},
		cache: true
		}
	});
	// $('#tanggal').datepicker({
	// 	todayHighlight: true,
	// 	orientation: "bottom left",
	// 	autoclose: true,
	// 	// language : 'id',
	// 	format   : 'dd MM yyyy'
	// });
});
function hanyaAngka(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))

	return false;
	return true;
}
</script>
@endpush
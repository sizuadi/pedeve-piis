@extends('layout.global')

@section('content')
<!-- begin:: Subheader -->
<div class="subheader   grid__item" id="kt_subheader">
	<div class="container  container--fluid ">
		<div class="subheader__main">
			<h3 class="subheader__title">
				Cetak Rincian Transaksi D2 Per Periode </h3>
			<span class="subheader__separator hidden"></span>
			<div class="subheader__breadcrumbs">
				<a href="#" class="subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
				<span class="subheader__breadcrumbs-separator"></span>
				<a href="" class="subheader__breadcrumbs-link">
					Kontroler </a>
				<span class="subheader__breadcrumbs-separator"></span>
				<span class="subheader__breadcrumbs-link subheader__breadcrumbs-link--active">Cetak Rincian Transaksi D2 Per Periode</span>
			</div>
		</div>
	</div>
</div>
<!-- end:: Subheader -->

<div class="container  container--fluid  grid__item grid__item--fluid">
<div class="portlet portlet--mobile">
	<div class="portlet__head portlet__head--lg">
		<div class="portlet__head-label">
			<span class="portlet__head-icon">
				<i class="font-brand flaticon2-line-chart"></i>
			</span>
			<h3 class="portlet__head-title">
				Tabel Cetak Rincian Transaksi D2 Per Periode
			</h3>			
		</div>
		<div class="portlet__head-toolbar">
			<div class="portlet__head-wrapper">
				<div class="portlet__head-actions">
				</div>
			</div>
		</div>
	</div>
	<div class="portlet__body">
		<form class="form" action="{{ route('d2_periode.export') }}" method="GET" target="_blank">
			<div class="portlet__body">
				<div class="form-group row">
					<label for="" class="col-2 col-form-label">JK<span class="text-danger">*</span></label>
					<div class="col-10">
						<div class="radio-inline">
							<label class="radio">
								<input value="1" type="radio" name="jk" >[10,11,13]
								<span></span>
							</label>
							<label class="radio">
								<input value="2" type="radio" name="jk">[15,18]
								<span></span>
							</label>
							<label class="radio">
								<input value="3" type="radio" name="jk" checked>All
								<span></span>
							</label>
						</div>
					</div>
				</div>
				<div class="form-group row">
				<label for="" class="col-2 col-form-label">Bulan<span class="text-danger">*</span></label>
				<div class="col-4">
						<?php 
						foreach($data_tahun as $data){ 
							$tahun = substr($data->sbulan, 0, 4);
							$bulan = substr($data->sbulan, 4, 2);
							$suplesi = substr($data->sbulan, 6);
						}
						?>
						<select class="form-control select2" style="width: 100% !important;" name="bulan_mulai">
							<option value="01" <?php if($bulan == '01') echo 'selected'; ?>>Januari</option>
							<option value="02" <?php if($bulan == '02') echo 'selected'; ?>>Februari</option>
							<option value="03" <?php if($bulan == '03') echo 'selected'; ?>>Maret</option>
							<option value="04" <?php if($bulan == '04') echo 'selected'; ?>>April</option>
							<option value="05" <?php if($bulan == '05') echo 'selected'; ?>>Mei</option>
							<option value="06" <?php if($bulan == '06') echo 'selected'; ?>>Juni</option>
							<option value="07" <?php if($bulan == '07') echo 'selected'; ?>>Juli</option>
							<option value="08" <?php if($bulan == '08') echo 'selected'; ?>>Agustus</option>
							<option value="09" <?php if($bulan == '09') echo 'selected'; ?>>September</option>
							<option value="10" <?php if($bulan == '10') echo 'selected'; ?>>Oktober</option>
							<option value="11" <?php if($bulan == '11') echo 'selected'; ?>>November</option>
							<option value="12" <?php if($bulan == '12') echo 'selected'; ?>>Desember</option>
						</select>
				</div>
				<label for="" class="col-1 col-form-label text-center">S/D</label>
				<div class="col-5">
						<select class="form-control select2" style="width: 100% !important;" name="bulan_sampai">
							<option value="01" <?php if($bulan == '01') echo 'selected'; ?>>Januari</option>
							<option value="02" <?php if($bulan == '02') echo 'selected'; ?>>Februari</option>
							<option value="03" <?php if($bulan == '03') echo 'selected'; ?>>Maret</option>
							<option value="04" <?php if($bulan == '04') echo 'selected'; ?>>April</option>
							<option value="05" <?php if($bulan == '05') echo 'selected'; ?>>Mei</option>
							<option value="06" <?php if($bulan == '06') echo 'selected'; ?>>Juni</option>
							<option value="07" <?php if($bulan == '07') echo 'selected'; ?>>Juli</option>
							<option value="08" <?php if($bulan == '08') echo 'selected'; ?>>Agustus</option>
							<option value="09" <?php if($bulan == '09') echo 'selected'; ?>>September</option>
							<option value="10" <?php if($bulan == '10') echo 'selected'; ?>>Oktober</option>
							<option value="11" <?php if($bulan == '11') echo 'selected'; ?>>November</option>
							<option value="12" <?php if($bulan == '12') echo 'selected'; ?>>Desember</option>
						</select>
				</div>
				</div>
				<div class="form-group row">
				<label for="" class="col-2 col-form-label">Tahun<span class="text-danger">*</span></label>
					<div class="col-10" >
						<input class="form-control tahun" type="text" name="tahun" value="{{ $tahun }}" autocomplete="off"> 
					</div>
				</div>
				
				<div class="form-group row">
					<label for="dari-input" class="col-2 col-form-label">Sandi Perkiraan</label>
					<div class="col-10">
						<select class="cariaccount form-control" style="width: 100% !important;" name="sanper"></select>
					</div>
				</div>
				<div class="form__actions">
					<div class="row">
						<div class="col-2"></div>
						<div class="col-10">
							<a href="{{ route('default.index') }}" class="btn btn-warning"><i class="fa fa-reply"></i>Batal</a>
							<button type="submit" id="btn-save" class="btn btn-primary"><i class="fa fa-print"></i>Cetak</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function () {
	
	$('.cariaccount').select2({
		placeholder: '-Pilih-',
		allowClear: true,
		ajax: {
			url: "{{ route('d2_periode.search.account') }}",
			type : "get",
			dataType : "JSON",
			headers: {
			'X-CSRF-Token': '{{ csrf_token() }}',
			},
			delay: 250,
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
	$('#tanggal').datepicker({
		todayHighlight: true,
		orientation: "bottom left",
		autoclose: true,
		language : 'id',
		format   : 'dd MM yyyy'
	});
});
</script>
@endsection
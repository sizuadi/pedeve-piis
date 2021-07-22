@extends('layouts.app')

@push('page-styles')

@endpush

@section('content')
<div class="card card-custom card-sticky" id="kt_page_sticky_card">
    <div class="card-header">
        <div class="card-title">
            <span class="card-icon">
                <i class="flaticon2-line-chart text-primary"></i>
            </span>
            <h3 class="card-label">
                Tambah Penempatan Deposito
            </h3>
        </div>
    </div>

    <div class="card-body">
        <form method="post" id="form-create">
            @csrf
            <div class="form-group row">
                <label for="jenis-dinas-input" class="col-2 col-form-label text-right">No. Dokumen <span style="color:red;">*</span></label>
                <div class="col-10">
                    <select name="nodok" id="nodok" class="form-control selectpicker" data-live-search="true" required oninvalid="this.setCustomValidity('No. Dokumen Harus Diisi..')" onchange="setCustomValidity('')">
                        <option value="">- Pilih -</option>
                        @foreach($data_dok as $data)
                        <option data-lineno="{{$data->lineno}}" value="{{$data->docno}}">{{$data->docno}} - {{$data->keterangan}}</option>
                        @endforeach
                    </select>
                    <input class="form-control" type="hidden" value="0" name="perpanjangan" id="perpanjangan" size="6" maxlength="6" readonly style="background-color:#DCDCDC; cursor:not-allowed">
                    <input class="form-control" type="hidden" value="" name="kurs" id="kurs" size="6" maxlength="6" readonly style="background-color:#DCDCDC; cursor:not-allowed">
                    <input class="form-control" type="hidden" value="" name="lineno" id="lineno" size="6" maxlength="6" readonly style="background-color:#DCDCDC; cursor:not-allowed">
                    <input class="form-control" type="hidden" value="" name="keterangan" id="keterangan" size="50" maxlength="50" readonly style="background-color:#DCDCDC; cursor:not-allowed">
                    <input class="form-control" type="hidden" value="" id="asal" name="asal" size="2" maxlength="2" onkeyup="this.value = this.value.toUpperCase()" required oninvalid="this.setCustomValidity('Asal Harus Diisi..')" oninput="setCustomValidity('')" autocomplete='off' >
                </div>
            </div>
            <div class="form-group row">
                <label for="spd-input" class="col-2 col-form-label text-right">Bank <span style="color:red;">*</span></label>
                <div class="col-10">
                    <input  class="form-control" type="text" value="" id="namabank" name="namabank" size="30" maxlength="30" onkeyup="this.value = this.value.toUpperCase()" required oninvalid="this.setCustomValidity('Nama Bank Harus Diisi..')" oninput="setCustomValidity('')" autocomplete='off' >
                    <input  class="form-control" type="hidden" value="" id="kdbank" name="kdbank" size="30" maxlength="30" required oninvalid="this.setCustomValidity('Nama Bank Harus Diisi..')" oninput="setCustomValidity('')" autocomplete='off' >
                </div>
            </div>
            <div class="form-group row">
                <label for="spd-input" class="col-2 col-form-label text-right">Nominal <span style="color:red;">*</span></label>
                <div class="col-10">
                    <input  class="form-control" type="text" value=""  name="nominal" size="25" maxlength="25" required oninvalid="this.setCustomValidity('Nominal Harus Diisi..')" oninput="this.value = this.value.replace(/[^0-9\-]+/g, ','); setCustomValidity('')" autocomplete='off' >
                </div>
            </div>
            <div class="form-group row">
                <label for="spd-input" class="col-2 col-form-label text-right">Tgl Deposito <span style="color:red;">*</span></label>
                <div class="col-10">
                    <input  class="form-control" type="text" value="" id="tanggal" name="tanggal" size="15" maxlength="15" required oninvalid="this.setCustomValidity('Tgl Deposito Harus Diisi..')" onchange="setCustomValidity('')" autocomplete='off' >
                </div>
            </div>
            <div class="form-group row">
                <label for="spd-input" class="col-2 col-form-label text-right">Jatuh Tempo <span style="color:red;">*</span></label>
                <div class="col-10">
                    <input  class="form-control" type="text" value="" id="tanggal2" name="tanggal2" size="15" maxlength="15" required oninvalid="this.setCustomValidity('Jatuh Tempo Harus Diisi..')" onchange="setCustomValidity('')" autocomplete='off' >
                </div>
            </div>
            <div class="form-group row">
                <label for="spd-input" class="col-2 col-form-label text-right">Bunga % Tahun <span style="color:red;">*</span></label>
                <div class="col-10">
                    <input  class="form-control" type="text" value="" name="tahunbunga" size="15" maxlength="15"  required oninvalid="this.setCustomValidity('Bungan % Tahun Harus Diisi..')" oninput="this.value = this.value.replace(/[^0-9\-]+/g, ','); setCustomValidity('')" autocomplete='off' >
                </div>
            </div>
            <div class="form-group row">
                <label for="spd-input" class="col-2 col-form-label text-right">No. Seri <span style="color:red;">*</span></label>
                <div class="col-10">
                    <input  class="form-control" type="text" value="" id="noseri" name="noseri" size="15" maxlength="15" onkeyup="this.value = this.value.toUpperCase()" required oninvalid="this.setCustomValidity('No. Seri Harus Diisi..')" oninput="setCustomValidity('')" autocomplete='off' >
                </div>
            </div>
            
            <div class="kt-form__actions">
                <div class="row">
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col-10">
                        <a  href="{{route('penempatan_deposito.index')}}" class="btn btn-warning"><i class="fa fa-reply" aria-hidden="true"></i>Cancel</a>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i>Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('page-scripts')
<script type="text/javascript">
	$(document).ready(function () {
		$("#nodok").on("change", function(){
			var nodok = $(this).val();
			var lineno =$("#nodok option:selected").attr('data-lineno');
			$.ajax({
				url : "{{route('penempatan_deposito.linenoJson')}}",
				type : "POST",
				dataType: 'json',
				data : {
                    nodok:nodok,
                    lineno:lineno,
                },
				headers: {
					'X-CSRF-Token': '{{ csrf_token() }}',
                },
				success : function(data){
					$('#lineno').val(data.lineno);
					$('#keterangan').val(data.keterangan);
					$('#kdbank').val(data.kdbank);
					$('#namabank').val(data.descacct);
					var bilangan=data.nominal;
					var	number_string = bilangan.toString(),
						sisa 	= number_string.length % 3,
						rupiah 	= number_string.substr(0, sisa),
						ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
							
					if (ribuan) {
						separator = sisa ? '.' : '';
						rupiah += separator + ribuan.join('.');
					}
					$('#nominal').val(rupiah);
					$('#asal').val(data.asal);
				},
				error : function(){
					alert("Ada kesalahan controller!");
				}
			})
		});

		$("#nodok").on("change", function(){
			var nodok = $(this).val();
			$.ajax({
				url : "{{route('penempatan_deposito.kursJson')}}",
				type : "POST",
				dataType: 'json',
				data : {
					nodok:nodok
					},
				headers: {
					'X-CSRF-Token': '{{ csrf_token() }}',
					},
				success : function(data){
					$('#kurs').val(data.rate);
				},
				error : function(){
					alert("Ada kesalahan controller!");
				}
			})
		});

		$('#form-create').submit(function(){
			$.ajax({
				url  : "{{ route('penempatan_deposito.store') }}",
				type : "POST",
				data : $('#form-create').serialize(),
				dataType : "JSON",
				headers: {
				    'X-CSRF-Token': '{{ csrf_token() }}',
				},
				success : function(data) {
				console.log(data);
					Swal.fire({
						icon  : 'success',
						title : 'Data Berhasil Ditambah',
						text  : 'Berhasil',
						timer : 2000
					}).then(function() {
                        location.href = "{{ route('penempatan_deposito.index')}}";
                    });
				}, 
				error : function(){
					alert("Terjadi kesalahan, coba lagi nanti");
				}
			});	

			return false;
		});

		$('#tanggal').datepicker({
			todayHighlight: true,
			orientation: "bottom left",
			autoclose: true,
			// language : 'id',
			format   : 'dd-mm-yyyy'
		});

		$('#tanggal2').datepicker({
			todayHighlight: true,
			orientation: "bottom left",
			autoclose: true,
			// language : 'id',
			format   : 'dd-mm-yyyy'
		});
    });

    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
        return true;
    }
</script>
@endpush
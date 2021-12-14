@extends('layouts.app')

@section('breadcrumbs')
    {{ Breadcrumbs::render('set-user') }}
@endsection

@section('content')

<div class="card card-custom card-sticky" id="kt_page_sticky_card">
    <div class="card-header justify-content-start">
        <div class="card-title">
            <span class="card-icon">
                <i class="flaticon2-line-chart text-primary"></i>
            </span>
            <h3 class="card-label">
                Tambah Sosialisasi
            </h3>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <form class="form" id="formAnggaran" action="{{ route('modul_gcg.lhkpn.store') }}" method="POST" enctype="multipart/form-data">
					@csrf

                    <div class="form-group row">
						<label for="kode" class="col-2 col-form-label">Status</label>
						<div class="col-10">
							<div class="radio-inline">
                                <label class="radio">
                                    <input type="radio" name="status" checked="" value="Lengkap">
                                    <span></span>  Lengkap
                                </label>
                                <label class="radio">
                                    <input type="radio" name="status" value="Belum Lengkap">
                                    <span></span>  Belum Lengkap
                                </label>
                            </div>
						</div>
					</div>

					<div class="form-group row">
						<label for="kode" class="col-2 col-form-label">Tanggal</label>
						<div class="col-10">
							<input class="form-control datepicker" type="text" name="tanggal" id="tanggal" autocomplete="off" width="100%">
						</div>
					</div>

					<div class="form-group row">
						<label for="nama" class="col-2 col-form-label">File</label>
						<div class="col-10">
							<input type="file" name="dokumen[]" id="dokumen" autocomplete="off" multiple>
						</div>
					</div>

					<div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <a href="{{ url()->previous() }}" class="btn btn-warning"><i class="fa fa-reply" aria-hidden="true"></i> Batal</a>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i> Simpan</button>
                        </div>
                    </div>
				</form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('page-scripts')
{!! JsValidator::formRequest('App\Http\Requests\AnggaranStore', '#formAnggaran') !!}
@endpush

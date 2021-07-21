<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\AardPayroll
 *
 * @property string $kode
 * @property string|null $nama
 * @property string|null $jenis
 * @property string|null $kenapajak
 * @property string|null $lappajak
 * @property string|null $sanper
 * @property string|null $cj
 * @property string|null $jb
 * @property string|null $sanperpwt
 * @property string|null $sanperdir
 * @method static \Illuminate\Database\Eloquent\Builder|AardPayroll newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AardPayroll newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AardPayroll query()
 * @method static \Illuminate\Database\Eloquent\Builder|AardPayroll whereCj($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AardPayroll whereJb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AardPayroll whereJenis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AardPayroll whereKenapajak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AardPayroll whereKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AardPayroll whereLappajak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AardPayroll whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AardPayroll whereSanper($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AardPayroll whereSanperdir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AardPayroll whereSanperpwt($value)
 */
	class AardPayroll extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Absensi
 *
 * @property int $id
 * @property string $userid
 * @property string $tanggal
 * @property string $verifikasi
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi query()
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi whereUserid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Absensi whereVerifikasi($value)
 */
	class Absensi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Account
 *
 * @property int $kodeacct
 * @property string|null $descacct
 * @property string|null $userid
 * @property string|null $update_date
 * @property string|null $flag
 * @property string|null $jenis
 * @method static \Illuminate\Database\Eloquent\Builder|Account newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Account query()
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereDescacct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereJenis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereKodeacct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereUpdateDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Account whereUserid($value)
 */
	class Account extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Agama
 *
 * @property string $kode
 * @property string|null $nama
 * @method static \Illuminate\Database\Eloquent\Builder|Agama newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agama newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agama query()
 * @method static \Illuminate\Database\Eloquent\Builder|Agama whereKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agama whereNama($value)
 */
	class Agama extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Akta
 *
 * @property int $id
 * @property int $perusahaan_afiliasi_id
 * @property string $jenis
 * @property string $nomor_akta
 * @property string $tanggal
 * @property string $notaris
 * @property string $tmt_mulai
 * @property string $tmt_akhir
 * @property string $dokumen
 * @property string $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Akta newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Akta newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Akta query()
 * @method static \Illuminate\Database\Eloquent\Builder|Akta whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Akta whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Akta whereDokumen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Akta whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Akta whereJenis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Akta whereNomorAkta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Akta whereNotaris($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Akta wherePerusahaanAfiliasiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Akta whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Akta whereTmtAkhir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Akta whereTmtMulai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Akta whereUpdatedAt($value)
 */
	class Akta extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AnggaranDetail
 *
 * @property string|null $kode
 * @property string|null $nama
 * @property string|null $nilai
 * @property string|null $tahun
 * @property string|null $inputuser
 * @property string|null $inputdate
 * @property string|null $kode_submain
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranDetail whereInputdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranDetail whereInputuser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranDetail whereKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranDetail whereKodeSubmain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranDetail whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranDetail whereNilai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranDetail whereTahun($value)
 */
	class AnggaranDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AnggaranMain
 *
 * @property string|null $kode_main
 * @property string|null $nama_main
 * @property string|null $nilai_real
 * @property string|null $inputdate
 * @property string|null $inputuser
 * @property string|null $tahun
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AnggaranDetail[] $anggaran_detail
 * @property-read int|null $anggaran_detail_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AnggaranSubMain[] $anggaran_submain
 * @property-read int|null $anggaran_submain_count
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranMain newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranMain newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranMain query()
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranMain whereInputdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranMain whereInputuser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranMain whereKodeMain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranMain whereNamaMain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranMain whereNilaiReal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranMain whereTahun($value)
 */
	class AnggaranMain extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\AnggaranSubMain
 *
 * @property string|null $kode_main
 * @property string|null $kode_submain
 * @property string|null $nama_submain
 * @property string|null $nilai
 * @property string|null $nilai_real
 * @property string|null $inputdate
 * @property string|null $inputuser
 * @property string|null $tahun
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\AnggaranDetail[] $anggaran_detail
 * @property-read int|null $anggaran_detail_count
 * @property-read \App\Models\AnggaranMain|null $anggaran_main
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranSubMain newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranSubMain newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranSubMain query()
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranSubMain whereInputdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranSubMain whereInputuser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranSubMain whereKodeMain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranSubMain whereKodeSubmain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranSubMain whereNamaSubmain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranSubMain whereNilai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranSubMain whereNilaiReal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AnggaranSubMain whereTahun($value)
 */
	class AnggaranSubMain extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\BulanKontroller
 *
 * @property string $thnbln
 * @property string $status
 * @property string|null $opendate
 * @property string|null $stopdate
 * @property string|null $closedate
 * @property string|null $description
 * @property string|null $userid
 * @property string|null $password
 * @property string $suplesi
 * @method static \Illuminate\Database\Eloquent\Builder|BulanKontroller newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BulanKontroller newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BulanKontroller query()
 * @method static \Illuminate\Database\Eloquent\Builder|BulanKontroller whereClosedate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BulanKontroller whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BulanKontroller whereOpendate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BulanKontroller wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BulanKontroller whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BulanKontroller whereStopdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BulanKontroller whereSuplesi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BulanKontroller whereThnbln($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BulanKontroller whereUserid($value)
 */
	class BulanKontroller extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CashJudex
 *
 * @property string $kode
 * @property string|null $nama
 * @method static \Illuminate\Database\Eloquent\Builder|CashJudex newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CashJudex newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CashJudex query()
 * @method static \Illuminate\Database\Eloquent\Builder|CashJudex whereKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CashJudex whereNama($value)
 */
	class CashJudex extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DetailUmk
 *
 * @property int $no
 * @property string|null $keterangan
 * @property string|null $account
 * @property string|null $nilai
 * @property string|null $cj
 * @property string|null $jb
 * @property string|null $bagian
 * @property string|null $pk
 * @property string $no_umk
 * @property-read \App\Models\Umk $umk
 * @method static \Illuminate\Database\Eloquent\Builder|DetailUmk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailUmk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailUmk query()
 * @method static \Illuminate\Database\Eloquent\Builder|DetailUmk whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailUmk whereBagian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailUmk whereCj($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailUmk whereJb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailUmk whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailUmk whereNilai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailUmk whereNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailUmk whereNoUmk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetailUmk wherePk($value)
 */
	class DetailUmk extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DftMenu
 *
 * @property string|null $menuid
 * @property string|null $menunm
 * @property string|null $userap
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|DftMenu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DftMenu newQuery()
 * @method static \Illuminate\Database\Query\Builder|DftMenu onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DftMenu query()
 * @method static \Illuminate\Database\Eloquent\Builder|DftMenu whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DftMenu whereMenuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DftMenu whereMenunm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DftMenu whereUserap($value)
 * @method static \Illuminate\Database\Query\Builder|DftMenu withTrashed()
 * @method static \Illuminate\Database\Query\Builder|DftMenu withoutTrashed()
 */
	class DftMenu extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Direksi
 *
 * @property int $id
 * @property int $perusahaan_afiliasi_id
 * @property string $nama
 * @property string $tmt_dinas
 * @property string $akhir_masa_dinas
 * @property string $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Direksi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Direksi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Direksi query()
 * @method static \Illuminate\Database\Eloquent\Builder|Direksi whereAkhirMasaDinas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Direksi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Direksi whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Direksi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Direksi whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Direksi wherePerusahaanAfiliasiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Direksi whereTmtDinas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Direksi whereUpdatedAt($value)
 */
	class Direksi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DtlDepositoTest
 *
 * @property string $docno
 * @property int $lineno
 * @property string $bulan
 * @property string $tahun
 * @property string $haribunga
 * @property string $bungabulan
 * @property string $pph20
 * @property string $netbulan
 * @property string|null $perpanjangan
 * @property string|null $tglawal
 * @property string|null $tglakhir
 * @property string|null $accharibunga
 * @property string|null $accbungabulan
 * @property string|null $accpph20
 * @property string|null $accnetbulan
 * @method static \Illuminate\Database\Eloquent\Builder|DtlDepositoTest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DtlDepositoTest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DtlDepositoTest query()
 * @method static \Illuminate\Database\Eloquent\Builder|DtlDepositoTest whereAccbungabulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DtlDepositoTest whereAccharibunga($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DtlDepositoTest whereAccnetbulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DtlDepositoTest whereAccpph20($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DtlDepositoTest whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DtlDepositoTest whereBungabulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DtlDepositoTest whereDocno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DtlDepositoTest whereHaribunga($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DtlDepositoTest whereLineno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DtlDepositoTest whereNetbulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DtlDepositoTest wherePerpanjangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DtlDepositoTest wherePph20($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DtlDepositoTest whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DtlDepositoTest whereTglakhir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DtlDepositoTest whereTglawal($value)
 */
	class DtlDepositoTest extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Fiosd201
 *
 * @property string|null $tahun
 * @property string|null $bulan
 * @property string|null $supbln
 * @property string|null $jk
 * @property string|null $store
 * @property string|null $account
 * @property string|null $bagian
 * @property string|null $vc
 * @property string|null $ci
 * @property string|null $area
 * @property string|null $lokasi
 * @property string|null $wono
 * @property string|null $cj
 * @property string|null $jb
 * @property string|null $totprice
 * @property string|null $quantity
 * @property string|null $rate
 * @property string|null $docno
 * @property string|null $keterangan
 * @property string|null $lineno
 * @property string|null $tarif
 * @property string|null $kepada
 * @property string|null $docdate
 * @property string|null $transcode
 * @property string|null $product_code
 * @property string|null $asal
 * @property string|null $rate_pajak
 * @property string|null $rate_trans
 * @property string|null $totpricerp
 * @property string|null $totpricedl
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereAsal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereBagian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereCi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereCj($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereDocdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereDocno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereJb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereJk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereKepada($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereLineno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereLokasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereProductCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereRatePajak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereRateTrans($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereStore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereSupbln($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereTarif($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereTotprice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereTotpricedl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereTotpricerp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereTranscode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereVc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fiosd201 whereWono($value)
 */
	class Fiosd201 extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GajiPokok
 *
 * @property string $nopeg
 * @property string $mulai
 * @property string|null $sampai
 * @property string|null $gapok
 * @property string|null $keterangan
 * @property string|null $userid
 * @property string|null $tglentry
 * @property string|null $id
 * @method static \Illuminate\Database\Eloquent\Builder|GajiPokok newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GajiPokok newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GajiPokok query()
 * @method static \Illuminate\Database\Eloquent\Builder|GajiPokok whereGapok($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GajiPokok whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GajiPokok whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GajiPokok whereMulai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GajiPokok whereNopeg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GajiPokok whereSampai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GajiPokok whereTglentry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GajiPokok whereUserid($value)
 */
	class GajiPokok extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GcgCoc
 *
 * @property int $id
 * @property int $lampiran
 * @property string $nopeg
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GcgCoc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgCoc newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgCoc query()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgCoc whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgCoc whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgCoc whereLampiran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgCoc whereNopeg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgCoc whereUpdatedAt($value)
 */
	class GcgCoc extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GcgCoi
 *
 * @method static \Illuminate\Database\Eloquent\Builder|GcgCoi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgCoi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgCoi query()
 */
	class GcgCoi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GcgFungsi
 *
 * @property int $id
 * @property string $nama
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GcgFungsi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgFungsi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgFungsi query()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgFungsi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgFungsi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgFungsi whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgFungsi whereUpdatedAt($value)
 */
	class GcgFungsi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GcgGratifikasi
 *
 * @property int $id
 * @property string|null $nopeg
 * @property string|null $gift_last_month
 * @property string $tgl_gratifikasi
 * @property string|null $status
 * @property string $bentuk
 * @property string|null $nilai
 * @property string|null $jumlah
 * @property string|null $pemberi
 * @property string|null $penerima
 * @property string|null $peminta
 * @property string|null $keterangan
 * @property string|null $catatan
 * @property string $jenis_gratifikasi
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Pekerja|null $pekerja
 * @property-read \App\Models\UserPdv|null $userpdv
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi query()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi whereBentuk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi whereCatatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi whereGiftLastMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi whereJenisGratifikasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi whereJumlah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi whereNilai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi whereNopeg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi wherePemberi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi wherePeminta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi wherePenerima($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi whereTglGratifikasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgGratifikasi whereUpdatedAt($value)
 */
	class GcgGratifikasi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GcgJabatan
 *
 * @property int $id
 * @property string $nama
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|GcgJabatan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgJabatan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgJabatan query()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgJabatan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgJabatan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgJabatan whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgJabatan whereUpdatedAt($value)
 */
	class GcgJabatan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GcgLhkpn
 *
 * @property int $id
 * @property string $status
 * @property string $dokumen
 * @property string $tanggal
 * @property string $nopeg
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Pekerja $pekerja
 * @method static \Illuminate\Database\Eloquent\Builder|GcgLhkpn newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgLhkpn newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgLhkpn query()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgLhkpn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgLhkpn whereDokumen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgLhkpn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgLhkpn whereNopeg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgLhkpn whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgLhkpn whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgLhkpn whereUpdatedAt($value)
 */
	class GcgLhkpn extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GcgSosialisasi
 *
 * @property int $id
 * @property string $keterangan
 * @property string $dokumen
 * @property string $nopeg
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Pekerja $pekerja
 * @method static \Illuminate\Database\Eloquent\Builder|GcgSosialisasi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgSosialisasi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgSosialisasi query()
 * @method static \Illuminate\Database\Eloquent\Builder|GcgSosialisasi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgSosialisasi whereDokumen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgSosialisasi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgSosialisasi whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgSosialisasi whereNopeg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GcgSosialisasi whereUpdatedAt($value)
 */
	class GcgSosialisasi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GolonganGaji
 *
 * @property string $nopeg
 * @property string $tanggal
 * @property string $golgaji
 * @property string|null $userid
 * @property string|null $tglentry
 * @method static \Illuminate\Database\Eloquent\Builder|GolonganGaji newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GolonganGaji newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|GolonganGaji query()
 * @method static \Illuminate\Database\Eloquent\Builder|GolonganGaji whereGolgaji($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GolonganGaji whereNopeg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GolonganGaji whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GolonganGaji whereTglentry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|GolonganGaji whereUserid($value)
 */
	class GolonganGaji extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\HistoryOb
 *
 * @property string $thnblnsup
 * @property string|null $user_id
 * @property string|null $tgl_buat
 * @property string|null $no_jurnal_rp
 * @property string|null $no_jurnal_dl
 * @property string|null $thnblnsup_lalu
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryOb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryOb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryOb query()
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryOb whereNoJurnalDl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryOb whereNoJurnalRp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryOb whereTglBuat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryOb whereThnblnsup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryOb whereThnblnsupLalu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HistoryOb whereUserId($value)
 */
	class HistoryOb extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Jabatan
 *
 * @property string $nopeg
 * @property string $kdbag
 * @property string $kdjab
 * @property string|null $mulai
 * @property string|null $sampai
 * @property string|null $noskep
 * @property string|null $tglskep
 * @property string|null $userid
 * @property string|null $tglentry
 * @property string|null $id
 * @property-read \App\Models\KodeBagian $kode_bagian
 * @property-read \App\Models\KodeJabatan $kode_jabatan
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan whereKdbag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan whereKdjab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan whereMulai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan whereNopeg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan whereNoskep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan whereSampai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan whereTglentry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan whereTglskep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Jabatan whereUserid($value)
 */
	class Jabatan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\JenisBiaya
 *
 * @property string $kode
 * @property string|null $keterangan
 * @property string|null $kode_sub
 * @property string|null $nilai
 * @property string|null $nilai_real
 * @property string|null $inputdate
 * @property string|null $inputuser
 * @method static \Illuminate\Database\Eloquent\Builder|JenisBiaya newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JenisBiaya newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JenisBiaya query()
 * @method static \Illuminate\Database\Eloquent\Builder|JenisBiaya whereInputdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JenisBiaya whereInputuser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JenisBiaya whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JenisBiaya whereKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JenisBiaya whereKodeSub($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JenisBiaya whereNilai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JenisBiaya whereNilaiReal($value)
 */
	class JenisBiaya extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\JurumDoc
 *
 * @property string $docno
 * @property string|null $thnbln
 * @property string|null $jk
 * @property string|null $suplesi
 * @property string|null $store
 * @property string|null $kepada
 * @property string|null $keterangan
 * @property string|null $ci
 * @property string|null $rate
 * @property string|null $debet
 * @property string|null $kredit
 * @property string|null $posted
 * @property string|null $posteddate
 * @property string|null $inputdate
 * @property string|null $updatedate
 * @property string|null $inputid
 * @property string|null $updateid
 * @property string|null $postid
 * @property string|null $voucher
 * @property string|null $postedid
 * @property string|null $acrual
 * @property string|null $bacrual
 * @property string|null $ref_no
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc query()
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereAcrual($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereBacrual($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereCi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereDebet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereDocno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereInputdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereInputid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereJk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereKepada($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereKredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc wherePosted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc wherePosteddate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc wherePostedid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc wherePostid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereRefNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereStore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereSuplesi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereThnbln($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereUpdatedate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereUpdateid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumDoc whereVoucher($value)
 */
	class JurumDoc extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\JurumLine
 *
 * @property string $docno
 * @property int $lineno
 * @property string $account
 * @property string|null $area
 * @property string|null $lokasi
 * @property string|null $bagian
 * @property string|null $pk
 * @property string $jb
 * @property string|null $rate
 * @property string|null $keterangan
 * @property string|null $verified
 * @property string|null $verifieddate
 * @property string|null $inputdate
 * @property string|null $updatedate
 * @property string|null $thnbln
 * @property string|null $jk
 * @property string|null $store
 * @property string|null $voucher
 * @property string|null $debet
 * @property string|null $kredit
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine query()
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereBagian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereDebet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereDocno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereInputdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereJb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereJk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereKredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereLineno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereLokasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine wherePk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereStore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereThnbln($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereUpdatedate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereVerifieddate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JurumLine whereVoucher($value)
 */
	class JurumLine extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Kasdoc
 *
 * @property string $docno
 * @property string|null $thnbln
 * @property string|null $jk
 * @property string|null $store
 * @property string|null $ci
 * @property string|null $voucher
 * @property string|null $kepada
 * @property string|null $debet
 * @property string|null $kredit
 * @property string|null $rekap
 * @property string|null $rekapdate
 * @property string|null $original
 * @property string|null $originaldate
 * @property string|null $approved
 * @property string|null $approveddate
 * @property string|null $approvedpwd
 * @property string|null $verified
 * @property string|null $verifieddate
 * @property string|null $paid
 * @property string|null $paiddate
 * @property string|null $posted
 * @property string|null $posteddate
 * @property string|null $inputdate
 * @property string|null $inputpwd
 * @property string|null $updatedate
 * @property string|null $updatepwd
 * @property string|null $anggaran
 * @property string|null $keterangan
 * @property string|null $mrs_no
 * @property string|null $rate
 * @property string|null $asal
 * @property string|null $rate_pajak
 * @property string|null $asal_date
 * @property string|null $nilai_dok
 * @property string|null $dok_penutup
 * @property string|null $kd_kepada
 * @property string|null $jenis_kepada
 * @property string|null $verifiedby
 * @property string|null $originalby
 * @property string|null $postedby
 * @property string|null $paidby
 * @property string|null $tgl_kurs
 * @property string|null $flag_voucher
 * @property string|null $ref_no
 * @property string|null $ket1
 * @property string|null $ket2
 * @property string|null $ket3
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Kasline[] $kasline
 * @property-read int|null $kasline_count
 * @property-read \App\Models\StoreJK|null $storejk
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereAnggaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereApproveddate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereApprovedpwd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereAsal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereAsalDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereCi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereDebet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereDocno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereDokPenutup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereFlagVoucher($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereInputdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereInputpwd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereJenisKepada($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereJk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereKdKepada($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereKepada($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereKet1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereKet2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereKet3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereKredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereMrsNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereNilaiDok($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereOriginal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereOriginalby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereOriginaldate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc wherePaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc wherePaidby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc wherePaiddate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc wherePosted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc wherePostedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc wherePosteddate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereRatePajak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereRefNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereRekap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereRekapdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereStore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereTglKurs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereThnbln($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereUpdatedate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereUpdatepwd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereVerifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereVerifieddate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasdoc whereVoucher($value)
 */
	class Kasdoc extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Kasline
 *
 * @property string $docno
 * @property int $lineno
 * @property string|null $account
 * @property string|null $area
 * @property string|null $lokasi
 * @property string|null $bagian
 * @property string|null $pk
 * @property string|null $jb
 * @property string|null $cj
 * @property string|null $totprice
 * @property string|null $keterangan
 * @property string|null $verified
 * @property string|null $verifieddate
 * @property string|null $verifiedpwd
 * @property string|null $inputdate
 * @property string|null $inputpwd
 * @property string|null $updatedate
 * @property string|null $updatepwd
 * @property string|null $voucher
 * @property string|null $pau
 * @property string|null $penutup
 * @property string|null $paudate
 * @property string|null $paupwd
 * @property string|null $nopajak
 * @property string|null $tglpajak
 * @property string|null $thnbln
 * @property string|null $rekap
 * @property string|null $totpricerp
 * @property string|null $ref_no
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereBagian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereCj($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereDocno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereInputdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereInputpwd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereJb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereLineno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereLokasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereNopajak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline wherePau($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline wherePaudate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline wherePaupwd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline wherePenutup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline wherePk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereRefNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereRekap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereTglpajak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereThnbln($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereTotprice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereTotpricerp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereUpdatedate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereUpdatepwd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereVerifieddate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereVerifiedpwd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kasline whereVoucher($value)
 */
	class Kasline extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Keluarga
 *
 * @property string|null $nopeg
 * @property string|null $status
 * @property string|null $nama
 * @property string|null $tempatlahir
 * @property string|null $tgllahir
 * @property string|null $agama
 * @property string|null $goldarah
 * @property string|null $kodependidikan
 * @property string|null $tempatpendidikan
 * @property string|null $kodept
 * @property string|null $userid
 * @property string|null $tglentry
 * @property string|null $photo
 * @property-read \App\Models\Agama|null $kode_agama
 * @method static \Illuminate\Database\Eloquent\Builder|Keluarga newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Keluarga newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Keluarga query()
 * @method static \Illuminate\Database\Eloquent\Builder|Keluarga whereAgama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Keluarga whereGoldarah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Keluarga whereKodependidikan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Keluarga whereKodept($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Keluarga whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Keluarga whereNopeg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Keluarga wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Keluarga whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Keluarga whereTempatlahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Keluarga whereTempatpendidikan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Keluarga whereTglentry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Keluarga whereTgllahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Keluarga whereUserid($value)
 */
	class Keluarga extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KodeBagian
 *
 * @property string $kode
 * @property string $nama
 * @method static \Illuminate\Database\Eloquent\Builder|KodeBagian newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KodeBagian newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KodeBagian query()
 * @method static \Illuminate\Database\Eloquent\Builder|KodeBagian whereKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KodeBagian whereNama($value)
 */
	class KodeBagian extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KodeJabatan
 *
 * @property string $kdbag
 * @property string $kdjab
 * @property string $keterangan
 * @property string|null $goljob
 * @property string|null $tunjangan
 * @property-read \App\Models\KodeBagian $kode_bagian
 * @method static \Illuminate\Database\Eloquent\Builder|KodeJabatan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KodeJabatan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KodeJabatan query()
 * @method static \Illuminate\Database\Eloquent\Builder|KodeJabatan whereGoljob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KodeJabatan whereKdbag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KodeJabatan whereKdjab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KodeJabatan whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KodeJabatan whereTunjangan($value)
 */
	class KodeJabatan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Komisaris
 *
 * @property int $id
 * @property int $perusahaan_afiliasi_id
 * @property string $nama
 * @property string $tmt_dinas
 * @property string $akhir_masa_dinas
 * @property string $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Komisaris newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Komisaris newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Komisaris query()
 * @method static \Illuminate\Database\Eloquent\Builder|Komisaris whereAkhirMasaDinas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Komisaris whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Komisaris whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Komisaris whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Komisaris whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Komisaris wherePerusahaanAfiliasiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Komisaris whereTmtDinas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Komisaris whereUpdatedAt($value)
 */
	class Komisaris extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\KoreksiGaji
 *
 * @property string $tahun
 * @property string $bulan
 * @property string $nopek
 * @property string $aard
 * @property string $jmlcc
 * @property string $ccl
 * @property string $nilai
 * @property string $userid
 * @method static \Illuminate\Database\Eloquent\Builder|KoreksiGaji newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KoreksiGaji newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|KoreksiGaji query()
 * @method static \Illuminate\Database\Eloquent\Builder|KoreksiGaji whereAard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KoreksiGaji whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KoreksiGaji whereCcl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KoreksiGaji whereJmlcc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KoreksiGaji whereNilai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KoreksiGaji whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KoreksiGaji whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|KoreksiGaji whereUserid($value)
 */
	class KoreksiGaji extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Kursus
 *
 * @property string $nopeg
 * @property string $mulai
 * @property string|null $sampai
 * @property string|null $nama
 * @property string|null $penyelenggara
 * @property string|null $kota
 * @property string|null $negara
 * @property string|null $keterangan
 * @property string|null $userid
 * @property string|null $tglentry
 * @method static \Illuminate\Database\Eloquent\Builder|Kursus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kursus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Kursus query()
 * @method static \Illuminate\Database\Eloquent\Builder|Kursus whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kursus whereKota($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kursus whereMulai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kursus whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kursus whereNegara($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kursus whereNopeg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kursus wherePenyelenggara($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kursus whereSampai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kursus whereTglentry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Kursus whereUserid($value)
 */
	class Kursus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Lokasi
 *
 * @property string $kodelokasi
 * @property string|null $nama
 * @property string|null $area
 * @property string|null $bag_nondept
 * @property string|null $gruplokasi
 * @method static \Illuminate\Database\Eloquent\Builder|Lokasi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lokasi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lokasi query()
 * @method static \Illuminate\Database\Eloquent\Builder|Lokasi whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lokasi whereBagNondept($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lokasi whereGruplokasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lokasi whereKodelokasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lokasi whereNama($value)
 */
	class Lokasi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MainAccount
 *
 * @property string $jenis
 * @property string|null $batas_awal
 * @property string|null $batas_akhir
 * @property string|null $urutan
 * @property string|null $pengali
 * @property string|null $pengali_tampil
 * @property string|null $sub_akun
 * @property string|null $lokasi
 * @method static \Illuminate\Database\Eloquent\Builder|MainAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MainAccount newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MainAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|MainAccount whereBatasAkhir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainAccount whereBatasAwal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainAccount whereJenis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainAccount whereLokasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainAccount wherePengali($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainAccount wherePengaliTampil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainAccount whereSubAkun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MainAccount whereUrutan($value)
 */
	class MainAccount extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MasterBebanPerusahaan
 *
 * @property string $tahun
 * @property string $bulan
 * @property string $nopek
 * @property string $aard
 * @property string|null $lastamount
 * @property string|null $curramount
 * @property string|null $userid
 * @property string|null $statusver
 * @property string|null $verifikator
 * @property string|null $tglver
 * @property-read \App\Models\AardPayroll $aard_payroll
 * @property-read \App\Models\Pekerja $pekerja
 * @method static \Illuminate\Database\Eloquent\Builder|MasterBebanPerusahaan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterBebanPerusahaan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterBebanPerusahaan query()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterBebanPerusahaan whereAard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterBebanPerusahaan whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterBebanPerusahaan whereCurramount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterBebanPerusahaan whereLastamount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterBebanPerusahaan whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterBebanPerusahaan whereStatusver($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterBebanPerusahaan whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterBebanPerusahaan whereTglver($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterBebanPerusahaan whereUserid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterBebanPerusahaan whereVerifikator($value)
 */
	class MasterBebanPerusahaan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MasterHutang
 *
 * @property string $tahun
 * @property string $bulan
 * @property string $nopek
 * @property string $aard
 * @property string|null $lastamount
 * @property string|null $curramount
 * @property string|null $userid
 * @property-read \App\Models\AardPayroll $aard_payroll
 * @property-read \App\Models\Pekerja $pekerja
 * @method static \Illuminate\Database\Eloquent\Builder|MasterHutang newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterHutang newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterHutang query()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterHutang whereAard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterHutang whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterHutang whereCurramount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterHutang whereLastamount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterHutang whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterHutang whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterHutang whereUserid($value)
 */
	class MasterHutang extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MasterInsentif
 *
 * @property string $tahun
 * @property string $bulan
 * @property string $nopek
 * @property string $aard
 * @property string|null $jmlcc
 * @property string|null $ccl
 * @property string|null $nilai
 * @property string|null $userid
 * @property string|null $status
 * @property string|null $tahunins
 * @property string|null $pajakins
 * @property string|null $pajakgaji
 * @property string|null $pengali
 * @property string|null $ut
 * @property string|null $keterangan
 * @property string|null $potongan
 * @property-read \App\Models\AardPayroll $aard_payroll
 * @property-read \App\Models\Pekerja $pekerja
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif query()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif whereAard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif whereCcl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif whereJmlcc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif whereNilai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif wherePajakgaji($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif wherePajakins($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif wherePengali($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif wherePotongan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif whereTahunins($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif whereUserid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterInsentif whereUt($value)
 */
	class MasterInsentif extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MasterThr
 *
 * @property string $tahun
 * @property string $bulan
 * @property string $nopek
 * @property string $aard
 * @property string|null $jmlcc
 * @property string|null $ccl
 * @property string|null $nilai
 * @property string|null $userid
 * @property string|null $status
 * @property string|null $tahunthr
 * @property string|null $pajakthr
 * @property string|null $pajakgaji
 * @property string|null $pengali
 * @property string|null $ut
 * @property string|null $tbiayahidup
 * @property string|null $tjabatan
 * @property string|null $keterangan
 * @property string|null $potongan
 * @property string|null $koreksi
 * @property-read \App\Models\AardPayroll $aard_payroll
 * @property-read \App\Models\Pekerja $pekerja
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr query()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr whereAard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr whereCcl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr whereJmlcc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr whereKoreksi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr whereNilai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr wherePajakgaji($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr wherePajakthr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr wherePengali($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr wherePotongan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr whereTahunthr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr whereTbiayahidup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr whereTjabatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr whereUserid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterThr whereUt($value)
 */
	class MasterThr extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MasterUpah
 *
 * @property string $tahun
 * @property string $bulan
 * @property string $nopek
 * @property string $aard
 * @property string|null $jmlcc
 * @property string|null $ccl
 * @property string|null $nilai
 * @property string|null $userid
 * @property-read \App\Models\AardPayroll $aard_payroll
 * @property-read \App\Models\Pekerja $pekerja
 * @method static \Illuminate\Database\Eloquent\Builder|MasterUpah newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterUpah newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterUpah query()
 * @method static \Illuminate\Database\Eloquent\Builder|MasterUpah whereAard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterUpah whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterUpah whereCcl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterUpah whereJmlcc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterUpah whereNilai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterUpah whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterUpah whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MasterUpah whereUserid($value)
 */
	class MasterUpah extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MtrDeposito
 *
 * @property string $docno
 * @property int $lineno
 * @property string|null $tgldep
 * @property string|null $tgltempo
 * @property string|null $bungatahun
 * @property string|null $asal
 * @property string|null $noseri
 * @property string|null $nominal
 * @property string|null $kdbank
 * @property string|null $keterangan
 * @property string|null $proses
 * @property string|null $perpanjangan
 * @property string|null $cair
 * @property string|null $kurs
 * @property string|null $status
 * @method static \Illuminate\Database\Eloquent\Builder|MtrDeposito newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MtrDeposito newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MtrDeposito query()
 * @method static \Illuminate\Database\Eloquent\Builder|MtrDeposito whereAsal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MtrDeposito whereBungatahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MtrDeposito whereCair($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MtrDeposito whereDocno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MtrDeposito whereKdbank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MtrDeposito whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MtrDeposito whereKurs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MtrDeposito whereLineno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MtrDeposito whereNominal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MtrDeposito whereNoseri($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MtrDeposito wherePerpanjangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MtrDeposito whereProses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MtrDeposito whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MtrDeposito whereTgldep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MtrDeposito whereTgltempo($value)
 */
	class MtrDeposito extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PPanjarDetail
 *
 * @property int $no
 * @property string $no_ppanjar
 * @property string|null $keterangan
 * @property string|null $nilai
 * @property string|null $mulai
 * @property string|null $sampai
 * @property string|null $total
 * @property string $nopek
 * @property string|null $qty
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarDetail whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarDetail whereMulai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarDetail whereNilai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarDetail whereNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarDetail whereNoPpanjar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarDetail whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarDetail whereQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarDetail whereSampai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarDetail whereTotal($value)
 */
	class PPanjarDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PPanjarHeader
 *
 * @property string $no_ppanjar
 * @property string|null $no_panjar
 * @property string|null $keterangan
 * @property string|null $tgl_ppanjar
 * @property string $nopek
 * @property string|null $jmlpanjar
 * @property string|null $pangkat
 * @property string|null $gol
 * @property string|null $nama
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\PanjarHeader|null $panjar_header
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PPanjarDetail[] $ppanjar_detail
 * @property-read int|null $ppanjar_detail_count
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarHeader newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarHeader newQuery()
 * @method static \Illuminate\Database\Query\Builder|PPanjarHeader onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarHeader query()
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarHeader whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarHeader whereGol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarHeader whereJmlpanjar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarHeader whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarHeader whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarHeader whereNoPanjar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarHeader whereNoPpanjar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarHeader whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarHeader wherePangkat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PPanjarHeader whereTglPpanjar($value)
 * @method static \Illuminate\Database\Query\Builder|PPanjarHeader withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PPanjarHeader withoutTrashed()
 */
	class PPanjarHeader extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PUmkDetail
 *
 * @property int $no
 * @property string|null $keterangan
 * @property string|null $account
 * @property string|null $nilai
 * @property string|null $cj
 * @property string|null $jb
 * @property string|null $bagian
 * @property string|null $pk
 * @property string $no_pumk
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkDetail whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkDetail whereBagian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkDetail whereCj($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkDetail whereJb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkDetail whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkDetail whereNilai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkDetail whereNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkDetail whereNoPumk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkDetail wherePk($value)
 */
	class PUmkDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PUmkHeader
 *
 * @property string|null $tgl_pumk
 * @property string|null $app_sdm
 * @property string|null $app_sdm_oleh
 * @property string|null $app_sdm_tgl
 * @property string|null $app_pbd_oleh
 * @property string|null $app_pbd_tgl
 * @property string|null $no_kas
 * @property string|null $bulan_buku
 * @property string|null $keterangan
 * @property string|null $app_pbd
 * @property string $no_umk
 * @property string $no_pumk
 * @property string|null $nopek
 * @property string|null $nama
 * @property string|null $eselon
 * @property-read \App\Models\Pekerja|null $pekerja
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PUmkDetail[] $pumk_detail
 * @property-read int|null $pumk_detail_count
 * @property-read \App\Models\UmkHeader $umk_header
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkHeader newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkHeader newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkHeader query()
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkHeader whereAppPbd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkHeader whereAppPbdOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkHeader whereAppPbdTgl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkHeader whereAppSdm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkHeader whereAppSdmOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkHeader whereAppSdmTgl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkHeader whereBulanBuku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkHeader whereEselon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkHeader whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkHeader whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkHeader whereNoKas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkHeader whereNoPumk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkHeader whereNoUmk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkHeader whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PUmkHeader whereTglPumk($value)
 */
	class PUmkHeader extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PajakInput
 *
 * @property string|null $tahun
 * @property string|null $bulan
 * @property string|null $jenis
 * @property string|null $nopek
 * @property string|null $nilai
 * @property string|null $pajak
 * @method static \Illuminate\Database\Eloquent\Builder|PajakInput newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PajakInput newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PajakInput query()
 * @method static \Illuminate\Database\Eloquent\Builder|PajakInput whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PajakInput whereJenis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PajakInput whereNilai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PajakInput whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PajakInput wherePajak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PajakInput whereTahun($value)
 */
	class PajakInput extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PanjarDetail
 *
 * @property int $no
 * @property string $no_panjar
 * @property string|null $keterangan
 * @property string|null $nopek
 * @property string|null $nama
 * @property string|null $jabatan
 * @property string|null $status
 * @property string|null $panjar
 * @property-read \App\Models\PanjarHeader $panjar_header
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarDetail whereJabatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarDetail whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarDetail whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarDetail whereNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarDetail whereNoPanjar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarDetail whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarDetail wherePanjar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarDetail whereStatus($value)
 */
	class PanjarDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PanjarHeader
 *
 * @property string $no_panjar
 * @property string|null $dari
 * @property string|null $app_sdm
 * @property string|null $app_sdm_oleh
 * @property string|null $app_sdm_tgl
 * @property string|null $keterangan
 * @property string|null $jenis_dinas
 * @property string $mulai
 * @property string $sampai
 * @property string $nopek
 * @property string|null $tujuan
 * @property string|null $atasan
 * @property string|null $kendaraan
 * @property string|null $ditanggung_oleh
 * @property string|null $nama
 * @property string|null $pangkat
 * @property string|null $gol
 * @property string|null $jabatan
 * @property string|null $eselon
 * @property string|null $ktp
 * @property string|null $menyetujui
 * @property string|null $menyetujui_keu
 * @property string|null $jum_panjar
 * @property string|null $tgl_panjar
 * @property string|null $no_umk
 * @property string|null $atasan_jab
 * @property string|null $menyetujui_jab
 * @property string|null $personalia
 * @property string|null $personalia_jab
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\PanjarDetail[] $panjar_detail
 * @property-read int|null $panjar_detail_count
 * @property-read \App\Models\PPanjarHeader|null $ppanjar_header
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader newQuery()
 * @method static \Illuminate\Database\Query\Builder|PanjarHeader onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader query()
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereAppSdm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereAppSdmOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereAppSdmTgl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereAtasan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereAtasanJab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereDari($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereDitanggungOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereEselon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereGol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereJabatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereJenisDinas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereJumPanjar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereKendaraan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereKtp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereMenyetujui($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereMenyetujuiJab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereMenyetujuiKeu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereMulai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereNoPanjar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereNoUmk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader wherePangkat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader wherePersonalia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader wherePersonaliaJab($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereSampai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereTglPanjar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PanjarHeader whereTujuan($value)
 * @method static \Illuminate\Database\Query\Builder|PanjarHeader withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PanjarHeader withoutTrashed()
 */
	class PanjarHeader extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PayAard
 *
 * @property string $kode
 * @property string|null $nama
 * @property string|null $jenis
 * @property string|null $kenapajak
 * @property string|null $lappajak
 * @property string|null $sanper
 * @property string|null $cj
 * @property string|null $jb
 * @property string|null $sanperpwt
 * @property string|null $sanperdir
 * @method static \Illuminate\Database\Eloquent\Builder|PayAard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayAard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayAard query()
 * @method static \Illuminate\Database\Eloquent\Builder|PayAard whereCj($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayAard whereJb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayAard whereJenis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayAard whereKenapajak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayAard whereKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayAard whereLappajak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayAard whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayAard whereSanper($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayAard whereSanperdir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayAard whereSanperpwt($value)
 */
	class PayAard extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PayDanaPensiun
 *
 * @property string|null $pribadi
 * @property string|null $perusahaan
 * @property string|null $perusahaan2
 * @property string|null $perusahaan3
 * @method static \Illuminate\Database\Eloquent\Builder|PayDanaPensiun newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayDanaPensiun newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayDanaPensiun query()
 * @method static \Illuminate\Database\Eloquent\Builder|PayDanaPensiun wherePerusahaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayDanaPensiun wherePerusahaan2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayDanaPensiun wherePerusahaan3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayDanaPensiun wherePribadi($value)
 */
	class PayDanaPensiun extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PayGapokBulanan
 *
 * @property string|null $tahun
 * @property string|null $bulan
 * @property string|null $nopek
 * @property string|null $jumlah
 * @method static \Illuminate\Database\Eloquent\Builder|PayGapokBulanan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayGapokBulanan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayGapokBulanan query()
 * @method static \Illuminate\Database\Eloquent\Builder|PayGapokBulanan whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayGapokBulanan whereJumlah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayGapokBulanan whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayGapokBulanan whereTahun($value)
 */
	class PayGapokBulanan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PayHonor
 *
 * @property string $tahun
 * @property string $bulan
 * @property string $nopek
 * @property string $aard
 * @property string|null $jmlcc
 * @property string|null $ccl
 * @property string $nilai
 * @property string $userid
 * @property string $pajak
 * @method static \Illuminate\Database\Eloquent\Builder|PayHonor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayHonor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayHonor query()
 * @method static \Illuminate\Database\Eloquent\Builder|PayHonor whereAard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayHonor whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayHonor whereCcl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayHonor whereJmlcc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayHonor whereNilai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayHonor whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayHonor wherePajak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayHonor whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayHonor whereUserid($value)
 */
	class PayHonor extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PayKoreksi
 *
 * @property string $tahun
 * @property string $bulan
 * @property string $nopek
 * @property string $aard
 * @property string $jmlcc
 * @property string $ccl
 * @property string $nilai
 * @property string $userid
 * @method static \Illuminate\Database\Eloquent\Builder|PayKoreksi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayKoreksi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayKoreksi query()
 * @method static \Illuminate\Database\Eloquent\Builder|PayKoreksi whereAard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayKoreksi whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayKoreksi whereCcl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayKoreksi whereJmlcc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayKoreksi whereNilai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayKoreksi whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayKoreksi whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayKoreksi whereUserid($value)
 */
	class PayKoreksi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PayLembur
 *
 * @property string $tanggal
 * @property string $nopek
 * @property string|null $libur
 * @property string|null $mulai
 * @property string|null $sampai
 * @property string|null $makanpg
 * @property string|null $makansg
 * @property string|null $makanml
 * @property string|null $transport
 * @property string|null $userid
 * @property string|null $lembur
 * @property string|null $bulan
 * @property string|null $tahun
 * @method static \Illuminate\Database\Eloquent\Builder|PayLembur newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayLembur newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayLembur query()
 * @method static \Illuminate\Database\Eloquent\Builder|PayLembur whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayLembur whereLembur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayLembur whereLibur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayLembur whereMakanml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayLembur whereMakanpg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayLembur whereMakansg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayLembur whereMulai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayLembur whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayLembur whereSampai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayLembur whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayLembur whereTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayLembur whereTransport($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayLembur whereUserid($value)
 */
	class PayLembur extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PayMtrPkpp
 *
 * @property string|null $id_pinjaman
 * @property string|null $nopek
 * @property string|null $jml_pinjaman
 * @property string|null $tenor
 * @property string|null $mulai
 * @property string|null $sampai
 * @property string|null $angsuran
 * @property string|null $cair
 * @property string|null $lunas
 * @property string|null $no_kontrak
 * @method static \Illuminate\Database\Eloquent\Builder|PayMtrPkpp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayMtrPkpp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayMtrPkpp query()
 * @method static \Illuminate\Database\Eloquent\Builder|PayMtrPkpp whereAngsuran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayMtrPkpp whereCair($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayMtrPkpp whereIdPinjaman($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayMtrPkpp whereJmlPinjaman($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayMtrPkpp whereLunas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayMtrPkpp whereMulai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayMtrPkpp whereNoKontrak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayMtrPkpp whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayMtrPkpp whereSampai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayMtrPkpp whereTenor($value)
 */
	class PayMtrPkpp extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PayPotongan
 *
 * @property string $tahun
 * @property string $bulan
 * @property string $nopek
 * @property string $aard
 * @property string|null $jmlcc
 * @property string|null $ccl
 * @property string|null $nilai
 * @property string|null $userid
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotongan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotongan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotongan query()
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotongan whereAard($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotongan whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotongan whereCcl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotongan whereJmlcc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotongan whereNilai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotongan whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotongan whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotongan whereUserid($value)
 */
	class PayPotongan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PayPotonganInsentif
 *
 * @property string|null $tahun
 * @property string|null $bulan
 * @property string|null $nopek
 * @property string|null $nilai
 * @property string|null $userid
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganInsentif newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganInsentif newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganInsentif query()
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganInsentif whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganInsentif whereNilai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganInsentif whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganInsentif whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganInsentif whereUserid($value)
 */
	class PayPotonganInsentif extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PayPotonganRevo
 *
 * @property string $tahun
 * @property string $bulan
 * @property string $nopek
 * @property string $aardpot
 * @property string|null $jmlcc
 * @property string|null $ccl
 * @property string|null $nilai
 * @property string $aardhut
 * @property string|null $awal
 * @property string|null $akhir
 * @property string|null $totalhut
 * @property string|null $userid
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganRevo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganRevo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganRevo query()
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganRevo whereAardhut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganRevo whereAardpot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganRevo whereAkhir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganRevo whereAwal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganRevo whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganRevo whereCcl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganRevo whereJmlcc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganRevo whereNilai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganRevo whereNopek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganRevo whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganRevo whereTotalhut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayPotonganRevo whereUserid($value)
 */
	class PayPotonganRevo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PayTabungan
 *
 * @property string|null $perusahaan
 * @method static \Illuminate\Database\Eloquent\Builder|PayTabungan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayTabungan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayTabungan query()
 * @method static \Illuminate\Database\Eloquent\Builder|PayTabungan wherePerusahaan($value)
 */
	class PayTabungan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PayTunjangan
 *
 * @property string $golongan
 * @property string|null $nilai
 * @method static \Illuminate\Database\Eloquent\Builder|PayTunjangan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayTunjangan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PayTunjangan query()
 * @method static \Illuminate\Database\Eloquent\Builder|PayTunjangan whereGolongan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PayTunjangan whereNilai($value)
 */
	class PayTunjangan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pekerja
 *
 * @property string $nopeg
 * @property string|null $nama
 * @property string|null $status
 * @property string|null $tgllahir
 * @property string|null $tempatlhr
 * @property string|null $proplhr
 * @property string|null $agama
 * @property string|null $goldarah
 * @property string|null $notlp
 * @property string|null $kodekeluarga
 * @property string|null $noydp
 * @property string|null $noastek
 * @property string|null $tglaktifdns
 * @property string|null $alamat1
 * @property string|null $alamat2
 * @property string|null $alamat3
 * @property string|null $gelar1
 * @property string|null $gelar2
 * @property string|null $gelar3
 * @property string|null $nohp
 * @property string|null $gender
 * @property string|null $npwp
 * @property string|null $photo
 * @property string|null $userid
 * @property string|null $tglentry
 * @property string|null $fasilitas
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property string|null $noktp
 * @property string|null $noabsen
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Jabatan[] $jabatan
 * @property-read int|null $jabatan_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Jabatan[] $jabatan_latest
 * @property-read int|null $jabatan_latest_count
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja newQuery()
 * @method static \Illuminate\Database\Query\Builder|Pekerja onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereAgama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereAlamat1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereAlamat2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereAlamat3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereFasilitas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereGelar1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereGelar2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereGelar3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereGoldarah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereKodekeluarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereNoabsen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereNoastek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereNohp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereNoktp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereNopeg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereNotlp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereNoydp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereNpwp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereProplhr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereTempatlhr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereTglaktifdns($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereTglentry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereTgllahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pekerja whereUserid($value)
 * @method static \Illuminate\Database\Query\Builder|Pekerja withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Pekerja withoutTrashed()
 */
	class Pekerja extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PekerjaPendidikan
 *
 * @property string|null $nopeg
 * @property string|null $mulai
 * @property string|null $tgllulus
 * @property string|null $kodedidik
 * @property string|null $tempatdidik
 * @property string|null $kodept
 * @property string|null $catatan
 * @property string|null $userid
 * @property string|null $tglentry
 * @property-read \App\Models\PerguruanTinggi|null $perguruan_tinggi
 * @method static \Illuminate\Database\Eloquent\Builder|PekerjaPendidikan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PekerjaPendidikan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PekerjaPendidikan query()
 * @method static \Illuminate\Database\Eloquent\Builder|PekerjaPendidikan whereCatatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PekerjaPendidikan whereKodedidik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PekerjaPendidikan whereKodept($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PekerjaPendidikan whereMulai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PekerjaPendidikan whereNopeg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PekerjaPendidikan whereTempatdidik($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PekerjaPendidikan whereTglentry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PekerjaPendidikan whereTgllulus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PekerjaPendidikan whereUserid($value)
 */
	class PekerjaPendidikan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pendidikan
 *
 * @property string $kode
 * @property string $nama
 * @method static \Illuminate\Database\Eloquent\Builder|Pendidikan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pendidikan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pendidikan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pendidikan whereKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pendidikan whereNama($value)
 */
	class Pendidikan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PerguruanTinggi
 *
 * @property string $kode
 * @property string|null $nama
 * @method static \Illuminate\Database\Eloquent\Builder|PerguruanTinggi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PerguruanTinggi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PerguruanTinggi query()
 * @method static \Illuminate\Database\Eloquent\Builder|PerguruanTinggi whereKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PerguruanTinggi whereNama($value)
 */
	class PerguruanTinggi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Perizinan
 *
 * @property int $id
 * @property int $perusahaan_afiliasi_id
 * @property string $keterangan
 * @property string $nomor
 * @property string $masa_berlaku_akhir
 * @property string $dokumen
 * @property string $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Perizinan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Perizinan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Perizinan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Perizinan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perizinan whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perizinan whereDokumen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perizinan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perizinan whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perizinan whereMasaBerlakuAkhir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perizinan whereNomor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perizinan wherePerusahaanAfiliasiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Perizinan whereUpdatedAt($value)
 */
	class Perizinan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PermintaanBayarDetail
 *
 * @property int $no
 * @property string $no_bayar
 * @property string|null $keterangan
 * @property string|null $account
 * @property string|null $nilai
 * @property string|null $cj
 * @property string|null $bagian
 * @property string|null $jb
 * @property string|null $pk
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarDetail whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarDetail whereBagian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarDetail whereCj($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarDetail whereJb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarDetail whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarDetail whereNilai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarDetail whereNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarDetail whereNoBayar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarDetail wherePk($value)
 */
	class PermintaanBayarDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PermintaanBayarHeader
 *
 * @property string $no_bayar
 * @property string|null $kepada
 * @property string|null $dari
 * @property string|null $pemohon
 * @property string|null $menyetujui
 * @property string|null $tgl_bayar
 * @property string|null $app_sdm
 * @property string|null $app_sdm_oleh
 * @property string|null $app_sdm_tgl
 * @property string|null $app_pbd_oleh
 * @property string|null $app_pbd_tgl
 * @property string|null $no_kas
 * @property string|null $bulan_buku
 * @property string|null $keterangan
 * @property string|null $ci
 * @property string|null $app_pbd
 * @property string|null $rate
 * @property string|null $lampiran
 * @property string|null $mata_anggaran
 * @property string|null $mulai
 * @property string|null $sampai
 * @property string|null $debet_tgl
 * @property string|null $debet_no
 * @property string|null $debet_dari
 * @property string|null $rekyes
 * @property string|null $norek
 * @property string|null $namabank
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader query()
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereAppPbd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereAppPbdOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereAppPbdTgl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereAppSdm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereAppSdmOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereAppSdmTgl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereBulanBuku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereCi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereDari($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereDebetDari($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereDebetNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereDebetTgl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereKepada($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereLampiran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereMataAnggaran($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereMenyetujui($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereMulai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereNamabank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereNoBayar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereNoKas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereNorek($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader wherePemohon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereRekyes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereSampai($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PermintaanBayarHeader whereTglBayar($value)
 */
	class PermintaanBayarHeader extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PerusahaanAfiliasi
 *
 * @property int $id
 * @property string $nama
 * @property string $telepon
 * @property string $alamat
 * @property string $bidang_usaha
 * @property string $modal_dasar
 * @property string $modal_disetor
 * @property int $jumlah_lembar_saham
 * @property string $nilai_nominal_per_saham
 * @property string $created_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|PerusahaanAfiliasi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PerusahaanAfiliasi newQuery()
 * @method static \Illuminate\Database\Query\Builder|PerusahaanAfiliasi onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PerusahaanAfiliasi query()
 * @method static \Illuminate\Database\Eloquent\Builder|PerusahaanAfiliasi whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PerusahaanAfiliasi whereBidangUsaha($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PerusahaanAfiliasi whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PerusahaanAfiliasi whereCreatedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PerusahaanAfiliasi whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PerusahaanAfiliasi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PerusahaanAfiliasi whereJumlahLembarSaham($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PerusahaanAfiliasi whereModalDasar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PerusahaanAfiliasi whereModalDisetor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PerusahaanAfiliasi whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PerusahaanAfiliasi whereNilaiNominalPerSaham($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PerusahaanAfiliasi whereTelepon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PerusahaanAfiliasi whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|PerusahaanAfiliasi withTrashed()
 * @method static \Illuminate\Database\Query\Builder|PerusahaanAfiliasi withoutTrashed()
 */
	class PerusahaanAfiliasi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Provinsi
 *
 * @property string $kode
 * @property string $nama
 * @method static \Illuminate\Database\Eloquent\Builder|Provinsi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Provinsi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Provinsi query()
 * @method static \Illuminate\Database\Eloquent\Builder|Provinsi whereKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Provinsi whereNama($value)
 */
	class Provinsi extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RencanaKerja
 *
 * @property int $kd_rencana_kerja
 * @property int $kd_perusahaan
 * @property string $tahun
 * @property string|null $bulan
 * @property string|null $aset_r
 * @property string|null $revenue_r
 * @property string|null $beban_pokok_r
 * @property string|null $biaya_operasi_r
 * @property string|null $tkp_r
 * @property string|null $kpi_r
 * @property string|null $laba_bersih_r
 * @property string|null $rate_r
 * @property int $ci_r
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaKerja newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaKerja newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaKerja query()
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaKerja whereAsetR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaKerja whereBebanPokokR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaKerja whereBiayaOperasiR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaKerja whereBulan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaKerja whereCiR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaKerja whereKdPerusahaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaKerja whereKdRencanaKerja($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaKerja whereKpiR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaKerja whereLabaBersihR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaKerja whereRateR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaKerja whereRevenueR($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaKerja whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RencanaKerja whereTkpR($value)
 */
	class RencanaKerja extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SaldoStore
 *
 * @property string $nokas
 * @property string $saldoawal
 * @property string|null $debet
 * @property string|null $kredit
 * @property string|null $saldoakhir
 * @property string|null $updatedate
 * @property string|null $inputdate
 * @property string|null $inputpwd
 * @property string|null $updatepwd
 * @property string|null $jk
 * @method static \Illuminate\Database\Eloquent\Builder|SaldoStore newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaldoStore newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SaldoStore query()
 * @method static \Illuminate\Database\Eloquent\Builder|SaldoStore whereDebet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaldoStore whereInputdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaldoStore whereInputpwd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaldoStore whereJk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaldoStore whereKredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaldoStore whereNokas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaldoStore whereSaldoakhir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaldoStore whereSaldoawal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaldoStore whereUpdatedate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SaldoStore whereUpdatepwd($value)
 */
	class SaldoStore extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SdmKDBag
 *
 * @property string $kode
 * @property string $nama
 * @method static \Illuminate\Database\Eloquent\Builder|SdmKDBag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SdmKDBag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SdmKDBag query()
 * @method static \Illuminate\Database\Eloquent\Builder|SdmKDBag whereKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SdmKDBag whereNama($value)
 */
	class SdmKDBag extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StoreJK
 *
 * @property string $jeniskartu
 * @property string $kodestore
 * @property string|null $bagian
 * @property string|null $account
 * @property string|null $area
 * @property string|null $lokasi
 * @property string|null $jenisbiaya
 * @property string|null $ci
 * @property string|null $namabank
 * @property string|null $norekening
 * @method static \Illuminate\Database\Eloquent\Builder|StoreJK newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreJK newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreJK query()
 * @method static \Illuminate\Database\Eloquent\Builder|StoreJK whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreJK whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreJK whereBagian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreJK whereCi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreJK whereJenisbiaya($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreJK whereJeniskartu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreJK whereKodestore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreJK whereLokasi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreJK whereNamabank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StoreJK whereNorekening($value)
 */
	class StoreJK extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Umk
 *
 * @property string|null $tgl_panjar
 * @property string|null $app_sdm
 * @property string|null $app_sdm_oleh
 * @property string|null $app_sdm_tgl
 * @property string|null $app_pbd_oleh
 * @property string|null $app_pbd_tgl
 * @property string|null $no_kas
 * @property string|null $bulan_buku
 * @property string|null $keterangan
 * @property string|null $ci
 * @property string|null $app_pbd
 * @property string|null $rate
 * @property string|null $jenis_um
 * @property string $no_umk
 * @property string|null $jumlah
 * @property string|null $kepada
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\DetailUmk[] $detailumk
 * @property-read int|null $detailumk_count
 * @method static \Illuminate\Database\Eloquent\Builder|Umk newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Umk newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Umk query()
 * @method static \Illuminate\Database\Eloquent\Builder|Umk whereAppPbd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Umk whereAppPbdOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Umk whereAppPbdTgl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Umk whereAppSdm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Umk whereAppSdmOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Umk whereAppSdmTgl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Umk whereBulanBuku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Umk whereCi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Umk whereJenisUm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Umk whereJumlah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Umk whereKepada($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Umk whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Umk whereNoKas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Umk whereNoUmk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Umk whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Umk whereTglPanjar($value)
 */
	class Umk extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UmkDetail
 *
 * @property string|null $tgl_panjar
 * @property string|null $app_sdm
 * @property string|null $app_sdm_oleh
 * @property string|null $app_sdm_tgl
 * @property string|null $app_pbd_oleh
 * @property string|null $app_pbd_tgl
 * @property string|null $no_kas
 * @property string|null $bulan_buku
 * @property string|null $keterangan
 * @property string|null $ci
 * @property string|null $app_pbd
 * @property string|null $rate
 * @property string|null $jenis_um
 * @property string $no_umk
 * @property string|null $jumlah
 * @property string|null $kepada
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail whereAppPbd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail whereAppPbdOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail whereAppPbdTgl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail whereAppSdm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail whereAppSdmOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail whereAppSdmTgl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail whereBulanBuku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail whereCi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail whereJenisUm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail whereJumlah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail whereKepada($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail whereNoKas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail whereNoUmk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkDetail whereTglPanjar($value)
 */
	class UmkDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UmkHeader
 *
 * @property string|null $tgl_panjar
 * @property string|null $app_sdm
 * @property string|null $app_sdm_oleh
 * @property string|null $app_sdm_tgl
 * @property string|null $app_pbd_oleh
 * @property string|null $app_pbd_tgl
 * @property string|null $no_kas
 * @property string|null $bulan_buku
 * @property string|null $keterangan
 * @property string|null $ci
 * @property string|null $app_pbd
 * @property string|null $rate
 * @property string|null $jenis_um
 * @property string $no_umk
 * @property string|null $jumlah
 * @property string|null $kepada
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader query()
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader whereAppPbd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader whereAppPbdOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader whereAppPbdTgl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader whereAppSdm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader whereAppSdmOleh($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader whereAppSdmTgl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader whereBulanBuku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader whereCi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader whereJenisUm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader whereJumlah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader whereKepada($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader whereNoKas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader whereNoUmk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmkHeader whereTglPanjar($value)
 */
	class UmkHeader extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UmuDebetNota
 *
 * @property string $kode
 * @property string|null $keterangan
 * @method static \Illuminate\Database\Eloquent\Builder|UmuDebetNota newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UmuDebetNota newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UmuDebetNota query()
 * @method static \Illuminate\Database\Eloquent\Builder|UmuDebetNota whereKeterangan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UmuDebetNota whereKode($value)
 */
	class UmuDebetNota extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property string|null $username
 * @property string|null $password
 * @property string|null $empid
 * @property string|null $roleid
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmpid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserLog
 *
 * @property string|null $userid
 * @property string|null $usernm
 * @property string|null $login
 * @property string|null $logout
 * @property string|null $terminal
 * @method static \Illuminate\Database\Eloquent\Builder|UserLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserLog whereLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserLog whereLogout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserLog whereTerminal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserLog whereUserid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserLog whereUsernm($value)
 */
	class UserLog extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserLogin
 *
 * @property string|null $userid
 * @property string|null $usernm
 * @property string|null $login
 * @property string|null $terminal
 * @method static \Illuminate\Database\Eloquent\Builder|UserLogin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserLogin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserLogin query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserLogin whereLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserLogin whereTerminal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserLogin whereUserid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserLogin whereUsernm($value)
 */
	class UserLogin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserMenu
 *
 * @property string|null $userid
 * @property string|null $menuid
 * @property string|null $ability
 * @property string|null $tambah
 * @property string|null $rubah
 * @property string|null $hapus
 * @property string|null $cetak
 * @property string|null $lihat
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|UserMenu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserMenu newQuery()
 * @method static \Illuminate\Database\Query\Builder|UserMenu onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|UserMenu query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserMenu whereAbility($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserMenu whereCetak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserMenu whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserMenu whereHapus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserMenu whereLihat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserMenu whereMenuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserMenu whereRubah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserMenu whereTambah($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserMenu whereUserid($value)
 * @method static \Illuminate\Database\Query\Builder|UserMenu withTrashed()
 * @method static \Illuminate\Database\Query\Builder|UserMenu withoutTrashed()
 */
	class UserMenu extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserPdv
 *
 * @property string|null $userid
 * @property string|null $usernm
 * @property string|null $userlv
 * @property string|null $userap
 * @property string|null $userpw
 * @property string|null $tglupd
 * @property string|null $usrupd
 * @property string|null $kode
 * @property string|null $passexp
 * @property string|null $host
 * @property string|null $nopeg
 * @property int|null $gcg_fungsi_id
 * @property int|null $gcg_jabatan_id
 * @property string|null $deleted_at
 * @property string|null $file
 * @property-read \App\Models\GcgFungsi|null $fungsi
 * @property-read \App\Models\GcgJabatan|null $fungsi_jabatan
 * @property-read \App\Models\Pekerja|null $pekerja
 * @method static \Illuminate\Database\Eloquent\Builder|UserPdv newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPdv newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPdv query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserPdv whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPdv whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPdv whereGcgFungsiId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPdv whereGcgJabatanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPdv whereHost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPdv whereKode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPdv whereNopeg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPdv wherePassexp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPdv whereTglupd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPdv whereUserap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPdv whereUserid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPdv whereUserlv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPdv whereUsernm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPdv whereUserpw($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserPdv whereUsrupd($value)
 */
	class UserPdv extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Vendor
 *
 * @property int $id
 * @property string $nama
 * @property string $alamat
 * @property string $telepon
 * @property string $no_rekening
 * @property string $nama_bank
 * @property string $cabang_bank
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereAlamat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereCabangBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereNama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereNamaBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereNoRekening($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereTelepon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vendor whereUpdatedAt($value)
 */
	class Vendor extends \Eloquent {}
}


<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PerusahaanAfiliasiUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_perusahaan' => 'required|string',
            'alamat' => 'required',
            'no_telepon' => 'string|digits_between:6,15',
            'bidang_usaha' => 'required',
            'npwp' => 'string',
            'modal_dasar' => 'required|string|max:18',
            'modal_disetor' => 'required|string|max:18',
            'jumlah_lembar_saham' => 'required|integer|digits_between:0,10',
            'nilai_nominal_per_saham' => 'required|string|max:18',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMahasiswaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Nim'=>'required|min:10',
            'Nama'=>'required',
            'foto'=>'required',
            'Email'=>'required',
            'Tanggal_lahir'=>'required',
            'Jurusan'=>'required',
            'No_Handphone'=>'required|min:12',
            'kelas_id'=>'required',
        ];
    }
}

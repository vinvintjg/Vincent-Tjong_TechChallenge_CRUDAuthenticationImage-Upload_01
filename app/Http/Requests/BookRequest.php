<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'NamaPembeli' => 'required',
            'Barang' => 'required',
            'Jumlah' => 'required|numeric',
            'Harga' => 'required|numeric',
            'Tanggal' => 'required',
            'Jam' => 'required',
        ];
    }

    public function messages()
    {
        return [
            // 'NamaPembeli.required' => 'Nama harus berupa variabel',
            'Harga.numeric' => 'Harga harus berupa angka',
        ];
    }
}

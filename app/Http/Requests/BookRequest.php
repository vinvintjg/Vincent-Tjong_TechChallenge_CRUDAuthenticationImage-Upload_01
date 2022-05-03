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
            'Title' => 'required|min:5|max:20',
            'Author' => 'required|min:5|max:20',
            'Pages' => 'required|numeric|min:0',
            'Year' => 'required',
            'Image' => 'required|mimes:png,jpg,jpeg|max:1000',
        ];
    }

    // public function messages()
    // {
    //     return [
    //         // 'NamaPembeli.required' => 'Nama harus berupa variabel',
    //         'Harga.numeric' => 'Harga harus berupa angka',
    //     ];
    // }
}

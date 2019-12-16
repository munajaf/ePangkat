<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RequestMarks extends FormRequest
{
    protected function prepareForValidation()
    {
//        dd($this->all());
    }

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
        return [];
        /*return [
            'type' => [
                'required',
                Rule::in(['DS54', 'VK7'])
            ],
            "status" => [
              'required',
              Rule::in(['accepted', 'rejected'])
            ],
            "kategori1_syarat1" => "required|min:0|max:10",
            "kategori1_syarat2" => "required|min:0|max:20",
            "kategori1_syarat3" => "required|min:0|max:10",
            "kategori1_syarat4" => "required|min:0|max:10",
            "kategori2_syarat1" => "required|min:0|max:5",
            "kategori2_syarat2" => "required|min:0|max:5",
            "kategori2_syarat3" => "required|min:0|max:5",
            "kategori2_syarat4" => "required|min:0|max:10",
            "kategori2_syarat5" => "required|min:0|max:10",
            "kategori3_syarat1" => "required|min:0|max:5",
            "kategori3_syarat2" => "required|min:0|max:5",
            "kategori4_syarat1" => "required|min:0|max:5",
            "kategori4_syarat2" => "required|min:0|max:5",
        ];*/
    }
}

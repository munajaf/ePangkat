<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RequestRequest extends FormRequest
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

        /*if ($this->request->get('type') == "DS54") {
            return [
                'kategori1_syarat1_1' => 'required|max:2000|mimes:pdf',
                'kategori1_syarat1_2' => 'required|max:2000|mimes:pdf',
                'kategori1_syarat1_3' => 'required|max:2000|mimes:pdf',

                'kategori1_syarat3_1.attach.*' => 'required|max:2000|mimes:pdf',

                'kategori1_syarat4_1.attach' => 'required_without:kategori1_syarat4_2.attach|array|min:1',
                'kategori1_syarat4_1.attach>*' => 'required_with:kategori1_syarat4_1.attach|max:2000|mimes:pdf',

                'kategori1_syarat4_2.attach' => 'required_without:kategori1_syarat4_1|array|min:1',
                'kategori1_syarat4_2.attach>*' => 'required_with:kategori1_syarat4_2.attach|max:2000|mimes:pdf',

                'kategori2_syarat1.*' => 'required',
                'kategori2_syarat1.attach.*' => 'required|max:2000|mimes:pdf',

                'kategori2_syarat2.tajuk' => 'required|array',
                'kategori2_syarat2.attach.*' => 'required|max:2000|mimes:pdf',


                'kategori2_syarat4.jenis_penerbitan' => 'required|array|min:7',

                'kategori2_syarat5.jawatan.*' => 'required|min:1',
                'kategori2_syarat5.attach.*' => 'required|max:2000|mimes:pdf',

                'kategori3_syarat1.penglibatan' => 'required|array|min:2',
                'kategori3_syarat1.peringkat' => 'required|array|min:2',
                'kategori3_syarat1.attach' => 'required|array|min:2',
                'kategori3_syarat1.attach.*' => 'required|max:2000|mimes:pdf',

                'kategori3_syarat2.nama_program' => 'required',


                'kategori4_syarat1.keahlian' => 'required',
                'kategori4_syarat1.tarikh_sertai' => 'required',


                'kategori4_syarat2.jawatan' => 'required',
                'kategori4_syarat2.peringkat' => 'required',
                'kategori4_syarat2.attach' => 'required',
                'kategori4_syarat2.attach.*' => 'required|max:2000|mimes:pdf',


            ];
        } elseif ($this->request->get('type') == "VK7") {
            return [
                'kategori1_syarat1_1' => 'required|max:2000|mimes:pdf',
                'kategori1_syarat1_2' => 'required|max:2000|mimes:pdf',
                'kategori1_syarat1_3' => 'required|max:2000|mimes:pdf',

                'kategori1_syarat3_1.attach.*' => 'required|max:2000|mimes:pdf',

                'kategori1_syarat4_1.attach' => 'required_without:kategori1_syarat4_2.attach|array|min:1',
                'kategori1_syarat4_1.attach>*' => 'required_with:kategori1_syarat4_1.attach|max:2000|mimes:pdf',

                'kategori1_syarat4_2.attach' => 'required_without:kategori1_syarat4_1|array|min:1',
                'kategori1_syarat4_2.attach>*' => 'required_with:kategori1_syarat4_2.attach|max:2000|mimes:pdf',

                'kategori2_syarat1.*' => 'required',
                'kategori2_syarat1.attach.*' => 'required|max:2000|mimes:pdf',

                'kategori2_syarat2.tajuk' => 'required|array',
                'kategori2_syarat2.attach.*' => 'required|max:2000|mimes:pdf',


                'kategori2_syarat4.jenis_penerbitan' => 'required|array|min:15',

                'kategori2_syarat5.jawatan' => 'required|array|min:3',
                'kategori2_syarat5.jawatan.*' => 'required',
                'kategori2_syarat5.attach.*' => 'required|max:2000|mimes:pdf',

                'kategori3_syarat1.penglibatan' => 'required|array|min:3',
                'kategori3_syarat1.peringkat' => 'required|array|min:3',
                'kategori3_syarat1.attach' => 'required|array|min:3',
                'kategori3_syarat1.attach.*' => 'required|max:2000|mimes:pdf',

                'kategori3_syarat2.nama_program' => 'required',


                'kategori4_syarat1.keahlian' => 'required|array|min:2',
                'kategori4_syarat1.tarikh_sertai' => 'required|array|min:2',


                'kategori4_syarat2.jawatan' => 'required',
                'kategori4_syarat2.peringkat' => 'required',
                'kategori4_syarat2.attach' => 'required',
                'kategori4_syarat2.attach.*' => 'required|max:2000|mimes:pdf',


            ];
        }*/


        /*return [
            'type' => [
                'required',
                Rule::in(['DS54', 'VK7'])
            ],
//            'kategori1_syarat1_1' => 'required|max:2000|mimes:pdf',
//            'kategori1_syarat1_2' => 'required|max:2000|mimes:pdf',
//            'kategori1_syarat1_3' => 'required|max:2000|mimes:pdf',
//            'kategori1_syarat2_1.attach.*' => 'required|max:2000|mimes:pdf',
//            'kategori1_syarat2_2.attach.*' => 'required|max:2000|mimes:pdf',
//            'kategori1_syarat2_3.attach.*' => 'required|max:2000|mimes:pdf',
//            'kategori1_syarat3_1.attach.*' => 'required|max:2000|mimes:pdf',
//            'kategori1_syarat4_1.attach.*' => 'required|max:2000|mimes:pdf',
//            'kategori1_syarat4_2.attach.*' => 'required|max:2000|mimes:pdf',
            'kategori2_syarat1.*' => 'required',
            'kategori2_syarat1.attach.*' => 'required|max:2000|mimes:pdf',
            'kategori2_syarat2.*' => 'required',
            'kategori2_syarat2.attach.*' => 'required|max:2000|mimes:pdf',
            'kategori2_syarat3.*' => 'required',
            'kategori2_syarat3.attach.*' => 'required|max:2000|mimes:pdf',
            'kategori2_syarat4.*' => 'required',
            'kategori2_syarat5.*' => 'required',
            'kategori2_syarat5.attach.*' => 'required|max:2000|mimes:pdf',
            'kategori3_syarat1.*' => 'required',
            'kategori3_syarat1.attach.*' => 'required|max:2000|mimes:pdf',
            'kategori3_syarat2' => 'required',
            'kategori4_syarat1' => 'required',
            'kategori4_syarat2.*' => 'required',
            'kategori4_syarat2.attach.*' => 'required|max:2000|mimes:pdf',

        ];*/


    }
}

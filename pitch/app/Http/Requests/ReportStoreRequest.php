<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'name'=> ['required'],
           'email'=> ['required','email'],
           'report'=> ['required'],
          'image'=>['image'],
          'possible_evidence'=>[],
           'location'=> ['required'],
           'phone_no' =>['required'],
           'subject'=>['required']
        ];
    }
}

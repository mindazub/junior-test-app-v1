<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class CompanyUpdateRequest extends CompanyStoreRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize():bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules():array
    {
        return [
            'name'=>'required|min:5|max:25|string',
            'website' => 'required|min:3|max:191|string',
            'email' => 'required|email',
            'logo' => 'nullable|image|min:1|max:2048|dimensions:min_width:100,max_width:3000',
        ];
    }
}

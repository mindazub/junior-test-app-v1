<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;

class CompanyStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'=>'required|min:5|max:25|string|unique:companies',
            'website' => 'required|min:3|max:191|string',
            'email' => 'required|email', // |unique:companies
            'logo' => 'nullable|image|min:1|max:2048|dimensions:min_width:100,max_width:3000',
        ];


    }

    /**
     * @return null|string
     */
    public function getName(): ? string
    {
        return $this->input('name');
    }

    /**
     * @return null|string
     */
    public function getEmail(): ? string
    {
        return $this->input('email');
    }

    /**
     * @return null|string
     */
    public function getWebsite(): ? string
    {
        return $this->input('website');
    }

    /**
     * @return UploadedFile|null
     */
    public function getLogo(): ? UploadedFile
    {
        return $this->file('logo');
    }

}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;

class EmployeeStoreRequest extends FormRequest
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
            'firstName'=>'required',
            'lastName' => 'required',
            'website' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'company_id' => 'required',
            'photo' => 'nullable|image|min:1|max:2048|dimensions:min_width:100,max_width:3000',

        ];
    }

    /**
     * @return null|string
     */
    public function getFirstName(): ? string
    {
        return $this->input('firstName');
    }

    /**
     * @return null|string
     */
    public function getLastName(): ? string
    {
        return $this->input('lastName');
    }

    /**
     * @return null|string
     */
    public function getWebsite(): ? string
    {
        return $this->input('website');
    }

    /**
     * @return null|string
     */
    public function getPhone(): ? string
    {
        return $this->input('phone');
    }

    /**
     * @return null|string
     */
    public function getEmail(): ? string
    {
        return $this->input('email');
    }

    /**
     * @return int
     */
    public function getCompanyId(): int
    {
        return $this->input('company_id');
    }

    /**
     * @return UploadedFile|null
     */
    public function getPhoto(): ? UploadedFile
    {
        return $this->file('photo');
    }

}

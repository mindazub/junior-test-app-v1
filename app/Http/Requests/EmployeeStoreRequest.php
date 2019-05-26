<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStoreRequest extends FormRequest
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
            'firstName'=>'required',
            'lastName' => 'required',
            'website' => 'required',
            'email' => 'required',
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
    public function getEmail(): ? string
    {
        return $this->input('email');
    }

    /**
     * @return string
     */
    public function getCompany(): string
    {
        return $this->input('company');
    }
}

<?php
namespace iPremium\Alaska\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Admin extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|tel',
            'password' => 'nullable|min:6',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => "Name is required",
            'email.required' => "Email is required",
            'phone.required' => "Phone is require",
            'email.email' => "email must be",
            //'password.required' => "Le mot de passe est requis",
            'password.min' => "password must be more then 6 chars",
        ];
    }
}

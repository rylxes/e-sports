<?php

namespace App\Http\Requests\API;

use App\Models\Coach;
use InfyOm\Generator\Request\APIRequest;

class CreateCoachAPIRequest extends APIRequest
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
        $rules = [];
        if (!empty($this->file('file'))) {
            $rules['file'] = 'file|mimes:jpg,jpeg,bmp,png|max:2048';
            //$rules['file'] = 'file';
        }
        if (!empty($this->file('qualifications'))) {
            $rules['license'] = 'file|mimes:jpg,jpeg,bmp,png,doc,docx,rtf,pdf,zip|max:2048';
            //$rules['file'] = 'file';
        }
        $otherRules = [
            //'qualifications' => 'nullable|file|mimes:jpg,jpeg,bmp,png,doc,docx,rtf,pdf,zip|max:2048',
           // 'file' => 'nullable|file|mimes:jpg,jpeg,bmp,png|max:2048',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'email' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'nullable',
            'gender' => 'nullable|string|max:255',
            'coaching_age' => 'nullable|string|max:255',
            'coaching_gender' => 'nullable|string|max:255',
            'sports' => 'nullable|string',
            'specialization' => 'nullable|string',
            'language' => 'nullable|string',
            'nationality' => 'nullable|string',
            'city_id' => 'nullable|string|max:255',
            'employment_type' => 'nullable|string|max:255',
            'team_club' => 'nullable|string|max:255',
        ];
        return array_merge($rules, $otherRules);
    }
}

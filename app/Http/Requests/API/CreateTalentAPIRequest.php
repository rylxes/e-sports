<?php

namespace App\Http\Requests\API;

use App\Models\Talent;
use InfyOm\Generator\Request\APIRequest;

class CreateTalentAPIRequest extends APIRequest
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
            $rules['qualifications'] = 'file|mimes:jpg,jpeg,bmp,png,doc,docx,rtf,pdf,zip|max:2048';
            //$rules['file'] = 'file';
        }

        $otherRules = [
           // 'license' => 'nullable|file|mimes:jpg,jpeg,bmp,png,doc,docx,rtf,pdf,zip|max:2048',
           // 'qualifications' => 'nullable|file|mimes:jpg,jpeg,bmp,png|max:2048',
            // 'qualifications' => 'nullable|string|max:255',

            'scheme' => 'nullable|string|max:255',
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'email' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'nullable',
            'age' => 'nullable|integer',
            'gender' => 'nullable|string|max:255',
            'languages' => 'nullable|string|max:255',
            'city_id' => 'nullable|string|max:255',
            'genotype' => 'nullable|string|max:255',
            'blood_group' => 'nullable|string|max:255',
            'sports' => 'nullable|string',
            'positions' => 'nullable|string',
            'educational_background' => 'nullable|string',
            'nationality' => 'nullable|string|max:255',
            'height' => 'nullable|numeric',
            'weight' => 'nullable|numeric',
        ];
        return array_merge($rules, $otherRules);
    }
}

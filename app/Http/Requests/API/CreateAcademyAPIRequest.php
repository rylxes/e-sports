<?php

namespace App\Http\Requests\API;

use App\Models\Academy;
use InfyOm\Generator\Request\APIRequest;

class CreateAcademyAPIRequest extends APIRequest
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
            $rules['pictures'] = 'file|mimes:jpg,jpeg,bmp,png,doc,docx,rtf,pdf,zip|max:2048';
            //$rules['file'] = 'file';
        }
        $otherRules = [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'email' => 'required|string|max:255',
            'name' => 'nullable|string|max:255',
            'reg_date' => 'nullable',
            'profile_url' => 'nullable|string|max:255',
            'academy_age' => 'nullable|string|max:255',
            'capacity' => 'nullable|string|max:255',
            'country_id' => 'nullable|integer',
            'location' => 'nullable|string|max:255',
        ];
        return array_merge($rules, $otherRules);
    }
}

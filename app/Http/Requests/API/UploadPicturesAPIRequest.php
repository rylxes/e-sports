<?php

namespace App\Http\Requests\API;

use App\Models\Talent;
use InfyOm\Generator\Request\APIRequest;

class UploadPicturesAPIRequest extends APIRequest
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
        $rules['pictures.*'] = 'file|mimes:jpg,jpeg,bmp,png,doc,docx,rtf,pdf,zip|max:2048';
        return $rules;
    }
}

<?php

namespace App\Http\Requests\API;

use App\Models\Video;
use InfyOm\Generator\Request\APIRequest;

class UpdateVideoAPIRequest extends APIRequest
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
            'type_id' => 'required|integer',
            'skill_test_id' => 'required|integer',
            'url' => 'required|string|max:255',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }
}

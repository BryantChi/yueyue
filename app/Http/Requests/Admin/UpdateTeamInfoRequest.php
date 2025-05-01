<?php

namespace App\Http\Requests\Admin;

use App\Models\Admin\TeamInfo;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTeamInfoRequest extends FormRequest
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
        $rules = TeamInfo::$rules;
        
        return $rules;
    }
}

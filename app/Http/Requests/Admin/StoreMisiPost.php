<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreMisiPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (!auth()->user()) {
            return false;
        }
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
            'nama'    => 'required|string|max:255',
            'urutan'  => 'required|numeric',
            'visi_id' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'visi_id' => 'Visi',
        ];
    }
}

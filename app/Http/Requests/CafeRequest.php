<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CafeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'cafe.name' => 'required|string|max:50',
            'cafe.address' => 'required|string|max:50',
            'cafe.access' => 'required|string|max:50',
            'cafe.tell' => 'nullable|regex:/^(0{1}\d{1,4}-{0,1}\d{1,4}-{0,1}\d{4})$/',
            'cafe.open_hours' => 'nullable|string|max:15',
            'cafe.regular_holiday' => 'nullable|string|max:15',
        ];
    }
}

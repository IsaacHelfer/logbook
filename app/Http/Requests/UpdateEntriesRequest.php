<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEntriesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'date'              => 'required|date',
            'aircraft'          => 'required|exists:aircraft,id',
            'total'             => 'required|numeric',
            'category'          => 'required|exists:flight_categories,id',
            'categoryTime'      => 'required|numeric',
            'type'              => 'required|exists:flight_types,id',
            'typeTime'          => 'required|numeric',
            'dayTime'           => 'nullable|numeric',
            'nightTime'         => 'nullable|numeric',
            'xcTime'            => 'nullable|numeric',
            'actInstrumentTime' => 'nullable|numeric',
            'simInstrumentTime' => 'nullable|numeric',
            'instrumentApps'    => 'nullable|numeric',
            'dayLandings'       => 'nullable|numeric',
            'nightLandings'     => 'nullable|numeric',
            'remarks'           => 'nullable',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3',
            'thumb' => 'required|min:3|max:500',
            'price' => 'required|min:1|',

        ];
    }

    public function messages(){
        return [
            'title.required' => 'Il titolo è un valore obbligatorio',
            'title.min' => 'Il titolo deve essere di almeno :min caratteri',
            'title.max' => 'Il titolo deve essere di massimo :max caratteri',
            'description.required' => 'La descrizione è un valore obbligatorio',
            'description.min' => 'La descrizione deve essere di almeno :min caratteri',
            'thumb.required' => "L'url è un valore obbligatorio",
            'thumb.min' => "L'url deve essere di almeno :min caratteri",
            'thumb.max' => "L'url deve essere massimo di :max caratteri",
            'price.required' => "Il prezzo è un valore obbligatorio",
            'price.min' => "Manca il prezzo o la valuta",
        ];
    }
}

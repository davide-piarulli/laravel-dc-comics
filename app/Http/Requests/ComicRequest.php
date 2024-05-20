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
            'title' => 'required|min:2|max:100',
            'thumb' => 'required|min:10|max:500',
            'price' => 'required|min:5|max:10',
            'series' => 'required|min:2|max:50',
            'sale_date' => 'max:10',
            'type' => 'required|min:2|max:50',
            'artists' => 'max:500',
            'writers' => 'max:500',
            'description' => 'required|min:2|max:500',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve contenere almeno :min caratteri',
            'title.max' => 'Il titolo può contenere massimo :max caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'description.min' => 'La descrizione deve contenere almeno :min caratteri',
            'description.max' => 'La descrizione può contenere massimo :max caratteri',
            'thumb.required' => 'La URL dell\' immagine è obbligatoria',
            'thumb.min' => 'La URL dell\' immagine deve contenere almeno :min caratteri',
            'thumb.max' => 'La URL dell\' immagine può contenere massimo :max caratteri',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.min' => 'Il prezzo deve contenere almeno :min caratteri',
            'price.max' => 'Il prezzo può contenere massimo :max caratteri',
            'series.required' => 'La serie è obbligatoria',
            'series.min' => 'La serie deve contenere almeno :min caratteri',
            'series.max' => 'La serie può contenere massimo :max caratteri',
            'sale_date.max' => 'La data di uscita può contenere massimo :max caratteri',
            'type.required' => 'La tipologia è obbligatoria',
            'type.min' => 'La tipologia deve contenere almeno :min caratteri',
            'type.max' => 'La tipologia può contenere massimo :max caratteri',
            'artists.max' => 'Il campo artisti può contenere massimo :max caratteri',
            'writers.max' => 'Il campo scrittori può contenere massimo :max caratteri',
        ];
    }
}

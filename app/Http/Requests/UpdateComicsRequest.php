<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicsRequest extends FormRequest
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
            'title' => 'required|min:5|max:50',
            'description' => 'nullable',
            'thumb' => 'required',
            'price' => 'required|min:2|max:255',
            'series' => 'required|min:2|max:255',
            'sale_date' => 'required|max:20',
            'type' => 'required|min:3|max:30',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Campo obbligatorio',
            'title.min' => 'Il titolo deve essere lungo almeno 5 caratteri',
            'title.max' => 'Il titolo non deve superare 30 caratteri',
            // 'description.required' => 'Campo Obbligatorio',
            // 'description.min' => 'La descrizione deve essere lunga almeno 5 caratteri',
            // 'description.max' => 'La descrizione non deve superare 255 caratteri',
            'thumb.required' => 'Campo obbligatorio',
            'price.required' => 'Campo obbligatorio',
            'price.min' => 'Il prezzo deve essere lungo almeno 2 caratteri',
            'price.max' => 'Il prezzo non deve superare 255 caratteri',
            'series.required' => 'Campo obbligatorio',
            'series.min' => 'La serie deve essere lunga almeno 2 caratteri',
            'series.max' => 'La serie non deve superare 255 caratteri',
            'sale_date.required' => 'Campo obbligatorio',
            'sale_date.max' => 'La data non deve superare 20 caratteri',
            'type.required' => 'Campo obbligatotio',
            'type.min' => 'Il tipo deve essere lungo almeno 3 caratteri',
            'type.max' => 'Il tipo non deve superare 30 caratteri',
        ];
    }
}

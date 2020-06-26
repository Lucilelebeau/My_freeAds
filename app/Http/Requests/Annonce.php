<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Annonce extends FormRequest
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
            'id_membre' => ['required', 'numeric'],
            'titre' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:256'],
            'ville' => ['required', 'string', 'max:30'],
            'departement' => ['required', 'numeric', 'max:99999'],
            'url_img1' => ['required', 'string', 'max:300'],
            'url_img2' => ['string', 'max:300'],
            'url_img3' => ['string', 'max:300'],
            'prix' => ['required', 'numeric'],
        ];
    }
}

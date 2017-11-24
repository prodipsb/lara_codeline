<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
            'title' => 'required|min:3',
            'realease_date' => 'required',
            'rating' => 'required',
            'ticket' => 'required',
            'country' => 'required',
            'genre' => 'required',
            'photo' => 'required|mimes:jpeg,jpg,bmp,png,gif|max:2048',
            'description' => 'required',
        ];
    }
    public function messages(){
        return [
            'title.required' => 'Please enter a valid Film Title !',
            'realease_date.required' => 'Please Select Film Realease Date !',
            'rating.required' => 'Please Rate This Film!',
            'ticket.required' => 'Enter Ticket Price!',
            'country.required' => 'Please Select Country !',
            'genre.required' => 'Please check Allest One Genre',
            'descriptiion.required' => 'Film Description Field in required !',
        ];
    }
}

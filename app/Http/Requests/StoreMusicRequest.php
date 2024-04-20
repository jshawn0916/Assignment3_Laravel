<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMusicRequest extends FormRequest
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
            'title' => 'required|string',
            'artist' => 'required|string',
            'album_title' => 'required|string',
            'genre' => 'required|string',
            'release_date' => 'required|date',
            'length' => 'required|string',
            'album_cover' => 'required|string',
            // 'user_id'=>'required|integer'
        ];
    }
}

<?php

namespace App\Http\Front\Requests;

use App\Domain\User\Rules\CountryCodeRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => Rule::unique('users')->ignore(auth()->user()->id),
            'bio' => 'max:255',
            'city' => '',
            'country' => [new CountryCodeRule()],
            'joindin_username' => '',
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],[

                'name.required' => 'Le nom est requis.',
                'name.string' => 'Le nom doit être une chaîne de caractères.',
                'name.max' => 'Le nom ne peut pas dépasser 255 caractères.',

            ],
            //'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)], 
            'phone' => ['required'],[

                'phone.required' => 'Le téléphone est requis.',
            ],
            'profile' => ['required'],[
                'profile.required' => 'Le profil est requis.',

            ],
            'ville_id' =>['required'],
            'sexe'=>['required'],
            'DateNaissance'=>['required'],
        ];
    }
}

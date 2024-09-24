<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'name' => 'required|min:3|max:100',
            'main_topic' => 'required|min:3|max:50',
            'repo_link' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il campo "Nome Progetto" è obbligatorio',
            'name.min' => 'Il campo "Nome Progetto" deve contenere almeno :min caratteri',
            'name.max' => 'Il campo "Nome Progetto" può contenere massimo :max caratteri',

            'main_topic.required' => 'Il campo "Argomento Principale" è obbligatorio',
            'main_topic.min' => 'Il campo "Argomento Principale" deve contenere almeno :min caratteri',
            'main_topic.max' => 'Il campo "Argomento Principale" può contenere massimo :max caratteri',

            'repo_link.required' => 'Il campo "Link Repository" è obbligatorio',
        ];
    }
}

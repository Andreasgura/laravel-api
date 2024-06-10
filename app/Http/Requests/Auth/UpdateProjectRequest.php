<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
                "title"=> "required|string|max:50",
                "description"=> "required|string",
                "screenshot"=> "image|max:200",
                "link_github"=> "required|url|max:200",
                "link_website"=> "required|url|max:200",
                "type_id"=> "nullable|exists:types,id",
                "technologies"=> "nullable|exists:technologies,id",
            ];
    }
}

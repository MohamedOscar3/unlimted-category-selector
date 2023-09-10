<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            "parent_id"=>"exists:categories,id",
            "search",
        ];
    }

    public function authorize(): bool
    {
        return csrf_token() == request()->header("X-CSRF-TOKEN");
    }
}

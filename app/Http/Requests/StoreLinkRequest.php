<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLinkRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'image_id'=>"nullable|exists:images,id",
            'image' => 'nullable|image', // image validation
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'حقل العنوان مطلوب.',
            'url.required' => 'يرجى إدخال رابط صحيح.',
            'image.image' => 'يجب أن يكون الملف صورة.',
        ];
    }
}

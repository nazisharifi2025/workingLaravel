<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addRequest extends FormRequest
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
            //
             "name"=>"required|min:3|max:25",
            "lastName"=>"required|min:5|max:30",
            "score"=>"required|numeric|min:0|max:100",
            "age"=> "required|integer|min:6|max:50",
            "image"=> "nullable|image|mimes:jpg,png,gpeg,gif|max:5096"
        ];
    }
    public function messages(){
        return [
            "name.required" => "فیلد باید پور باشد.",
            "name.min" => "نام شما باید بیشتر از 3 حرف باشد",
            "name.max" => "نام شما باید کمتر از 25 حرف باشد"
        ];
    }
}

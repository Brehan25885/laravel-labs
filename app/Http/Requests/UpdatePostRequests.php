<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class UpdatePostRequests extends FormRequest
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

        //dd($this->post);
        return [
            /* 'title'=> ['required',
        Rule::unique('posts')->ignore($this->id), */

        'title' => 'required|unique:posts,title,' . $this->post,
        'user_id' => 'exists:users,id',

        ];
            //
       
    }
}
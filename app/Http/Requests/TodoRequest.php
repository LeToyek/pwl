<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Request;

class TodoRequest extends ApiRequest
{

    public function authorize()
    {
        if($this->method() == Request::METHOD_POST){
            return true;
        }
        $todo = $this->route('todo');
        return auth()->user()->id == $todo->user_id;
    }

    public function rules()
    {
        return [
            //
            'todo' => 'required|string|max:255',
            'label' => 'nullable|string',
            'done' => 'nullable|boolean',
        ];
    }
}

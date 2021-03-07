<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
			if ($this->path() === 'contact/confirm') {
				return true;
			} elseif ($this->path() === 'contact/index') {
				return true;
			} elseif ($this->path() === 'contact/thanks') {
				return true;
			} else {
				return false;
			}
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
				'email' => 'required|email',
				'title' => 'required',
				'body' => 'required',
      ];
    }

		public function messages()
		{
			return [
				'email.required' => '入力してください',
				'email.email' => 'メールアドレスを入力してください',
				'title.required' => '入力してください',
				'body.required' => '入力してください',
			];
		}
}

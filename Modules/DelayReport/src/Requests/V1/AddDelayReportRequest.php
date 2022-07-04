<?php

namespace DelayReport\Requests\V1;

use DelayReport\Facades\OrderProviderFacade;
use Illuminate\Foundation\Http\FormRequest;

class AddDelayReportRequest extends FormRequest
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
        return [
            'orderId' => 'required',
            // 'password' => 'required|string|numeric|min:6'
        ];
    }

    public function attributes()
    {
        return [
            "username" => "نام کاربری",
            "password" => "کلمه عبور"
        ];
    }

    public function messages()
    {
        return [
            'username.exists' => __(
                "authService::client-error.user-access-denied",
                ['username' => $this->username]
            )
        ];
    }
}

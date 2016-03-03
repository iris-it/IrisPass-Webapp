<?php
/**
 * Created by PhpStorm.
 * User: monkey_C
 * Date: 18-Aug-15
 * Time: 3:06 PM
 */

namespace App\Http\Requests;


class UsersCrmRequest extends Request
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
            'user_name' => 'required',
            'password' => 'required',
            'password_confirm' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'role_id' => 'required',
        ];
    }

}
<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RoleRequest extends FormRequest
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

    public function rules()
    {
        if($this->isMethod('post')) {
            return $this->storeRules();
        }
        else if($this->isMethod('put') || $this->isMethod('patch')){
            return $this->updateRules();
        }
    }

    public function storeRules()
    {
        $tableNames = config('permission.table_names');

        return [
            'name' => [
                'bail',
                'present',
                'required',
                'string',
                'min:4',
                'max: 30',
                Rule::unique($tableNames['roles'])->where(function ($query){
                  return $query->where('name', $this->name);
                })
            ]
        ];
    }

    public function updateRules()
    {
        return [
            //
        ];
    }


}

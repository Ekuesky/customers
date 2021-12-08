<?php

/*
 * This file is auto generated using the Drewlabs Code Generator package
 *
 * (c) Sidoine Azandrew <contact@liksoft.tg>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace App\Http\ViewModels;

use Drewlabs\Core\Validator\Traits\ViewModel;
use Drewlabs\Contracts\Validator\Validatable;

class AccountStakeHolderViewModel implements Validatable
{

    use ViewModel;

    /**
     * Returns a fluent validation rules
     *
     *
     * @return array<string,string|string[]>
     */
    public function rules()
    {
        # code...
        return [
            "id" => ['sometimes', 'integer'],
            "type" => ['required_without:id', 'integer', 'exists:cu_stake_holder_types,id'],
            "customer_id" => ['required_without:id', 'integer', 'exists:cu_customers,id'],
            "account_id" => ['required_without:id', 'integer'],
            "created_at" => ['nullable', 'date_format:Y-m-d H:i:s'],
            "updated_at" => ['nullable', 'date_format:Y-m-d H:i:s'],
            "is_active" => ['required_without:id', 'boolean'],
        ];
    }

    /**
     * Returns a list of validation error messages
     *
     *
     * @return array<string,string|string[]>
     */
    public function messages()
    {
        # code...
        return [];
    }

    /**
     * Returns a fluent validation rules applied during update actions
     *
     *
     * @return array<string,string|string[]>
     */
    public function updateRules()
    {
        # code...
        return [
            "id" => ['sometimes', 'integer'],
            "type" => ['sometimes', 'integer', 'exists:cu_stake_holder_types,id'],
            "customer_id" => ['sometimes', 'integer', 'exists:cu_customers,id'],
            "account_id" => ['sometimes', 'integer'],
            "created_at" => ['nullable', 'date_format:Y-m-d H:i:s'],
            "updated_at" => ['nullable', 'date_format:Y-m-d H:i:s'],
            "is_active" => ['sometimes', 'boolean'],
        ];
    }
}

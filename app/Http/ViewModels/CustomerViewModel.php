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

class CustomerViewModel implements Validatable
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
			"id" => ['sometimes','integer'],
			"sex_id" => ['required_without:id','integer','exists:cu_sex,id'],
			"civil_state_id" => ['required_without:id','integer','exists:cu_civil_states,id'],
			"address_id" => ['required_without:id','integer','exists:cu_addresses,id'],
			"marital_status_id" => ['required_without:id','integer'],
			"firstname" => ['required_without:id','string','max:50'],
			"lastname" => ['required_without:id','string','max:50'],
			"profession" => ['nullable','string','max:25'],
			"birthdate" => ['required_without:id','date'],
			"nationality" => ['required_without:id','string','max:100'],
			"birthplace" => ['required_without:id','string','max:190'],
			"created_at" => ['nullable','date_format:Y-m-d H:i:s'],
			"updated_at" => ['nullable','date_format:Y-m-d H:i:s'],
			"second_firstname" => ['nullable','string','max:50'],
			"second_lastname" => ['nullable','string','max:50'],
			"spouce_firstname" => ['nullable','string','max:50'],
			"spouce_lastname" => ['required_without:id','string','max:50'],
			"children" => ['required_without:id'],
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
			"id" => ['sometimes','integer'],
			"sex_id" => ['sometimes','integer','exists:cu_sex,id'],
			"civil_state_id" => ['sometimes','integer','exists:cu_civil_states,id'],
			"address_id" => ['sometimes','integer','exists:cu_addresses,id'],
			"marital_status_id" => ['sometimes','integer'],
			"firstname" => ['sometimes','string','max:50'],
			"lastname" => ['sometimes','string','max:50'],
			"profession" => ['nullable','string','max:25'],
			"birthdate" => ['sometimes','date'],
			"nationality" => ['sometimes','string','max:100'],
			"birthplace" => ['sometimes','string','max:190'],
			"created_at" => ['nullable','date_format:Y-m-d H:i:s'],
			"updated_at" => ['nullable','date_format:Y-m-d H:i:s'],
			"second_firstname" => ['nullable','string','max:50'],
			"second_lastname" => ['nullable','string','max:50'],
			"spouce_firstname" => ['nullable','string','max:50'],
			"spouce_lastname" => ['sometimes','string','max:50'],
			"children" => ['sometimes'],
		];
	}

}
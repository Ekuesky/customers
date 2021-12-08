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

class MoralViewModel implements Validatable
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
			"member_id" => ['required_without:id','integer','exists:cu_members,id'],
			"address_id" => ['required_without:id','integer','exists:cu_addresses,id'],
			"category_id" => ['required_without:id','integer','exists:cu_member_categories,id'],
			"social_reason" => ['required_without:id','string','max:100'],
			"legal_form" => ['required_without:id','string','max:45'],
			"receipt_number" => ['nullable','string','max:20'],
			"approval_number" => ['nullable','string','max:20'],
			"created_at" => ['nullable','date_format:Y-m-d H:i:s'],
			"updated_at" => ['nullable','date_format:Y-m-d H:i:s'],
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
			"member_id" => ['sometimes','integer','exists:cu_members,id'],
			"address_id" => ['sometimes','integer','exists:cu_addresses,id'],
			"category_id" => ['sometimes','integer','exists:cu_member_categories,id'],
			"social_reason" => ['sometimes','string','max:100'],
			"legal_form" => ['sometimes','string','max:45'],
			"receipt_number" => ['nullable','string','max:20'],
			"approval_number" => ['nullable','string','max:20'],
			"created_at" => ['nullable','date_format:Y-m-d H:i:s'],
			"updated_at" => ['nullable','date_format:Y-m-d H:i:s'],
		];
	}

}
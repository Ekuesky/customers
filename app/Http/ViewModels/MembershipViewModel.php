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

class MembershipViewModel implements Validatable
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
			"type" => ['required_without:id','integer','exists:cu_member_types,id'],
			"status_id" => ['required_without:id','integer','exists:cu_membership_status,id'],
			"closed_at" => ['nullable','date_format:Y-m-d H:i:s'],
			"deactivated_at" => ['nullable','date_format:Y-m-d H:i:s'],
			"created_at" => ['nullable','date_format:Y-m-d H:i:s'],
			"updated_at" => ['nullable','date_format:Y-m-d H:i:s'],
			"validated_at" => ['nullable','date_format:Y-m-d H:i:s'],
			"revoked_at" => ['nullable','date_format:Y-m-d H:i:s'],
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
			"type" => ['sometimes','integer','exists:cu_member_types,id'],
			"status_id" => ['sometimes','integer','exists:cu_membership_status,id'],
			"closed_at" => ['nullable','date_format:Y-m-d H:i:s'],
			"deactivated_at" => ['nullable','date_format:Y-m-d H:i:s'],
			"created_at" => ['nullable','date_format:Y-m-d H:i:s'],
			"updated_at" => ['nullable','date_format:Y-m-d H:i:s'],
			"validated_at" => ['nullable','date_format:Y-m-d H:i:s'],
			"revoked_at" => ['nullable','date_format:Y-m-d H:i:s'],
		];
	}

}
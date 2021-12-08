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

class MemberViewModel implements Validatable
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
			"status_id" => ['nullable','integer','exists:cu_membership_status,id'],
			"membership_id" => ['required_without:id','integer','exists:cu_memberships,id'],
			"activity_sector_id" => ['required_without:id','integer','exists:cu_activity_sectors,id'],
			"business_link_id" => ['required_without:id','exists:cu_business_links,id'],
			"activity" => ['required_without:id','string','max:190'],
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
			"status_id" => ['nullable','integer','exists:cu_membership_status,id'],
			"membership_id" => ['sometimes','integer','exists:cu_memberships,id'],
			"activity_sector_id" => ['sometimes','integer','exists:cu_activity_sectors,id'],
			"business_link_id" => ['sometimes','exists:cu_business_links,id'],
			"activity" => ['sometimes','string','max:190'],
			"created_at" => ['nullable','date_format:Y-m-d H:i:s'],
			"updated_at" => ['nullable','date_format:Y-m-d H:i:s'],
		];
	}

}
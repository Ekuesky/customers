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

class AddressViewModel implements Validatable
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
			"city_id" => ['required_without:id','integer','exists:cu_cities,id'],
			"district_id" => ['nullable','integer','exists:cu_district,id'],
			"country_id" => ['required_without:id','integer','exists:cu_countries,id'],
			"address" => ['nullable','string','max:255'],
			"phone_number" => ['nullable','string','max:20'],
			"other_phone_number" => ['nullable','string','max:20'],
			"postal_box" => ['nullable','string','max:145'],
			"email" => ['nullable','string','max:190'],
			"prefecture" => ['nullable','string','max:190'],
			"municipality" => ['nullable','string','max:150'],
			"detail" => ['nullable','string'],
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
			"city_id" => ['sometimes','integer','exists:cu_cities,id'],
			"district_id" => ['nullable','integer','exists:cu_district,id'],
			"country_id" => ['sometimes','integer','exists:cu_countries,id'],
			"address" => ['nullable','string','max:255'],
			"phone_number" => ['nullable','string','max:20'],
			"other_phone_number" => ['nullable','string','max:20'],
			"postal_box" => ['nullable','string','max:145'],
			"email" => ['nullable','string','max:190'],
			"prefecture" => ['nullable','string','max:190'],
			"municipality" => ['nullable','string','max:150'],
			"detail" => ['nullable','string'],
			"created_at" => ['nullable','date_format:Y-m-d H:i:s'],
			"updated_at" => ['nullable','date_format:Y-m-d H:i:s'],
		];
	}

}
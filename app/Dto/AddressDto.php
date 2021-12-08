<?php

/*
 * This file is auto generated using the Drewlabs Code Generator package
 *
 * (c) Sidoine Azandrew <contact@liksoft.tg>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace App\Dto;

use Drewlabs\Support\Immutable\ModelValueObject;

class AddressDto extends ModelValueObject
{

	/**
	 * @var array
	 */
	protected $___hidden = [];

	/**
	 * @var array
	 */
	protected $___guarded = [];

	/**
	 * Returns the list of JSON serializable properties
	 * 
	 *
	 * @return array
	 */
	protected function getJsonableAttributes()
	{
		# code...
		return [
			"id" => "id",
			"cityId" => "city_id",
			"districtId" => "district_id",
			"countryId" => "country_id",
			"address" => "address",
			"phoneNumber" => "phone_number",
			"otherPhoneNumber" => "other_phone_number",
			"postalBox" => "postal_box",
			"email" => "email",
			"prefecture" => "prefecture",
			"municipality" => "municipality",
			"detail" => "detail",
			"createdAt" => "created_at",
			"updatedAt" => "updated_at",
		];
	}

}
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

class CustomerDto extends ModelValueObject
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
			"sexId" => "sex_id",
			"civilStateId" => "civil_state_id",
			"addressId" => "address_id",
			"maritalStatusId" => "marital_status_id",
			"firstname" => "firstname",
			"lastname" => "lastname",
			"profession" => "profession",
			"birthdate" => "birthdate",
			"nationality" => "nationality",
			"birthplace" => "birthplace",
			"createdAt" => "created_at",
			"updatedAt" => "updated_at",
			"secondFirstname" => "second_firstname",
			"secondLastname" => "second_lastname",
			"spouceFirstname" => "spouce_firstname",
			"spouceLastname" => "spouce_lastname",
			"children" => "children",
		];
	}

}
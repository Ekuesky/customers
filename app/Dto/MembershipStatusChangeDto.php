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

class MembershipStatusChangeDto extends ModelValueObject
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
			"membershipId" => "membership_id",
			"currentStatusId" => "current_status_id",
			"previousStatusId" => "previous_status_id",
			"reason" => "reason",
			"date" => "date",
			"createdAt" => "created_at",
			"updatedAt" => "updated_at",
		];
	}

}
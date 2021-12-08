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

class MoralDto extends ModelValueObject
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
			"memberId" => "member_id",
			"addressId" => "address_id",
			"categoryId" => "category_id",
			"socialReason" => "social_reason",
			"legalForm" => "legal_form",
			"receiptNumber" => "receipt_number",
			"approvalNumber" => "approval_number",
			"createdAt" => "created_at",
			"updatedAt" => "updated_at",
		];
	}

}
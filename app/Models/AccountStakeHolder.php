<?php

/*
 * This file is auto generated using the Drewlabs Code Generator package
 *
 * (c) Sidoine Azandrew <contact@liksoft.tg>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace App\Models;

use Drewlabs\Packages\Database\Traits\Model;
use Drewlabs\Contracts\Data\Model\ActiveModel;
use Drewlabs\Contracts\Data\Model\Parseable;
use Drewlabs\Contracts\Data\Model\Relatable;
use Drewlabs\Contracts\Data\Model\GuardedModel;
use Illuminate\Database\Eloquent\Model as EloquentModel;

final class AccountStakeHolder extends EloquentModel implements ActiveModel, Parseable, Relatable, GuardedModel
{

	use Model;

	/**
	 * Model referenced table
	 * 
	 * @var string
	 */
	protected $table = "cu_account_stake_holders";

	/**
	 * List of values that must be hidden when generating the json output
	 * 
	 * @var array
	 */
	protected $hidden = [];

	/**
	 * List of attributes that will be appended to the json output of the model
	 * 
	 * @var array
	 */
	protected $appends = [];

	/**
	 * List of fillable properties of the current model
	 * 
	 * @var array
	 */
	protected $fillable = [
		"id",
		"type",
		"customer_id",
		"account_id",
		"created_at",
		"updated_at",
		"is_active",
	];

	/**
	 * List of fillable properties of the current model
	 * 
	 * @var array
	 */
	public $relation_methods = [];

	/**
	 * Table primary key
	 * 
	 * @var string
	 */
	protected $primaryKey = "id";

	/**
	 * Bootstrap the model and its traits.
	 * 
	 *
	 * @return void
	 */
	protected static function boot()
	{
		# code...
		parent::boot();
	}

	//Relationship belongsto

	public function customer(){
		return $this->belongsTo(Customer::class);
	}

	public function stakeholdertype(){
		return $this->belongsTo(StakeHolderType::class, 'type');
	}
}
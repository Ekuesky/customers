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

final class StakeHolderType extends EloquentModel implements ActiveModel, Parseable, Relatable, GuardedModel
{

	use Model;

	/**
	 * Model referenced table
	 * 
	 * @var string
	 */
	protected $table = "cu_stake_holder_types";

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
		"label",
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
	 * Indicates whether table has updated_at and created_at columns 
	 * 
	 * @var bool
	 */
	public $timestamps;

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

	//RelationShip hasMany

	public function accountstakeholders(){
		return $this->hasMany(AccountStakeHolder::class);
	}

}
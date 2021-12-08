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

final class Customer extends EloquentModel implements ActiveModel, Parseable, Relatable, GuardedModel
{

	use Model;

	/**
	 * Model referenced table
	 * 
	 * @var string
	 */
	protected $table = "cu_customers";

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
		"sex_id",
		"civil_state_id",
		"address_id",
		"marital_status_id",
		"firstname",
		"lastname",
		"profession",
		"birthdate",
		"nationality",
		"birthplace",
		"created_at",
		"updated_at",
		"second_firstname",
		"second_lastname",
		"spouce_firstname",
		"spouce_lastname",
		"children",
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

	//RelationShip Belongsto

	public function Address(){
		return $this->belongsTo(Address::class);
	}
	
	public function Sex(){
		return $this->belongsTo(Sex::class);
	}

	public function MaritalStatus(){
		return $this->belongsTo(MaritalStatus::class,'marital_status_id');
	}

	public function CivilState(){
		return $this->belongsTo(CivilState::class,'civil_state_id');
	}


	//RelationShip hasMany
	
    public function individuals(){
		return $this->hasMany(Individual::class);
	}
	 
    public function accountstakeHolders(){
		return $this->hasMany(AccountStakeHolder::class);
	}	

	public function customerphotos(){
		return $this->hasMany(CustomerPhoto::class);
	}	

	public function customerdocuments(){
		return $this->hasMany(CustomerDocument::class);
	}

	public function moralsignatories(){
		return $this->hasMany(MoralSignatory::class);
	}



}
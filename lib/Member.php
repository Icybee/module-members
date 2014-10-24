<?php

/*
 * This file is part of the Icybee package.
 *
 * (c) Olivier Laviale <olivier.laviale@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Icybee\Modules\Members;

use ICanBoogie\Operation;

class Member extends \Icybee\Modules\Users\User
{
	const MODEL_ID = 'members';

	public $salutation_code;

	public $number_work;
	public $number_home;
	public $number_fax;
	public $number_pager;
	public $number_mobile;

	public $street;
	public $street_complement;
	public $city;
	public $state;
	public $postalcode;
	public $country;
	public $webpage;

	public $birthday;

	public $position;
	public $service;
	public $company;
	public $company_street;
	public $company_street_complement;
	public $company_city;
	public $company_state;
	public $company_postalcode;
	public $company_country;
	public $company_webpage;

	public $misc1;
	public $misc2;
	public $misc3;
	public $misc4;
	public $notes;
}

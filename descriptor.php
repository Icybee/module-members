<?php

namespace Icybee\Modules\Members;

use ICanBoogie\ActiveRecord\Model;
use ICanBoogie\Module\Descriptor;

return [

	Descriptor::CATEGORY => 'users',
	Descriptor::ID => 'members',
	Descriptor::INHERITS => 'users',
	Descriptor::MODELS => [

		'primary' => [

			Model::T_EXTENDS => 'users',
			Model::T_SCHEMA => [

				'fields' => [

					'salutation_code' => [ 'integer', 'tiny' ],

					#
					# numbers
					#

					'number_work' => [ 'varchar', 30 ],
					'number_home' => [ 'varchar', 30 ],
					'number_fax' => [ 'varchar', 30 ],
					'number_pager' => [ 'varchar', 30 ],
					'number_mobile' => [ 'varchar', 30 ],

					#
					# private
					#

					'street' => 'varchar',
					'street_complement' => 'varchar',
					'city' => [ 'varchar', 80 ],
					'state' => [ 'varchar', 80 ],
					'postalcode' => [ 'varchar', 10 ],
					'country' => [ 'varchar', 80 ],
					'webpage' => 'varchar',

					'birthday' => 'date',

					#
					# professional
					#

					'position' => [ 'varchar', 80 ],
					'service' => [ 'varchar', 80 ],
					'company' => [ 'varchar', 80 ],
					'company_street' => 'varchar',
					'company_street_complement' => 'varchar',
					'company_city' => [ 'varchar', 80 ],
					'company_state' => [ 'varchar', 80 ],
					'company_postalcode' => [ 'varchar', 10 ],
					'company_country' => [ 'varchar', 80 ],
					'company_webpage' => 'varchar',

					#
					# misc
					#

					'misc1' => 'varchar',
					'misc2' => 'varchar',
					'misc3' => 'varchar',
					'misc4' => 'varchar',
					'notes' => 'text'

				]
			]
		]
	],

	Descriptor::NS => __NAMESPACE__,
	Descriptor::TITLE => 'Members',
	Descriptor::VERSION => '2.0'

];
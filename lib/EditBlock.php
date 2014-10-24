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

use ICanBoogie\I18n;

use Brickrouge\Element;
use Brickrouge\Date;
use Brickrouge\Form;
use Brickrouge\Text;

use Icybee\Modules\Editor\RTEEditorElement;

class EditBlock extends \Icybee\Modules\Users\EditBlock
{
	protected function lazy_get_attributes()
	{
		return \ICanBoogie\array_merge_recursive(parent::lazy_get_attributes(), [

			Element::GROUPS => [

				'numbers' => [

					'title' => 'Numéros de téléphone'

				],

				'private' => [

					'title' => 'Données privées'

				],

				'professional' => [

					'title' => 'Données professionnelles'

				],

				'misc' => [

					'title' => 'Informations complémentaires'

				],

				'attached' => [

					'title' => 'Pièces attachées'

				]

			]
		]);
	}

	protected function lazy_get_children()
	{
		return array_merge(parent::lazy_get_children(), [

			'salutation_code' => new Element('select', [

				Form::LABEL => 'Salutation',
				Element::REQUIRED => true,
				Element::WEIGHT => 'firstname:before',
				Element::OPTIONS => [

					null => '',
					I18n\t('salutation.misses'),
					I18n\t('salutation.miss'),
					I18n\t('salutation.mister')

				]

			]),

			#
			# numbers
			#

			'number_work' => new Text([

				Form::LABEL => 'Travail',
				Element::GROUP => 'numbers'

			]),

			'number_home' => new Text([

				Form::LABEL => 'Domicile',
				Element::GROUP => 'numbers'

			]),

			'number_fax' => new Text([

				Form::LABEL => 'FAX',
				Element::GROUP => 'numbers'

			]),

			'number_pager' => new Text([

				Form::LABEL => 'Pager',
				Element::GROUP => 'numbers'

			]),

			'number_mobile' => new Text([

				Form::LABEL => 'Mobile',
				Element::GROUP => 'numbers'

			]),

			#
			# private
			#

			'street' => new Text([

				Form::LABEL => 'Rue',
				Element::GROUP => 'private'

			]),

			'street_complement' => new Text([

				Element::GROUP => 'private'

			]),

			'city' => new Text([

				Form::LABEL => 'Ville/Localité',
				Element::GROUP => 'private'

			]),

			'state' => new Text([

				Form::LABEL => 'État/Province',
				Element::GROUP => 'private'

			]),

			'postalcode' => new Text([

				Form::LABEL => 'Code postal',
				Element::GROUP => 'private'

			]),

			'country' => new Text([

				Form::LABEL => 'Pays',
				Element::GROUP => 'private'

			]),

			'webpage' => new Text([

				Form::LABEL => 'Page Web',
				Element::GROUP => 'private'

			]),

			'birthday' => new Date([

				Form::LABEL => 'Date de naissance',
				Element::GROUP => 'private'

			]),

			#
			# professional
			#

			'position' => new Text([

				Form::LABEL => 'Poste',
				Element::GROUP => 'professional'

			]),

			'service' => new Text([

				Form::LABEL => 'Service',
				Element::GROUP => 'professional'

			]),

			'company' => new Text([

				Form::LABEL => 'Société',
				Element::GROUP => 'professional'

			]),

			'company_street' => new Text([

				Form::LABEL => 'Rue',
				Element::GROUP => 'professional'

			]),

			'company_street_complement' => new Text([

				Element::GROUP => 'professional'

			]),

			'company_city' => new Text([

				Form::LABEL => 'Ville/Localité',
				Element::GROUP => 'professional'

			]),

			'company_state' => new Text([

				Form::LABEL => 'État/Province',
				Element::GROUP => 'professional'

			]),

			'company_postalcode' => new Text([

				Form::LABEL => 'Code postal',
				Element::GROUP => 'professional'

			]),

			'company_country' => new Text([

				Form::LABEL => 'Pays',
				Element::GROUP => 'professional'

			]),

			'company_webpage' => new Text([

				Form::LABEL => 'Page Web',
				Element::GROUP => 'professional'

			]),

			#
			# miscellaneous informations
			#

			'misc1' => new Text([

				Form::LABEL => 'Divers 1',
				Element::GROUP => 'misc'

			]),

			'misc2' => new Text([

				Form::LABEL => 'Divers 2',
				Element::GROUP => 'misc'

			]),

			'misc3' => new Text([

				Form::LABEL => 'Divers 3',
				Element::GROUP => 'misc'

			]),

			'misc4' => new Text([

				Form::LABEL => 'Divers 4',
				Element::GROUP => 'misc'

			]),

			'notes' => \ICanBoogie\app()->editors['rte']->from([

				Form::LABEL => 'Notes',
				Element::GROUP => 'misc'

			])
		]);
	}
}

<?php

namespace Icybee\Modules\Members;

$hooks = __NAMESPACE__ . '\Hooks::';

return [

	'events' => [

		'ICanBoogie\Routing\Dispatcher::dispatch:before' => $hooks . 'before_routing_dispatcher_dispatch',
		'Icybee\Modules\Members\SaveOperation::process' => $hooks . 'on_save'

	]

];

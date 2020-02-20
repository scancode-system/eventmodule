<?php

namespace Modules\Event\Observers;

use Modules\Client\Entities\Client;
use Modules\Event\Entities\ClientNew;
use Modules\Event\Repositories\SettingEventRepository;


class ClientObserver
{


	public function created(Client $client)
	{
		$setting_event = SettingEventRepository::load();

		$created_at = $client->created_at;
		$event_start = $setting_event->start;
		$event_end = $setting_event->end;

		$new = $created_at->between($event_start, $event_end); 
		ClientNew::create(['client_id' => $client->id, 'new' => $new]);
	}


}

 
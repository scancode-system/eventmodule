<?php

namespace Modules\Event\Repositories;

use Modules\Client\Entities\Client;
use Modules\Event\Entities\ClientNew;
use Illuminate\Database\Eloquent\Collection;

class ClientNewRepository
{

	public static function loadNewClients(){
		$client_news = ClientNew::with('client')->where('new', 1)->get();
		return $client_news;
	}

	public static function loadOldClients(){
		$client_older = ClientNew::with('client')->where('new', 0)->get();
		return $client_older;
	}

}

<?php

namespace Modules\Event\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Client\Entities\Client;

class ClientNew extends Model
{
    protected $fillable = ['id', 'client_id', 'new'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

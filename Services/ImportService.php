<?php

namespace Modules\Event\Services;

use Modules\Event\Repositories\SettingEventRepository;

class ImportService {

    public function setting($data)
    {
        SettingEventRepository::update($data);
    }

    public function records()
    {

    }

}

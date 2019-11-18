<?php

namespace Modules\Event\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Event\Repositories\SettingEventRepository;
use Modules\Event\Http\Requests\SettingEventRequest;


class SettingEventController extends Controller
{

    public function update(SettingEventRequest $request)
    {
        SettingEventRepository::update($request->all());
        return back()->with('success', 'Configuração atualizada.');
    }

}

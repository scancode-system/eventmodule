<?php

namespace Modules\Event\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Maatwebsite\Excel\Facades\Excel;
use Modules\Event\Exports\ClientsNewExport;


class ReportController extends Controller
{

	public function clientsNew(){
		return Excel::download(new ClientsNewExport, 'Clientes Novos.xlsx');
	}

}

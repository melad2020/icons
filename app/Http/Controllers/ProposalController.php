<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Client;
use App\Source;
use App\Employee;
use App\Service;
use Illuminate\Http\Request;
use App\Proposal;
use Illuminate\Broadcasting\PrivateChannel;

class ProposalController extends Controller {
	
	
	public function index() {
		
	}
	
	/**
	 * new proposal form
	 * @return Ambigous <\Illuminate\View\$this, \Illuminate\View\View>
	 */
	public function newForm() {
		$clients  = Client::all();
		$sources = Source::all();
		$employees  = Employee::all();
		$services = Service::all();
		$data = [
			'clients' => $clients,
			'sources' => $sources,
			'employees' => $employees,
			'services' => $services
		];
		return view ( 'proposal/new_form' )->with ( $data );
	}
	
	/**
	 * create new proposal
	 * @param Request $request
	 */
	public function newAdd(Request $request) {
		$proposal = new Proposal;
		$sales = Employee::find($request->sales);
		$service = Service::find($request->service);
		$source = Source::find($request->source);
		$client = Client::find($request->client);
		$proposal->code = $this->generateCode($sales, $service, $source, $client);
		$proposal->sales_id = $sales->id;  
		$proposal->service_id = $service->id;
		$proposal->source_id = $source->id;
		$proposal->client_id = $client->id;
		$proposal->date = date('Y-m-d');
		$proposal->save();
		return redirect()->route('list');
	}
	
	/**
	 * generate code
	 * @param integer $sales
	 * @param integer $service
	 * @param integer $source
	 * @param integer $client
	 */
	Private function generateCode($sales, $service, $source, $client) {
		$object = Proposal::whereRaw('id = (select max(`id`) from proposals)')->first();
		$id = ($object == NULL) ? 1 : $object->id;
		$id++;
		$id = sprintf('%04u', $id);
		$code = $sales->code . $service->code . "_" . $id . "_" . $source->code . $client->code;
		return $code;
	}
	
	/**
	 * list proposals
	 * @return Ambigous <\Illuminate\View\$this, \Illuminate\View\View>
	 */
	public function listAll() {
		$proposals = Proposal::paginate(10)->toArray();
		//var_dump($proposals); die();
		$data = [
			'proposals' => $proposals
		];
		return view ( 'proposal/list' )->with ( $data );
	}
}

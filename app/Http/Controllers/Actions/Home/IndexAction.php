<?php namespace Brunty\Http\Controllers\Actions\Home;

use Brunty\Http\Controllers\Actions\Action;
use Brunty\Services\Home\IndexService as HomeIndexService;
use Brunty\Responders\Home\IndexResponder as HomeIndexResponder;

class IndexAction extends Action {
	protected $service;
	protected $responder;

	public function __construct(HomeIndexService $service, HomeIndexResponder $responder) {
		$this->service = $service;
		$this->responder = $responder;
	}

	public function act() {
		$data = $this->service->getData();
		return $this->responder->respond($data);
	}
}

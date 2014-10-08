<?php namespace Mfyu\Http\Actions\Home;

use Mfyu\Http\Actions\Action;
use Mfyu\Responders\Home\IndexResponder as HomeIndexResponder;
use Mfyu\Services\Home\IndexService as HomeIndexService;

/**
 * Class HomeIndexAction
 * @package Mfyu\Http\Actions
 */
class IndexAction extends Action {

    /**
     * @var HomeIndexResponder
     */
    private $responder;
    /**
     * @var HomeIndexService
     */
    private $service;

    /**
     * @param HomeIndexService $service
     * @param HomeIndexResponder $responder
     */
    public function __construct(HomeIndexService $service, HomeIndexResponder $responder) {
        $this->service = $service;
        $this->responder = $responder;
    }

    /**
     * @return $this
     */
    public function action() {
        // the service is essentially your domain, be it a service, repository, command bus etc
        $data = $this->service->getData();
        return $this->responder->respond($data);
    }
} 
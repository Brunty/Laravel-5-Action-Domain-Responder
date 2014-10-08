<?php namespace Mfyu\Http\Actions;

use Mfyu\Responders\HomeIndexResponder;
use Mfyu\Services\HomeIndexService;

/**
 * Class HomeIndexAction
 * @package Mfyu\Http\Actions
 */
class HomeIndexAction extends Action {

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
        $data = $this->service->getData();
        return $this->responder->respond($data, 'hello');
    }
} 
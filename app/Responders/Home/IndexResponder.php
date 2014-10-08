<?php namespace Mfyu\Responders\Home;

use Mfyu\Responders\ViewResponder;

/**
 * Class HomeIndexResponder
 * @package Mfyu\Responders
 */
class IndexResponder extends ViewResponder {

    /**
     * @var ViewResponder
     */
    private $viewResponder;

    public function __construct(ViewResponder $viewResponder) {
        $this->viewResponder = $viewResponder;
    }

    public function respond($data = []) {
        return $this->viewResponder->makeView($data, 'hello');
    }
}
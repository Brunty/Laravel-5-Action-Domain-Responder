<?php namespace Brunty\Responders\Home;

use Brunty\Responders\ViewResponder;
/**
 * Class HomeIndexResponder
 * @package Mfyu\Responders
 */
class IndexResponder extends ViewResponder {
    /**
     * @var ViewResponder
     */
    private $viewResponder;

    protected $template = 'welcome';
    
    public function __construct(ViewResponder $viewResponder) {
        $this->viewResponder = $viewResponder;
    }
    public function respond($data = []) {
        return $this->viewResponder->makeView($data, $this->template);
    }
}
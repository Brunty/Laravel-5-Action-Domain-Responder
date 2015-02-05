<?php namespace Brunty\Responders;

use Illuminate\View\Factory as View;

class ViewResponder extends Responder {
	/**
     * @var View
     */
    private $view;
    /**
     * @param View $view
     */
    public function __construct(View $view) {
        $this->view = $view;
    }
    /**
     * @param array $data
     * @param $view
     * @return $this
     */
    public function makeView($data = [], $view) {
        return $this->view->make($view)->with($data);
    }
}
<?php namespace Mfyu\Responders;

use Illuminate\View\Factory as View;

/**
 * Class ViewResponder
 * This responder just takes data and the name of a view and returns a view with that data.
 * Additional responders can be created for other data types, or even constructing various options.
 * @package Mfyu\Responders
 */
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
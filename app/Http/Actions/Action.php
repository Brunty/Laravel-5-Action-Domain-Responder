<?php namespace Mfyu\Http\Actions;

use Illuminate\Http\Request;

/**
 * Class HomeIndexAction
 * @package Mfyu\Http\Actions
 */
class Action {
    /**
     * @var Request
     */
    private $request;

    /**
     * @param Request $request
     */
    public function __construct(Request $request) {
        $this->request = $request;
    }
}
<?php namespace Mfyu\Services\Home;

use Mfyu\Services\Service as HomeService;

class IndexService extends HomeService {

    public function getData() {
        return ['this'  =>  'could be anything you want'];
    }
}
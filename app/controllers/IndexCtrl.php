<?php

namespace app\controllers;


class IndexCtrl
{

    /***Actions***/

    public function index(){
        include_once '../app/views/index/index.phtml';
    }

    public function contact(){
        include_once '../app/views/index/contact.phtml';
    }
}
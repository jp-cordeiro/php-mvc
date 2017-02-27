<?php

namespace app\controllers;

use mvc\ctrl\Action;

class IndexCtrl extends Action
{
    
    /***Actions***/

    public function index(){

        $this->view->animais = array('Pássaro','Gato','Cachorro','Coelho');
        
        $this->render("index");
    }

    public function contact(){
        $this->render("contact");
    }
    
}
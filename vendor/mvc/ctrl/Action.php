<?php


namespace mvc\ctrl;

abstract class Action
{
    protected $view;
    private $action;

    /**
     * IndexCtrl constructor.
     */
    public function __construct()
    {
        $this->view = new \stdClass();
    }

    protected function render($action, $layout = true){
        $this->action = $action;
        if($layout == true && file_exists("../app/views/layout.phtml")){
            include_once '../app/views/layout.phtml';
        }else{
            $this->content($action);
        }
    }

    protected function content(){
        $current = get_class($this);

        $singleClassName = strtolower((str_replace("Ctrl","",str_replace("app\\controllers\\","",$current))));


        include_once "../app/views/".$singleClassName."/".$this->action.".phtml";
    }

}
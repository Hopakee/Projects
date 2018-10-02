<?php

class Error  extends Controller{

    function __construct() {
      parent::__construct();
    }

    function index() {
        $this->view->msg = 'This page does not exsist';
        $this->view->render('error/index');
    }
}

<?php

class Error  extends Controller{

    function __construct() {
      parent::__construct();
      echo 'This is an Error';

      $this->view->render('error/index');
    }
}

<?php

class Help extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('help/index');
    }

    public function other($arg = false) {

      $this->view->blah = $model->blah();
    }

  }

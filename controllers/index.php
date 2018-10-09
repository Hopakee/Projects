<?php

class Index extends Controller{

  function __construct() {
      parent::__construct();
  }

  function index() {
    //echo Hash::create('sha256', 'admin', HASH_KEY);
    //echo Hash::create('sha256', 'nick', HASH_KEY);
    $this->view->render('index/index');
  }

  function details(){
    $this->view->render('index/index');
  }

}

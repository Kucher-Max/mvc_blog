<?php

class ContactsController extends Controller {

    public function __construct($data = array())
    {
        parent::__construct($data);
        $this->model = new Message();
    }

    public function index(){
        if ($_POST) {
            if ($this->model->save($_POST)){
                Session::setFlash('Thenk you! Your message wos sent successfully');
            }
        }

    }

    public function admin_index(){
        $this->data = $this->model->getList();
    }

}
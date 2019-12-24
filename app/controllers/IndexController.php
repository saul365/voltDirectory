<?php
use Phalcon\Mvc\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
		
		$this->assets->addCss('css/style.css');
      $this->assets->addCss('css/index.css');
		//$this->view->render('index','index');
		$prueba="HELLOOOOOO";
      $this->view->setVar('prueba', $prueba);
    }
}


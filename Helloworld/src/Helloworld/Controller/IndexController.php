<?php
     namespace Helloworld\Controller;
 
     use Zend\Mvc\Controller\AbstractActionController;
     use Zend\View\Model\ViewModel;
 
     class IndexController extends AbstractActionController{
          public function indexAction() {
              $views = new ViewModel(
                      array(
                          'text' => 'First Application With Zend Framework 2 ' , 
                          'par1' => 'parameters 2'
                          )
                      );
              return $views;
           }

      }
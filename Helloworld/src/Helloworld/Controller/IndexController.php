<?php


     namespace Helloworld\Controller;
     include '/var/www/html/zend/module/Helloworld/Model/Person.php';
     use Zend\Mvc\Controller\AbstractActionController;
     use Zend\View\Model\ViewModel;
 
     class IndexController extends AbstractActionController{
         
         
 
         
         
          public function indexAction() {
              
              
              $adapter = $this->getServiceLocator()->get('Zend\Db\Adapter\Adapter');
              $sql = "SELECT *
                            FROM watchdog
                            LIMIT 0,5
                            " ; 
              
              $statement = $adapter->createStatement($sql);
              $result = $statement->execute();
             
              
              $p1 = new \Helloworld\Model\Person('Nadir Fouka', '47,Rue de la paix - Grenoble', '78500€','PHP Developer') ; 
              $p2 = new \Helloworld\Model\Person('Pierre Anderson', '347,Rue de la paix - Paris', '56600€','Java Developer') ; 
              $p3 = new \Helloworld\Model\Person('Maximus Miridus', '47,albert verdun - Lyon', '69500€','FullStack Developer') ; 
              
              $collection_person = array(
                   'p1' => $p1 , 
                   'p2' => $p2 , 
                   'p3' => $p3 , 
              ) ;            
              $views = new ViewModel(
                      array(
                          'text' => 'First Application With Zend Framework 2 ' , 
                          'par1' => 'parameters 2' , 
                          'p1'   => $p1->getPerson() , 
                          'all'  => $collection_person , 
                          'res'=> $result , 
                          )
                      );
              return $views;
           }

      }


<?php
   return array(
        'view_manager' => array(
            'template_path_stack' => array(__DIR__ . '/../view')
     )
, 
    'router' => array(
      'routes'      => array(
         'write-hello-world' => array(
             'type' => 'Zend\Mvc\Router\Http\Literal', 
             'options' => array(
               'route'   => '/write-hello',
               'defaults' => array(
                  'controller' => 'Helloworld\Controller\Index',
                  'action'     => 'index',
                ),
                 
             ),
             
          )
       )
    ),
       'modules' => array(
      
       'Helloworld', 
     ),
    'controllers' => array(
         'invokables' => array(
             'Helloworld\Controller\Index'
                        => 'Helloworld\Controller\IndexController',
          )
    )
       
       
       
       ) ; 
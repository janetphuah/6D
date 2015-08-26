<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Student\Controller\Login' => 'Student\Controller\LoginController',
        ),
    ),//end controllers
    'router' => array(
        'routes' => array(
            'student' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/student',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Student\Controller',
                        'controller'    => 'Login',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
			
            'login' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/student/login',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Student\Controller',
                        'controller'    => 'Login',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
            ),
           
		),//end routers
             
    ),//end route
/*     
	'navigation' => array(
	'default' => array(
		array(
			'label'      => 'Admin',
			'module'     => 'admin',
			'route' => 'admin-home',
			'pages'      => array(
				array(
					'label'      => 'Dashboard',
					'module'     => 'admin',
					'route' => 'admin-home',
					'action'     => 'index',
				),
				array(
					'label'      => 'Profile',
					'module'     => 'admin',
					'route' => 'profile',
					'action'     => 'index',
				),
			)
		),
	),
	), *///end navigaiton
	
    'view_manager' => array(
        'template_path_stack' => array(
            'student' => __DIR__ . '/../view',
        ),
    ),

	
);
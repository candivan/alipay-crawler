<?php
return [
	'settings' => [
		// debug options
		'debug' => true,
		// url config. Url must end with a slash '/'
		'baseUrl' => 'http://alipay.order.com/',
		'indexFile' => true,
		// database configs
		'database' => [
			// default db connection settings
			'default' => [
				'driver'    => 'mysql',
				'host'      => 'alipay.order.com',
				'database'  => 'alipay_order',
				'username'  => 'root',
				'password'  => '123456',
				'charset'   => 'utf8',
				'collation' => 'utf8_unicode_ci',
				'prefix'    => ''
			],
			// sqlsrv config
//			'default' => array(
//				'driver' 	=> 'sqlsrv',
//				'host' 		=> 'localhost',
//				'database' 	=> '',
//				'username' 	=> '',
//				'password' 	=> '',
//				'prefix' 	=> '',
//			),
		],
		'cache' => [
			'default' => [
				'driver' 	=> 'redis',
				'scheme' 	=> 'tcp',
				'host' 		=> 'localhost',
				'port' 		=> 6379,
				'database' 	=> 0,
                'password' 	=> 'kfF3kf4akJHJFkf',
			]
		]
	]
];
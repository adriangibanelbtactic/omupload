<?php

$manifest = array (
  'acceptable_sugar_versions' =>
        array (),
  'acceptable_sugar_flavors' =>
        array('CE', 'PRO', 'CORP', 'ENT', 'ULT'),
  'author' => 'bTactic',
  'description' => 'Aquest plugin permet pujar imatges a l&#039;editor HTML de plantilles de correu, l&#039;editor utilitzat per a redactar correus i l&#039;editor de plantilles PDF.',
  'is_uninstallable' => true,
  'name' => 'OpenManager',
  'published_date' => '2016-01-16',
  'type' => 'module',
  'version' => '7.4.3.1',
);


$installdefs = array (
	'copy' => array(
		array('from'=> '<basepath>/custom','to'=>'custom'),
		array('from'=> '<basepath>/newsletter_images','to'=>'newsletter_images'),
		array('from'=> '<basepath>/include','to'=>'include'),
		array('from'=> '<basepath>/jssource','to'=>'jssource'),
		array('from'=> '<basepath>/openmanager','to'=>'openmanager'),
		array('from'=> '<basepath>/modules','to'=>'modules')
	)
);

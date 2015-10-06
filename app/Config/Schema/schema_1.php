<?php 
class AppSchema extends CakeSchema {

	public $file = 'schema_1.php';

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $users=array(
		'id'=>array(
			'type'=>'integer',
			'null'=>false,
			'length'=>11,
			'key'=>'primary',
		),
		'username'=>array(
			'type'=>'string',
			'null'=>false,
			'length'=>50
		),
		'password'=>array(
			'type'=>'string',
			'null'=>false,
			'length'=>50
		),
		'role'=>array(
			'type'=>'string',
			'length'=>20
		),
		'created'=>array(
			'type'=>'datetime'
		),
		'modified'=>array(
			'type'=>'datetime'
		)
	);

}

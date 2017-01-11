<?php
App::uses('AppModel', 'Model');
/**
 * Category Model
 *
 * @property Users $hasOne
 */
class Category extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	/*public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'id'
		)		
	);*/
}

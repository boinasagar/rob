<?php
App::uses('AppModel', 'Model');
/**
 * EmailNotification Model
 *
 */
class EmailNotification extends AppModel {

	public function getPendingAlerts(){
		return $this->find('all', array('conditions'=>array('sent'=>'N'), 'limit' => 5,'order'=>array('id ASC')));		
	}
 
}

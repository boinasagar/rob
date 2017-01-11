<?php

class GroupsController extends AppController {
	
	/*public function beforeFilter() {
	    parent::beforeFilter();
	
	    // For CakePHP 2.1 and up
	    //$this->Auth->allow();
	}*/
	
	public function beforeFilter() {
	    parent::beforeFilter();
		parent::isCron();
		$this->Auth->allow('*');		
	}
	
	public function add() {
		
		if ($this->request->is('post')) { 
//            $this->User->create();
            if ($this->Group->save($this->request->data)) {
                $this->Session->setFlash(__('Your Group has been saved.'));
                return $this->redirect(array('action' => 'add'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }
		
	}


	
}

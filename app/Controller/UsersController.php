<?php
class UsersController extends AppController {
 
    var $uses = array('User');
	var $components = array('Auth');
	var $name = 'Users';
	
	public $paginate = array(
        'limit' => 25,
        'conditions' => array('status' => '1'),
        'order' => array('User.username' => 'asc' ) 
    );
     
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login','activate'); 
    }
     
 
 
    public function login() {
        $this->layout = 'default_login'; 
        //if already logged-in, redirect
        /*if($this->Session->check('Auth.User')){
            $this->redirect(array('action' => 'index'));      
        }*/
         
        // if we get the post information, try to authenticate
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
				$user = $this->Auth->User();
                $this->Session->write('username', $user['username']);
				$this->Session->write('userid', $user['id']);
				$this->Session->write('role', $user['role']);
				
				$IS_ADMIN = ($user['role'] == 1) ? "Y" : "N";
				$this->Session->write('IS_ADMIN', $IS_ADMIN);
				
				//return $this->redirect(array("controller" => "categories", "action" => "index"));
				return $this->redirect("/");
            } else {
                $this->Session->setFlash(__('Invalid username or password'));
            }
        } 
    }
 
    public function logout() {
        $this->redirect($this->Auth->logout());
    }
 
    public function index() {
        $this->paginate = array(
            'limit' => 6,
            'order' => array('User.username' => 'asc' )
        );
        $users = $this->paginate('User');
        $this->set(compact('users'));
    }
 
 
    public function add() {
        if ($this->request->is('post')) {
                 
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been created'));
                $this->redirect(array('action' => 'add'));
            } else {
                $this->Session->setFlash(__('The user could not be created. Please, try again.'));
            }   
        }
    }
 
    public function edit($id = null) {
 
            if (!$id) {
                $this->Session->setFlash('Please provide a user id');
                $this->redirect(array('action'=>'index'));
            }
 
            $user = $this->User->findById($id);
            if (!$user) {
                $this->Session->setFlash('Invalid User ID Provided');
                $this->redirect(array('action'=>'index'));
            }
 
            if ($this->request->is('post') || $this->request->is('put')) {
                $this->User->id = $id;
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash(__('The user has been updated'));
                    $this->redirect(array('action' => 'edit', $id));
                }else{
                    $this->Session->setFlash(__('Unable to update your user.'));
                }
            }
 
            if (!$this->request->data) {
                $this->request->data = $user;
            }
    }
 
    public function delete($id = null) {
         
        if (!$id) {
            $this->Session->setFlash('Please provide a user id');
            $this->redirect(array('action'=>'index'));
        }
         
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash('Invalid user id provided');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('status', 0)) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
     
    /*public function activate($id = null) {
         
        if (!$id) {
            $this->Session->setFlash('Please provide a user id');
            $this->redirect(array('action'=>'index'));
        }
         
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash('Invalid user id provided');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('status', 1)) {
            $this->Session->setFlash(__('User re-activated'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not re-activated'));
        $this->redirect(array('action' => 'index'));
    }*/
	
	public function activate($id = null) {
		$this->layout = 'default_reset'; 
         
        if ($this->request->is('post')) {
			$username = $this->request->data['User']['username'];
			
			$user = $this->User->findByusername($username);
			
			//echo '<pre>';print_r($user);exit;
			
			if(count($user) == 0)
			{
				$this->Session->setFlash(__('The username is not found. Please, try again.'));
				$this->redirect(array('action' => 'activate'));
			}else{
				
				$this->User->id = $user['User']['id'];
				
				//$pwd = $this->request->data['User']['password'];	
				$user['User']['password'] = $this->request->data['User']['password'];
				$user['User']['password_confirm'] = $this->request->data['User']['password_confirm'];
				//echo '<pre/>';print_r($user);exit;
				
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('The user has been activated'));
					//$this->redirect(array('action' => ''));
				} else {
					$this->Session->setFlash(__('The user could not be activated. Please, try again.'));
				}  
				
			}
             
        }
    }
 
}


?>
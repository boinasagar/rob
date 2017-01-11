<?php
App::uses('AppController', 'Controller');
/**
 * Outlets Controller
 *
 * @property Outlet $Outlet
 * @property PaginatorComponent $Paginator
 */
class OutletsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Outlet->recursive = 0;
		$this->set('outlets', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Outlet->exists($id)) {
			throw new NotFoundException(__('Invalid outlet'));
		}
		$options = array('conditions' => array('Outlet.' . $this->Outlet->primaryKey => $id));
		$this->set('outlet', $this->Outlet->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Outlet->create();
			print_r($this->request->data);
			$this->request->data['Outlet']['unique_id'] = '';
							
			$outlet_image = $this->request->data['Outlet']['image'];
			$this->request->data['Outlet']['image'] = '';
			
			
			if ($this->Outlet->save($this->request->data)) {
				$this->request->data['Outlet']['image'] = $outlet_image;
				$id = $this->Outlet->getLastInsertId();
				$this->request->data['Outlet']['unique_id'] = strtoupper(trim($this->request->data['Outlet']['name']."_".$id)); 
				$this->request->data['Outlet']['unique_id']  = preg_replace('/\s+/', '', $this->request->data['Outlet']['unique_id']);
				//print_r($this->request->data['Outlet']);
				$extension = pathinfo($this->request->data['Outlet']['image']['name'], PATHINFO_EXTENSION);
				$fileName = $this->request->data['Outlet']['unique_id'].".".$extension;
				
				if(!empty($this->request->data['Outlet']['image']['name'])){
					//$fileName = $this->request->data['Outlet']['image']['name'];
					$uploadPath =  APP.'webroot/uploads/outlets/logos/';
					$uploadFile = $uploadPath.$fileName;
					if(move_uploaded_file($this->request->data['Outlet']['image']['tmp_name'],$uploadFile)){
						$this->request->data['Outlet']['image'] = $fileName;
						$this->Session->setFlash(__('The outlet image has been saved.'));
					}
				}					
				$this->request->data['Outlet']['image'] = $fileName;
				
				$this->Outlet->save(array('id'=>$id, 'image'=>$fileName));
			
				$this->Session->setFlash(__('The outlet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The outlet could not be saved. Please, try again.'));
			}
		}else{
			$this->loadModel('User');
			$users = $this->User->find('all', array('fields'=>array('id', 'username')));
			$formatted_users = array();
			foreach($users as $user){				
				$formatted_users[$user['User']['id']] = $user['User']['username']; 
			}
			$this->set('users', $formatted_users);
			
			$this->loadModel('Category');
			$cats = $this->Category->find('all', array('fields'=>array('id', 'name')));
			$formatted_cats = array();
			foreach($cats as $cat){				
				$formatted_cats[$cat['Category']['id']] = $cat['Category']['name']; 
			}
			$this->set('categories', $formatted_cats);
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Outlet->exists($id)) {
			throw new NotFoundException(__('Invalid outlet'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Outlet']['unique_id'] = strtoupper(trim($this->request->data['Outlet']['name']."_".$this->request->data['Outlet']['id'])); 
			$this->request->data['Outlet']['unique_id']  = preg_replace('/\s+/', '', $this->request->data['Outlet']['unique_id']);
			//print_r($this->request->data['Outlet']);
			$extension = pathinfo($this->request->data['Outlet']['image']['name'], PATHINFO_EXTENSION);
			$fileName = $this->request->data['Outlet']['unique_id'].".".$extension;
			
			if(!empty($this->request->data['Outlet']['image']['name'])){
                //$fileName = $this->request->data['Outlet']['image']['name'];
                $uploadPath =  APP.'webroot/uploads/outlets/logos/';
                $uploadFile = $uploadPath.$fileName;
                if(move_uploaded_file($this->request->data['Outlet']['image']['tmp_name'],$uploadFile)){
					$this->request->data['Outlet']['image'] = $fileName;
					$this->Session->setFlash(__('The outlet image has been saved.'));
				}
			}					
			$this->request->data['Outlet']['image'] = $fileName;
			
			
			if ($this->Outlet->save($this->request->data)) {
				$this->Session->setFlash(__('The outlet has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The outlet could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Outlet.' . $this->Outlet->primaryKey => $id));
			$this->request->data = $this->Outlet->find('first', $options);
			
			
			$this->loadModel('User');
			$users = $this->User->find('all', array('fields'=>array('id', 'username')));
			$formatted_users = array();
			foreach($users as $user){				
				$formatted_users[$user['User']['id']] = $user['User']['username']; 
			}
			$this->set('users', $formatted_users);
			
			$this->loadModel('Category');
			$cats = $this->Category->find('all', array('fields'=>array('id', 'name')));
			$formatted_cats = array();
			foreach($cats as $cat){				
				$formatted_cats[$cat['Category']['id']] = $cat['Category']['name']; 
			}
			$this->set('categories', $formatted_cats);
		
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Outlet->id = $id;
		if (!$this->Outlet->exists()) {
			throw new NotFoundException(__('Invalid outlet'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Outlet->delete()) {
			$this->Session->setFlash(__('The outlet has been deleted.'));
		} else {
			$this->Session->setFlash(__('The outlet could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

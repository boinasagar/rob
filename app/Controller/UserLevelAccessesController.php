<?php
App::uses('AppController', 'Controller');
/**
 * UserLevelAccesses Controller
 *
 * @property UserLevelAccess $UserLevelAccess
 * @property PaginatorComponent $Paginator
 */
class UserLevelAccessesController extends AppController {

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
		$this->UserLevelAccess->recursive = 0;
		$this->set('userLevelAccesses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserLevelAccess->exists($id)) {
			throw new NotFoundException(__('Invalid user level access'));
		}
		$options = array('conditions' => array('UserLevelAccess.' . $this->UserLevelAccess->primaryKey => $id));
		$this->set('userLevelAccess', $this->UserLevelAccess->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserLevelAccess->create();
			if ($this->UserLevelAccess->save($this->request->data)) {
				$this->Session->setFlash(__('The user level access has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user level access could not be saved. Please, try again.'));
			}
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
		if (!$this->UserLevelAccess->exists($id)) {
			throw new NotFoundException(__('Invalid user level access'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserLevelAccess->save($this->request->data)) {
				$this->Session->setFlash(__('The user level access has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user level access could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserLevelAccess.' . $this->UserLevelAccess->primaryKey => $id));
			$this->request->data = $this->UserLevelAccess->find('first', $options);
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
		$this->UserLevelAccess->id = $id;
		if (!$this->UserLevelAccess->exists()) {
			throw new NotFoundException(__('Invalid user level access'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserLevelAccess->delete()) {
			$this->Session->setFlash(__('The user level access has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user level access could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

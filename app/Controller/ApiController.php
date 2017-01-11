<?php
App::uses('AppController', 'Controller');
/**
 * Api Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class ApiController extends AppController {


var $uses = array('Category','User','Outlet');

/**
 * Components
 *
 * @var array
 */
	public $components = array('RequestHandler', 'Paginator');
	
	public function beforeFilter() {
		$this->layout = 'api_layout'; 
		
		$hash = $this->Auth->password($_SERVER['HTTP_PASSWORD']);
		$check = $this->User->find('first',
			array(
				'conditions' => array(
					'username' => $_SERVER['HTTP_USERNAME'],
					'password' => $hash,
					'status' => 1
				)
			)
		);
		
		if(!$check){
			//throw new Exception(__('Invalid login credentials.'))
			throw new UnauthorizedException(__('Invalid login credentials.'));
		}else{
			$this->Auth->allow();
		}
		
		
	}
	
	
	public function api_login() {
		$this->set(array(
            'message' => 'login success',
            '_serialize' => array('categories')
        ));
	}
/**
 * index method
 *
 * @return void
 */
	public function categories_index() {
		$categories = $this->Category->find('all', array('fields'=>array('Category.*', 'U.username'),'joins' => array(
			array(
				'table' => 'users',
				'alias' => 'U',
				'type' => 'LEFT',
				'conditions' => array(
					'AND' => array(
						'Category.created_by = U.id'				
					)
				)
			)
		)));
		
		$this->set(array(
            'categories' => $categories,
            '_serialize' => array('categories')
        ));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function categories_view($id = null) {
		
		$options = array(
						'conditions' => array('Category.' . $this->Category->primaryKey => $id),
						'fields' => array('Category.*', 'U.username'),
						'joins' => array(
							array(
							'table' => 'Users',
							'alias' => 'U',
							'type' => 'LEFT',
							'conditions' => array(
								'AND' => array(
									'U.id = Category.created_by'				
								)
							)
							)
						)
					);
		$category = $this->Category->find('first', $options);
		
		$this->set(array(
            'category' => $category,
            '_serialize' => array('category')
        ));
		
	}

/**
 * add method
 *
 * @return void
 */
	public function categories_add() {
		if ($this->request->is('post')) {			
			$this->Category->create();			
			if ($this->Category->save($this->request->data)) {			
				$message = 'The category has been saved.';
				$this->set(array(
					'message' => $message,
					'_serialize' => array('message')
				));
			} else {		
				$message = 'The category could not be saved. Please, try again.';
				$this->set(array(
					'message' => $message,
					'_serialize' => array('message')
				));
			}			
		}else{
				$message = 'Invalid Request.';
				$this->set(array(
					'message' => $message,
					'_serialize' => array('message')
				));
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function categories_edit($id = null) {
		
		if ($this->request->is(array('post', 'put'))) {
			if (!$id) {
				$message = 'Invalid category.';
				$this->set(array(
					'message' => $message,
					'_serialize' => array('message')
				));
			}
			if($id) {
				if ($this->Category->save($this->request->data)) {				
					$message = 'The category has been saved.';
					$this->set(array(
						'message' => $message,
						'_serialize' => array('message')
					));
				} else {
					$message = 'The category could not be saved. Please, try again.';
					$this->set(array(
						'message' => $message,
						'_serialize' => array('message')
					));
				}
			}
		}else{
				$message = 'Invalid Request.';
				$this->set(array(
					'message' => $message,
					'_serialize' => array('message')
				));
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function categories_delete($id = null) {
		$this->Category->id = $id;
		if (!$id) {
			$message = 'Invalid category.';
			$this->set(array(
				'message' => $message,
				'_serialize' => array('message')
			));
		}
		else{
			//$this->request->allowMethod('post', 'delete');
			if ($this->Category->delete()) {				
				$message = 'The category has been deleted.';
				$this->set(array(
					'message' => $message,
					'_serialize' => array('message')
				));
			} else {
				$message = 'The category could not be deleted. Please, try again.';
				$this->set(array(
					'message' => $message,
					'_serialize' => array('message')
				));
			}
			
		}
	}

}

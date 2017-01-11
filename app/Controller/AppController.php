<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $helpers = array('Html', 'Form', 'Session');
    var $user;
	
	public $components = array(
    'Session',	
    'Auth' => array(
        'authenticate' => array(
            'Form' => array(
                'userModel' => 'User',
                'fields' => array(
                    'username' => 'username',
                    'password' => 'password'
                )
            )
        ),
        'loginRedirect' => array('controller' => 'dashboards', 'action' => 'index'),
        'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
        'authError' => 'You must be logged in to view this page.',
        'loginError' => 'Invalid Username or Password entered, please try again.'
 
    ));
 
	// only allow the login controllers only
	public function beforeFilter() {
		if(in_array($this->params['controller'],array('api'))){
        // For RESTful web service requests, we check the name of our contoller
        $this->Auth->allow();
        // this line should always be there to ensure that all rest calls are secure
        //$this->Security->requireSecure();
        //$this->Security->unlockedActions = array('categories_index', 'categories_view', 'categories_add');         
		}else{
			// setup out Auth
			$this->Auth->allow('login', 'categories_index', 'categories_view', 'categories_add', 'categories_edit', 'api_login');        
		}
	}
	
	public function isAdmin()
	{
		if($this->Session->read('GROUP_ID') != '1' && $this->Session->read('GROUP_ID') != '2')
		{
			$this->Session->setFlash(__('You are not authorised to view requested page', true));
			$this->redirect('/');
		}
	}
	
	
	/*
	* This just says aslong as this is a valid user let them in, you can also modify this to restrict to a group
	*/
	public function isAuthorized($user){
			$user = $this->Auth->user();
			if($user) return true; 
			return false;
	}
	




}

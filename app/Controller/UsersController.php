<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */

class UsersController extends AppController {


	public function beforeFilter() {
		parent::beforeFilter();

		//create table in database for this exemple
		$this->Auth->allow('add');

	}

	public function login() {
		if ($this->request->is('post')) {
			/* login and redirect to url set in app controller */
			if ($this->Auth->login()) {

                $role=$this->Auth->user('role');
                if($role){
                    return $this->redirect(array(
                        'controller'=>'pages',
                        'action'=>'index'
                    ));
                }
				return $this->redirect($this->Auth->redirect());
			}
			$this->Session->setFlash(__('Invalid username or password, try again'));
		}
	}

	public function logout() {
		/* logout and redirect to url set in app controller */
		return $this->redirect($this->Auth->logout());
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				return $this->redirect(array('controller' => 'pages','action' => 'home'));
			}
			$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
		}
	}


}


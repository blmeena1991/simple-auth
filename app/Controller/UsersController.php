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
		/* Load Model datasource */
		/*App::import('Model', 'ConnectionManager');
		$con = new ConnectionManager;
		$cn = $con->getDataSource('default');
		$sql = "CREATE TABLE IF NOT EXISTS users (
          id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          username VARCHAR(50),
          password VARCHAR(50),
          created DATETIME DEFAULT NULL,
          modified DATETIME DEFAULT NULL
      								)";
		$cn->query($sql); */

		/* allow add action so user can register */
		$this->Auth->allow('add');

	}

	public function login() {
		if ($this->request->is('post')) {
			/* login and redirect to url set in app controller */
			if ($this->Auth->login()) {
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


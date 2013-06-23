<?php
App::uses('AppController', 'Controller');
/**
 * DataServiceTypes Controller
 *
 * @property DataServiceType $DataServiceType
 */
class DataServiceTypesController extends AppController {

public $paginate = array(
        'limit' => 10,       
    );


public function beforeFilter() {
	$this->set('page_for_layout', 'data_service_types');
	$this->set('breadcrumb_for layout', 'data_service_types');
}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DataServiceType->recursive = 0;
		$this->set('dataServiceTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DataServiceType->exists($id)) {
			throw new NotFoundException(__('Invalid data service type'));
		}
		$options = array('conditions' => array('DataServiceType.' . $this->DataServiceType->primaryKey => $id));
		$this->set('dataServiceType', $this->DataServiceType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DataServiceType->create();
			if ($this->DataServiceType->save($this->request->data)) {
				$this->Session->setFlash(__('The data service type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The data service type could not be saved. Please, try again.'));
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
		if (!$this->DataServiceType->exists($id)) {
			throw new NotFoundException(__('Invalid data service type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DataServiceType->save($this->request->data)) {
				$this->Session->setFlash(__('The data service type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The data service type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DataServiceType.' . $this->DataServiceType->primaryKey => $id));
			$this->request->data = $this->DataServiceType->find('first', $options);
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
		$this->DataServiceType->id = $id;
		if (!$this->DataServiceType->exists()) {
			throw new NotFoundException(__('Invalid data service type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DataServiceType->delete()) {
			$this->Session->setFlash(__('Data service type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Data service type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

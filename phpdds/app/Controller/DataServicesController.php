<?php
App::uses('AppController', 'Controller');
/**
 * DataServices Controller
 *
 * @property DataService $DataService
 */
class DataServicesController extends AppController {

public $paginate = array(
        'limit' => 10,       
    );


public function beforeFilter() {
	$this->set('page_for_layout', 'data_supplier_types');
	$this->set('breadcrumb_for layout', 'data_supplier_types');
}


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DataService->recursive = 0;
		$this->set('dataServices', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DataService->exists($id)) {
			throw new NotFoundException(__('Invalid data service'));
		}
		$options = array('conditions' => array('DataService.' . $this->DataService->primaryKey => $id));
		$this->set('dataService', $this->DataService->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DataService->create();
			if ($this->DataService->save($this->request->data)) {
				$this->Session->setFlash(__('The data service has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The data service could not be saved. Please, try again.'));
			}
		}
		$dataServiceTypes = $this->DataService->DataServiceType->find('list');
		$dataApps = $this->DataService->DataApp->find('list');
		$this->set(compact('dataServiceTypes', 'dataApps'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DataService->exists($id)) {
			throw new NotFoundException(__('Invalid data service'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->DataService->save($this->request->data)) {
				$this->Session->setFlash(__('The data service has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The data service could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DataService.' . $this->DataService->primaryKey => $id));
			$this->request->data = $this->DataService->find('first', $options);
		}
		$dataServiceTypes = $this->DataService->DataServiceType->find('list');
		$dataApps = $this->DataService->DataApp->find('list');
		$this->set(compact('dataServiceTypes', 'dataApps'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DataService->id = $id;
		if (!$this->DataService->exists()) {
			throw new NotFoundException(__('Invalid data service'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->DataService->delete()) {
			$this->Session->setFlash(__('Data service deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Data service was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 */
class CategoriesController extends AppController {
	
	public function get($id = null) {
		return $this -> Category -> find('all', array('conditinos' => array('Category.id' => $id)));
	}
	
	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this -> Category -> recursive = 0;
		$this -> set('categories', $this -> paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this -> Category -> id = $id;
		if (!$this -> Category -> exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		$this -> set('category', $this -> Category -> read(null, $id));
	}

	/**
	 * admin_index method
	 *
	 * @return void
	 */
	public function admin_index() {
		$this -> Category -> recursive = 0;
		$this -> set('categories', $this -> paginate());
	}

	/**
	 * admin_view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_view($id = null) {
		$this -> Category -> id = $id;
		if (!$this -> Category -> exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		$this -> set('category', $this -> Category -> read(null, $id));
	}

	/**
	 * admin_edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_edit($id = null) {
		$this -> Category -> id = $id;
		if (!$this -> Category -> exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this -> request -> is('post') || $this -> request -> is('put')) {
			if ($this -> Category -> save($this -> request -> data)) {
				// Salvar/crear la imagen
				$image = $this -> Category -> Image -> findById($this -> request -> data['Image']['id']);
				if(!$image) {
					$this -> Category -> Image -> create();
					$image = array(
						'Image' => array(
							'model_class' => 'Category',
							'foreign_key' => $this -> Category -> id,
							'image' => $this -> request -> data['Image']['image'],
							'main_image' => 1
						)
					);
					$this -> Category -> Image -> save($image);
				} else {
					$this -> Category -> Image -> save($this -> request -> data);
				}
				$this -> Session -> setFlash(__('The category has been saved'));
				$this -> redirect(array('action' => 'index'));
			} else {
				$this -> Session -> setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
			$this -> request -> data = $this -> Category -> read(null, $id);
		}
	}

}

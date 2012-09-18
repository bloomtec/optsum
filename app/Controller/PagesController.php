<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

	/**
	 * Controller name
	 *
	 * @var string
	 */
	public $name = 'Pages';

	/**
	 * This controller does not use a model
	 *
	 * @var array
	 */
	public $uses = array();

	/**
	 * Displays a view
	 *
	 * @param mixed What page to display
	 * @return void
	 */
	public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			$this -> redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this -> set(compact('page', 'subpage', 'title_for_layout'));
		$this -> render(implode('/', $path));
	}

	public function home() {
		$serviciosHeader = "<a href='/pages/refrigeracionindustrial'><span>refrigeración industrial</span></a>
						<a href='/pages/refrigeracionindustrial'><span>montajes y mantenimiento</span></a>
						<a href='/pages/refrigeracionindustrial'><span>tecnologia informática</span></a>";
		$this -> set(compact('serviciosHeader'));

		$imagenHeader = '<img class="foto_header" src="/img/imagen_header.png"/>';
		$this -> set(compact('imagenHeader'));
	}

	public function refrigeracionindustrial() {

		$serviciosHeader = "
						<span>refrigeración industrial</span>
						<h1>OPTSUM INGENIERIA</h1>
						<p>
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin  
						</p>
						";
		$this -> set(compact('serviciosHeader'));

		$imagenHeader = '<img class="foto_header" src="/img/refrigeracion-header.png"/>';
		$this -> set(compact('imagenHeader'));
	}

	public function overlay() {
		$this -> layout = "ajax";

	}

}

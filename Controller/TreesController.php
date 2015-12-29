<?php
App::uses('AppController', 'Controller');
/**
 * Trees Controller
 *
 * @property Tree $Tree
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class TreesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

}

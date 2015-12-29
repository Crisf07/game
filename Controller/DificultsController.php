<?php
App::uses('AppController', 'Controller');
/**
 * Dificults Controller
 *
 * @property Dificult $Dificult
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class DificultsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

}

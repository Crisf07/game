<?php
App::uses('AppController', 'Controller');
/**
 * UserTrophies Controller
 *
 * @property UserTrophy $UserTrophy
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UserTrophiesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

}

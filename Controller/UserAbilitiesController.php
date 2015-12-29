<?php
App::uses('AppController', 'Controller');
/**
 * UserAbilities Controller
 *
 * @property UserAbility $UserAbility
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UserAbilitiesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

	public $uses = array('UserAbility','User');

	public function add(){
		$this->autoRender = false;
		if($this->request->is("ajax")){
			$this->UserAbility->create();
			if($this->UserAbility->save($this->request->data)){
				$this->User->id = $this->request->data("user_id");
				$coin = $this->viewVars["current_user"]["coin"]-$this->request->data('coin');
				$point = $this->viewVars["current_user"]['point']-$this->request->data('point');
				
				$this->User->query("UPDATE users SET coin='{$coin}', point ='{$point}' WHERE id='{$this->request->data("user_id")}' ");
				echo "Se ha realizado la compra correctamente";
				
				$userid=$this->Auth->user('id');
				$this->Session->write('Auth',$this->User->read(null,$userid));
				$this->viewVars["current_user"]["coin"] = $this->viewVars["current_user"]["coin"]-$this->request->data('coin');
				$this->viewVars["current_user"]["point"] = $this->viewVars["current_user"]['point']-$this->request->data('point');

				$options = array(
					"conditions"=>array(
						"user_id"=>$userid
					)
				);
				$exist = $this->UserAbility->find("all",$options);
				if(count($exist)<=1){
					$this->User->query("INSERT INTO user_trophies (user_id,trophy_id) values('{$userid}','5') ");
				}
				if(count($exist)==9){
					$this->User->query("INSERT INTO user_trophies (user_id,trophy_id) values('{$userid}','6') ");
				}
				if(count($exist)==27){
					$this->User->query("INSERT INTO user_trophies (user_id,trophy_id) values('{$userid}','7') ");
				}
				//pr($this->viewVars["current_user"]["coin"]);
				//die();
			}
		}
	}

}

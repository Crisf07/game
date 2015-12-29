<?php
App::uses('AppController', 'Controller');
/**
 * Records Controller
 *
 * @property Record $Record
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class RecordsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');
	
	public $uses = array('UserAbility','Record');

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function game(){
		$options = array(
			"conditions"=>array(
				"user_id"=>$this->Auth->user("id")
			),
			"fields"=>array("ability_id"),
			"contain"=>array(
				"Ability"=>array(
					"fields"=>"nombre"
				)
			)
		);
		$ab = $this->UserAbility->find("all",$options);
		//pr($ab);
		//die();
		$this->set("ab",$ab);
	}

	public function ranking(){
		$options = array(
			"order"=>"puntaje DESC",
			"limit"=>7,
			"fields"=>array("ability1","ability2","ability3","puntaje"),
			"contain"=>array(
				"UserTrophy"=>array(
					"Trophy"=>array(
						"fields"=>array("nombre","id")
					)
				),
				"User"=>array(
					"fields"=>array("username")
				),
				"Dificult"=>array(
					"fields"=>"nombre"
				)
			)
		);
		$record = $this->Record->find("all",$options);
		if(empty($record)){
			$vacio = 1;
			$this->set("vacio",$vacio);
		}
		else{
			$ab = $this->Record->query("SELECT id,nombre FROM abilities");
			//pr($record);
			//die();
			$vacio = 0;
			$this->set("vacio",$vacio);
			$this->set("record",$record);
			$this->set("ab",$ab);
		}
	}

	public function register(){
		$this->autoRender = false;
		if ($this->request->is('ajax')) {
			//pr($this->request->data);
			//die();
			$this->Record->create();
			if($this->Record->save($this->request->data)){
				echo "habilidades guradadas";
			}
			else{
				debug($this->Record->validationErrors); 
				die();
			}
		}
	}

	public function dif(){
		$this->autoRender = false;
		if ($this->request->is('ajax')) {
			$lasarus = $this->Record->query("SELECT id FROM records WHERE user_id ='{$this->request->data["Record"]["user_id"]}' order by id DESC limit 1");
			//pr($this->request->data);
			//die();
			$this->Record->id = $lasarus[0]["records"]["id"];
			$c=0;

			$userid = $this->Auth->user('id');
			$exist = $this->Record->query("SELECT * From records where user_id='{$userid}' and dificult_id = '{$this->request->data["Record"]["dificult_id"]}'");
			foreach($exist as $prue){
				$c++;
			}
			if($c==0){
				if($this->request->data["Record"]["dificult_id"]=="2")
					$this->Record->query("INSERT INTO user_trophies (user_id,trophy_id,record_id) VALUES ('{$userid}','8','{$this->Record->id}') ");

				if($this->request->data["Record"]["dificult_id"]=="3")
					$this->Record->query("INSERT INTO user_trophies (user_id,trophy_id,record_id) VALUES ('{$userid}','9','{$this->Record->id}') ");

				if($this->request->data["Record"]["dificult_id"]=="4")
					$this->Record->query("INSERT INTO user_trophies (user_id,trophy_id,record_id) VALUES ('{$userid}','10','{$this->Record->id}') ");
			}

			$exist = $this->Record->query("SELECT * From records where user_id='{$userid}' ");
			$c=0;
			foreach($exist as $prue){
				$c++;
			}
			if($c==1){
				$this->Record->query("INSERT INTO user_trophies (user_id,trophy_id,record_id) VALUES ('{$userid}','1','{$this->Record->id}') ");
			}

			if($this->Record->save($this->request->data)){
				$options = array(
				"conditions"=>array(
					"user_id"=>$this->request->data["Record"]["user_id"]
					),
					"order"=>"Record.id DESC",
					"limit"=>1,
					"contain"=>array(
						"Dificult"=>array(
							"fields"=>array("time","nombre")
						)
					)
				);
				$record = $this->Record->find("all",$options);
				//pr($record);
				//die();
				echo json_encode($record);
			}
		}
	}

	public function fin(){
		$this->autoRender = false;
		if($this->request->is("ajax")){
			$this->Record->id = $this->request->data["Record"]["id"];
			//pr($this->request->data);
			//die();
			$userid=$this->Auth->user('id');

			if($this->request->data["Record"]["puntaje"]>5000){
				$options = array(
				"conditions"=>array(
					"puntaje >"=>5000
					),
					"limit"=>1,
				);
				$record = $this->Record->find("all",$options);
				if(empty($record)){
					$this->Record->query("INSERT INTO user_trophies (user_id,trophy_id,record_id) VALUES ('{$userid}','2','{$this->Record->id}') ");
				}
			}

			if($this->request->data["Record"]["puntaje"]>10000){
				$options = array(
				"conditions"=>array(
					"puntaje >"=>10000
					),
					"limit"=>1,
				);
				$record = $this->Record->find("all",$options);
				if(empty($record)){
					$this->Record->query("INSERT INTO user_trophies (user_id,trophy_id,record_id) VALUES ('{$userid}','3','{$this->Record->id}') ");
				}
			}

			if($this->request->data["Record"]["puntaje"]>15000){
				$options = array(
				"conditions"=>array(
					"puntaje >"=>15000
					),
					"limit"=>1,
				);
				$record = $this->Record->find("all",$options);
				if(empty($record)){
					$this->Record->query("INSERT INTO user_trophies (user_id,trophy_id,record_id) VALUES ('{$userid}','4','{$this->Record->id}') ");
				}
			}

			if($this->Record->save($this->request->data)){
				echo "Partida terminada!";
				$this->Session->write('Auth',$this->User->read(null,$userid));
			}
		}
	}

}
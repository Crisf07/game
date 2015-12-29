<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}
	public function register() {
		if ($this->request->is('post')) {
				$this->User->create();
				if ($this->User->save($this->request->data)) {
					$this->Session->setFlash(__('Se ha registrado correctamente'),"bueno");
					return $this->redirect(array('action' => 'login'));
				}
				$this->Session->setFlash(__('No se ha podido registrar'),"error");
		}
		return $this->redirect(array("action"=>"login"));
	}
	public function login() {
			if ($this->request->is('post')) {
				if ($this->Auth->login()) {
					$this->Session->setFlash(__("Ha ingresado correctamente"),"bueno");
					return $this->redirect($this->Auth->redirectUrl());
				}
				$this->Session->setFlash(__('Usuario o contraseña incorrectos.'), 'error');

		}
	}
	public function logout() {
		$this->Session->setFlash(__("Ha cerrado session correctamente"),"bueno");
		return $this->redirect($this->Auth->logout());
	}

	public function profile(){
		//$this->User->contain("Records.puntaje","Records.dificults_id");
		$options = array("conditions"=>array(
				"username"=>$this->Auth->user("username")	
			),
			"fields"=>array("username","nom","ap","point","coin"),
			"contain"=>array(
				"Record"=>array(
					"fields"=>array("puntaje","dificult_id"),
					"order"=>"puntaje DESC",
					"Dificult"=>array(
						"fields"=>"nombre",
					)
				),
				"UserAbility"=>array(
					"Ability"=>array(
						"fields"=>"nombre"
					)
				),
				"UserTrophy"=>array(
					"Trophy"=>array(
						"fields"=>"nombre"
					)
				)
			)
		);
		$user = $this->User->find("all",$options);
		$trophies = $this->User->query("SELECT id,nombre from trophies");
		$diff = array("Easy"=>0,"Medium"=>0,"Hard"=>0,"Very Hard"=>0);
		foreach($user[0]["Record"] as $dif){
			if("Easy"==$dif["Dificult"]["nombre"])
				$diff["Easy"]++;
			elseif ("Medium"==$dif["Dificult"]["nombre"]) 
				$diff["Medium"]++;
			elseif ("Hard"==$dif["Dificult"]["nombre"]) 
				$diff["Hard"]++;
			else
				$diff["Very Hard"]++;
		}	
		//pr($diff);
		//die();
		$this->set("diff",$diff);
		$this->set("user",$user);
		$this->set("trophies",$trophies);
	}

	public function finp(){
		$this->autoRender = false;
		if($this->request->is("ajax")){
			//pr($this->request->data);
			//die();
			$this->User->id = $this->request->data["id"];
			if($this->User->save($this->request->data)){
				echo "Partida terminada!";
				$userid=$this->Auth->user('id');
				$this->Session->write('Auth',$this->User->read(null,$userid));
			}
		}
	}


	public function edit ($id=null)
	{
		$user= $this->Auth->user('id');
		if($user=='1')
		{
			if(!$id)
				{
						throw new NotFoundException('datos invalidos');
						
				}
				$user= $this->User->findById($id);

				if(!$user)
				{
						throw new NotFoundException('El usuario no se encontredo');
						
				}

				if($this->request->is(array('post','put')))
				{
					$this->User->id = $id;
					if($this->User->save($this->request->data))
					{
						$this->Session->setFlash('El usuario ha sido modificada','bueno');
						return $this->redirect(array('action'=>'lista'));
					}
					$this->Session->setFlash('El usuario no se pudo modificar','error');
				}
				if(!$this->request->data)
				{
					$this->request->data = $user;
				}
		}
				else
				$this->redirect(array('action'=>'profile'));		
	}

	public function lista()
	{
		if($this->Auth->user('id')=='1')
		{
			$users= $this->User->query("select id,username,password,nom,ap,email from users");
			$this->set('user',$users);
		}
		else
			$this->redirect(array('action'=>'profile'));
	}
	public function delete($id)
	{
		if($this->Auth->user('id')=='1')
		{
			if($this->request->is('get'))
				{				
					throw new MethodNotAlledException('Incorrecto');
				}
			if($this->User->delete($id))
				{
					$this->Session->setFlash('El usuario ha sido eliminado','bueno');
					return $this->redirect(array('action'=>'lista'));			
				}	
		}
		else
			$this->redirect(array('action'=>'profile'));

}

}
<?php
App::uses('AppController', 'Controller');
/**
 * Abilities Controller
 *
 * @property Ability $Ability
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class AbilitiesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

	public function beforeFilter() {
		parent::beforeFilter();
	}

	public function powers(){
		$options = array(
			"conditions"=>array(
				"Tree.nombre"=>"Santa Claus"
			),
			"order"=>"Ability.id DESC"
		);
		$power = $this->Ability->find("all",$options);
		//pr($power);
		//die();
		$this->set("santa",$power);

		$options = array(
			"conditions"=>array(
				"Tree.nombre"=>"Rudolf"
			),
			"order"=>"Ability.id DESC"
		);
		$power = $this->Ability->find("all",$options);
		$this->set("rudolf",$power);

		$options = array(
			"conditions"=>array(
				"Tree.nombre"=>"Gnome"
			),
			"order"=>"Ability.id DESC"
		);
		$power = $this->Ability->find("all",$options);
		$this->set("gnome",$power);

		$power = $this->Ability->query("SELECT ability_id FROM user_abilities where user_id = '{$this->Auth->user("id")}'");
		//pr($power);
		//die();
		$this->set("uab",$power);		
	}

	public function lista(){
		$user = $this->Auth->user('id');
		if($user=='1')
		{
			$hal= $this->Ability->find("all");
			$this->set('hal',$hal);
		}
		else
		$this->redirect(array('action' => 'powers'));	
		//pr($hal);
		//die();
	}


public function edit($id=null)
	{
		$user = $this->Auth->user('id');
		if($user=='1')
		{
		if(!$id)
			{
					throw new NotFoundException('datos invalidos');
					
			}
			$ability= $this->Ability->findById($id);
			
			
			if(!$ability)
			{
					throw new NotFoundException('El usuario no se encontredo');
					
			}
		if ($this->request->is(array('post', 'put'))) 
		{
			$this->Ability->id = $id;
			$class=$this->request->data['Ability']['tree_id'];
			$nombre='hp';
			;
			if($ability['Ability']['id']=='h1l1' || $ability['Ability']['id']=='h4l1' || $ability['Ability']['id']=='h7l1')
				{$nombre='h1l1.jpg';}
			if($ability['Ability']['id']=='h1l2' || $ability['Ability']['id']=='h4l2' || $ability['Ability']['id']=='h7l2')
				{$nombre='h1l2.jpg';}
			if($ability['Ability']['id']=='h1l3' || $ability['Ability']['id']=='h4l3' || $ability['Ability']['id']=='h7l3')
				{$nombre='h1l3.jpg';}
			if($ability['Ability']['id']=='h2l1' || $ability['Ability']['id']=='h5l1' || $ability['Ability']['id']=='h8l1')
				{$nombre='h2l1.jpg';}
			if($ability['Ability']['id']=='h2l2' || $ability['Ability']['id']=='h5l2' || $ability['Ability']['id']=='h8l2')
				{$nombre='h2l2.jpg';}
			if($ability['Ability']['id']=='h2l3' || $ability['Ability']['id']=='h5l3' || $ability['Ability']['id']=='h8l3')
				{$nombre='h2l3.jpg';}
			if($ability['Ability']['id']=='h3l1' || $ability['Ability']['id']=='h6l1' || $ability['Ability']['id']=='h9l1')
				{$nombre='h3l1.jpg';}
			if($ability['Ability']['id']=='h3l2' || $ability['Ability']['id']=='h6l2' || $ability['Ability']['id']=='h9l2')
				{$nombre='h3l2.jpg';}
			if($ability['Ability']['id']=='h3l3' || $ability['Ability']['id']=='h6l3' || $ability['Ability']['id']=='h9l3')
				{$nombre='h3l3.jpg';}
			if($this->Ability->save($this->request->data)) {
			
				
				$this->Session->setFlash('El logro se ha modificado','bueno');
				if( $this->data['Ability']['archivo']['error'] == 0 &&  $this->data['Ability']['archivo']['size'] > 0){
                    // Informacion del tipo de archivo subido $this->data['Upload']['archivo']['type']
                    if($class=='1')
                    $destino = WWW_ROOT.'img'.DS.'ability'.DS.'santa'.DS;
                	else
                		if($class=='2')
                    	$destino = WWW_ROOT.'img'.DS.'ability'.DS.'rudolf'.DS;
                    		else
                    			if($class=='3')
                    				$destino = WWW_ROOT.'img'.DS.'ability'.DS.'gnome'.DS;
                    			else
                    				$destino = WWW_ROOT.'img'.DS.'ability'.DS;
                    if($this->data['Ability']['archivo']['type']=="image/jpeg" || $this->data['Ability']['archivo']['type']=="image/png"){
	                    if(move_uploaded_file($this->request->data["Ability"]["archivo"]['tmp_name'], $destino.$this->request->data["Ability"]["archivo"]['name']=$nombre)){  
	                        $this->Session->setFlash('Se ha cambiado satisfactoriamente la informacion del logro.','bueno');
	                    }
	                    else{
	                        $this->Flash->error('El archivo no se pudo subir, por favor intentelo de nuevo');       
	                    }
                    }
                    else
                    	$this->Flash->error("El archivo no es una imagen. No se ha podido subir");
                }
                else{
                    $this->Flash->error('Error al intentar subir el archivo');
                }
				return $this->redirect(array('action' => 'lista'));
			} else {
				$this->Session->setFlash('El logro no se ha guardado','bueno');
			}
		} else {
			$options = array('conditions' => array('Ability.' . $this->Ability->primaryKey => $id));
			$this->request->data = $this->Ability->find('first', $options);
		}
	}
	else
		$this->redirect(array('action' => 'powers'));	
	}

}
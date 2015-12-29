<?php
App::uses('AppController', 'Controller');
/**
 * Trophies Controller
 *
 * @property Trophy $Trophy
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class TrophiesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

	public function lista()
	{
		$user= $this->Auth->user('id');
			if($user=='1')
				{
					$trofeo= $this->Trophy->query('select * from trophies ');
					//pr($trofeo);
					//die();
					$this->set('trofeo',$trofeo);
				}
			else
				$this->redirect(array('controller'=>'users','action'=>'profile'));	
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
				$trophy= $this->Trophy->findById($id);
				if(!$trophy)
					{
						throw new NotFoundException('El usuario no se encontredo');
					}
				if ($this->request->is(array('post', 'put')))
				 {
					$this->Trophy->id = $id;
					if ($this->Trophy->save($this->request->data)) 
					{
						$this->Session->setFlash('El logro se ha modificado','bueno');
						if( $this->data['Trophy']['archivo']['error'] == 0 &&  $this->data['Trophy']['archivo']['size'] > 0)
						{
	                    	// Informacion del tipo de archivo subido $this->data['Upload']['archivo']['type']
	                    	$destino = WWW_ROOT.'img'.DS.'trophy'.DS;
	                    	if($this->data['Trophy']['archivo']['type']=="image/jpeg" || $this->data['Trophy']['archivo']['type']=="image/png")
	                    	{
	                    		$nomb=$this->request->data["Trophy"]["archivo"]['name']=$this->Trophy->id;
	                    		$nombre=$nomb.".jpg";
		                    		if(move_uploaded_file($this->request->data["Trophy"]["archivo"]['tmp_name'], $destino.$nombre))
		                    		{  
		                       		$this->Session->setFlash('Se ha cambiado satisfactoriamente la informacion del logro.','bueno');
		               		 	    }
		                    else
		                    	{
		                        	$this->Flash->error('El archivo no se pudo subir, por favor intentelo de nuevo');       
		                    	}
	                   		}
	                    else
	                    	$this->Flash->error("El archivo no es una imagen. No se ha podido subir");
	            	    }
	                else
	                {
	                    $this->Flash->error('Error al intentar subir el archivo');
	                }
						return $this->redirect(array('action' => 'lista'));
					}
					else {
					$this->Session->setFlash('El logro no se ha guardado','bueno');
						 }
				 } 
			else 
			{
				$options = array('conditions' => array('Trophy.' . $this->Trophy->primaryKey => $id));
				$this->request->data = $this->Trophy->find('first', $options);
			}
		}
		else
			$this->redirect(array('controller'=>'users','action' => 'profile'));
	}

}

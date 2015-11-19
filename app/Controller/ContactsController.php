<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');


/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class ContactsController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	
	//public $name = 'Signups';
	public  $uses = array("Contact");
	var $helpers = array('Html', 'Form', 'Captcha');
	var $components = array('Captcha'=>array('field'=>'math_question'));//'Captcha'



	public $adminEmail="marco.sanchez.denis@gmail.com";

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *	or MissingViewException in debug mode.
 */
	
public function index(){
	 	//$this->Session->setFlash($this->content('Mensaje enviado'), 'default', array('class' => 'notice_success'));      
        //$this->Session->setFlash($this->content('Fallo de Envio de Mensaje'.$this->item($this->Contact->validationErrors)), 'default', array('class' => 'cake_error')); 
        //$this->Session->setFlash($this->content('Fallo de Envio de Mensaje'.$this->item(array("asd"=>array("asdad"),"asdad"=>array("asdad"),"asdadasd"=>array("asdad")))), 'default', array('class' => 'cake_error')); 

		$this->layout = 'ajax';

}

public function captcha()	{
    $this->autoRender = false;
    $this->layout='ajax';
    if(!isset($this->Captcha))	{ //if you didn't load in the header
        $this->Captcha = $this->Components->load('Captcha'); //load it
    }
    $this->Captcha->create();
}
public function content($content){
	$opcion ='<a href="../cp.php/contacts">Aceptar</a>';
	return '<table class="contactos-container-input" style="background-color:#fff;margin:5px;width:100%;">
	<tr align="center" valign="middle">
	    <td colspan="2" 	 align="center" valign="middle">
		    
		    '.$content.'
		    
		    
		</td>
		
	</tr>
	<tr>
	<td>
		'.$opcion.'
		</td>
	</tr>
</table>';
}

public function item($e){
	$a='<div id="trabaja" style="font-size:12px;text-align:left;"><ul>';
	foreach ($e as $key => $value2) {
		foreach ( $value2 as $key => $value) { 	 	

			$a=$a. '<li class="">'. $value .'</li>';
		} 
	}
	$a=$a."</ul></div>";
	return $a;
//	return print_r($e,true);
}



 public function send_email($data,$subject,$attach,$viewName ){  //parametros: datos_de_form, subject, attach, view
		//$view = new View($this,false);
		$Email = new CakeEmail();			
		//$view->viewPath='Contacts'; 				
		//$view->layout=false;
		//$view->set ("i",$data);
		$Email->template($viewName);
		$Email->viewVars(array("i"=>$data));
		$Email->emailFormat('html');
		$Email->from(array('no-reply@klaumixenconstruccion.com.py' => 'KlauMix'));
		$Email->to($this->adminEmail);
		$Email->subject($subject);
		if($attach){
			$Email->attachments(   	$attach );					          
			//unlink($attach);
		}
		$Email->send();
		if($attach){
			//$Email->attachments(   	$attach );					          
			unlink($attach);
		}

	}

public function send(){
	if(!empty($this->request->data))	{
		$this->Contact->setCaptcha('math_question', $this->Captcha->getCode('Contact.math_question')); //getting from component and passing to model to make proper validation check
		$this->Contact->set($this->request->data);           
        if($this->Contact->validates())	{ //as usual data save call			
			//$this->send_email($this->request->data["Contact"],'KlauMixenConstruccion.com.py Contacto',NULL,'contacts_email');					
            $this->Session->setFlash($this->content('Mensaje enviado'), 'default', array('class' => 'notice_success'));
        }	else	{
        $this->Session->setFlash($this->content('Fallo de Envio de Mensaje'.$this->item($this->Contact->validationErrors)), 'default', array('class' => 'cake_error'));              
        //print_r($this->Contact->validationErrors);            }
        	   		
    	}
	 
		$this->autoRender = false;
	}	
	$this->redirect($this->referer());
}



	

	public function work(){
		if(!empty($this->request->data))	{
				$this->Work->setCaptcha('math_question', $this->Captcha->getCode('Work.math_question')); //getting from component and passing to model to make proper validation check
			$this->Work->set($this->request->data);
           	if($this->Work->validates())	{ 
           		
				$PDF_Path =  getcwd().DS."tmp".DS.  time().$this->data['Work']['Curriculum']["name"];
				$this->send_email($this->request->data["Work"],'KlauMixenConstruccion.com.py  Trabaja con Nosotros',$this->Work->data["Work"]["Curriculum"],'WorksEmail');
            	$this->Session->setFlash($this->content('Mensaje enviado'), 'default', array('class' => 'notice_success'));           
    		}	else	{
    			 if($this->Work->data["Work"]["Curriculum"]) unlink($this->Work->data["Work"]["Curriculum"]);
            	$this->Session->setFlash($this->content('Fallo de Envio de Mensaje'.$this->item($this->Work->validationErrors)), 'default', array('class' => 'cake_error'));
           	}        		          
       	} else {
			$this->Session->setFlash($this->content('Fallo de Envio de Mensaje'.$this->item($this->Work->validationErrors))	, 'default', array('class' => 'cake_error'));
       	}    
		$this->autoRender = false;
		$this->redirect($this->referer()); 
		
	}


public function news(){
	if(!empty($this->request->data))	{	           
	           $this->News->set($this->request->data);	        
	            if($this->News->validates())	{ //as usual data save call$i= $this->request->data["News"];								
					$this->send_email($this->request->data["News"],'KlauMixenConstruccion.com.py  Agregar a Newsletter',NULL,'NewsEmail');
	                $this->Session->setFlash($this->content('Mensaje enviado'), 'default', array('class' => 'notice_success'));
	                	
	            }	else	{ //or
	                $this->Session->setFlash($this->content('Fallo de Envio de Mensaje'.$this->item($this->News->validationErrors)), 'default', array('class' => 'cake_error'));
	                	
	              // echo "Error";
	            }
	            
	        }
			$this->autoRender = false;
			$this->redirect($this->referer()); 
		}
	
}

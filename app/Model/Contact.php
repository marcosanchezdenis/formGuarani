<?php
class Contact extends AppModel {
     var $useTable = false;

    public $actsAs = array(
        'Captcha' => array(
            'field' => array('math_question'),
            'error' => 'Verificación inválida.'
        )
    );

    public $validate = array(



        'asunto' => array('rule' => 'notEmpty',    'message' => 'Debe ingresar su nombre y apellido.'  ),
        'nombre' => array('rule' => 'notEmpty',    'message' => 'Debe ingresar su nombre y apellido.'  ),
        'apellido' => array('rule' => 'notEmpty',    'message' => 'Debe ingresar su nombre y apellido.'  ),
        'pais' => array('rule' => 'notEmpty',    'message' => 'Debe ingresar su nombre y apellido.'  ),
        'ciudad' => array('rule' => 'notEmpty',    'message' => 'Debe ingresar su nombre y apellido.'  ),
        'telefono' => array(     'rule' => 'notEmpty',       'message' => 'Ingrese su número de teléfono.'    )   ,        
        'email' => array(  'rule' => 'email',        'message' =>"E-mail Inválida" ),

      'Curriculum' => array(
          'extension' => array(
              'rule' => array('extension', array('pdf',"doc","docx")),
              'message' => "Solo archivos .pdf .doc y .docx son permitidos",
               ),
           'upload-file' => array(
              'rule' => array('uploadFile'),
              'message' => 'Falló la carga del archivo'
               ),
        'menesaje' => array(        'rule' => 'notEmpty',      'message' => 'Ingrese el mensaje. Por Favor.'   )

              

    )
      );
 public function uploadFile( $check ) {

    $uploadData = array_shift($check);


    if ( $uploadData['size'] == 0 || $uploadData['error'] !== 0) {
        return false;
    }

    $uploadFolder = getcwd().DS."tmp".DS;
    $fileName = time() ."__".$uploadData['name'] ;
    $uploadPath =  $uploadFolder . DS . $fileName;

    if( !file_exists($uploadFolder) ){
        mkdir($uploadFolder);
    }

    if (move_uploaded_file($uploadData['tmp_name'], $uploadPath)) {
        $this->set('Curriculum', $uploadPath);
        return true;
    }

    return false;

}
      public $_schema = array(
        'Curriculum' => array(
            'type'    => 'string',
            'length'  => 254,
            'default' => null,
            'null'    => true,
            'comment' => null
        ) 
    );




}




?>
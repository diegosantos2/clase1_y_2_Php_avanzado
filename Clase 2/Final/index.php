<?php

require_once 'class/PageRenderer.php';
require_once 'class/FormValidator.php';
require_once 'class/DbConnection.php';

require_once 'functions.php';


/*
¿Desde donde EJECUTO el constructor?
1) Fuera <= OK
2) Dentro

El método constructor me sirve para CONSTRUIR OBJETOS

Restringir Objetos ==> Restringir CONSTRUCTOR

*/
// $db = new DbConnection(); // ejecutando el método constructor
// obj->miembro / clase::miembro
DbConnection::get();

if($_SERVER['REQUEST_METHOD'] == 'GET') {

  $page = new PageRenderer(); // Un renderizado de pa

  if(isset($_GET['page']))
  {
    $page->render($_GET['page']);
  }
  else
  {
    $page->render('home');
  }


  DbConnection::get();

} else {

  if(isset($_POST['action']))
  {
    switch($_POST['action'])
    {
      case 'ENVIAR_MESSAGE':
        validar_formulario($_POST);
        break;
    }
  }

  

}

// .zip
/*
$page->render( 
  isset($_GET['page']) ?
  $_GET['page'] :
  'home'
);
*/
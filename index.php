<?php

//mostramos todos los errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//
require_once 'vendor/autoload.php';
require_once 'cfdi/Validacion.php';
require_once 'config/config.php';

//
$loader = new \Twig\Loader\FilesystemLoader('views');
$twig = new \Twig\Environment($loader, ['cache' => false]);

if(!count($_POST)){

  $view=[];

  $view['url']=URL;

  echo $twig->render('layout/index.php', $view);

}
else if(count($_POST)>0&&count($_POST)<4){

  $view=[];

  //parametros de vista
  $view['url']=URL;
  echo $twig->render('layout/index.php', $view);

}
else{

  //
  $rfcEmisor=$_POST['rfc_emisor'];
  $rfcReceptor=$_POST['rfc_receptor'];
  $uuid=$_POST['uuid'];
  $total=$_POST['total'];

  //
  $validacion=new Validacion;

  //
  $validar=$validacion->validar($rfcEmisor,$rfcReceptor,$uuid,$total);

  //
  $view=[];

  //parametros de vista
  $view['url']=URL;
  $view['rfcEmisor']=$rfcEmisor;
  $view['rfcReceptor']=$rfcReceptor;
  $view['uuid']=$uuid;
  $view['total']=$total;
  $view['totalNumero']=number_format($total,2);
  $view['status']=$validar['status'];
  $view['codigo']=$validar['codigo'];

  //renderizamos vista
  echo $twig->render('layout/validator.php', $view);

}



?>
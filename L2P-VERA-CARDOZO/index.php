<?php
require_once 'controlador/UsuarioControlador.php';

$usuarioCtrl = new UsuarioControlador();

session_start();
$accion = $_GET['accion'] ?? 'inicio';

switch($accion){
    case 'procesarLogin':
        $usuarioCtrl->procesarLogin($_POST['usuario'], $_POST['clave']);
    case 'menu':
        include 'vista/menu.php';
        break;
    default:
        include 'vista/login.php';
        break;


}
?>
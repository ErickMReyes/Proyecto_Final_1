<?php

      
    $var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'sesion';
    echo "<br>";
    
    switch ($var_getMenu) {
        case "inicio":
            require_once ('./views/inicio.php');
            break;

      case "noticias":
            require_once('./views/noticias.php');  
            break;

      case "login":
            require_once('./views/login.php');
            break;

      case "logout":
            $session_destroy = session_destroy();
            
            header("location: ./index.php?menu=home");
            break;  
      case "calendario":
            require_once("./views/calendario.php");
            break;
      case "grupos":
            require_once("./views/grupos.php");
            break;
      case "acercade":
            require_once("./views/acercade.php");
            break;
      case "nota1":
            require_once("./views/nota1.php");
            break;
      case "chat":
            require_once("./views/leermas.php");
            break;
      default:
      require_once('./views/inicio.php');
    }

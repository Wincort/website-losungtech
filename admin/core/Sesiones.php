<?php

class Sesiones{

    public function __construct(){
        session_start();
    }

    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }

    public function getCurrentUser(){
        return $_SESSION['user'];
    }

    public function setCurrentUserNombre($userNombre){
        $_SESSION['userNombre'] = $userNombre;
    }

    public function getCurrentUserNombre(){
        return $_SESSION['userNombre'];
    }

    public function setCurrentUserApellido($userApellido){
        $_SESSION['userApellido'] = $userApellido;
    }

    public function getCurrentUserApellido(){
        return $_SESSION['userApellido'];
    }

    public function setCurrentUserId($userId){
        $_SESSION['userId'] = $userId;
    }

    public function getCurrentUserId(){
        return $_SESSION['userId'];
    }

    public function setCurrentUserEmail($userEmail){
        $_SESSION['userEmail'] = $userEmail;
    }

    public function getCurrentUserEmail(){
        return $_SESSION['userEmail'];
    }
    public function setEsAdmin($esAdmin){
        $_SESSION['esAdmin'] = $esAdmin;
    }

    public function getEsAdmin(){
        return $_SESSION['esAdmin'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>
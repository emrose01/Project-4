<?php

include_once 'template/header.php';
session_start();
 
class Userauthenticator{

    public $loggedIn = true;

    function isLoggedIn(){
        
        return $this -> loggedIn;
    }
    function authenticate($username, $password){

        if($username ==  && $password == ){
        
            $this -> logUserIn($username);
            return true;
        }
        else{
            return false;
        }
    }
    function logUserIn($username){
        $_SESSION['login_user'] = $username;
        header("Location: index.php");
        exit;
    }
    function logout(){
        session_destroy();
        $this -> redirectToLogin();
    }
    function redirectToLogin(){
        header("Location: Login.php");
        exit;
    }

}
